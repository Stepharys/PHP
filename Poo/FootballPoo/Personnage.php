<?php

class Personnage
{
    private string $_nom;
    private string $_prenom;
    private  $_anniversaire;
    private Pays $_pays;
    private array $_carriere;

    public function __construct(string $nom, string $prenom, $anniversaire, Pays $pays)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_anniversaire =  new DateTime ($anniversaire);
        $this->_pays = $pays;
        $this->_carriere = [];
    }

    public function addCarriere($carriere)
    {
        $this->_carriere[] = $carriere;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }
 
    public function getAnniversaire()
    {
        return $this->_anniversaire;
    }

        public function getPays()
    {
        return $this->_pays;
    }

    public function Age(){
        $today= new DateTime();
        $anniversaire = ($this->_anniversaire);
        $diff = date_diff($anniversaire, $today);
        return $diff->format("%y ans");
    }

    public function __toString()
    {
        return " Nom: ". $this->getNom(). " //"." Prénom: ".$this->getPrenom(). " //". " Age: ". $this->Age(). " //". " Pays: ";
    } 

  
    public function afficherInfo()
   {
       foreach ($this->_carriere as $carriere)
       {
           echo $carriere."<br>";
       }
   }
}
?>