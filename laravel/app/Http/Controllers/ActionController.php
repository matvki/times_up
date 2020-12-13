<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classic;
use App\Models\Admin;

class ActionController extends Controller
{
    public function login(Request $request)
    {
        $mdp = Admin::verif($request);

        if ($mdp == "ok") {
            $cards = Classic::getAll();
            return view('panel', ['cards' => $cards]);
        } else {
            return view('admin', ['error' => $mdp]);
        }
    }
    public function add(Request $request){
        Classic::addOne($request);
        return redirect('admin');
    }
}
