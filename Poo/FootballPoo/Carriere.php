<?php

class Carriere{
    
        protected Personnage $_players;
        protected Club $_club;
        protected $_recrutement;

        //construct
        public function __construct(Personnage $player, Club $club, $recrutement){
            $this->_player = $player;
            $this->_club = $club;
            $this->_recrutement = [];
        }
                
        //GET
        public function getName(){
            return $this->_name;
        }
        public function getNationality(){
            return $this->_nationality;
        }
             
        //SET
        public function setName($name){
            $this->_name = $name;
        }
         public function setNationality($nationality){
             $this->_nationality = $nationality;
         } 
    
        public function addPlayer($player){
            array_push($this->_players,$player);
        }
    }
    ?>