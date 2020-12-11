@extends('layouts.base')
@section('css', '/css/welcome.css')
@section('title','Accueil')

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
@section('content')
    <h1> Bienvenue sur IT Times ! </h1>
    <div class="flex"> 
        <img src="./img/IT Times.png" alt="logo" >
    </div>
    <section class="container">
        <div>
            <h2>IT Times c'est quoi ?</h2>
            <p> IT Times c'est le même principe que le jeu "Times Up". Vous n'avez pas vos cartes pour votre soirée entre copains ? Pas de panique ! IT Times est là pour vous aidez !😜</p>
        </div>
        <a href="/mode_de_jeux"> ALLONS-Y ! </a>
    </section>
@endsection