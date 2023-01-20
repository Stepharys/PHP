<?php

class Pays 
{
    private string $_pays;
    private array $_equipes;
    private array $_carrieres;

//Construct
public function __construct( $pays) 
{
    $this->_pays = $pays;
    $this->_equipes = [];
    $this->_carrieres = [];
}

//GET
public function getPays() 
{
    return $this->_pays;
}

public function getEquipe() 
{
    return $this->_equipes;
}

//Add
public function addEquipe($equipe) 
{
    $this->_equipes[] = $equipe;
    
}

//ToString
public function __toString() 
{
    return $this->getPays();
}

//Foreach
public function addCarriere($carrieres)
{
    foreach($this->_carrieres as $carriere)
    {
        return $carriere."<br>";
    }
}
//Affiichage
public function afficherEquipe()
{
    echo " La liste des équipes du pays ". $this." sont :<br>";
    foreach ($this->_equipes as $equipe) 
    {
        echo $equipe."<br>";
    }
}
}
?>