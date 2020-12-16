<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <link rel="stylesheet" href="@yield('css')">
</head>

<body>
    <header>
        <nav>
            <div class="flex">
                <div>
                    <a href="/">
                        <div>
                            <img src="img/home.png" alt="">
                        </div>
                    </a>
                    <div class="object"></div>
                    <p>Accueil</p>
                </div>
                <img class="etc" src="img/etc1.png" alt="">
            </div>
            <div class="flex">
                <div>
                    <a href="/mode_de_jeux">
                        <div>
                            <img src="img/play.png" alt="">
                        </div>
                    </a>
                    <div class="object"></div>
                    <p>Jouer !</p>
                </div>
                <img class="etc" src="img/etc2.png" alt="">
            </div>
            <div class="flex">
                <div>
                    <a href="/les_regles">
                        <div>
                            <img src="img/copy.png" alt="">
                        </div>
                    </a>
                    <div class="object"></div>
                    <p>Règles</p>
                </div>
                <img class="etc" src="img/etc3.png" alt="">
            </div>

        </nav>
    </header>

    <main>

        @yield('content')

    </main>
    <script src="@yield('js')"></script>
</body>

</html>