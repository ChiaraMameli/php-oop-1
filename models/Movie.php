<?php

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
