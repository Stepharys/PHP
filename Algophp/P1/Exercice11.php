<h1>Exercice 11</h1>

<?php

echo "Il y a 4 marque de voitures dans le tableau : <br><br>";

$mvoiture = ["Peugeot","Renault","BMW","Mercedes"];

count($mvoiture);

for ($i = 1; $i <= count($mvoiture); $i++) {
    echo $mvoiture[$i-1]."<br>";
}

?>