<?php
// 01.
$nbr = (float)readline("Entrer un nombre");
if ($nbr > 0) {
    print "Le nombre est positif";
} else {
    print "Le nombre est negatif";
}

// 02.
$nbr1 = (int)readline("Entrer un nombre\n");
$nbr2 = (int)readline("Entrer un deuxieme nombre\n");

if (($nbr1 < 0 && $nbr2 < 0) || ($nbr1 > 0 && $nbr2 > 0)) {
    print "Le produit est positif\n";
} else {
    print "Le produit est négatif\n";
}

// 04.
$nbr = (int) readline("Entrer un nombre : \n");
if ($nbr < 0) {
    print "Le nombre est négatif\n";
} elseif ($nbr === 0) {
    print "Le nombre est égale à zero\n";
} else {
    print "Le nombre est positif\n";
}
// 05.
$nbr1 = (int) readline("Entrer un nombre : \n");
$nbr2 = (int) readline("Entrer un autre nombre : \n");
$prod = $nbr1 * $nbr2;
if ($prod < 0) {
    print "Le produit est négatif\n";
} elseif ($prod === 0) {
    print "Le produit est égale à zero\n";
} else {
    print "Le produit est positif\n";
}
