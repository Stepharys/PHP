<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});
//Acteur
$A1 = new Acteur("Michael","Keaton","man",'05/09/1951');
$A2 = new Acteur("Val","Kilmer","man",'31/12/1959');
$A3 = new Acteur("George","Clooney","man",'06/05/1961');

$a1 = new Acteur("Harrison","Ford","man",'13/06/1942');
$a2 = new Acteur("Mark","Hamill","man",'25/09/1951');
$a3 = new Acteur("Luc","Sky","man",'05/12/1971');

//genre
$action = new Genre("action");
$aventure = new Genre("aventure");
//$Sf = new Genre("science-fiction");

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

//Casting
$C1 = new Casting($ro1, $A1, $Fi1);
$C2 = new Casting($ro2, $A2, $Fi2);
$C3 = new Casting($ro3, $A3, $Fi3);
$C4 = new Casting($ro4, $a1, $fi1);
$C5 = new Casting($ro5, $a2, $fi2);
$C6 = new Casting($ro6, $a3, $fi3);



//$aBa1->getCasting();

//echo $rBa->getCasting();
//var_dump($action);

$action->getFilmsByGenre();
$aventure->getFilmsByGenre();
$C1->getCastingFromFilm();

//$aventure->get
//$Sf->get





?>