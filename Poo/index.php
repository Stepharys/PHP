<?php

spl_autoload_register(function($classs_name){
    require_once $classs_name . '.php';
});

$Aut = new personne("Stephen","King");
$Li1 = new livre1("Ca",1986,1138,20);
$Li2 = new livre2("Simetierre",1983,374,15);
$Li3 = new livre3("Le Fléau",1978,823,14);
$Li4 = new livre4("Shining",1977,447,16);

echo $Li1->__toString();