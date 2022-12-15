<?php
class Realisateur extends Human
{
    private $_films;
    private $_casting;

    public function __construct($lastname, $firstname, $sexe, $birthday)
    {
        parent::__construct($lastname, $firstname, $sexe, $birthday);
        $this->_castings=[];
        $this->_films=[];
    }

    //get
    function getFilmographie(){
        foreach ($this->_castings as $films){
        return $films->getFilms()->getTitle()."<br>";
        }
    }
    public function getFilms(){
        return $this->_films;
    }

    public function addCasting($newcasting){
        $this->_castings [] = $newcasting;
    }
    public function TabFilm($film){
        $this->_films [] = $film;
    }

    public function getCasting(){
        foreach ($this->_castings as $casting){
        echo "L'acteur".$casting->getActeur() ." a joué ". $casting->getRole()."<br>";
        }
}
}
?>