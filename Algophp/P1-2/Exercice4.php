<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

//Affiché la phrase 
$phrase = "Engage le jeu que je le gagne";

//Mettre la pharse en minuscule
$phrase = strtolower($phrase);

//Remplace les espaces par rien
$replace = str_replace(" ","", $phrase);

//inversé les caracteres ex: ABCD >DCBA
$reversed = strrev($replace);


if ($replace == $reversed)  {
    echo "$phrase  est palindrome";
} else {
    echo "$phrase n'est pas un palindrome";
}

?>