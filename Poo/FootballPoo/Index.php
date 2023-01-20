<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});

//Pays
$p1 = new Pays("France");
$p2 = new Pays("Italie");
$p3 = new Pays("Suisse");

//



//Personnage
 $P1 = new Personnage("cris","Rob","1992-10-15",$p1);
 $P2 = new Personnage("bryan","henzi","1995-09-24",$p2);
 $P3 = new Personnage("stephane","otb","1998-12-05",$p2);
 $P4 = new Personnage("joe","TFo","1988-03-09",$p1);
 $P5 = new Personnage("gord","Gop","1992-10-15",$p3);


//Club
 $c1 = new Club("Psg",$p1);
 $c2 = new Club("Lion",$p1);
 $c3 = new Club("Marseille",$p1);
 $c4 = new Club("Racing",$p1);
 $c5 = new Club("Dijon",$p1);
 $c6 = new Club("Ajacio",$p1);



$Ca1 = new Carriere("cris");

// $Ca1->afficherInfo();

$p1->afficherEquipe();
?>





