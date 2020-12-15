<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Classic;

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
    
    public function rules()
    {
        return view('rules');
    }

    public function jeux(Request $request)
    {
        $cardArray=Classic::selectCard($request);
        return view('play', ['request' => $request] , ['cards' => $cardArray]);
    }
    public function result(Request $request)
    {
        return view('result', ['request' => $request]);
    }

    public function admin(){
        return view('admin');
    }

    public function results(){
        return view('results');
    }
    
}
