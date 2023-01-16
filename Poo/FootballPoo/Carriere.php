<?php

class Carriere{
    
        protected $_name;
        protected $_players;
        protected $_nationality;
            
        public function __construct(string $name){
            $this->_name = $name;
            $this->_players = [];
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