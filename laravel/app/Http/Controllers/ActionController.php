<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class ActionController extends Controller
{
    public function login(Request $request)
    {
        $mdp = Admin::verif($request);
        
        if ($mdp == "ok") {
            dd($mdp);
            return redirect('liste');
        } else {
            return view('admin', ['error' => $mdp]);
        }
    }
}
