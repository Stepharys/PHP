<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});
//Acteur
$A1 = new acteur("Michael","Keaton","man",'05/09/1951');
$A2 = new acteur("Val","Kilmer","man",'31/12/1959');
$A3 = new acteur("George","Clooney","man",'06/05/1961');

$a1 = new acteur("Harrison","Ford","man",'13/06/1942');
$a2 = new acteur("Mark","Hamill","man",'25/09/1951');

//genre
$action = new Genre("action");
$aventure = new Genre("aventure");
$Sf = new Genre("science-fiction");

//realisateur
$R1 = new Realisateur("Tim","Burton","man",'25/08/1958');
$R2 = new Realisateur("Bob","Rob","man",'15/12/1965');

//film
$Fi1 = new Film("Batman","05/04/2001",120,$action,$R1,"lol");
$Fi2 = new Film("Superboule","07/14/2010",180,$action,$R1,"loppps");
$Fi3 = new Film("Golri","04/12/1936",185,$action,$R1,"loppps");

$fi1 = new Film("Giga-man","09/05/1978",210,$aventure,$R2,"loppps");
$fi2 = new Film("Onizonka","25/09/1948",158,$aventure,$R2,"loppps");
$fi3 = new Film("Gregori","16/04/1985",166,$aventure,$R2,"loppps");

//role
$ro1 = new Role("Batman");
$ro2 = new Role("Han Solo");
$ro3 = new Role("Super Big");
$ro4 = new Role("Roberto");
$ro5 = new Role("Lucia");
$ro6 = new Role("Homme blanc");


//$aBa1->getCasting();

//echo $rBa->getCasting();
//var_dump($action);

$action->getFilmsByGenre();
//$aventure->get
//$Sf->get





?>