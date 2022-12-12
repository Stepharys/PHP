<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});

$b1 = new acteur("Michael","Keaton","man",'05/09/1951');
$b2 = new acteur("Val","Kilmer","man",'31/12/1959');
$b3 = new acteur("George","Clooney","man",'06/05/1961');

$c1 = new acteur("Harrison","Ford","man",'13/06/1942');
$c2 = new acteur("Mark","Hamill","man",'25/09/1951');

$r1 = new role("Batman")
$r2 = new role("Han Solo")
$r3 = new role("Luke skywalker")

$action = new genreCiné("action");
$aventure = new genreCiné("aventure");
$Sf = new genreCiné("science-fiction");