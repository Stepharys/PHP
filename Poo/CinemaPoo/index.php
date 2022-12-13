<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});

//$aBa1 = new acteur("Michael","Keaton","man",'05/09/1951');
//$aBa2 = new acteur("Val","Kilmer","man",'31/12/1959');
//$aBa3 = new acteur("George","Clooney","man",'06/05/1961');

//$aSw1 = new acteur("Harrison","Ford","man",'13/06/1942');
//$aSw2 = new acteur("Mark","Hamill","man",'25/09/1951');

$rBa = new Realisateur("Tim","Burton","man",'25/08/1958');
$action = new Genre("action");
$fi1 = new Film("Batman","05/04/2001",120,$action,$rBa,"lol");

//$rSw = new Realisateur("Bob","Rob","man",'15/12/1965');

//$ro1 = new Role("Batman");
//$ro2 = new Role("Han Solo");
//$ro3 = new Role("Luke skywalker");

//$aventure = new Genre("aventure");
//$Sf = new Genre("science-fiction");

//$aBa1->getCasting();

//echo $rBa->getCasting();
//echo $action;






?>