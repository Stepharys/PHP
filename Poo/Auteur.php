<?php

class Auteur{
private $_prenom;
private $_nom;

//construir la fonction auteur
public function __construct($prenom, $nom){

    $this->_prenom = $prenom;
    $this->_nom = $nom;
}


//get
public function getPrenom(){
    return $this->_prenom;
}
public function getNom(){
    return $this->_nom;
}

Public function getInfoAuteur(){
    echo "Livres de ".$this->getInfoAuteur();
}
}

$Aut = new personne("Stephen","King");

?>
