<?php

class Role{
     private string $_rName;
     private $_casting;


    public function __construct($rName){
        
        $this->_rName = $rName;
        $this->_casting = [];
    }
    //get
    public function getRName(){
        return $this->_rName;
    }
    public function getActeur(){
        return $this->_acteur;
    }
    public function getFilm(){
        return $this->_film;
    }

    
    public function getCastingFromFilm(){
        echo "Les acteurs ayant incarné le rôle de".$this->getRName()." : <br>";
            foreach ($this->_casting as $casting){
            echo $casting->getRole()."<br>";
        }    
    }
}

?>