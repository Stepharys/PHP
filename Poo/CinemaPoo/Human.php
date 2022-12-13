<?php
class Human 
{
    private $_castings;
    private $_lastname;
    private $_firstname;
    private $_sexe;
    private $_birthday;

    public function __construct($lastname, $firstname, $sexe, $birthday){
        
        parent::__construct($lastname, $firstname, $sexe, $birthday);
        $this->_castings=[];
    }

    //get
    function getFilmographie(){
        foreach ($this->_castings as $film){
        return $film->getMovie()->getTitle()."<br>";
        }
    }

    public function addcasting($newcasting){
        $this->_castings [] = $newcasting;
    }

    public function getCasting(){
        foreach ($this->_castings as $casting){
        echo "L'acteur".$casting->getActeur() ." a joué ". $casting->getRole()."<br>";
        }
}
}