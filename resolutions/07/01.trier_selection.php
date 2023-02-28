<?php

/**
 * Le trie par selection a 2 boucle,
 * - La premiere boucle commence par l'indice zero et se termine par l'avant dernier indice
 * - La deuxieme boucle commence par l'indice de la premier boucle mouvant plus 1 et se termine au dernier indice du tableau
 */
$array = [123, 45, 122, 12, 3, 21, 78, 64, 129, 53, 89, 28, 84, 46];
$pos = 0;
$min = $array[$pos];
for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$j] < $array[$i]) {
            $posmini = $j;
            $temp = $array[$posmini];
            $array[$posmini] = $array[$i];
            $array[$i] = $temp;
        }
    }
}
print_r($array);
