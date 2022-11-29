<h1>Exercice 9</h1>

<?php

$age = 18;
// true = femme | false = homme
$femme = true;

if ($femme == true){
    if ($age >= 18 & $age <= 35){
        echo "Age : .$age. <br>
            Sexe: F<br>
            La personne est imposable.";
    } else {
        echo "Age : .$age. <br>
        Sexe: F<br>
        La personne n'est pas imposable.";
    } 
} else {
    if ( $age >= 20){
        echo "Age : .$age. <br>
            Sexe: H<br>
            La personne est imposable.";
    } else {
        echo "Age : .$age. <br>
        Sexe: H<br>
        La personne n'est pas imposable.";
    }
}
?>