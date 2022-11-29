<h1>Exercice 8</h1>

<?php

$nb = 8;


for ($i = 1; $i<=10; $i++) { 
    $result = $i * $nb;
    echo "$i x $nb = $result<br>";
}

echo "<br>";
$i = 1;
while ($i <= 10){
    $result = $i * $nb;
    echo "$i x $nb = $result<br>";
    $i++;
}
?>