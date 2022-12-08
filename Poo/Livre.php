<?php

//création de la class
class Livre{
    private string $title;
    private int $parution;
    private int $pages;
    private int $prix;
    private $auteur;
     
public function __construct($title, $parution, $pages, $prix, Auteur $auteur){

    $this->_title = $title;
    $this->_parution = $parution;
    $this->_pages = $pages;
    $this->_prix = $prix;
    $this->_auteur = $auteur;
    $this->_auteur->tabBook($this);
}

//get
public function getTitle(){
    return $this->_title;
}
public function getParution(){
    return $this->_parution;
}
public function getPages(){
    return $this->_pages;
}
public function getPrix(){
    return $this->_prix;
}

//set
public function setTitle($title){
    $this->_title = $title;
}
public function setParution($parution){
    $this->_parution = $parution;
}
public function setPages($pages){
    $this->_pages = $pages;
}
public function setPrix($prix){
    $this->_prix = $prix;
}


//affichage d'information
public function getInfoLivre(){
    echo $this->getTitle()." (".$this->getParution().") : ".$this->getPages()." pages / ".$this->getPrix()."€";
}

}

?>