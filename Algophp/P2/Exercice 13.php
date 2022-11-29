<h1>Exercice13</h1>

<?php

//*Crée la catégorie voiture
class Voiture{
    private $_marque; //La marque de la voiture 
    private $_modele; // Le modèle de la voiture
    private $_nbPortes; // Le nombre de portes que possède la voiture
    private $_vitesseActuelle; // La vitesse acctuelle de la voiture
    private $_status; // Le status de la voiture marche/arret 
     

    public function __construct($marque, $modele, $nbPortes){
        //echo 'Voici le constructeur !';  //Message de test
        $this->_marque = $marque;          //Initialisation de la marque
        $this->_modele = $modele;          //Initialisation du modele
        $this->_nbPortes = $nbPortes;      //Initialisation du nombre de portes
    }

    //*GET accesseurs(Recupéperer)
    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function getNbPortes(){
        return $this->_nbPortes;
    }

    //*SET mutateurs(Modifié)
    public function setMarque($marque){
        $this->_marque=$marque;
    }
    public function setModele($modele){   
        $this->_modele=$modele;
    }
    public function setNbPortes($nbPortes){
        $this->_nbPortes=$nbPortes;
    }

    public function setStatus($status){
        $this->_status=$status;
    }
    //*Mes fonction
    public function Demarrer(){
        if($this->_status == "demarrer"){
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." démarre<br>";
        }else{
            echo "stopper";
        }
    }
};
$v1 = New Voiture("Peugeot","408","5");
$v2 = New voiture("Citroen","C4","3");
    

$v1->setStatus("demarrer");

?>