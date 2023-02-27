<?php

/**
 * Ecrivez un algorithme permettant, toujours sur le même principe, à l’utilisateur de saisir
 * un nombre déterminé de valeurs. Le programme, une fois la saisie terminée, renvoie la
 * plus grande valeur en précisant quelle position elle occupe dans le tableau. On prendra
 * soin d’effectuer la saisie dans un premier temps, et la recherche de la plus grande
 * valeur du tableau dans un second temps.
 */
$input = (int) readline("Entrer le nombre de saisie à faire : \n");
$array = [];
$positionBigger = 0;
for ($i = 0; $i < $input; $i++) {
    $value  = (int) readline("Entrer une valeur \n");
    $array[] = $value;
}
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $array[$positionBigger]) {
        $positionBigger = $i;
    }
}

print "L'element le plus grand c'est {$array[$positionBigger]} et il se trouve à la position $positionBigger\n";
print_r($array);
