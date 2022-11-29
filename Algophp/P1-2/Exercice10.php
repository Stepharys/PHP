<h1>Exercice 10</h1>

<?php

$price = 152;
$payment = 200;
$change = $payment - $price;

if ($change < 0){
    echo "Transaction annuler; payement insuffisant";
} else {
    echo "Montant à payer : $price €<br>
        Montant versé : $payment €<br>
        Reste à payer : $change €<br>";
} if ($change == 0) {
} else {
    $ten = 0;
    $five = 0;
    $two = 0;
    $one = 0;
    echo "*****************************<br>
    Rendu de monaie :<br>";
    while ($change >= 10) {
        $ten++;
        $change= $change-10;
        if ($change < 10) {
            echo "$ten billet de 10€ - ";
        }
    } while ($change >= 5) {
        $five++;
        $change= $change-5;
        if ($change < 5) {
        echo "$five billet de 5€ - ";
        }
    } while ($change >= 2) {
        $two++;
        $change= $change-2;
        if ($change < 2) {
            echo "$two pièce de 2€ - ";
        }
    } 
    if ($change >= 1) {
        $one++;
        $change--;
        echo "$one pièce de 1€";
    }
}
?>