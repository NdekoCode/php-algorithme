<?php
// 01.
/* $nbr = (float)readline("Entrer un nombre");
if ($nbr > 0) {
    print "Le nombre est positif";
} else {
    print "Le nombre est negatif";
} */

$nbr1 = (int)readline("Entrer un nombre\n");
$nbr2 = (int)readline("Entrer un deuxieme nombre\n");

if (($nbr1 < 0 && $nbr2 < 0) || ($nbr1 > 0 && $nbr2 > 0)) {
    print "Le produit est positif\n";
} else {
    print "Le produit est négatif\n";
}
