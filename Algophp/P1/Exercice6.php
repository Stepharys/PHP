<h1>Exercice 6</h1>

<?php

$price = 9.99;
$quantity = 5;
$TVA = 0.2 ;
echo "Prix unitaire de l’article: $price €<br>
    Quantité: $quantity<br>
    Taux de TVA: $TVA<br>
    Le montant de la facture à régler est de :" .$price*$quantity*(1-$TVA)." €";

?>