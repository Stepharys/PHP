<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});

$b1 = new personne("Michael","Keaton","man",'05/09/1951');
$b2 = new personne("Val","Kilmer","man",'31/12/1959');
$b3 = new personne("George","Clooney","man",'06/05/1961');

$c1 = new personne("Harrison","Ford","man",'13/06/1942');
$c2 = new personne("Mark","Hamill","man",'25/09/1951');

$action = new genreCiné("action");
$aventure = new genreCiné("aventure");
$Sf = new genreCiné("science-fiction");