<?php

class Genre{
    private string $_name;
    private array $_films;

    public function __construct($name){
        $this->_name = $name;
        $this->_films=[];
    }

    //get
    
    public function getName(){
        return $this->_name;
    }
    public function getFilms(){
        return $this->_films;
    }
    public function getFilmsByGenre(){
        echo "La categorie des films ".$this." comporte :<br><br>";
        foreach ($this->_films as $film) {
           echo $film->getTitle()."<br>";
}
}
    public function Tabfilm($film){
        $this->_films[]= $film;
    }
    
    //affichage d'information
    public function __toString(){
        return $this->getName();
    }
}
?>