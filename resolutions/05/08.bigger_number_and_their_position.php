<?php

/** Ecrire un algorithme qui demande successivement 20 nombres à l’utilisateur, et qui lui dise ensuite quel était le plus grand parmi ces 20 nombres :
 * - Entrez le nombre numéro 1 : 12
 * - Entrez le nombre numéro 2 : 14
 * - etc.
 * - Entrez le nombre numéro 20 : 6
 * - Le plus grand de ces nombres est : 14
 * Modifiez ensuite l’algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre : C’était le nombre numéro 2 */
$position = 1;
$pos = 1;
$biggerNumber = 0;
$number = null;
while ($number !== 0) {
    $number = (int) readline("Entrer un nombre : \n");
    if ($number > $biggerNumber) {
        $biggerNumber = $number;
        $pos  = $position;
    }
    $position++;
}
print "Le nombre le plus grand est: $biggerNumber, il a été pris à la position $pos\n";
