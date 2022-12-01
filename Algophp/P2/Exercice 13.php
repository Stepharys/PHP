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
        $this->_vitesseActuelle = 0;       //Initialisation de la vitesse actuelle 
        $this->_status = false;            //Initialisation du status actuelle 
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
    public function getVitesseActuelle(){
        return $this->_vitesseActuelle;
    }
    public function getStatus(){
        return $this->_status;
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
    public function setVitesseActuelle($vitesseActuelle){
        $this->_vitesseActuelle=$vitesseActuelle;
    }
    public function setStatus($status){
        $this->_status=$status;
    }

    //*Mes fonction
    public function Demarrer(){
        if($this->getStatus()  == false){ //condition****
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." démarre<br>";
        }else{ // si condition non respecté
            $this->setStatus(true);
            echo "Le véhicule est deja demarrer<br>";
        }
    }

    public function Stopper(){
        if($this->getStatus()  == false){
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." est stopper<br>";
        }else{
            $this->setStatus(true);
            echo "Le véhicule est deja demarrer<br>";
        }
    }

    public function accelerer($vitesse){
        if($this->getStatus() == false){
            $this->setVitesseActuelle($this->getVitesseActuelle()+$vitesse);
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." accélère de $vitesse km / h<br>";
        }else{
            $this->setStatus(true);
            echo "Veillez demarrer le vehicule<br>";
        }
    }
  
    public function PoDemarrer(){
        if($this->getStatus() == false){
            echo "Pour accélerer, il faut demarrer le vehicule ".$this->getMarque()." ".$this->getModele()." !<br>";
        }else{
            $this->setStatus(true);
            echo "Veillez demarrer le vehicule<br>";
        }
    }
 
   
    public function ralentir($vitesse){
        if($this->getStatus() == false){
            echo "Veillez demarrer le vehicule<br>";
        }else{
            $this->setStatus(true);
            $this->setVitesseActuelle($this->getVitesseActuelle()-$vitesse);
            echo "La vitesse du véhicule ".$this->getMarque()." ".$this->getModele()." est de : $vitesse km / h<br>";
        }
    }



   
};

//Crée les information de la voiture

$v1 = New Voiture("Peugeot","408","5");
$v2 = New voiture("Citroen","C4","3");

//Affichage

echo "<br><br>Infos véhicule 1<br>**********<br>Nom et modele du vehicule :".$v1->getMarque()." ".$v1->getModele()."<br>Nombre de portes : ".$v1->getnbPortes()."<br>Le véhicule ".$v1->getMarque()." est demarrer<br>Sa vitesse actuelle est de : ".$v1->getVitesseActuelle()."km / h"; 
$v1->Demarrer();
$v1->accelerer(50);
//echo $v1->getVitesseActuelle() . "<br>";
$v2->Demarrer();
$v2->stopper();
$v1->accelerer(20);
$v2->PoDemarrer();

echo "<br><br>Infos véhicule 2<br>**********<br>Nom et modele du vehicule :".$v2->getMarque()." ".$v2->getModele()."<br>Nombre de portes : ".$v2->getnbPortes()."<br>Le véhicule ".$v2->getMarque()." est demarrer<br>Sa vitesse actuelle est de : ".$v2->getVitesseActuelle()."km / h"; 
?>