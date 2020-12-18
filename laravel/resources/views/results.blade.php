@extends('layouts.base')
@section('css', '/css/results.css')
@section('title','Résulats')

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

@section('content')

    <p class="hide" id="team1">{{$request->team1}}</p>
    <p class="hide" id="team2">{{$request->team2}}</p>
    <p class="hide" id="team3">{{$request->team3}}</p>
    <p class="hide" id="nbrTeam">{{$request->nbrTeam}}</p>
    <div>
        
        <div classe="big-container">
            <div class="container1">
                    <p class="podium2"></p>
                    <p class="podium1"></p>
                    <p class="podium3"></p>
            </div>
            <div class="container2">
                <img class="p2" src="/img/podium.png" alt="">
            </div>
        </div>
    </div>
@endsection
@section('js', '/js/results.js')