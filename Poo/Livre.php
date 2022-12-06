<?php

class Livre{
    private string $title;
    private int $years;
    private int $parution;
    private int $prix;
     
public function __construct($title, $years, $parution, $prix){

    $this->_title = $title;
    $this->_years = $years;
    $this->_parution = $parution;
    $this->_prix = $prix;
}

public function getTitle(){
    return $this->_title;
}
public function getYears(){
    return $this->_years;
}
public function getParution(){
    return $this->_parution;
}
public function getPrix(){
    return $this->_prix;
}

public function getInfoLivre(){
    echo $this->getTitle()." ".$this->getYears()." : ".$this->getParution()." pages / ".$this->getPrix();
}
}

$Li1 = new livre1("Ca",1986,1138,20);
$Li2 = new livre2("Simetierre",1983,374,15);
$Li3 = new livre3("Le Fléau",1978,823,14);
$Li4 = new livre4("Shining",1977,447,16);

?>