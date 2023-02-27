<?php

/** Toujours à partir de deux tableaux précédemment saisis, écrivez un algorithme qui
 * calcule le schtroumpf des deux tableaux. Pour calculer le schtroumpf, il faut multiplier
 * chaque élément du tableau 1 par chaque élément du tableau 2, et additionner le tout. Par
 * exemple si l'on a :
 * Tableau 1 : 4|8|7|12
 * Tableau 2 : 3|6
 * Le Schtroumpf sera :
 * 3 * 4 + 3 * 8 + 3 * 7 + 3 * 12 + 6 * 4 + 6 * 8 + 6 * 7 + 6 * 12 = 279 */
$array1 = [4, 8, 7, 12];
$array2 = [3, 6];
$some = 0;
$prod2 = 1;
for ($i = 0; $i < count($array1); $i++) {
    for ($j = 0; $j < count($array2); $j++) {
        $some += $array1[$i] * $array2[$j];
    }
}
print "La somme $some";
