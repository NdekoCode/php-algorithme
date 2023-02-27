<?php

/**
 * Ecrivez un algorithme qui permette la saisie d’un nombre quelconque de valeurs, sur le principe de l’ex 6.8. Toutes les valeurs doivent être ensuite augmentées de 1, et le nouveau tableau sera affiché à l’écran.
 */
$input = (int) readline("Entrer le nombre de saisie à faire");
$array = [];
$newArray = [];
for ($i = 0; $i < $input; $i++) {
    $value  = (int) readline("Entrer une valeur \n");
    $array[] = $value;
    $newArray[] = ++$value;
}
print_r($newArray);
