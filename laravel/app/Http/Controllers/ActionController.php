<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classic;
use App\Models\Admin;

class ActionController extends Controller
{
    public function login(Request $request)
    {
        $value = $request->value;
        if ($value == "connexion") {
            $mdp = Admin::verif($request);
            if ($mdp == "ok") {
                $cards = Classic::getAll();
                return view('panel', ['cards' => $cards]);
            } else {
                return view('admin', ['error' => $mdp]);
            }
        } elseif ($value == "add") {
            return view('add');
        } elseif ($value == "addOne") {
            Classic::addOne($request);
            $cards = Classic::getAll();
                return view('panel', ['cards' => $cards]);
        }
    }
}
