@extends('layouts.base')
@section('title', 'Mode de jeux')
@section('css', '/css/choose.css')

@section('content')
<section class="container" id="title">
    <h1>Choix du mode de jeux</h1>
    <p>C'est ici que vous allez choisir votre mode de jeux.</p>
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
            <p>Voulez-vous choisir vos cartes ?</p>
            <div>
                <div>
                    <input type="radio" name="typeCard" id="yesCard" value="yesCard" checked>
                    <label for="yesCard">oui</label>
                </div>
                <div>
                    <input type="radio" name="typeCard" id="noCard" value="noCard">
                    <label for="noCard">non</label>
                </div>
            </div>
        </article>
        <article id="chooseCard">
            <p>Choix du type de carte :</p>
            <div>
                <label for="animal">Animaux</label>
                <input type="checkbox" name="categories" id="animal" value="animal">
            </div>
        </article>
        <article>
            <p>Choix du nombre d'équipe :</p>
            <div>
                <div>
                    <label for="nbrTeam">Veuillez entrer un nombre d'équipe participant a la partie : </label>
                    <input type="number" name="nbrTeam" id="nbrTeam">
                </div>
            </div>
        </article>
        <input type="submit" value="Valider">
    </form>
</section>

@endsection
@section('js', 'js/choose.js')