<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});

$Aut = new Auteur("Stephen","King");
$Li1 = new Livre("Ca",1986,1138,20,$Aut);
$Li2 = new Livre("Simetierre",1983,374,15,$Aut);
$Li3 = new Livre("Le Fléau",1978,823,14,$Aut);
$Li4 = new Livre("Shining",1977,447,16,$Aut);

$Aut->afficherBibliographie();
var_dump($Li1);

?>