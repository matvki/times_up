@extends('layouts.base')
@section('title', 'Mode de jeux')
@section('css', '/css/play.css')

@section('content')

    <div class="start">
        <h1>Etes-vous prêt?</h1>
        <input type="submit" value="commencer" onclick="play()">
    </div>
    <div class="hide cards">
        @foreach ($cards as $card)
            <div class="card hide" >
                <p>{{$card[0]->card}}</p>
            </div>
            
        @endforeach
        <input class="next" type="button" value="suivant" onclick="next()">
        <input class="find" type="button" value="trouver" onclick="find()">
    </div>

    <div class="hide congrat">
        <h1>bravo</h1>
    </div>
@endsection
@section('js', '/js/play.js')