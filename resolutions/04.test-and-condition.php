<?php

// 06.
/**
 *
 * Les élections législatives, en Guignolerie Septentrionale, obéissent à la règle suivante :
 * - lorsque l'un des candidats obtient plus de 50% des suffrages, il est élu dès le premier tour.
 * en cas de deuxième tour, peuvent participer uniquement les candidats ayant obtenu au moins 12,5% des voix au premier tour.
 * Vous devez écrire un algorithme qui permette la saisie des scores de quatre candidatsau premier tour.
 * Cet algorithme traitera ensuite le candidat numéro 1 (et uniquement lui) :
 *  - il dira s'il est élu,
 *  - battu,
 * - s'il se trouve en ballottage favorable (il participe au second tour en étant arrivé en tête à l'issue du premier tour) ou
 * - défavorable (il participe au second tour sans avoir été en tête au premier tour).
 */

$A = (float) readline("Entrer le score du candidat A: \n");
$B = (float) readline("Entrer le score du candidat B: \n");
$C = (float) readline("Entrer le score du candidat C: \n");
$D = (float) readline("Entrer le score du candidat D: \n");
$test1 = $A >= 50;
$test2 = $A >= $B && $A >= $C && $A >= $D;
$test3 = $B >= 50 || $C >= 50 || $D >= 50;
$test4 = $A >= 12.5;

if ($test1 && $test2) {
    print "Le candidat A est elus dès le premier tour\n";
} elseif ($test2 && $test4) {
    print "Le candidat A passe au second tour en ballotage favorable\n";
} elseif (!$test2 && !$test3 && $test4) {
    print "Le candidat A passe au second tour en ballotage défavorable\n";
} else {
    print "Le candidat A est battus\n";
}
