<?php

class Genre{
    private string $_name;
    private array $_films;

    public function __construct($name){
        $this->_name = $name;
        $this->_films=[];
    }

    //get
    function getFilmsByGenre(){
        
    }

    public function getName(){
        return $this->_name;
    }
    public function getFilms(){
        return $this->_films;
    }
    public function addfilm($newfilm){
        $this->_films [] = $newfilm;
    }

    //affichage d'information
    public function __toString(){
        return $this->getFilms().$this->getTitle()." est un film d'".$this->getName();
    }
}