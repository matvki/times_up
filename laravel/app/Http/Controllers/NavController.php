<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function choose()
    {
        return view('choose');
    }

    public function jeux(Request $request)
    {
    return view('jeux', ['request' => $request]);
    }
}
