<?php

//création de la class
class Livre{
    private string $title;
    private int $years;
    private int $parution;
    private int $prix;
     
public function __construct($title, $years, $parution, $prix){

    $this->_title = $title;
    $this->_years = $years;
    $this->_parution = $parution;
    $this->_prix = $prix;
}

//get
public function getTitle(){
    return $this->_title;
}
public function getYears(){
    return $this->_years;
}
public function getParution(){
    return $this->_parution;
}
public function getPrix(){
    return $this->_prix;
}

//set
public function setTitle($title){
    $this->_title = $title;
}
public function setYears($years){
    $this->_years = $years;
}
public function setParution($parution){
    $this->_parution = $parution;
}
public function setPrix($prix){
    $this->_prix = $prix;
}


//affichage d'information
public function getInfoLivre(){
    echo $this->getTitle()." (".$this->getYears().") : ".$this->getParution()." pages / ".$this->getPrix()."€";
}
}

?>