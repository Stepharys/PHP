<?php
class Human {

    private $_lastname;
    private $_firstname;
    private $_sexe;
    private $_birthday;


    public function __construct($lastname, $firstname, $sexe, $birthday){
      
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        $this->_sexe = $sexe;
        $this->_birthday = $birthday;
    }

   //get
   public function getLastName(){
    return $this->_lastname;
   }
   public function getFirstName(){
    return $this->_firstname;
   }
   public function getSexe(){
    return $this->_sexe;
   }
   public function getBirthday(){
    return $this->_birthday;
   }
}
