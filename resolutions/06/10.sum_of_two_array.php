<?php

/**
 * Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même
 * longueur préalablement saisis. Le nouveau tableau sera la somme des éléments des deux
 * tableaux de départ.
 * Tableau 1 :4|8|7|9|1|5|4|6
 * Tableau 2 :7|6|5|2|1|3|7|4
 * Tableau à constituer: 11|14|12|11|2|8|11|10
 */
$newArray = [];
$array1 = [4, 8, 7, 9, 1, 5, 4, 6];
$array2 = [7, 6, 5, 2, 1, 3, 7, 4];
for ($i = 0; $i < count($array1); $i++) {
    $newArray[$i] = $array1[$i] + $array2[$i];
}
print_r($newArray);
