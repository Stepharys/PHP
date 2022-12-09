<?php

//création de la class
class Titulaire{
    private string $_nom;
    private string $_prenom;
    private int $_birthday;
    private string $_city;
    private $_bankAccount;
     
public function __construct($nom, $prenom, $birthday, $city){

    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_birthday = $birthday;
    $this->_city = $city;
    $this->_bankAcccount = [];
}
//get
public function getNom(){
    return $this->_nom;
}
public function getPrenom(){
    return $this->_prenom;
}
public function getBirthday(){
    return $this->_birthday;
}
public function getCity(){
    return $this->_city;
}
//tab
public function TabTitulaire($bankAcccount){
    $this->_bankAccount[]= $bankAcccount;
}
//set
public function setNom($nom){
    $this->_nom = $nom;
}
public function setPrenom($prenom){
    $this->_prenom = $prenom;
}
public function setBirthday($birthday){
    $this->_birthday = $birthday;
}
public function setCity($city){
    $this->_city = $city;
}


//affichage d'information
public function __toString(){
    return $this->getNom()." (".$this->getPrenom().") : ".$this->getBirthday()." birthday / ".$this->getCity()."€";
}
}

?>