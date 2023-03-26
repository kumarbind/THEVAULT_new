<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user_name = User::where('email', $request->email)->get();
        foreach($user_name as $name){
            if($name->email === $request->email){
                return view('admin.dashboard');
            }else{
                return view('admin.home');
            }
        }
        
        
        
    }

    public function register(Request $request)
    {
        $name = $request->email;
        $password = $request->mobile;
        if($name && $password){
            return view('admin.dashboard');
        }else{
            return view('admin.home');
        }
        
    }
}
