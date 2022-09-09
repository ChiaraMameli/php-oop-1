<?php
// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 


// Creo la classe 'Movie'

class Movie 
{
    public $id;
    public $title;
    public $year;
    public $director_firstname;
    public $director_lastname;
    public $language;

    public function __construct($id, $title, $year, $director_firstname, $director_lastname, $language = en){
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->director_firstname = $director_firstname;
        $this->director_lastname = $director_lastname;
        $this->language = $language;
    }

    public function getFullName()
    {
        return "$this->director_firstname $this->director_lastname";
    }
}

$movie_1 = new Movie(1, 'E.T. the Extra-Terrestrial', '1982', 'Steven', 'Spielberg');
$movie_2 = new Movie(2, 'Harry Potter and the Philosopher\'s Stone', '2001', 'Chris', 'Columbus');
$movie_3 = new Movie(3, 'La mafia uccide solo d\'estate', '2013', 'Pierfrancesco', 'Diliberto', 'it');

var_dump($movie_1);
var_dump($movie_2);
var_dump($movie_3);

?>