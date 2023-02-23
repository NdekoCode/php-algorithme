<?php

// 06.
/**
 * Les élections législatives, en Guignolerie Septentrionale, obéissent à la règle suivante :
• lorsque l'un des candidats obtient plus de 50% des suffrages, il est élu dès le
premier tour.
• en cas de deuxième tour, peuvent participer uniquement les candidats ayant
obtenu au moins 12,5% des voix au premier tour.
Vous devez écrire un algorithme qui permette la saisie des scores de quatre candidats
au premier tour. Cet algorithme traitera ensuite le candidat numéro 1 (et uniquement
lui) : il dira s'il est élu, battu, s'il se trouve en ballottage favorable (il participe au
second tour en étant arrivé en tête à l'issue du premier tour) ou défavorable (il
participe au second tour sans avoir été en tête au premier tour).
 */

$A = readline("Entrer votre pourcentage de vote A: ");
$B = readline("Entrer votre pourcentage de vote B: ");
$C = readline("Entrer votre pourcentage de vote C: ");
$D = readline("Entrer votre pourcentage de vote D: ");
$test1 = $A > $B && $B > $C && $C > $D;
$test2 = $A > $C && $C > $B && $B > $D;
$test3 = $A > $D && $D > $C && $C > $B;
