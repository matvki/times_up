@extends('layouts.base')
@section('css', '/css/results.css')
@section('title','Résulats')

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

@section('content')
<main>
    {{dd($request)}}
    <p class="hide" id="team1">{{$request->team1}}</p>
    <p class="hide" id="team2">{{$request->team2}}</p>
    <p class="hide" id="team3">{{$request->team3}}</p>
    <p class="hide" id="nbrTeam">{{$request->nbrTeam}}</p>
    <div>
        @if ($request->team3=="-1")
            
            <div>
                <p class="P2-podium2"></p>
                <img src="/img/podium2.png" alt="">
            </div>
            <div>
                <p class="P2-podium1"></p>
                <img src="/img/podium1.png" alt="">
            </div>
            
            
        @else
            <div class="podium2">
                <p class="p3-podium2"></p>
                <img src="/img/podium2.png" alt="">
            </div>
            <div class="podium1">
                <p class="p3-podium1"></p>
                <img src="/img/podium1.png" alt="">
            </div>
            <div class="podium3">
                <p class="p3-podium3"></p>
                <img src="/img/podium3.png" alt="">
            </div>
        
        @endif 
    </div>

</main>


</section>
@section('js', '/js/results.js')

@endsection