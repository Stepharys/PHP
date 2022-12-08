<?php

class Auteur{
private string $_prenom;
private string $_nom;
private $_livres;

//construir la fonction auteur
public function __construct($prenom, $nom){

    $this->_prenom = $prenom;
    $this->_nom = $nom;
    $this->_livres = [];
}


//get
public function getPrenom(){
    return $this->_prenom;
}
public function getNom(){
    return $this->_nom;
}
public function getLivre(){
    return $this->_livres;
}
public function afficherBibliographie(){
    echo "Livres de ".$this."<br>";
    foreach ($_livres as $livre= => $auteur) {
        # code...
    }
}
public function TabBook($livre){
    $this->_livres[]= $livre;
}

//set

public function setPrenom($prenom){
    $this->_prenom = $prenom;
}
public function setNom($nom){
    $this->_nom = $nom;
}

//toString
public function __toString(){
    return $this->getPrenom()." ".$this->getNom();
}
}

?>
