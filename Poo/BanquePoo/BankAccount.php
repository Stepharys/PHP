<?php

class BankAccount{
    private string $_libellé;
    private int $_soldeInitial;
    private int $_deviseMonetaire;
    private string $titulaireUnique;

public function __construct($libellé, $soldeInitial, $deviseMonetaire, $titulaireUnique){

    $this->_libellé = $libellé;
    $this->_soldeInitial = $soldeInitial;
    $this->_deviseMonetaire = $deviseMonetaire;
    $this->_titulaireUnique = $titulaireUnique;
    
}
//get
public function getLibellé(){
    return $this->_libellé;
}
public function getSoldeInitial(){
    return $this->_soldeInitial;
}
public function getdeviseMonetaire(){
    return $this->_deviseMonetaire;
}
public function getTitulaireUnique(){
    return $this->_titulaireUnique;
}

}

?>