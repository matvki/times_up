@extends('layouts.base')

@section('css', '/css/rules.css')
@section('title','Les règles')

@section('content')

    <section>

        <h1> Les règles de IT Times</h1>
        <article class="row">
            <ul class="row col-8">
                <li class="col-5">
                    <img src="./img/standing-up-man-.png" alt="">
                    <p> Se joue de 2 à 15 personnes</p>
                </li>
                <li class="col-5">
                    <img src="./img/group.png" alt="">
                    <p> 2 à 3 équipes </p>
                </li>
                <li class="col-5">
                    <img src="./img/choosing.png" alt="">
                    <p> Choisir les membres de votre équipe ou non.</p>
                </li>
                <li class="col-5">
                    <img src="./img/list.png" alt="">
                    <p> Choisir une catégorie de carte ( Animaux, personnalité… etc)</p>
                </li>
            </ul>
            <p class="littleMore">Le jeu se déroulera en 3 manches. La première manche il faudra faire deviner le mot à l'aide de phrase lors de celle passer la cartes n'est pas possible. La deuxième avec un seul mot et la troisème en mimant à tes coéquipiers la cartes qui se trouve entre tes mains. Lors de la 2ème et 3ème manche il est possible de passer au mot suivant si il est trop difficile à faire deviner.</p>
        </article>
        <article class="after">
            <p>Vous êtes prêt ? </p>
            <a href=""> C'est parti !!</a>
        </article>

    </section>

@endsection