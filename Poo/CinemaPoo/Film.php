<?php

class Film{
    private string $_title;
    private string $_date;
    private int $_time;
    private Realisateur $_realisateur;
    private string $_synopsis;
    private $_casting;
    private Genre $_genre;

    public function __construct($title, $date, $time, Genre $genre, Realisateur $realisateur, $synopsis){

        $this->_title = $title;
        $this->_date = $date;
        $this->_time = $time;
        $this->_genre = $genre;
        $this->_realisateur = $realisateur;
        $this->_synopsis = $synopsis;
        $this->_casting = [];
        $this->_realisateur->addfilm($this);
        $this->_genre->addfilm($this);
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

}