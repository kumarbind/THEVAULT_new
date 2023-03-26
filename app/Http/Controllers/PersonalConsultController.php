<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal_consult;
use Session;

class PersonalConsultController extends Controller
{
    public function store(Request $request)
    {
        $personal_consult = new Personal_consult;

        $personal_consult->name = $request->name;
        $personal_consult->email = $request->email;
        $personal_consult->number = $request->Number;
        $personal_consult->language = "Englidh";
        $personal_consult->project_intrest = "This is test project for all";
        $personal_consult->save();

        \Session::flash('flash_message','We will reach you soon.');

        return redirect('/');
    }
}
