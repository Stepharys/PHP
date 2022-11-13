<h1>Exercice5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. <br>
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h1>Exercice 5</h1>

<?php

$nbprompt = 7;
$Fconversion = 6.55957;
$result = $nbprompt*$Fconversion ;
echo "Montant en francs : " .$nbprompt. "<br>&#8614; " .$nbprompt = number_format($result,2). "€";

?>