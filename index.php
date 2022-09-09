<?php

include_once __DIR__ . '/models/Movie.php';

$movie_1 = new Movie(1, 'E.T. the Extra-Terrestrial', '1982', 'Steven', 'Spielberg');
$movie_2 = new Movie(2, 'Harry Potter and the Philosopher\'s Stone', '2001', 'Chris', 'Columbus');
$movie_3 = new Movie(3, 'La mafia uccide solo d\'estate', '2013', 'Pierfrancesco', 'Diliberto', 'it');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>My Movies</title>
</head>
<body>
    <h1 class="text-center">My Movies</h1>

    <article>
        <h3>titolo</h3>
        <span>year</span>
        <address>regista</address>
    </article>

</body>
</html>