@extends('layouts.base')
@section('css', '/css/results.css')
@section('title','Résulats')

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

@section('content')
<main>
    <p class="hide" id="team1">{{$request->team1}}</p>
    <p class="hide" id="team2">{{$request->team2}}</p>
    <p class="hide" id="team3">{{$request->team3}}</p>
    <p class="hide" id="nbrTeam">{{$request->nbrTeam}}</p>
    <div>
        @if ($request->team3=="-1")
            <div class="container1">
                <div>
                    <p class="P2-podium2"></p>
                    <img class="p2" src="/img/podium2.png" alt="">
                </div>
                <div>
                    <p class="P2-podium1"></p>
                    <img class="p1" src="/img/podium1.png" alt="">
                </div>
            </div>
            
            
        @else
        <div classe="big-container">
            <div class="container1">
                    <p class="p3-podium2"></p>
                    <p class="p3-podium1"></p>
                    <p class="p3-podium3"></p>
            </div>
            <div class="container2">
                <img class="p2" src="/img/podium.png" alt="">
            </div>

        </div>
        
        @endif 
    </div>

</main>


</section>
@section('js', '/js/results.js')

@endsection