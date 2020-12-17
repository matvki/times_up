@extends('layouts.base')
@section('title', 'Mode de jeux')
@section('css', '/css/choose.css')

@section('content')
<section class="container" id="title">
    <h1>Choix du mode de jeux</h1>
    <p>Personnalisez votre partie !</p>
</section>
<section id="form" class="container">
    <form action="/jeux" method="post">
        @csrf
        <article class="select">
            <label for="nbrCard">Choix du nombre de cartes :</label>
            <select name="nbrCard" id="nbrCard">
                <option value="">--choisir un nombre--</option>
                <option value="21">21</option>
                <option value="31">31</option>
                <option value="41">41</option>
            </select>
        </article>
        <article>
            <p>Voulez-vous choisir vos catégories de cartes ?</p>
            <div>
                <div>
                    <input type="radio" name="selectCard" id="yesCard" value="yesCard" checked>
                    <label for="yesCard">oui</label>
                </div>
                <div>
                    <input type="radio" name="selectCard" id="noCard" value="noCard">
                    <label for="noCard">non</label>
                </div>
            </div>
        </article>
        <article class="select" id="chooseCard">
            <label for="typeCard">Choix du type de cartes :</label>
            <select name="typeCard" id="typeCard">
                <option value="">--choisir une catégorie--</option>
                <option value="1">personalitiées</option>
                <option value="2">métiers</option>
                <option value="3">animaux</option>
                <option value="4">personnages fictifs</option>
            </select>
        </article>
        <article class="select">
            <label for="nbrTeam">Choix du nombre d'équipes' :</label>
            <select name="nbrTeam" id="nbrTeam">
                <option value="">--choisir un nombre--</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </article>
        <input class="btn-play" type="submit" value="Commencer 🎮">
    </form>
</section>

@endsection
@section('js', 'js/choose.js')