<?php

include_once __DIR__ . '/models/Movie.php';

$movie_1 = new Movie(1, 'E.T. the Extra-Terrestrial', '1982', 'Steven', 'Spielberg');
$movie_2 = new Movie(2, 'Harry Potter and the Philosopher\'s Stone', '2001', 'Chris', 'Columbus');
$movie_3 = new Movie(3, 'La mafia uccide solo d\'estate', '2013', 'Pierfrancesco', 'Diliberto', 'it');

var_dump($movie_1);
var_dump($movie_2);
var_dump($movie_3);

?>