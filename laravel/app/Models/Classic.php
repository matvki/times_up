<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classic extends Model
{
    use HasFactory;
    public static function selectCard($request){
        switch ($request->nbrCard) {
            case 21:
                for ($i=0; $i < 20; $i++) { 
                    $tokenRand=rand (1 , 440);
                    $cardArray[$i] = Classic::where('id', $tokenRand)->get();
                }
                break;
            case 31:
                for ($i=0; $i < 30; $i++) { 
                    $tokenRand=rand (1 , 440);
                    $cardArray[$i] = Classic::where('id', $tokenRand)->get();
                }
                break;
            case 41:
                for ($i=0; $i < 40; $i++) { 
                    $tokenRand=rand (1 , 440);
                    $cardArray[$i] = Classic::where('id', $tokenRand)->get();
                }
                break;
                
        }
        return $cardArray;
    }
    public static function getAll(){
        return Classic::all();
    }
    public static function addOne($request){
        $newCard = new Classic;
        $newCard->card = $request->name;
        $newCard->categorie_id = $request->typeCard;
        $newCard->save();
        return;
    }

}
