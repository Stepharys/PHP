<h1>Exercice 15</h1>

<?php

$email_a = 'elan@elan-formation.fr';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_a' est considérée comme valide.";
} else {
    echo "L'adresse email '$email_a' est considérée comme invalide.";
}
?>