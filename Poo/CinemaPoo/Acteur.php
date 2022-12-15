<?php
class Acteur extends Human{

    private $_casting;

    public function __construct($lastname, $firstname, $sexe, $birthday)
    {
        parent::__construct($lastname, $firstname, $sexe, $birthday);
        $this->_casting=[];
    }

    //get
    public function getFilmographie(){
        foreach ($this->_casting as $film){
        return $film->getMovie()->getTitle()."<br>";
        }
    }

    public function addcasting($newcasting){
        $this->_casting [] = $newcasting;
    }

    public function getCasting(){
        foreach ($this->_casting as $casting){
        echo "L'acteur".$casting->getActeur() ." a joué ". $casting->getRole()."<br>";
        }
}
}
?>

