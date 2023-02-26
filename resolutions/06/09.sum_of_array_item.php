<?php

/**
 * Ecrivez un algorithme calculant la somme des valeurs d’un tableau (on suppose que le tableau a été préalablement saisi).
 */
$arr = [11, 14, 12, 11, 2, 8, 11, 10];
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}
print "La somme des element du table est : $sum \n";
