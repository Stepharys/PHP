<h1>Exercice5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. <br>
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php

$francs =100;
$converFR_EU = 0.15244902;

//------multiplié 2 variable
$resultat = $francs * $converFR_EU;    

//-----Arrondir a 2 décimales
$resultat = number_format($resultat, 2);

echo "Montant en franc : " .$francs;
echo "<br>100 francs = " .$resultat;

?>
