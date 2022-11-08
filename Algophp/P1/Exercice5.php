<h1>Exercice5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. <br>
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php

echo "Montant en franc :";
echo "<br>100 francs =";


$converFR_EU = 0.15244902;

$francs =100;

$resultat = $francs * $converFR_EU;    

echo $resultat




?>