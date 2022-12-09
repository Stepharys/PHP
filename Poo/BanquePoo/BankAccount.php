<?php

class BankAccount{
    private string $_libellé;
    private int $_soldeInitial;
    private string $_deviseMonetaire;
    private string $_titulaireUnique;
    

public function __construct($libellé, $soldeInitial, $deviseMonetaire, Titulaire $titulaireUnique){

    $this->_libellé = $libellé;
    $this->_soldeInitial = $soldeInitial;
    $this->_deviseMonetaire = $deviseMonetaire;
    $this->_titulaireUnique = $titulaireUnique;
    $this->_titulaireUnique->tabTitulaire($this);
}

//get
public function getLibellé(){
    return $this->_libellé;
}
public function getSoldeInitial(){
    return $this->_soldeInitial;
}
public function getDeviseMonetaire(){
    return $this->_deviseMonetaire;
}
public function getTitulaireUnique(){
    return $this->_titulaireUnique;
}
public function afficherComptes(){
    echo "Compte Bancaires ".$this."<br><br>";
    foreach ($this->_Comptes as $compte) {
       echo $compte."<br>";
    }
}
public function TabComptes($compte){
    $this->_comptes[]= $compte;
}

//set

public function setLibellé(){
    $this->_libellé = $libellé;
}
public function setSoldeInitial(){
    $this->_soldeInitial = $soldeInitial;
}
public function setDeviseMonetaire(){
    $this->_deviseMonetaire = $deviseMonetaire;
}
public function setTitulaireUnique(){
    $this->_titulaireUnique = $titulaireUnique;
}

//toString
public function __toString(){
    return $this->getLibellé()." ".$this->getSoldeInitial()." ".$this->getDeviseMonetaire()." ".$this->getTitulaireUnique();
}
}

?>