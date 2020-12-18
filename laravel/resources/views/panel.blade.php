@extends('layouts.base')
@section('css', '/css/panel.css')
@section('title','Admin Panel')



@section('content')
<h1>Liste des cartes</h1>
<form action="/login" method="post">
    @csrf
    <button type="submit">Ajouter des cartes</button>
    <input type="hidden" name="value" value="add">
</form>
<div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Numéro de carte</th>
                <th scope="col">Carte</th>
                <th scope="col">Catégorie</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cards as $card)
            <tr>
                <td>{{ $card->id }}</td>
                <td>{{ $card->card }}</td>
                <td><?php include './controllers/panelController.php'; ?></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection