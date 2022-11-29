<h1>Exercice 15</h1>

<?php

class Personne{
    private $_name;
    private $_prenom;
    private $_birthday;
    
    public function __construct($name, $prenom, $birthday){
        $this->_name = $name;
        $this->_prenom = $prenom;
        $this->_birthday = $birthday;
    }
    public function getName(){
        return $this->_name;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getBirthday(){
        return $this->_birthday;
    }
};

function getGilbert($date) { 
   $anniv = date_create($date);
   $timetoday = date_create();
   $age = date_diff($anniv, $timetoday);
        return $age->format('%y');
} 
$p1= new Personne("DUPONT","Michel","1980-02-19");
$p2= new Personne("DUCHEMIN","Alice","1985-01-17");

echo $p1->getPrenom()." ".$p1->getName()." a ".getGilbert($p1->getBirthday())." ans<br>";
echo $p2->getPrenom()." ".$p2->getName()." a ".getGilbert($p2->getBirthday())." ans";
?>