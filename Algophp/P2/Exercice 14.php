<h1>Exercice 14</h1>

<?php

class Voiture{
    private $_marque; 
    private $_modele; 

    public function __construct($marque, $modele){

        $this->_marque = $marque;
        $this->_modele = $modele;
    }
    
    //get
    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function getInfo(){
        echo "Marque et modele du vehicule : ".$this->getMarque()." ".$this->getModele();
    }
}

    
//extends
class VoitureElec extends Voiture{
    
    private $autonomie;

public function __construct($marque, $modele, $autonomie){
    
    parent::__construct($marque, $modele);
    $this->_autonomie = $autonomie;
}
public function getAutonomie(){
    return $this->_autonomie;
}
public function getInfoElec(){
echo "Marque, modele du vehicule et son autonomie : ".$this->getMarque()." ".$this->getModele()." ".$this->getAutonomie();
} 
}
//information/affichage 

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfo()."<br>";
echo $ve1->getInfoElec()."<br>";

?>