<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});

//Personnage
$P1 = new Personnage("cris","Rob","23 ans","Germany");
$P2 = new Personnage("bryan","henzi","19 ans","Spain");
$P3 = new Personnage("stephane","otb","25 ans","France");
$P4 = new Personnage("joe","TFo","22 ans","England");
$P5 = new Personnage("gord","Gop","28 ans","Germany");

//Club
$c1 = new Club("Psg");
$c2 = new Club("Psg");
$c3 = new Club("Psg");
$c4 = new Club("Psg");
$c5 = new Club("Psg");
$c6 = new Club("Psg");
$c7 = new Club("Psg");
$c8 = new Club("Psg");
