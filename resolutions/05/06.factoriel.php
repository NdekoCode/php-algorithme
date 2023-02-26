<?php

/** Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.
 * NB : la factorielle de 8, notée 8 !, vaut : 1x2x3x4x5x6x7x8 */
$number = (int) readline("Entrer un nombre: \n");

$fact = 1;
if ($number > 1) {

    for ($i = 1; $i <= $number; $i++) {
        $fact *= $i;
    }
}
print "Le factoriel de $number est $fact \n";
