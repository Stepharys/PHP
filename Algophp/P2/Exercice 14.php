<h1>Exercice 14</h1>

<?php

class Voiture{
    private $_marque; 
    private $_modele; 

class VoitureElec extends autonomie{

public function __construct($marque, $modele){
    
    $this->_marque = $marque;
    $this->_modele = $modele;
    }
} 
}
public function getMarque(){
    return $this->_marque;
}
public function getModele(){
    return $this->_modele;
}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);