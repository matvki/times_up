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
        ],
        [
            'card' => "Candy crush",
        ],
        [
            'card' => "Jean-Luc Reichmann",
        ],
        [
            'card' => "Titanic",
        ],
        [
            'card' => "Pirates des Caraïbes",
        ],
        [
            'card' => "Monica Belluci",
        ],
        [
            'card' => "Yannick Noah",
        ],
        [
            'card' => "Hermione Granger",
        ],
        [
            'card' => "Bison Futé",
        ],
        [
            'card' => "Blanche-Neige",
        ],
        [
            'card' => "Menottes",
        ],
        [
            'card' => "Britney Spears",
        ],
        [
            'card' => "Qu'esr-ce qu'on a fait au Bon Dieu?",
        ],
        [
            'card' => "Natoo",
        ],
        [
            'card' => "Le Marqui de Sade",
        ],
        [
            'card' => "Ver Solitaire",
        ],
        [
            'card' => "Buzz l'Eclair",
        ],
        [
            'card' => "Muse",
        ],
        [
            'card' => "Agatha Christie",
        ],
        [
            'card' => "Gangnam Style ",
        ],
        [
            'card' => "Bilbo le Hobbit",
        ],
        [
            'card' => "La Belle et le Clochard",
        ],
        [
            'card' => "Mimie Mathy",
        ],
        [
            'card' => "Francois Hollande",
        ],
        [
            'card' => "Mister T.",
        ],
        [
            'card' => "Serena Williams",
        ],
        [
            'card' => "BB8",
        ],
        [
            'card' => "Corto Maltese",
        ],
        [
            'card' => "La Petite Sirène ",
        ],
        [
            'card' => "Blade Runner",
        ],
        [
            'card' => "Fauve",
        ],
        [
            'card' => "Dirty Dancing",
        ],
        [
            'card' => "Marlon Brando",
        ],
        [
            'card' => "Le favuleux Destin d'Amelie Poulain ",
        ],
        [
            'card' => "Docteur Watson",
        ],
        [
            'card' => "Sebastian Vettel",
        ],
        [
            'card' => "Karim Benzema",
        ],
        [
            'card' => "Les lacs du Connemara",
        ],
        [
            'card' => "Victor Hugo ",
        ],
        [
            'card' => "Selena Gomez",
        ],
        [
            'card' => "Daniel Craig",
        ],
        [
            'card' => "Seul sur Mars",
        ],
        [
            'card' => "La Fée Clochette",
        ],
        [
            'card' => "Télématin",
        ],
        [
            'card' => "La Reine des neiges",
        ],
        [
            'card' => "Benoit Poelvoorde",
        ],
        [
            'card' => "Twilight",
        ],
        [
            'card' => "Renaud",
        ],
        [
            'card' => "Jessica Alba",
        ],
        [
            'card' => "Florence Foresti",
        ],
        [
            'card' => "Iker Casillas",
        ],
        [
            'card' => "Divergente",
        ],
        [
            'card' => "Marie-Antoinette",
        ],
        [
            'card' => "L'arc de Triomphe",
        ],
        [
            'card' => "Soutien-Gorge",
        ],
        [
            'card' => "Platon",
        ],
        [
            'card' => "Eric Zemmour",
        ],
        [
            'card' => "Kermit la grenouille",
        ],
        [
            'card' => "Pif Gadjet",
        ],
        [
            'card' => "Serge Gainsbourg",
        ],
        [
            'card' => "Robocop",
        ],
        [
            'card' => "Dalaï-lama",
        ],
        [
            'card' => "Netflix",
        ],
        [
            'card' => "Les schtroumpfs",
        ],
        [
            'card' => "Le Gendarme de Saint-Tropez",
        ],
        [
            'card' => "Ramsès",
        ],
        [
            'card' => "Sigmund Freud",
        ],
        [
            'card' => "Hercule Poirot",
        ],
        [
            'card' => "joël Robuchon",
        ],
        [
            'card' => "Nekfeu",
        ],
        [
            'card' => "Mad Max",
        ],
        [
            'card' => "Pikachu",
        ],
        [
            'card' => "Le Joker",
        ],
        [
            'card' => "Gargamel",
        ],
        [
            'card' => "La Cigale et la Fourmi",
        ],
        [
            'card' => "Beyoncé",
        ],
        [
            'card' => "Jules Verne",
        ],
        [
            'card' => "Marilyn Manson",
        ],
        [
            'card' => "Comme D'habitude",
        ],
        [
            'card' => "Goerge Lucas",
        ],
        [
            'card' => "Le Dictateur",
        ],
        [
            'card' => "La vache qui rit",
        ],
        [
            'card' => "Daft Punk",
        ],
        [
            'card' => "Isaac Newton",
        ],
        [
            'card' => "Scarface",
        ],
        [
            'card' => "Gollum",
        ],
        [
            'card' => "Arthur Rimbaud",
        ],
        [
            'card' => "Louane",
        ],
        [
            'card' => "Michel Drucker",
        ],
        [
            'card' => "Jean Moulin",
        ],
        [
            'card' => "Mika",
        ],
        [
            'card' => "Henri Matisse",
        ],
        [
            'card' => "Zeus",
        ],
        [
            'card' => "Luke Skywalker",
        ],
        [
            'card' => "Fred Vargas",
        ],
        [
            'card' => "Eminem",
        ],
        [
            'card' => "Poney",
        ],
        [
            'card' => "Vercingétorix",
        ],
        [
            'card' => "Violetta",
        ],
        [
            'card' => "Steven spielberg",
        ],
        [
            'card' => "Marion Cotillard",
        ],
        [
            'card' => "Adele",
        ],
        [
            'card' => "Question pour un champion",
        ],
        [
            'card' => "Fifi Brindacier",
        ],
        [
            'card' => "Rocco Siffredi",
        ],
        [
            'card' => "Les Fourmis",
        ],
        [
            'card' => "Katy Perry",
        ],
        [
            'card' => "M. Hyde",
        ],
        [
            'card' => "Lego",
        ],
        [
            'card' => "Nosferatu",
        ],
        [
            'card' => "Ali Baba",
        ],
        [
            'card' => "WALL-E",
        ],
        [
            'card' => "Charlemagne",
        ],
        [
            'card' => "La Maison-Blanche",
        ],
        [
            'card' => "Gulliver",
        ],
        [
            'card' => "Miley Cyrus",
        ],
        [
            'card' => "Instagram",
        ],
        [
            'card' => "Pac-Man",
        ],
        [
            'card' => "Kad Merad",
        ],
        [
            'card' => "Les Profs",
        ],
        [
            'card' => "La muraille de chine",
        ],
        [
            'card' => "Legolas",
        ],
        [
            'card' => "Arsène Lupin",
        ],
        [
            'card' => "David Bowie",
        ],
        [
            'card' => "Alien",
        ],
        [
            'card' => "Les Tournesols",
        ],
        [
            'card' => "Astérix et Obélix Mission Cléopatre",
        ],
        [
            'card' => "Son of Anarchy",
        ],
        [
            'card' => "Natalie Portman",
        ],
        [
            'card' => "Cyrano de Bergerac",
        ],
        [
            'card' => "AC/DC",
        ],
        [
            'card' => "George Clooney",
        ],
        [
            'card' => "Sia",
        ],
        [
            'card' => "Spock",
        ],
        [
            'card' => "Tom Cruise",
        ],
        [
            'card' => "Mickey Mouse",
        ],
        [
            'card' => "La Famille Bélier",
        ],
        [
            'card' => "Roger Rabbit",
        ],
        [
            'card' => "Andy Warhol",
        ],
        [
            'card' => "Gérard Depardieu",
        ],
        [
            'card' => "Teddy Riner",
        ],
        [
            'card' => "Tintin",
        ],
        [
            'card' => "The Walking Dead",
        ],
        [
            'card' => "The Mentalist",
        ],
        [
            'card' => "Maria Sharapova",
        ],
        [
            'card' => "La Guerre des boutons",
        ],
        [
            'card' => "Nicolas Canteloup",
        ],
        [
            'card' => "Paranormal Activity",
        ],
        [
            'card' => "Star Trek",
        ],
        [
            'card' => "American Pie",
        ],
        [
            'card' => "Michaem Schumacher",
        ],
        [
            'card' => "Zlatan Ibrahimovic",
        ],
        [
            'card' => "La Joconde",
        ],
        [
            'card' => "Skrillex",
        ],
        [
            'card' => "Dexter",
        ],
        [
            'card' => "Guernica",
        ],
        [
            'card' => "Nicolas Hulot",
        ],
        [
            'card' => "Les tortues ninja",
        ],
        [
            'card' => "justin Timberlake",
        ],
        [
            'card' => "Colonel Reyel",
        ],
        [
            'card' => "Zac Efron",
        ],
        [
            'card' => "Hanibal Lecter",
        ],
        [
            'card' => "Les Enfoirés",
        ],
        [
            'card' => "Ed sheeran",
        ],
        [
            'card' => "Le Moulin-Rouge ",
        ],
        [
            'card' => "James Cameron",
        ],
        [
            'card' => "Les Feux de l'Amour",
        ],
        [
            'card' => "Les Gardien de la Galaxie",
        ],
        [
            'card' => "michael jackson",
        ],
        [
            'card' => "Marie curie",
        ],
        [
            'card' => "Monsieur Propre",
        ],
        [
            'card' => "Ulysse",
        ],
        [
            'card' => "Dora l'Explorarice",
        ],
        [
            'card' => "Vanessa Paradis",
        ],
        [
            'card' => "Transformers",
        ],
        [
            'card' => "Largo Winch",
        ],
        [
            'card' => "Jacques Prévert",
        ],
        [
            'card' => "Kid Paddle",
        ],
        [
            'card' => "Le chateaux de Versailles",
        ],
        [
            'card' => "The Big Bang Theory",
        ],
        [
            'card' => "Voldemort",
        ],
        [
            'card' => "Franquin",
        ],
        [
            'card' => "Forrest Gump",
        ],
        [
            'card' => "Chewbacca",
        ],
        [
            'card' => "Booba",
        ],
        [
            'card' => "Rayan Gosling",
        ],
        [
            'card' => "Les Dents de la mer",
        ],
        [
            'card' => "Le Malade imaginaire",
        ],
        [
            'card' => "Studio Bagel",
        ],
        [
            'card' => "Jacques Brel",
        ],
        [
            'card' => "Moule",
        ],
        [
            'card' => "Néfertiti",
        ],
        [
            'card' => "Tetris",
        ],
        [
            'card' => "Koh-Lanta",
        ],
        [
            'card' => "Léonard de Vinci",
        ],
        [
            'card' => "Shéhérazade",
        ],
        [
            'card' => "Catwoman",
        ],
        [
            'card' => "Les Misérables",
        ],
        [
            'card' => "Une Famille Formidable",
        ],
        [
            'card' => "twitter",
        ],
        [
            'card' => "stephen King",
        ],
        [
            'card' => "Mamie Nova",
        ],
        [
            'card' => "Katniss Everdeen",
        ],
        [
            'card' => "Jamel Debbouze",
        ],
        [
            'card' => "League of Legends",
        ],
        [
            'card' => "Le donjon de Naheulbeuk",
        ],
        [
            'card' => "Les Inconnus",
        ],
        [
            'card' => "Flash McQueen",
        ],
        [
            'card' => "Les Grosses Têtes",
        ],
        [
            'card' => "Jon Snow",
        ],
        [
            'card' => "Shaun le mouton",
        ],
        [
            'card' => "300",
        ],
        [
            'card' => "Mark Zuckerberg",
        ],
        [
            'card' => "Cougar",
        ],
        [
            'card' => "Michel Houellebecq",
        ],
        [
            'card' => "Che Guevara",
        ],
        [
            'card' => "Le Petit Journal",
        ],
        [
            'card' => "Alfred Hitchcock",
        ],
        [
            'card' => "pelé",
        ],
        [
            'card' => "Barack Obama",
        ],
        [
            'card' => "Nikos Aliagas",
        ],
        [
            'card' => "How I Met Your Mother",
        ],
        [
            'card' => "La Bohème",
        ],
        [
            'card' => "Les Visiteurs",
        ],
        [
            'card' => "Ben Stiller",
        ],
        [
            'card' => "Le petit Prince",
        ],
        [
            'card' => "Popeye",
        ],
        [
            'card' => "Jule Ferry",
        ],
        [
            'card' => "Marco Polo",
        ],
        [
            'card' => "Le Parfum",
        ],
        [
            'card' => "Licorne",
        ],
        [
            'card' => "Robert Downey jr.",
        ],
        [
            'card' => "Talon Aiguille",
        ],
        [
            'card' => "Jacques Chirac",
        ],
        [
            'card' => "Christian Clavier",
        ],
        [
            'card' => "Mary Poppins",
        ],
        [
            'card' => "Drake",
        ],
        [
            'card' => "Abraham Lincoln",
        ],
        [
            'card' => "Paul Cézanne",
        ],
        [
            'card' => "Mon petit Poney",
        ],
        [
            'card' => "Aphrodite",
        ],
        [
            'card' => "Yves Saint Laurent",
        ],
        [
            'card' => "Youtube",
        ],
        [
            'card' => "Mario",
        ],
        [
            'card' => "Charmed",
        ],
        [
            'card' => "Imagine",
        ],
        [
            'card' => "Orange is the New Black",
        ],
        [
            'card' => "Jules César",
        ],
        [
            'card' => "Black et Mortimer",
        ],
        [
            'card' => "Snoopy",
        ],
        [
            'card' => "Tinder",
        ],
        [
            'card' => "Al Capone",
        ],
        [
            'card' => "Les 101 Dalmatiens",
        ],
        [
            'card' => "Kirikou",
        ],
        [
            'card' => "X-Men",
        ],
        [
            'card' => "Scènes de ménages",
        ],
        [
            'card' => "Les Chutes du Niagara",
        ],
        [
            'card' => "Katsuni",
        ],
        [
            'card' => "Miss France",
        ],
        [
            'card' => "Boulet",
        ],
        [
            'card' => "Arnold Schwarzenegger",
        ],
        [
            'card' => "Père Dodu",
        ],
        [
            'card' => "Cyril Hanouna",
        ],
        [
            'card' => "C'est pas sorcier",
        ],
        [
            'card' => "Philippe Geluck",
        ],
        [
            'card' => "Nicolas Bedos",
        ],
        [
            'card' => "Indochine",
        ],
        [
            'card' => "J.R.R Tolkien",
        ],
        [
            'card' => "Nirvana",
        ],
        [
            'card' => "Homer Simpson",
        ],
        [
            'card' => "Futurama",
        ],
        [
            'card' => "Robin des Bois",
        ],
        [
            'card' => "Columbo",
        ],
        [
            'card' => "Florent Pagny",
        ],
        [
            'card' => "Gaël Monfils",
        ],
        [
            'card' => "Chuck Norris",
        ],
        [
            'card' => "Pocahontas",
        ],
        [
            'card' => "Rafael Nadal",
        ],
        [
            'card' => "Jennifer Lopez",
        ],
        [
            'card' => "Spirou",
        ],
        [
            'card' => "Joey Starr",
        ],
        [
            'card' => "Kun Fu Panda",
        ],
        [
            'card' => "Mylène Farmer",
        ],
        [
            'card' => "Les bisounours",
        ],
        [
            'card' => "Gad Elmaleh",
        ],
        [
            'card' => "Superman",
        ],
        [
            'card' => "Le petit Nicolas",
        ],
        [
            'card' => "One Piece",
        ],
        [
            'card' => "Loana",
        ],
        [
            'card' => "Quand la Musique est Bonne",
        ],
        [
            'card' => "Le petit Bonhomme en Mousse",
        ],
        [
            'card' => "Jurassic Park",
        ],
        [
            'card' => "Urgences",
        ],
        [
            'card' => "Babar",
        ],
        [
            'card' => "Gandalf",
        ],
        [
            'card' => "Elton John",
        ],
        [
            'card' => "Black M",
        ],
        [
            'card' => "La Belle au bois Dormant",
        ],
        [
            'card' => "Esmeralda",
        ],
        [
            'card' => "Les Quatre Saisons",
        ],
        [
            'card' => "Call of Duty",
        ],
        [
            'card' => "Alain Chabat",
        ],
        [
            'card' => "Hagrid",
        ],
        [
            'card' => "Shakira",
        ],
        [
            'card' => "Gaspard Proust",
        ],
        [
            'card' => "La Schtroumpfette",
        ],
        [
            'card' => "Colonel Moutard",
        ],
        [
            'card' => "Eric Cantona",
        ],
        [
            'card' => "Dentier",
        ],
        [
            'card' => "Hello Kitty",
        ],
        [
            'card' => "Jean-Jacques Rousseau",
        ],
        [
            'card' => "Madame Pipi",
        ],
        [
            'card' => "MontCuq",
        ],
        [
            'card' => "Michael Jordan",
        ],
        [
            'card' => "Mariah Carey",
        ],
        [
            'card' => "Yann Barthès",
        ],
        [
            'card' => "Johnny Depp",
        ],
        [
            'card' => "Les Minions",
        ],
        [
            'card' => "Shrek",
        ],
        [
            'card' => "La roue de la fortune",
        ],
        [
            'card' => "Eric-Emmanuel Schmitt",
        ],
        [
            'card' => "Madagascar",
        ],
        [
            'card' => "Tiger Woods",
        ],
        [
            'card' => "Bref",
        ],
        [
            'card' => "Albert Camus",
        ],
        [
            'card' => "maître Gims",
        ],
        [
            'card' => "Jonh Cena",
        ],
        [
            'card' => "Francis Lalanne",
        ],
        [
            'card' => "Madonna",
        ],
        [
            'card' => "Marc Levy",
        ],
        [
            'card' => "Robinson Crusoé",
        ],
        [
            'card' => "Very Bad Trip",
        ],
        [
            'card' => "Rihanna",
        ],
        [
            'card' => "Bill Gates",
        ],
        [
            'card' => "Cristiano Ronaldo",
        ],
        [
            'card' => "Marilyn Monroe",
        ],
        [
            'card' => "Le retour Du Jedi",
        ],
        [
            'card' => "Airbag",
        ],
        [
            'card' => "Cyril Lignac",
        ],
        [
            'card' => "Zaz",
        ],
        [
            'card' => "Fréro Delavega",
        ],
        [
            'card' => "Sylvester Stallone",
        ],
        [
            'card' => "Kim Kardashian",
        ],
        [
            'card' => "Louis Vuiton",
        ],
        [
            'card' => "Bob Marley",
        ],
        [
            'card' => "Le livre de la jungle",
        ],
        [
            'card' => "Stromae",
        ],
        [
            'card' => "Rocky",
        ],
        [
            'card' => "Krokmou",
        ],
        [
            'card' => "Bernard Pivot",
        ],
        [
            'card' => "Astérix",
        ],
        [
            'card' => "Daniel Balavoine",
        ],
        [
            'card' => "Top Chef",
        ],
        [
            'card' => "Capitaine Crochet",
        ],
        [
            'card' => "Doteur Who",
        ],
        [
            'card' => "Blaireau",
        ],
        [
            'card' => "Norman",
        ],
        [
            'card' => "Mozart",
        ],
        [
            'card' => "Nicolas Cage",
        ],
        [
            'card' => "Charlie Hebdo",
        ],
        [
            'card' => "The Rolling Stones",
        ],
        [
            'card' => "Les Nombrils",
        ],
        [
            'card' => "Cinquante Nuances de Grey",
        ],
        [
            'card' => "Alice au pays Des Merveilles ",
        ],
        [
            'card' => "Les Chevalier Du Zodiaque",
        ],
        [
            'card' => "Eragon",
        ],
        [
            'card' => "Le Prince Charmant",
        ],
        [
            'card' => "Snoop Dogg",
        ],
        [
            'card' => "Coldplay",
        ],
        [
            'card' => "Angela Merkel",
        ],
        [
            'card' => "Grease",
        ],
        [
            'card' => "Banksy",
        ],
        [
            'card' => "Walt Disnay",
        ],
        [
            'card' => "Le père Fouras",
        ],
        [
            'card' => "Bigfoot",
        ],
        [
            'card' => "Leonardo DiCaprio",
        ],
        [
            'card' => "Don Juan",
        ],
        [
            'card' => "Rambo",
        ],
        [
            'card' => "Valérie Damido",
        ],
        [
            'card' => "U2",
        ],
        [
            'card' => "David Guetta",
        ],
        [
            'card' => "Le petit Chaperon rouge",
        ],
        [
            'card' => "Morue",
        ],
        [
            'card' => "Les Dalton",
        ],
        [
            'card' => "Groland",
        ],
        [
            'card' => "Roméo et Juliette",
        ],
        [
            'card' => "Gorillaz",
        ],
        [
            'card' => "Eddie Murphy",
        ],
        [
            'card' => "Matt Pokora",
        ],
        [
            'card' => "Aladin",
        ],
        [
            'card' => "Sonic",
        ],
        [
            'card' => "Attila",
        ],
        [
            'card' => "Raiponce",
        ],
        [
            'card' => "L'alchimiste",
        ],
        [
            'card' => "The Voice",
        ],
        [
            'card' => "La venus de Milo",
        ],
        [
            'card' => "Les tois Mousquetaires",
        ],
        [
            'card' => "Ikea",
        ],
        [
            'card' => "La Statue de la Libeté",
        ],
        [
            'card' => "Colin McRae",
        ],
        [
            'card' => "La lette a Elise",
        ],
        [
            'card' => "Le Bon, la Brute et le Truand",
        ],
        [
            'card' => "Cigare",
        ],
        [
            'card' => "Godzilla",
        ],
        [
            'card' => "Bono",
        ],
        [
            'card' => "Michel-Ange",
        ],
        [
            'card' => "Olaf",
        ],
        [
            'card' => "Tigrou",
        ],
        [
            'card' => "Dory",
        ],
        [
            'card' => "Le Géant Vert",
        ],
        [
            'card' => "Minecraft",
        ],
        [
            'card' => "Charle Darwin",
        ],
        [
            'card' => "Zombie",
        ],
        [
            'card' => "La famille Addams",
        ],
        [
            'card' => "Titeuf",
        ],
        [
            'card' => "Julia Roberts",
        ],
        [
            'card' => "Boule et Bill",
        ],
        [
            'card' => "Albert Einstein",
        ],
        [
            'card' => "Taylor Swift ",
        ],
        [
            'card' => "Magellan",
        ],
        [
            'card' => "Professeur Tournesol",
        ],
        [
            'card' => "Jeanne d'Arc",
        ],
        [
            'card' => "Fouet",
        ],
        [
            'card' => "Big Ben",
        ],
        [
            'card' => "Gepetto",
        ],
        [
            'card' => "Davy Crockett",
        ],
        [
            'card' => "Pythagore",
        ],
        [
            'card' => "Kev Adams",
        ],
        [
            'card' => "Coluche",
        ],
        [
            'card' => "Justin Bridou",
        ],
        [
            'card' => "Vin Diesel",
        ],
        [
            'card' => "Squeezie",
        ],
        [
            'card' => "Indiana Jones",
        ],
        [
            'card' => "Keen'v",
        ],
        [
            'card' => "Christian Dior",
        ],
        [
            'card' => "Gladiator",
        ],
        [
            'card' => "Tout le monde veux prendre sa place",
        ],
        [
            'card' => "Idefix",
        ],
        [
            'card' => "Kaamelott",
        ],
        [
            'card' => "les fleure du mal",
        ]];
        DB::table('classics')->insert($classics);
        DB::table('admins')->insert([
            'username' => "Sephorquoi",
            'password' => "4a7d1ed414474e4033ac29ccb8653d9b",]);
    }
}
