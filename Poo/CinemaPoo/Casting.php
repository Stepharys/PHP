<?php

class Casting{

    private Role $_role;
    private Acteur $_acteur;
    private Film $_films;

    public function __cosntruct(Role $role, Acteur $acteur, Film $films){
        $this->_role = $role;
        $this->_acteur = $acteur;
        $this->_films = $films;
        $this->_role->Tabfilm($this);
        $this->_acteur->Tabfilm($this);
        $this->_films->Tabfilm($this);
    }

//get
public function getRole(){
    return $this->_role;
}
public function getActeur(){
    return $this->_acteur;
}
public function getFilms(){
    return $this->_films;
}
public function getListCasting(){
    echo "La categorie des films ".$this." comporte :<br><br>";
    foreach ($this->_films as $film) {
       echo $film->getTitle()."<br>";
}
}
}
?>