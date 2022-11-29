<h1>Exercice 1</h1>

<p>"Notre formation DL commence aujourd'hui"<br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).
</p>

<h2>Résultat</h2>

<?php

//Connaitre le nb de caractere dans la phrase
$phrase = "Notre formation DL commence aujourd'hui";

$longueur = strlen($phrase);

echo "La phrase « $phrase » contient $longueur caractères.";

?>