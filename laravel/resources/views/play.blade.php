@extends('layouts.base')
@section('title', 'jouer')
@section('css', '/css/play.css')

@section('content')

<?php 
if (($request->selectCard) == "yesCard") { ?>
    <section class="flex" id="play">
    <p class="nbr-team hide">{{$request->nbrTeam}}</p>
        <div class="start flex ">
            <h1>Êtes-vous prêt?</h1>
            <input type="button" value="Start" onclick="play(); viewTimer1();">
        </div>
        <div class="hide cards1">
            <h1 class="timer1 white"></h1>
            <input class="end-timer" type="button" value="Fin du minuteur" onclick="endTimer1()">
            @foreach ($cards as $card)
                <div class="card1 hide">
                    <div class="enterCard" >
                        <div class="">
                            <h1 class="top-right">Party</h1>
                        </div>
                        <p class="word">{{$card->card}}</p>
                        <h1 class="bottom-left">Party</h1>
                    </div>
                </div>
                
            @endforeach
            <div class="flex div-btn1 ">
                <input class="find" type="button" value="Trouvé !" onclick="find1()">
            </div>
            <div class="hide congrat1">
                <h3>Passons à la manche 2 mais cette fois on fait deviner avec seulement 1 mot</h3>
            </div>
        </div>
        <div class="hide cards2">
            <h1 class="timer2 white"></h1>
            <input class="end-timer" type="button" value="Fin du minuteur" onclick="endTimer2()">
            @foreach ($cards as $card)
                <div class="card2 hide">
                    <div class="enterCard" >
                        <div class="flex">
                            <h1 class="top-right">Party</h1>
                        </div>
                        <p class="word">{{$card->card}}</p>
                        <h1 class="bottom-left">Party</h1>
                    </div>
                </div>
                
            @endforeach
            <div class="hide div-btn2 ">
                <input class="find" type="button" value="Trouvé !" onclick="find2()">
                <input class="next" type="button" value="Passer" onclick="next2()">
            </div>
            <div class="hide congrat2">
                <h1>bravo</h1>
            </div>
        </div>
        <div class="hide cards3">
            <h1 class="timer3 white"></h1>
            <input class="end-timer" type="button" value="Fin du minuteur" onclick="endTimer3()">
            @foreach ($cards as $card)
                <div class="card3 hide">
                    <div class="enterCard" >
                        <div class="flex">
                            <h1 class="top-right">Party</h1>
                        </div>
                        <p class="word">{{$card->card}}</p>
                        <h1 class="bottom-left">Party</h1>
                    </div>
                </div>
                
            @endforeach
            <div class="hide div-btn3 ">
                <input class="find" type="button" value="Trouvé !" onclick="find3()">
                <input class="next" type="button" value="Passer" onclick="next3()">
            </div>
            <div class="hide congrat2">
                <h1>bravo</h1>
            </div>
        </div>
    
    </section>
    <section class="hide" id="results" >
        <div class="go-result flex">
            <h1>Félicitation la partie est Terminer</h1>
            <form action="/resultats" method="POST">
                @csrf
                <input name="team1" class="result-team1" type="hidden" value="-1">
                <input name="team2" class="result-team2" type="hidden" value="-1">
                <input name="team3" class="result-team3" type="hidden" value="-1">
                <input name="nbrTeam" class="result-team3" type="hidden" value="{{$request->nbrTeam}}">
                <input type="submit" value="Résultats">
            </form>
        </div>
    </section>
<?php } else { ?>
    <section class="flex" id="play">
    <p class="nbr-team hide">{{$request->nbrTeam}}</p>
        <div class="start flex ">
            <h1>Êtes-vous prêt?</h1>
            <input type="button" value="Start" onclick="play(); viewTimer1();">
        </div>
        <div class="hide cards1">
            <h1 class="timer1 white"></h1>
            <input class="end-timer" type="button" value="Fin du minuteur" onclick="endTimer1()">
            @foreach ($cards as $card)
                <div class="card1 hide">
                    <div class="enterCard" >
                        <div class="">
                            <h1 class="top-right">Party</h1>
                        </div>
                        <p class="word">{{$card[0]->card}}</p>
                        <h1 class="bottom-left">Party</h1>
                    </div>
                </div>
                
            @endforeach
            <div class="flex div-btn1 ">
                <input class="find" type="button" value="Trouvé !" onclick="find1()">
            </div>
            <div class="hide congrat1">
                <h3>Passons à la manche 2 mais cette fois on fait deviner avec seulement 1 mot</h3>
            </div>
        </div>
        <div class="hide cards2">
            <h1 class="timer2 white"></h1>
            <input class="end-timer" type="button" value="Fin du minuteur" onclick="endTimer2()">
            @foreach ($cards as $card)
                <div class="card2 hide">
                    <div class="enterCard" >
                        <div class="flex">
                            <h1 class="top-right">Party</h1>
                        </div>
                        <p class="word">{{$card[0]->card}}</p>
                        <h1 class="bottom-left">Party</h1>
                    </div>
                </div>
                
            @endforeach
            <div class="hide div-btn2 ">
                <input class="find" type="button" value="Trouvé !" onclick="find2()">
                <input class="next" type="button" value="Passer" onclick="next2()">
            </div>
            <div class="hide congrat2">
                <h1>bravo</h1>
            </div>
        </div>
        <div class="hide cards3">
            <h1 class="timer3 white"></h1>
            <input class="end-timer" type="button" value="Fin du minuteur" onclick="endTimer3()">
            @foreach ($cards as $card)
                <div class="card3 hide">
                    <div class="enterCard" >
                        <div class="flex">
                            <h1 class="top-right">Party</h1>
                        </div>
                        <p class="word">{{$card[0]->card}}</p>
                        <h1 class="bottom-left">Party</h1>
                    </div>
                </div>
                
            @endforeach
            <div class="hide div-btn3 ">
                <input class="find" type="button" value="Trouvé !" onclick="find3()">
                <input class="next" type="button" value="Passer" onclick="next3()">
            </div>
            <div class="hide congrat2">
                <h1>bravo</h1>
            </div>
        </div>
    </section>
    <section class="hide" id="results" >
        <div class="go-result flex">
            <h1>Félicitation la partie est Terminée</h1>
            <form action="/resultats" method="POST">
                @csrf
                <input name="team1" class="result-team1" type="hidden" value="-1">
                <input name="team2" class="result-team2" type="hidden" value="-1">
                <input name="team3" class="result-team3" type="hidden" value="-1">
                <input name="nbrTeam" class="result-team3" type="hidden" value="{{$request->nbrTeam}}">
                <input type="submit" value="Résultats">
            </form>
        </div>
    </section>
<?php } ?>

@endsection
@section('js', '/js/play.js')