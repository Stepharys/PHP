<h1>Exercice 7</h1>

<?php

$age = 24;

if ($age >= 12) {
    $category = "Cadet";
} else if ($age >= 10) {
    $category = "Minime";
} else if ($age >= 8) {
    $category = "Pupille";
} else if ($age >= 6) {
    $category = "Poussin";
} else {
    $category = false;
}

//if (!$category) {
if ($category == false) {
    echo "L’enfant qui a $age ans n'appartient à aucune catégorie";
} else {
    echo "L’enfant qui a $age ans appartient à la catégorie $category";
}
?>