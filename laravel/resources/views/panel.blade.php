@extends('layouts.base')
@section('css', '/css/panel.css')
@section('title','Admin Panel')



@section('content')
<h1>Liste des cartes</h1>
<form action="/add" method="post">
    <button type="submit">Ajouter des cartes</button>
</form>
<div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Numéro de carte</th>
                <th scope="col">Carte</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cards as $card)
            <tr>
                <td>{{ $card->id }}</td>
                <td>{{ $card->card }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection