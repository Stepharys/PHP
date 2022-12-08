<?php

spl_autoload_register(function($class_name){
    require_once $class_name . '.php';
});

$Tit = new Titulaire("onadou","doudou",1998,"strasbourg-en-vol",2);
$Com = new BankAccount();





?>