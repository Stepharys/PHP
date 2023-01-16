<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});

//Personnage
// $P1 = new Personnage("cris","Rob","1978-05-12","Germany");
// $P2 = new Personnage("bryan","henzi","1995-09-24","Spain");
// $P3 = new Personnage("stephane","otb","1998-12-05","France");
// $P4 = new Personnage("joe","TFo","1988-03-09","England");
// $P5 = new Personnage("gord","Gop","1992-10-15","Germany");

//Club
// $c1 = new Club("Psg","France");
// $c2 = new Club("Lion");
// $c3 = new Club("Marseille");
// $c4 = new Club("Racing");
// $c5 = new Club("Dijon");
// $c6 = new Club("Psg");
// $c7 = new Club("Psg");
// $c8 = new Club("Psg");

// $Ca1 = new Carriere("cris");

// $Ca1->afficherInfo();
?>





