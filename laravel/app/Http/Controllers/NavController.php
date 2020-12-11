<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classic;


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
    return view('jeux', ['request' => $request]);
    }

    public function admin(){
        return view('admin');
    }
    public function list(){
        $cards = Classic::getAll();
        return view('panel', ['cards' => $cards]);
    }

    
}
