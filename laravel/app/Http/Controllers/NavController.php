<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CLassic;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function option()
    {
        return view('option');

        // return view('home', ['user' => User::findOrFail($id)]);
    }
    public function play(Request $request){
        $request->nbCard=20;
        $cardArray = Classic::selectCard($request);
        return view('play', ['cards' => $cardArray], ['rqs' => $request]);

    }
}
