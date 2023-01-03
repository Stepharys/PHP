<?php

class Film{
    private string $_title;
    private string $_date;
    private int $_time;
    private Realisateur $_realisateur;
    private string $_synopsis;
    private array $_casting;
    private Genre $_genre;

    public function __construct($title, $date, $time, Genre $genre, Realisateur $realisateur, $synopsis){

        $this->_title = $title;
        $this->_date = $date;
        $this->_time = $time;
        $this->_genre = $genre;
        $this->_realisateur = $realisateur;
        $this->_synopsis = $synopsis;
        $this->_casting = [];
        $this->_realisateur->Tabfilm($this);
        $this->_genre->Tabfilm($this);
    }

    //get
    public function getTitle(){
        return $this->_title;
    }
    public function getDate(){
        return $this->_nom;
    }
    public function getTime(){
        return $this->_time;
    }
    public function getRealisateur(){
        return $this->_réalistateur;
    }
    public function getsynopsis(){
        return $this->_synopsis;
    }
    public function getGenre(){
        return $this->_genre;
    }
    public function getCasting(){
        return $this->_casting;
    }

//Affichage 
    public function getFilmInfo(){
        foreach ($this->_casting as $casting){
        echo "L'acteur".$casting->getActeur() ." a joué ". $casting->getRole()."<br>";
        }
    }

    public function getListCasting(){
        echo "Dans le film ".$this."  "." a été incarné par  :<br><br>";
        foreach ($this->_casting as $casting) {
           echo $casting->getCasting()."<br>";
           }
        } 
}
?>