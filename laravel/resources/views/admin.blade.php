@extends('layouts.base')
@section('css', '/css/admin.css')
@section('title','Admin')



@section('content')
    <section id="panel">
    
        <h2>Panneau d'admin</h2>
        <form action="/login" method="post">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="hidden" name="value" value="connexion">
        <input type="submit" value="valider">
        </form>
    </section>
@endsection