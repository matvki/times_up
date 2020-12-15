<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classic;
use App\Models\Personality;
use App\Models\Trade;

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
        if (($request->selectCard) == "yesCard") {
            switch ($request->typeCard) {
                case 'personalities':
                    $cardArray = Personality::getAll($request);
                    return view('play', ['request' => $request], ['cards' => $cardArray]);
                    break;

                case 'job':
                    $cardArray = Trade::getAll();
                    return view('play', ['request' => $request] , ['cards' => $cardArray]);
                    break;
            }
        } else {
            $cardArray = Classic::selectCard($request);
            return view('play', ['request' => $request], ['cards' => $cardArray]);
        }
    }

    public function admin()
    {
        return view('admin');
    }
}
