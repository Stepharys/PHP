<?php

class Auteur{
private $_prenom;
private $_nom;
private $_livre;

//construir la fonction auteur
public function __construct(string $prenom, string $nom){

    $this->_prenom = $prenom;
    $this->_nom = $nom;
    $this->_livre = [];
}


//get
public function getPrenom(){
    return $this->_prenom;
}
public function getNom(){
    return $this->_nom;
}
public function getLivre(){
    return $this->_livre;
}

//set

public function setPrenom($prenom){
    $this->_prenom = $prenom;
}
public function setNom($nom){
    $this->_nom = $nom;
}
}

?>
