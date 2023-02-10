<?php
// 01.
/* $nbr = (float)readline("Entrer un nombre");
if ($nbr > 0) {
    print "Le nombre est positif";
} else {
    print "Le nombre est negatif";
} */
/* 
$nbr1 = (int)readline("Entrer un nombre\n");
$nbr2 = (int)readline("Entrer un deuxieme nombre\n");

if (($nbr1 < 0 && $nbr2 < 0) || ($nbr1 > 0 && $nbr2 > 0)) {
    print "Le produit est positif\n";
} else {
    print "Le produit est négatif\n";
}
 */
$nom1 = readline("Entrer un nom : \n");
$nom2 = readline("Entrer un autre nom : \n");
$nom3 = readline("Entrer un autre nom : \n");
if ($nom1 < $nom2 && $nom2 < $nom3) {
    echo "Ces noms sont classées de manière alphabetique\n";
} else {

    echo "Ces noms ne sont pas classées de manière alphabetique\n";
}
