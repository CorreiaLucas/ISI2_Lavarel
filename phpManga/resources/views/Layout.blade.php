<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset = "utf-8">
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel ="stylesheet">
    <link rel="stylesheet" href ="css/mangas.css">
    <title>
        @yield('titrePage')
    </title>
</head>

<body>

<header>@yield('titreItem')</header>
@yield('contenu')


<footer class ="footer">
    MangaWeb - copyright 3AInfo - 2021
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js">
</body>
</html>
