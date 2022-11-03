<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$phrase = strtolower($phrase);
$reversed = strrev($phrase);

$phraseArray = array();
$pharseArray = str_split($phrase);

if ($phrase == $reversed)  {
    echo "$pharse  est palindrome";
} else {
    echo "$phrase n'est pas un palindrome";
}

?>