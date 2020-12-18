@extends('layouts.base')
@section('css', '/css/add.css')
@section('title','Ajout')


@section('content')


<form method="post"action="/login">
    <h1>Ajouter une cartes</h1>
    @csrf
    <articel>
        <label for="name">Le nom de la carte :</label>
        <input class="input" type="text" name="name" id="" value="Test" placeholder="Titre">
    </articel>
    <article class="select" id="chooseCard">
            <label for="typeCard">Choix du type de cartes :</label>
            <select name="typeCard" id="typeCard">
                <option value="0">Autres</option>
                <option value="1">personalitées</option>
                <option value="2">métiers</option>
                <option value="3">animaux</option>
                <option value="4">personnages fictifs</option>
            </select>
        </article>
    <input type="hidden" name="value" value="addOne">
    <button type="submit">Ajouter!</button>
</form>

@endsection