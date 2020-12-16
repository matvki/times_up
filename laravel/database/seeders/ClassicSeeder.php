<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClassicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classics=[[
            'card' => "Hakuna matata",
            'categorie_id' => "0",
        ],
        [
            'card' => "Candy crush",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jean-Luc Reichmann",
            'categorie_id' => "1",
        ],
        [
            'card' => "Titanic",
            'categorie_id' => "0",
        ],
        [
            'card' => "Pirates des Caraïbes",
            'categorie_id' => "0",
        ],
        [
            'card' => "Monica Belluci",
            'categorie_id' => "1",
        ],
        [
            'card' => "Yannick Noah",
            'categorie_id' => "1",
        ],
        [
            'card' => "Hermione Granger",
            'categorie_id' => "0",
        ],
        [
            'card' => "Bison Futé",
            'categorie_id' => "0",
        ],
        [
            'card' => "Blanche-Neige",
            'categorie_id' => "0",
        ],
        [
            'card' => "Menottes",
            'categorie_id' => "0",
        ],
        [
            'card' => "Britney Spears",
            'categorie_id' => "1",
        ],
        [
            'card' => "Qu'esr-ce qu'on a fait au Bon Dieu?",
            'categorie_id' => "0",
        ],
        [
            'card' => "Natoo",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le Marqui de Sade", //15
            'categorie_id' => "1",
        ],
        [
            'card' => "Ver Solitaire",
            'categorie_id' => "0",
        ],
        [
            'card' => "Buzz l'Eclair",
            'categorie_id' => "0",
        ],
        [
            'card' => "Muse",
            'categorie_id' => "0",
        ],
        [
            'card' => "Agatha Christie",
            'categorie_id' => "1",
        ],
        [
            'card' => "Gangnam Style ", //20
            'categorie_id' => "0",
        ],
        [
            'card' => "Bilbo le Hobbit",
            'categorie_id' => "0",
        ],
        [
            'card' => "La Belle et le Clochard",
            'categorie_id' => "0",
        ],
        [
            'card' => "Mimie Mathy",
            'categorie_id' => "1",
        ],
        [
            'card' => "Francois Hollande",
            'categorie_id' => "1",
        ],
        [
            'card' => "Mister T.",
            'categorie_id' => "1",
        ],
        [
            'card' => "Serena Williams",
            'categorie_id' => "1",
        ],
        [
            'card' => "BB8",
            'categorie_id' => "0",
        ],
        [
            'card' => "Corto Maltese",
            'categorie_id' => "0",
        ],
        [
            'card' => "La Petite Sirène ",
            'categorie_id' => "0",
        ],
        [
            'card' => "Blade Runner",//30
            'categorie_id' => "0",
        ],
        [
            'card' => "Fauve",
            'categorie_id' => "0",
        ],
        [
            'card' => "Dirty Dancing",
            'categorie_id' => "0",
        ],
        [
            'card' => "Marlon Brando",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le fabuleux Destin d'Amelie Poulain ",
            'categorie_id' => "0",
        ],
        [
            'card' => "Docteur Watson",
            'categorie_id' => "0",
        ],
        [
            'card' => "Sebastian Vettel",
            'categorie_id' => "1",
        ],
        [
            'card' => "Karim Benzema",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les lacs du Connemara",
            'categorie_id' => "0",
        ],
        [
            'card' => "Victor Hugo ",
            'categorie_id' => "1",
        ],
        [
            'card' => "Selena Gomez",//40
            'categorie_id' => "1",
        ],
        [
            'card' => "Daniel Craig",
            'categorie_id' => "1",
        ],
        [
            'card' => "Seul sur Mars",
            'categorie_id' => "0",
        ],
        [
            'card' => "La Fée Clochette",
            'categorie_id' => "0",
        ],
        [
            'card' => "Télématin",
            'categorie_id' => "0",
        ],
        [
            'card' => "La Reine des neiges",
            'categorie_id' => "0",
        ],
        [
            'card' => "Benoit Poelvoorde",
            'categorie_id' => "1",
        ],
        [
            'card' => "Twilight",
            'categorie_id' => "0",
        ],
        [
            'card' => "Renaud",
            'categorie_id' => "1",
        ],
        [
            'card' => "Jessica Alba",
            'categorie_id' => "1",
        ],
        [
            'card' => "Florence Foresti",//50
            'categorie_id' => "1",
        ],
        [
            'card' => "Iker Casillas",
            'categorie_id' => "1",
        ],
        [
            'card' => "Divergente",
            'categorie_id' => "0",
        ],
        [
            'card' => "Marie-Antoinette",
            'categorie_id' => "1",
        ],
        [
            'card' => "L'arc de Triomphe",
            'categorie_id' => "0",
        ],
        [
            'card' => "Soutien-Gorge",
            'categorie_id' => "0",
        ],
        [
            'card' => "Platon",
            'categorie_id' => "1",
        ],
        [
            'card' => "Eric Zemmour",
            'categorie_id' => "1",
        ],
        [
            'card' => "Kermit la grenouille",
            'categorie_id' => "0",
        ],
        [
            'card' => "Pif Gadjet",
            'categorie_id' => "0",
        ],
        [
            'card' => "Serge Gainsbourg",//60
            'categorie_id' => "1",
        ],
        [
            'card' => "Robocop",
            'categorie_id' => "0",
        ],
        [
            'card' => "Dalaï-lama",
            'categorie_id' => "1",
        ],
        [
            'card' => "Netflix",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les schtroumpfs",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le Gendarme de Saint-Tropez",
            'categorie_id' => "0",
        ],
        [
            'card' => "Ramsès",
            'categorie_id' => "0",
        ],
        [
            'card' => "Sigmund Freud",
            'categorie_id' => "1",
        ],
        [
            'card' => "Hercule Poirot",
            'categorie_id' => "0",
        ],
        [
            'card' => "joël Robuchon",
            'categorie_id' => "1",
        ],
        [
            'card' => "Nekfeu",
            'categorie_id' => "1",
        ],
        [
            'card' => "Mad Max",
            'categorie_id' => "0",
        ],
        [
            'card' => "Pikachu",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le Joker",
            'categorie_id' => "0",
        ],
        [
            'card' => "Gargamel",
            'categorie_id' => "0",
        ],
        [
            'card' => "La Cigale et la Fourmi",
            'categorie_id' => "0",
        ],
        [
            'card' => "Beyoncé",
            'categorie_id' => "1",
        ],
        [
            'card' => "Jules Verne",
            'categorie_id' => "1",
        ],
        [
            'card' => "Marilyn Manson",
            'categorie_id' => "1",
        ],
        [
            'card' => "Comme D'habitude",
            'categorie_id' => "0",
        ],
        [
            'card' => "Goerge Lucas",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le Dictateur",
            'categorie_id' => "0",
        ],
        [
            'card' => "La vache qui rit",
            'categorie_id' => "0",
        ],
        [
            'card' => "Daft Punk",
            'categorie_id' => "1",
        ],
        [
            'card' => "Isaac Newton",
            'categorie_id' => "1",
        ],
        [
            'card' => "Scarface",
            'categorie_id' => "0",
        ],
        [
            'card' => "Gollum",
            'categorie_id' => "0",
        ],
        [
            'card' => "Arthur Rimbaud",
            'categorie_id' => "1",
        ],
        [
            'card' => "Louane",
            'categorie_id' => "1",
        ],
        [
            'card' => "Michel Drucker",
            'categorie_id' => "1",
        ],
        [
            'card' => "Jean Moulin",
            'categorie_id' => "1",
        ],
        [
            'card' => "Mika",
            'categorie_id' => "1",
        ],
        [
            'card' => "Henri Matisse",
            'categorie_id' => "1",
        ],
        [
            'card' => "Zeus",
            'categorie_id' => "0",
        ],
        [
            'card' => "Luke Skywalker",
            'categorie_id' => "0",
        ],
        [
            'card' => "Fred Vargas",
            'categorie_id' => "1",
        ],
        [
            'card' => "Eminem",
            'categorie_id' => "1",
        ],
        [
            'card' => "Poney",
            'categorie_id' => "0",
        ],
        [
            'card' => "Vercingétorix",
            'categorie_id' => "0",
        ],
        [
            'card' => "Violetta",
            'categorie_id' => "0",
        ],
        [
            'card' => "Steven spielberg",
            'categorie_id' => "1",
        ],
        [
            'card' => "Marion Cotillard",
            'categorie_id' => "1",
        ],
        [
            'card' => "Adele",
            'categorie_id' => "1",
        ],
        [
            'card' => "Question pour un champion",
            'categorie_id' => "0",
        ],
        [
            'card' => "Fifi Brindacier",
            'categorie_id' => "1",
        ],
        [
            'card' => "Rocco Siffredi",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les Fourmis",
            'categorie_id' => "0",
        ],
        [
            'card' => "Katy Perry",
            'categorie_id' => "1",
        ],
        [
            'card' => "M. Hyde",
            'categorie_id' => "0",
        ],
        [
            'card' => "Lego",
            'categorie_id' => "0",
        ],
        [
            'card' => "Nosferatu",
            'categorie_id' => "0",
        ],
        [
            'card' => "Ali Baba",
            'categorie_id' => "0",
        ],
        [
            'card' => "WALL-E",
            'categorie_id' => "0",
        ],
        [
            'card' => "Charlemagne",
            'categorie_id' => "1",
        ],
        [
            'card' => "La Maison-Blanche",
            'categorie_id' => "0",
        ],
        [
            'card' => "Gulliver",
            'categorie_id' => "0",
        ],
        [
            'card' => "Miley Cyrus",
            'categorie_id' => "1",
        ],
        [
            'card' => "Instagram",
            'categorie_id' => "0",
        ],
        [
            'card' => "Pac-Man",
            'categorie_id' => "0",
        ],
        [
            'card' => "Kad Merad",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les Profs",
            'categorie_id' => "0",
        ],
        [
            'card' => "La muraille de chine",
            'categorie_id' => "0",
        ],
        [
            'card' => "Legolas",
            'categorie_id' => "0",
        ],
        [
            'card' => "Arsène Lupin",
            'categorie_id' => "1",
        ],
        [
            'card' => "David Bowie",
            'categorie_id' => "1",
        ],
        [
            'card' => "Alien",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Tournesols",
            'categorie_id' => "0",
        ],
        [
            'card' => "Astérix et Obélix Mission Cléopatre",
            'categorie_id' => "0",
        ],
        [
            'card' => "Son of Anarchy",
            'categorie_id' => "0",
        ],
        [
            'card' => "Natalie Portman",
            'categorie_id' => "1",
        ],
        [
            'card' => "Cyrano de Bergerac",
            'categorie_id' => "1",
        ],
        [
            'card' => "AC/DC",
            'categorie_id' => "0",
        ],
        [
            'card' => "George Clooney",
            'categorie_id' => "1",
        ],
        [
            'card' => "Sia",
            'categorie_id' => "1",
        ],
        [
            'card' => "Spock",
            'categorie_id' => "0",
        ],
        [
            'card' => "Tom Cruise",
            'categorie_id' => "1",
        ],
        [
            'card' => "Mickey Mouse",
            'categorie_id' => "0",
        ],
        [
            'card' => "La Famille Bélier",
            'categorie_id' => "0",
        ],
        [
            'card' => "Roger Rabbit",
            'categorie_id' => "0",
        ],
        [
            'card' => "Andy Warhol",
            'categorie_id' => "1",
        ],
        [
            'card' => "Gérard Depardieu",
            'categorie_id' => "1",
        ],
        [
            'card' => "Teddy Riner",
            'categorie_id' => "1",
        ],
        [
            'card' => "Tintin",
            'categorie_id' => "0",
        ],
        [
            'card' => "The Walking Dead",
            'categorie_id' => "0",
        ],
        [
            'card' => "The Mentalist",
            'categorie_id' => "0",
        ],
        [
            'card' => "Maria Sharapova",
            'categorie_id' => "1",
        ],
        [
            'card' => "La Guerre des boutons",
            'categorie_id' => "0",
        ],
        [
            'card' => "Nicolas Canteloup",
            'categorie_id' => "1",
        ],
        [
            'card' => "Paranormal Activity",
            'categorie_id' => "0",
        ],
        [
            'card' => "Star Trek",
            'categorie_id' => "0",
        ],
        [
            'card' => "American Pie",
            'categorie_id' => "0",
        ],
        [
            'card' => "Michael Schumacher",
            'categorie_id' => "1",
        ],
        [
            'card' => "Zlatan Ibrahimovic",
            'categorie_id' => "1",
        ],
        [
            'card' => "La Joconde",
            'categorie_id' => "0",
        ],
        [
            'card' => "Skrillex",
            'categorie_id' => "1",
        ],
        [
            'card' => "Dexter",
            'categorie_id' => "0",
        ],
        [
            'card' => "Guernica",
            'categorie_id' => "0",
        ],
        [
            'card' => "Nicolas Hulot",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les tortues ninja",
            'categorie_id' => "0",
        ],
        [
            'card' => "justin Timberlake",
            'categorie_id' => "1",
        ],
        [
            'card' => "Colonel Reyel",
            'categorie_id' => "1",
        ],
        [
            'card' => "Zac Efron",
            'categorie_id' => "1",
        ],
        [
            'card' => "Hanibal Lecter",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les Enfoirés",
            'categorie_id' => "0",
        ],
        [
            'card' => "Ed sheeran",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le Moulin-Rouge ",
            'categorie_id' => "0",
        ],
        [
            'card' => "James Cameron",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les Feux de l'Amour",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Gardien de la Galaxie",
            'categorie_id' => "0",
        ],
        [
            'card' => "michael jackson",
            'categorie_id' => "1",
        ],
        [
            'card' => "Marie curie",
            'categorie_id' => "1",
        ],
        [
            'card' => "Monsieur Propre",
            'categorie_id' => "0",
        ],
        [
            'card' => "Ulysse",
            'categorie_id' => "0",
        ],
        [
            'card' => "Dora l'Explorarice",
            'categorie_id' => "0",
        ],
        [
            'card' => "Vanessa Paradis",
            'categorie_id' => "1",
        ],
        [
            'card' => "Transformers",
            'categorie_id' => "0",
        ],
        [
            'card' => "Largo Winch",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jacques Prévert",
            'categorie_id' => "1",
        ],
        [
            'card' => "Kid Paddle",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le chateaux de Versailles",
            'categorie_id' => "0",
        ],
        [
            'card' => "The Big Bang Theory",
            'categorie_id' => "0",
        ],
        [
            'card' => "Voldemort",
            'categorie_id' => "0",
        ],
        [
            'card' => "Franklin",
            'categorie_id' => "0",
        ],
        [
            'card' => "Forrest Gump",
            'categorie_id' => "0",
        ],
        [
            'card' => "Chewbacca",
            'categorie_id' => "0",
        ],
        [
            'card' => "Booba",
            'categorie_id' => "1",
        ],
        [
            'card' => "Rayan Gosling",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les Dents de la mer",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le Malade imaginaire",
            'categorie_id' => "0",
        ],
        [
            'card' => "Studio Bagel",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jacques Brel",
            'categorie_id' => "1",
        ],
        [
            'card' => "Moule",
            'categorie_id' => "0",
        ],
        [
            'card' => "Néfertiti",
            'categorie_id' => "1",
        ],
        [
            'card' => "Tetris",
            'categorie_id' => "0",
        ],
        [
            'card' => "Koh-Lanta",
            'categorie_id' => "0",
        ],
        [
            'card' => "Léonard de Vinci",
            'categorie_id' => "1",
        ],
        [
            'card' => "Shéhérazade",
            'categorie_id' => "0",
        ],
        [
            'card' => "Catwoman",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Misérables",
            'categorie_id' => "0",
        ],
        [
            'card' => "Une Famille Formidable",
            'categorie_id' => "0",
        ],
        [
            'card' => "twitter",
            'categorie_id' => "0",
        ],
        [
            'card' => "stephen King",
            'categorie_id' => "1",
        ],
        [
            'card' => "Mamie Nova",
            'categorie_id' => "1",
        ],
        [
            'card' => "Katniss Everdeen",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jamel Debbouze",
            'categorie_id' => "1",
        ],
        [
            'card' => "League of Legends",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le donjon de Naheulbeuk",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Inconnus",
            'categorie_id' => "1",
        ],
        [
            'card' => "Flash McQueen",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Grosses Têtes",
            'categorie_id' => "1",
        ],
        [
            'card' => "Jon Snow",
            'categorie_id' => "0",
        ],
        [
            'card' => "Shaun le mouton",
            'categorie_id' => "0",
        ],
        [
            'card' => "300",
            'categorie_id' => "0",
        ],
        [
            'card' => "Mark Zuckerberg",
            'categorie_id' => "1",
        ],
        [
            'card' => "Cougar",
            'categorie_id' => "0",
        ],
        [
            'card' => "Michel Houellebecq",
            'categorie_id' => "1",
        ],
        [
            'card' => "Che Guevara",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le Petit Journal",
            'categorie_id' => "0",
        ],
        [
            'card' => "Alfred Hitchcock",
            'categorie_id' => "1",
        ],
        [
            'card' => "pelé",
            'categorie_id' => "1",
        ],
        [
            'card' => "Barack Obama",
            'categorie_id' => "1",
        ],
        [
            'card' => "Nikos Aliagas",
            'categorie_id' => "1",
        ],
        [
            'card' => "How I Met Your Mother",
            'categorie_id' => "0",
        ],
        [
            'card' => "La Bohème",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Visiteurs",
            'categorie_id' => "0",
        ],
        [
            'card' => "Ben Stiller",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le petit Prince",
            'categorie_id' => "0",
        ],
        [
            'card' => "Popeye",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jule Ferry",
            'categorie_id' => "1",
        ],
        [
            'card' => "Marco Polo",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le Parfum",
            'categorie_id' => "0",
        ],
        [
            'card' => "Licorne",
            'categorie_id' => "3",
        ],
        [
            'card' => "Robert Downey jr.",
            'categorie_id' => "1",
        ],
        [
            'card' => "Talon Aiguille",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jacques Chirac",
            'categorie_id' => "1",
        ],
        [
            'card' => "Christian Clavier",
            'categorie_id' => "1",
        ],
        [
            'card' => "Mary Poppins",
            'categorie_id' => "0",
        ],
        [
            'card' => "Drake",
            'categorie_id' => "1",
        ],
        [
            'card' => "Abraham Lincoln",
            'categorie_id' => "1",
        ],
        [
            'card' => "Paul Cézanne",
            'categorie_id' => "1",
        ],
        [
            'card' => "Mon petit Poney",
            'categorie_id' => "0",
        ],
        [
            'card' => "Aphrodite",
            'categorie_id' => "0",
        ],
        [
            'card' => "Yves Saint Laurent",
            'categorie_id' => "1",
        ],
        [
            'card' => "Youtube",
            'categorie_id' => "0",
        ],
        [
            'card' => "Mario",
            'categorie_id' => "0",
        ],
        [
            'card' => "Charmed",
            'categorie_id' => "0",
        ],
        [
            'card' => "Imagine",
            'categorie_id' => "0",
        ],
        [
            'card' => "Orange is the New Black",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jules César",
            'categorie_id' => "1",
        ],
        [
            'card' => "Black et Mortimer",
            'categorie_id' => "0",
        ],
        [
            'card' => "Snoopy",
            'categorie_id' => "0",
        ],
        [
            'card' => "Tinder",
            'categorie_id' => "0",
        ],
        [
            'card' => "Al Capone",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les 101 Dalmatiens",
            'categorie_id' => "0",
        ],
        [
            'card' => "Kirikou",
            'categorie_id' => "0",
        ],
        [
            'card' => "X-Men",
            'categorie_id' => "0",
        ],
        [
            'card' => "Scènes de ménages",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Chutes du Niagara",
            'categorie_id' => "0",
        ],
        [
            'card' => "Katsumi",
            'categorie_id' => "1",
        ],
        [
            'card' => "Miss France",
            'categorie_id' => "0",
        ],
        [
            'card' => "Boulet",
            'categorie_id' => "0",
        ],
        [
            'card' => "Arnold Schwarzenegger",
            'categorie_id' => "1",
        ],
        [
            'card' => "Père Dodu",
            'categorie_id' => "1",
        ],
        [
            'card' => "Cyril Hanouna",
            'categorie_id' => "1",
        ],
        [
            'card' => "C'est pas sorcier",
            'categorie_id' => "0",
        ],
        [
            'card' => "Philippe Geluck",
            'categorie_id' => "1",
        ],
        [
            'card' => "Nicolas Bedos",
            'categorie_id' => "1",
        ],
        [
            'card' => "Indochine",
            'categorie_id' => "1",
        ],
        [
            'card' => "J.R.R Tolkien",
            'categorie_id' => "1",
        ],
        [
            'card' => "Nirvana",
            'categorie_id' => "1",
        ],
        [
            'card' => "Homer Simpson",
            'categorie_id' => "0",
        ],
        [
            'card' => "Futurama",
            'categorie_id' => "0",
        ],
        [
            'card' => "Robin des Bois",
            'categorie_id' => "0",
        ],
        [
            'card' => "Columbo",
            'categorie_id' => "0",
        ],
        [
            'card' => "Florent Pagny",
            'categorie_id' => "1",
        ],
        [
            'card' => "Gaël Monfils",
            'categorie_id' => "1",
        ],
        [
            'card' => "Chuck Norris",
            'categorie_id' => "1",
        ],
        [
            'card' => "Pocahontas",
            'categorie_id' => "0",
        ],
        [
            'card' => "Rafael Nadal",
            'categorie_id' => "1",
        ],
        [
            'card' => "Jennifer Lopez",
            'categorie_id' => "1",
        ],
        [
            'card' => "Spirou",
            'categorie_id' => "0",
        ],
        [
            'card' => "Joey Starr",
            'categorie_id' => "1",
        ],
        [
            'card' => "Kun Fu Panda",
            'categorie_id' => "0",
        ],
        [
            'card' => "Mylène Farmer",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les bisounours",
            'categorie_id' => "0",
        ],
        [
            'card' => "Gad Elmaleh",
            'categorie_id' => "1",
        ],
        [
            'card' => "Superman",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le petit Nicolas",
            'categorie_id' => "0",
        ],
        [
            'card' => "One Piece",
            'categorie_id' => "0",
        ],
        [
            'card' => "Loana",
            'categorie_id' => "1",
        ],
        [
            'card' => "Quand la Musique est Bonne",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le petit Bonhomme en Mousse",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jurassic Park",
            'categorie_id' => "0",
        ],
        [
            'card' => "Urgences",
            'categorie_id' => "0",
        ],
        [
            'card' => "Babar",
            'categorie_id' => "0",
        ],
        [
            'card' => "Gandalf",
            'categorie_id' => "0",
        ],
        [
            'card' => "Elton John",
            'categorie_id' => "1",
        ],
        [
            'card' => "Black M",
            'categorie_id' => "1",
        ],
        [
            'card' => "La Belle au bois Dormant",
            'categorie_id' => "0",
        ],
        [
            'card' => "Esmeralda",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Quatre Saisons",
            'categorie_id' => "0",
        ],
        [
            'card' => "Call of Duty",
            'categorie_id' => "0",
        ],
        [
            'card' => "Alain Chabat",
            'categorie_id' => "1",
        ],
        [
            'card' => "Hagrid",
            'categorie_id' => "0",
        ],
        [
            'card' => "Shakira",
            'categorie_id' => "1",
        ],
        [
            'card' => "Gaspard Proust",
            'categorie_id' => "1",
        ],
        [
            'card' => "La Schtroumpfette",
            'categorie_id' => "0",
        ],
        [
            'card' => "Colonel Moutarde",
            'categorie_id' => "0",
        ],
        [
            'card' => "Eric Cantona",
            'categorie_id' => "1",
        ],
        [
            'card' => "Dentier",
            'categorie_id' => "0",
        ],
        [
            'card' => "Hello Kitty",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jean-Jacques Rousseau",
            'categorie_id' => "1",
        ],
        [
            'card' => "Madame Pipi",
            'categorie_id' => "1",
        ],
        [
            'card' => "MontCuq",
            'categorie_id' => "0",
        ],
        [
            'card' => "Michael Jordan",
            'categorie_id' => "1",
        ],
        [
            'card' => "Mariah Carey",
            'categorie_id' => "1",
        ],
        [
            'card' => "Yann Barthès",
            'categorie_id' => "1",
        ],
        [
            'card' => "Johnny Depp",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les Minions",
            'categorie_id' => "0",
        ],
        [
            'card' => "Shrek",
            'categorie_id' => "0",
        ],
        [
            'card' => "La roue de la fortune",
            'categorie_id' => "0",
        ],
        [
            'card' => "Eric-Emmanuel Schmitt",
            'categorie_id' => "1",
        ],
        [
            'card' => "Madagascar",
            'categorie_id' => "0",
        ],
        [
            'card' => "Tiger Woods",
            'categorie_id' => "1",
        ],
        [
            'card' => "Bref",
            'categorie_id' => "0",
        ],
        [
            'card' => "Albert Camus",
            'categorie_id' => "1",
        ],
        [
            'card' => "maître Gims",
            'categorie_id' => "1",
        ],
        [
            'card' => "Jonh Cena",
            'categorie_id' => "1",
        ],
        [
            'card' => "Francis Lalanne",
            'categorie_id' => "1",
        ],
        [
            'card' => "Madonna",
            'categorie_id' => "1",
        ],
        [
            'card' => "Marc Levy",
            'categorie_id' => "1",
        ],
        [
            'card' => "Robinson Crusoé",
            'categorie_id' => "1",
        ],
        [
            'card' => "Very Bad Trip",
            'categorie_id' => "0",
        ],
        [
            'card' => "Rihanna",
            'categorie_id' => "1",
        ],
        [
            'card' => "Bill Gates",
            'categorie_id' => "1",
        ],
        [
            'card' => "Cristiano Ronaldo",
            'categorie_id' => "1",
        ],
        [
            'card' => "Marilyn Monroe",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le retour Du Jedi",
            'categorie_id' => "0",
        ],
        [
            'card' => "Airbag",
            'categorie_id' => "0",
        ],
        [
            'card' => "Cyril Lignac",
            'categorie_id' => "1",
        ],
        [
            'card' => "Zaz",
            'categorie_id' => "1",
        ],
        [
            'card' => "Fréro Delavega",
            'categorie_id' => "1",
        ],
        [
            'card' => "Sylvester Stallone",
            'categorie_id' => "1",
        ],
        [
            'card' => "Kim Kardashian",
            'categorie_id' => "1",
        ],
        [
            'card' => "Louis Vuiton",
            'categorie_id' => "1",
        ],
        [
            'card' => "Bob Marley",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le livre de la jungle",
            'categorie_id' => "0",
        ],
        [
            'card' => "Stromae",
            'categorie_id' => "1",
        ],
        [
            'card' => "Rocky",
            'categorie_id' => "0",
        ],
        [
            'card' => "Krokmou",
            'categorie_id' => "0",
        ],
        [
            'card' => "Bernard Pivot",
            'categorie_id' => "1",
        ],
        [
            'card' => "Astérix",
            'categorie_id' => "0",
        ],
        [
            'card' => "Daniel Balavoine",
            'categorie_id' => "1",
        ],
        [
            'card' => "Top Chef",
            'categorie_id' => "0",
        ],
        [
            'card' => "Capitaine Crochet",
            'categorie_id' => "0",
        ],
        [
            'card' => "Doteur Who",
            'categorie_id' => "0",
        ],
        [
            'card' => "Blaireau",
            'categorie_id' => "0",
        ],
        [
            'card' => "Norman",
            'categorie_id' => "1",
        ],
        [
            'card' => "Mozart",
            'categorie_id' => "1",
        ],
        [
            'card' => "Nicolas Cage",
            'categorie_id' => "1",
        ],
        [
            'card' => "Charlie Hebdo",
            'categorie_id' => "0",
        ],
        [
            'card' => "The Rolling Stones",
            'categorie_id' => "1",
        ],
        [
            'card' => "Les Nombrils",
            'categorie_id' => "0",
        ],
        [
            'card' => "Cinquante Nuances de Grey",
            'categorie_id' => "0",
        ],
        [
            'card' => "Alice au pays Des Merveilles ",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Chevalier Du Zodiaque",
            'categorie_id' => "0",
        ],
        [
            'card' => "Eragon",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le Prince Charmant",
            'categorie_id' => "0",
        ],
        [
            'card' => "Snoop Dogg",
            'categorie_id' => "1",
        ],
        [
            'card' => "Coldplay",
            'categorie_id' => "1",
        ],
        [
            'card' => "Angela Merkel",
            'categorie_id' => "1",
        ],
        [
            'card' => "Grease",
            'categorie_id' => "0",
        ],
        [
            'card' => "Banksy",
            'categorie_id' => "0",
        ],
        [
            'card' => "Walt Disnay",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le père Fouras",
            'categorie_id' => "0",
        ],
        [
            'card' => "Bigfoot",
            'categorie_id' => "0",
        ],
        [
            'card' => "Leonardo DiCaprio",
            'categorie_id' => "1",
        ],
        [
            'card' => "Don Juan",
            'categorie_id' => "0",
        ],
        [
            'card' => "Rambo",
            'categorie_id' => "0",
        ],
        [
            'card' => "Valérie Damido",
            'categorie_id' => "1",
        ],
        [
            'card' => "U2",
            'categorie_id' => "1",
        ],
        [
            'card' => "David Guetta",
            'categorie_id' => "1",
        ],
        [
            'card' => "Le petit Chaperon rouge",
            'categorie_id' => "0",
        ],
        [
            'card' => "Morue",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les Dalton",
            'categorie_id' => "0",
        ],
        [
            'card' => "Groland",
            'categorie_id' => "0",
        ],
        [
            'card' => "Roméo et Juliette",
            'categorie_id' => "0",
        ],
        [
            'card' => "Gorillaz",
            'categorie_id' => "0",
        ],
        [
            'card' => "Eddie Murphy",
            'categorie_id' => "1",
        ],
        [
            'card' => "Matt Pokora",
            'categorie_id' => "1",
        ],
        [
            'card' => "Aladin",
            'categorie_id' => "0",
        ],
        [
            'card' => "Sonic",
            'categorie_id' => "0",
        ],
        [
            'card' => "Attila",
            'categorie_id' => "1",
        ],
        [
            'card' => "Raiponce",
            'categorie_id' => "0",
        ],
        [
            'card' => "L'alchimiste",
            'categorie_id' => "0",
        ],
        [
            'card' => "The Voice",
            'categorie_id' => "0",
        ],
        [
            'card' => "La venus de Milo",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les trois Mousquetaires",
            'categorie_id' => "0",
        ],
        [
            'card' => "Ikea",
            'categorie_id' => "0",
        ],
        [
            'card' => "La Statue de la Libeté",
            'categorie_id' => "0",
        ],
        [
            'card' => "Colin McRae",
            'categorie_id' => "1",
        ],
        [
            'card' => "La lette a Elise",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le Bon, la Brute et le Truand",
            'categorie_id' => "0",
        ],
        [
            'card' => "Cigare",
            'categorie_id' => "0",
        ],
        [
            'card' => "Godzilla",
            'categorie_id' => "0",
        ],
        [
            'card' => "Bono",
            'categorie_id' => "0",
        ],
        [
            'card' => "Michel-Ange",
            'categorie_id' => "0",
        ],
        [
            'card' => "Olaf",
            'categorie_id' => "0",
        ],
        [
            'card' => "Tigrou",
            'categorie_id' => "0",
        ],
        [
            'card' => "Dory",
            'categorie_id' => "0",
        ],
        [
            'card' => "Le Géant Vert",
            'categorie_id' => "0",
        ],
        [
            'card' => "Minecraft",
            'categorie_id' => "0",
        ],
        [
            'card' => "Charle Darwin",
            'categorie_id' => "1",
        ],
        [
            'card' => "Zombie",
            'categorie_id' => "0",
        ],
        [
            'card' => "La famille Addams",
            'categorie_id' => "0",
        ],
        [
            'card' => "Titeuf",
            'categorie_id' => "0",
        ],
        [
            'card' => "Julia Roberts",
            'categorie_id' => "1",
        ],
        [
            'card' => "Boule et Bill",
            'categorie_id' => "0",
        ],
        [
            'card' => "Albert Einstein",
            'categorie_id' => "1",
        ],
        [
            'card' => "Taylor Swift ",
            'categorie_id' => "1",
        ],
        [
            'card' => "Magellan",
            'categorie_id' => "1",
        ],
        [
            'card' => "Professeur Tournesol",
            'categorie_id' => "0",
        ],
        [
            'card' => "Jeanne d'Arc",
            'categorie_id' => "1",
        ],
        [
            'card' => "Fouet",
            'categorie_id' => "0",
        ],
        [
            'card' => "Big Ben",
            'categorie_id' => "0",
        ],
        [
            'card' => "Gepetto",
            'categorie_id' => "0",
        ],
        [
            'card' => "Davy Crockett",
            'categorie_id' => "1",
        ],
        [
            'card' => "Pythagore",
            'categorie_id' => "1",
        ],
        [
            'card' => "Kev Adams",
            'categorie_id' => "1",
        ],
        [
            'card' => "Coluche",
            'categorie_id' => "1",
        ],
        [
            'card' => "Justin Bridou",
            'categorie_id' => "1",
        ],
        [
            'card' => "Vin Diesel",
            'categorie_id' => "1",
        ],
        [
            'card' => "Squeezie",
            'categorie_id' => "1",
        ],
        [
            'card' => "Indiana Jones",
            'categorie_id' => "0",
        ],
        [
            'card' => "Keen'v",
            'categorie_id' => "1",
        ],
        [
            'card' => "Christian Dior",
            'categorie_id' => "1",
        ],
        [
            'card' => "Gladiator",
            'categorie_id' => "0",
        ],
        [
            'card' => "Tout le monde veux prendre sa place",
            'categorie_id' => "0",
        ],
        [
            'card' => "Idefix",
            'categorie_id' => "0",
        ],
        [
            'card' => "Kaamelott",
            'categorie_id' => "0",
        ],
        [
            'card' => "Les fleurs du mal",
            'categorie_id' => "0",
        ],
        [
            'card' => "Architecte",
            'categorie_id' => "2",
        ],
        [
            'card' => "Traducteur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Archéologue",
            'categorie_id' => "2",
        ],
        [
            'card' => "Bûcheron",
            'categorie_id' => "2",
        ],
        [
            'card' => "Boulanger",
            'categorie_id' => "2",
        ],
        [
            'card' => "Ébéniste",
            'categorie_id' => "2",
        ],
        [
            'card' => "Scientifique",
            'categorie_id' => "2",
        ],
        [
            'card' => "Policier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Mécanicien",
            'categorie_id' => "2",
        ],
        [
            'card' => "Styliste",
            'categorie_id' => "2",
        ],
        [
            'card' => "Prof",
            'categorie_id' => "2",
        ],
        [
            'card' => "Plombier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Coiffeur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Médecin",
            'categorie_id' => "2",
        ],
        [
            'card' => "Berger",
            'categorie_id' => "2",
        ],
        [
            'card' => "Infirmière",
            'categorie_id' => "2",
        ],
        [
            'card' => "Peintre",
            'categorie_id' => "2",
        ],
        [
            'card' => "Caissière",
            'categorie_id' => "2",
        ],
        [
            'card' => "Acteur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Footballeur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Développeur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Cuisinier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Détective",
            'categorie_id' => "2",
        ],
        [
            'card' => "Fleuriste",
            'categorie_id' => "2",
        ],
        [
            'card' => "Dentiste",
            'categorie_id' => "2",
        ],
        [
            'card' => "Serrurier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Maître-nageur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Livreur de pizza",
            'categorie_id' => "2",
        ],
        [
            'card' => "Comptable",
            'categorie_id' => "2",
        ],
        [
            'card' => "Moniteur de ski",
            'categorie_id' => "2",
        ],
        [
            'card' => "Psychiatre",
            'categorie_id' => "2",
        ],
        [
            'card' => "Journaliste",
            'categorie_id' => "2",
        ],
        [
            'card' => "Boucher",
            'categorie_id' => "2",
        ],
        [
            'card' => "Serveur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Réalisateur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Pompier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Magicien",
            'categorie_id' => "2",
        ],
        [
            'card' => "Photographe",
            'categorie_id' => "2",
        ],
        [
            'card' => "Pêcheur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Barman",
            'categorie_id' => "2",
        ],
        [
            'card' => "Musicien",
            'categorie_id' => "2",
        ],
        [
            'card' => "Banquier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Postier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Opticien",
            'categorie_id' => "2",
        ],
        [
            'card' => "Cordonnier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Agent de sécurité",
            'categorie_id' => "2",
        ],
        [
            'card' => "Cascadeur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Bijoutier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Cameraman",
            'categorie_id' => "2",
        ],
        [
            'card' => "Jardinier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Présentateur météo",
            'categorie_id' => "2",
        ],
        [
            'card' => "Goûteur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Puériculture",
            'categorie_id' => "2",
        ],
        [
            'card' => "Hacker",
            'categorie_id' => "2",
        ],
        [
            'card' => "Voix-off",
            'categorie_id' => "2",
        ],
        [
            'card' => "Pousseur du métro",
            'categorie_id' => "2",
        ],
        [
            'card' => "Maréchal-ferrant",
            'categorie_id' => "2",
        ],
        [
            'card' => "Masseur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Mannequin",
            'categorie_id' => "2",
        ],
        [
            'card' => "Régisseur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Personal shopper",
            'categorie_id' => "2",
        ],
        [
            'card' => "Laveur de vitre",
            'categorie_id' => "2",
        ],
        [
            'card' => "Souffleur de verre",
            'categorie_id' => "2",
        ],
        [
            'card' => "Deratiseur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Escort",
            'categorie_id' => "2",
        ],
        [
            'card' => "Taxidermiste",
            'categorie_id' => "2",
        ],
        [
            'card' => "Gamer",
            'categorie_id' => "2",
        ],
        [
            'card' => "Pharmacien",
            'categorie_id' => "2",
        ],
        [
            'card' => "Cantinier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Kayakiste",
            'categorie_id' => "2",
        ],
        [
            'card' => "Urologue",
            'categorie_id' => "2",
        ],
        [
            'card' => "Funambule",
            'categorie_id' => "2",
        ],
        [
            'card' => "Aventurier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Commercial",
            'categorie_id' => "2",
        ],
        [
            'card' => "Juge",
            'categorie_id' => "2",
        ],
        [
            'card' => "Croupier",
            'categorie_id' => "2",
        ],
        [
            'card' => "Sage-femme",
            'categorie_id' => "2",
        ],
        [
            'card' => "Déménageur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Jockey",
            'categorie_id' => "2",
        ],
        [
            'card' => "Maroufleur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Controleur",
            'categorie_id' => "2",
        ],
        [
            'card' => "Boule à thé",
            'categorie_id' => "0",
        ],
        [
            'card' => "Porte manteau",
            'categorie_id' => "0",
        ],
        [
            'card' => "Tasse",
            'categorie_id' => "0",
        ],
        [
            'card' => "Chaise",
            'categorie_id' => "0",
        ],
        [
            'card' => "Trombone",
            'categorie_id' => "0",
        ],
        [
            'card' => "Ecouteurs",
            'categorie_id' => "0",
        ],
        [
            'card' => "Voiture",
            'categorie_id' => "0",
        ],
        [
            'card' => "Capuche",
            'categorie_id' => "0",
        ],
        [
            'card' => "Passoire",
            'categorie_id' => "0",
        ],
        [
            'card' => "Sapin",
            'categorie_id' => "0",
        ],
        [
            'card' => "Brosse à dent",
            'categorie_id' => "0",
        ],
        [
            'card' => "Carte bancaire",
            'categorie_id' => "0",
        ],
        [
            'card' => "Pelotte de laine",
            'categorie_id' => "0",
        ],
        [
            'card' => "Lanterne",
            'categorie_id' => "0",
        ],
        [
            'card' => "Boxer",
            'categorie_id' => "0",
        ],
        [
            'card' => "Photo",
            'categorie_id' => "0",
        ],
        [
            'card' => "Biberon",
            'categorie_id' => "0",
        ],
        [
            'card' => "Bar de pole dance",
            'categorie_id' => "0",
        ],
        [
            'card' => "Tire-bouchons",
            'categorie_id' => "0",
        ],
        [
            'card' => "Chaussons",
            'categorie_id' => "0",
        ],
        [
            'card' => "Glaçon",
            'categorie_id' => "0",
        ],
        [
            'card' => "Pipe",
            'categorie_id' => "0",
        ],
        [
            'card' => "Shampooing",
            'categorie_id' => "0",
        ],
        [
            'card' => "Cravate",
            'categorie_id' => "0",
        ],
        [
            'card' => "Marionnette",
            'categorie_id' => "0",
        ],
        [
            'card' => "Pomme de pain",
            'categorie_id' => "0",
        ],
        [
            'card' => "Talky walky",
            'categorie_id' => "0",
        ],
        [
            'card' => "Chat",
            'categorie_id' => "3",
        ],
        [
            'card' => "Chien",
            'categorie_id' => "3",
        ],
        [
            'card' => "Souris",
            'categorie_id' => "3",
        ],
        [
            'card' => "Rat",
            'categorie_id' => "3",
        ],
        [
            'card' => "Renard",
            'categorie_id' => "3",
        ],
        [
            'card' => "Poule",
            'categorie_id' => "3",
        ],
        [
            'card' => "Vache",
            'categorie_id' => "3",
        ],
        [
            'card' => "Coq",
            'categorie_id' => "3",
        ],
        [
            'card' => "Dindon",
            'categorie_id' => "3",
        ],
        [
            'card' => "Elan",
            'categorie_id' => "3",
        ],
        [
            'card' => "Ours",
            'categorie_id' => "3",
        ],
        [
            'card' => "Lion",
            'categorie_id' => "3",
        ],
        [
            'card' => "Tigre",
            'categorie_id' => "3",
        ],
        [
            'card' => "Canard",
            'categorie_id' => "3",
        ],
        [
            'card' => "Flamand rose",
            'categorie_id' => "3",
        ],
        [
            'card' => "Eléphant",
            'categorie_id' => "3",
        ],
        [
            'card' => "Panthère",
            'categorie_id' => "3",
        ],
        [
            'card' => "Jaguar",
            'categorie_id' => "3",
        ],
        [
            'card' => "Lynx",
            'categorie_id' => "3",
        ],
        [
            'card' => "Lapin",
            'categorie_id' => "3",
        ],
        [
            'card' => "Mouton",
            'categorie_id' => "3",
        ],
        [
            'card' => "Chèvre",
            'categorie_id' => "3",
        ],
        [
            'card' => "Bouc",
            'categorie_id' => "3",
        ],
        [
            'card' => "Boeuf",
            'categorie_id' => "3",
        ],
        [
            'card' => "Koala",
            'categorie_id' => "3",
        ],
        [
            'card' => "Paresseux",
            'categorie_id' => "3",
        ],
        [
            'card' => "Girafe",
            'categorie_id' => "3",
        ],
        [
            'card' => "Zèbre",
            'categorie_id' => "3",
        ],
        [
            'card' => "Léopard",
            'categorie_id' => "3",
        ],
        [
            'card' => "Hippopotame",
            'categorie_id' => "3",
        ],
        [
            'card' => "Toucan",
            'categorie_id' => "3",
        ],
        [
            'card' => "Paon",
            'categorie_id' => "3",
        ],
        [
            'card' => "Singe",
            'categorie_id' => "3",
        ],
        [
            'card' => "Gorille",
            'categorie_id' => "3",
        ],
        [
            'card' => "Loup",
            'categorie_id' => "3",
        ],
        [
            'card' => "Crocodile",
            'categorie_id' => "3",
        ],
        [
            'card' => "Tortue",
            'categorie_id' => "3",
        ],
        [
            'card' => "Lama",
            'categorie_id' => "3",
        ],
        [
            'card' => "Chameau",
            'categorie_id' => "3",
        ],
        [
            'card' => "Dromadaire",
            'categorie_id' => "3",
        ],
        [
            'card' => "Hyéti",
            'categorie_id' => "3",
        ],
        [
            'card' => "Cheval",
            'categorie_id' => "3",
        ],
        [
            'card' => "Furet",
            'categorie_id' => "3",
        ],
        [
            'card' => "Poisson",
            'categorie_id' => "3",
        ],
        [
            'card' => "Requin",
            'categorie_id' => "3",
        ],
        [
            'card' => "Baleine",
            'categorie_id' => "3",
        ],
        [
            'card' => "Dauphin",
            'categorie_id' => "3",
        ],
        [
            'card' => "Âne",
            'categorie_id' => "3",
        ],
        [
            'card' => "Mouette",
            'categorie_id' => "3",
        ],
        [
            'card' => "Panda",
            'categorie_id' => "3",
        ],
        [
            'card' => "Caméléon",
            'categorie_id' => "3",
        ],
        [
            'card' => "Marmotte",
            'categorie_id' => "3",
        ],
        [
            'card' => "Pigeon",
            'categorie_id' => "3",
        ],
        [
            'card' => "Renne",
            'categorie_id' => "3",
        ],
        [
            'card' => "Cochon",
            'categorie_id' => "3",
        ],
        [
            'card' => "Poussin",
            'categorie_id' => "3",
        ],
        [
            'card' => "Pingouin",
            'categorie_id' => "3",
        ],
        [
            'card' => "Castor",
            'categorie_id' => "3",
        ],
        [
            'card' => "Raton laveur",
            'categorie_id' => "3",
        ],
        [
            'card' => "Ornitorinque",
            'categorie_id' => "3",
        ],
        [
            'card' => "Truite",
            'categorie_id' => "3",
        ],
        [
            'card' => "Saumon",
            'categorie_id' => "3",
        ],
        [
            'card' => "Oie",
            'categorie_id' => "3",
        ],
        [
            'card' => "Pivert",
            'categorie_id' => "3",
        ],
        [
            'card' => "Grenouille",
            'categorie_id' => "3",
        ],
        [
            'card' => "Crapaud",
            'categorie_id' => "3",
        ],
        [
            'card' => "Fenec",
            'categorie_id' => "3",
        ],
        [
            'card' => "Phoenix",
            'categorie_id' => "3",
        ],
        [
            'card' => "Hippogriphe",
            'categorie_id' => "3",
        ],
        [
            'card' => "Licorne",
            'categorie_id' => "3",
        ],
        [
            'card' => "Centaure",
            'categorie_id' => "3",
        ],
        [
            'card' => "Tatoo",
            'categorie_id' => "3",
        ],
        [
            'card' => "Phasme",
            'categorie_id' => "3",
        ],




        
        
    
    
    
    
    ];
        DB::table('classics')->insert($classics);
        DB::table('admins')->insert([
            'username' => "Sephorquoi",
            'password' => "4a7d1ed414474e4033ac29ccb8653d9b",]);
    }
}
