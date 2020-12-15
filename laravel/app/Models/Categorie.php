<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public static function getCards($request)
    {
        $cardsArray = Classic::where('categorie_id', $request->typeCard)->get();
        $lenght = count($cardsArray);
        switch ($request->nbrCard) {
            case 21:
                for ($i = 0; $i < 20; $i++) {
                    $tokenRand = rand(1, $lenght);
                    $cardArray[$i] = $cardsArray[$tokenRand];
                }
                break;
            case 31:
                for ($i = 0; $i < 30; $i++) {
                    $tokenRand = rand(1, $lenght);
                    $cardArray[$i] = $cardsArray[$tokenRand];
                }
                break;
            case 41:
                for ($i = 0; $i < 40; $i++) {
                    $tokenRand = rand(1, $lenght);
                    $cardArray[$i] = $cardsArray[$tokenRand];
                }
                break;
        }
        return $cardArray;
    }
}
