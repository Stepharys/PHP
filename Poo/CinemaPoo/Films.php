<?php

class Films{
    private string $_title;
    private int $_date;
    private int $_time;
    private string $_réalisateur;
    private string $_synopis;

    public function __construct($title, $date){

        $this->_title = $title;
        $this->_date = $date;
        $this->_time = $time;
        $this->_réalisateur = $réalisateur;
        $this->_synopis = $synopis;
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
    public function getRéalisateur(){
        return $this->_réalistateur;
    }
    public function getSynopis(){
        return $this->_synopie;
    }
}