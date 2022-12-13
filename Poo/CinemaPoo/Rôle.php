<?php

class Role{
    private string $_rName;
    private Acteur $_acteur;
    private Film $_film;


public function __construct($rName, $acteur, $film){
    
    $this->_rName = $rName;
    $this->_acteur = $acteur;
    $this->_film = $film;
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

public function 
}

?>