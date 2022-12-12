<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});

$ba1 = new personnage("Michael","Keaton","man",'05/09/1951');
$ba2 = new personnage("Val","Kilmer","man",'31/12/1959');
$ba3 = new personnage("George","Clooney","man",'06/05/1961');

$sw1 = new personnage("Harrison","Ford","man",'13/06/1942');
$sw2 = new personnage("Mark","Hamill","man",'25/09/1951');

$ro1 = new Role("Batman");
$ro2 = new Role("Han Solo");
$ro3 = new Role("Luke skywalker");

$action = new genreCiné("action");
$aventure = new genreCiné("aventure");
$Sf = new genreCiné("science-fiction");

?>