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
        <article>
            <label for="nbrPlayer">Choix du nombre de participant :</label>
            <select name="nbrPlayer" id="nbrPlayer">
                <option value="">--Veuillez choisir un nombre valide--</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
            </select>
        </article>
        <article>
            <label for="nbrCard">Choix du nombre de cartes :</label>
            <select name="nbrCard" id="nbrCard">
                <option value="">--Veuillez choisir un nombre valide--</option>
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
                <input type="checkbox" name="animal" id="animal" value="animal" checked>
            </div>
        </article>
        <article>
            <p>Choix du nombre d'équipe :</p>
            <div>
                <div>
                    <input type="radio" name="nbrTeam" id="2" value="2" checked>
                    <label for="2">2</label>
                </div>
                <div>
                    <input type="radio" name="nbrTeam" id="3" value="3">
                    <label for="3">3</label>
                </div>
            </div>
        </article>
        <article>
            <p>Voulez-vous choisir vos équipes ?</p>
            <div>
                <div>
                    <input type="radio" name="chooseTeam" id="yesTeam" value="yesTeam" checked>
                    <label for="yesTeam">oui</label>
                </div>
                <div>
                    <input type="radio" name="chooseTeam" id="noTeam" value="noTeam">
                    <label for="noTeam">non</label>
                </div>
            </div>
        </article>
        <div id="chooseTeam">
            <article id="team2" class="">
                <p>Choix des équipes :</p>
                <p>Attention, veuillez a bien séparer vos prénoms par un ";" si ils ne sont pas séparés par un ";" il se peut que deux personnes soient prise pour une seule et même personne!!</p>
                <div>
                    <div>
                        <label for="blueTeam">Equipe bleu</label>
                        <textarea name="blueTeam" id="blueTeam" cols="30" rows="3"></textarea>
                    </div>
                    <div>
                        <label for="redTeam">Equipe rouge</label>
                        <textarea name="redTeam" id="redTeam" cols="30" rows="3"></textarea>
                    </div>
                </div>
            </article>
            <article id="team3" class="none">
                <p>Choix des équipes :</p>
                <p>Attention, veuillez a bien séparer vos prénoms par un ";" si ils ne sont pas séparés par un ";" il se peut que deux personne soient prise pour une seule et meme personne!!</p>
                <div>
                    <div>
                        <label for="blueTeam">Equipe bleu</label>
                        <textarea name="blueTeam" id="blueTeam" cols="30" rows="3"></textarea>
                    </div>
                    <div>
                        <label for="redTeam">Equipe rouge</label>
                        <textarea name="redTeam" id="redTeam" cols="30" rows="3"></textarea>
                    </div>
                    <div>
                        <label for="pinkTeam">Equipe rose</label>
                        <textarea name="pinkTeam" id="pinkTeam" cols="30" rows="3"></textarea>
                    </div>
                </div>
            </article>
        </div>
    </form>
</section>
@endsection
@section('js', '/js/choose.js')