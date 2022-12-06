<h1>Exercice 14</h1>

<?php

class Voiture{
    private $_marque; 
    private $_modele; 

    public function __construct($marque, $modele)

        $this->_marque = $marque;
        $this->modele = $marque;

    public function getMarque(){
        return $this->_marque;
    }
    public function  getModele(){
        return $this->modele;
    }

    echo echo "Le véhicule ".$this->getMarque()." ".$this->getModele().
}

class VoitureElec extends Autonomie{

public function __construct($marque, $modele){
    
    parent::_construct($marque);
    $this->_modele = $modele;
    }
} 
echo Autonomie::combien();

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfo()."<br>";
echo $ve1->getInfo()."<br>";