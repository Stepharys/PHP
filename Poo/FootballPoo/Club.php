<?php

class Club
{
    private string $_equipe;
    private Pays $_pays;
    private array $_carrieres;

//Construct
public function __construct(string $equipe, Pays $pays)
{
    $this->_equipe = $equipe;
    $this->_pays = $pays;
    
    $this->_pays->addEquipe($this);
    $this->_carrieres = [];
}



//GET
public function getEquipe() 
{
    return $this->_equipe;
}

public function getPays() 
{
    return $this->_pays;
}

 public function getCarriere() 
 {
     return $this->_carrieres;
 }

 public function addCarriere($carriere) 
 {
     $this->_carrieres[] = $carriere;
     
 } 
//ToString 
public function __toString() 
{
    return $this->getEquipe();
}
//Affichage
public function afficherInfoEquipe()
{
    echo  $this." <br>";
    foreach ($this->_carrieres as $carriere) 
    {
        echo $carriere."<br>";
    }
}
}
?>