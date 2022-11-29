<h1>Exercice 14</h1>

<?php

echo "si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985 :<br>";

$age = 21/05/2018;
$date = 17/01/1985;

function age($date) { 
    $age = date('21') - $date; 
   if (date('md') < date('md', strtotime($date))); { 
       return $age - 1; 
   } 
   return $age; 
} 

echo age('1980-01-01');

?>