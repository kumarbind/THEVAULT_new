<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FilterSearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function filtersearch(Request $request)
    {
        dd($request);
        return "Hey Sandip";
    }
}
