<?php

/**Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des
entiers jusqu’à ce nombre. Par exemple, si l’on entre 5, le programme doit calculer :
1 + 2 + 3 + 4 + 5 = 15
NB : on souhaite afficher uniquement le résultat, pas la décomposition du calcul. */
$number = (int) readline("Entrer un nombre : \n");
$sum = 0;
for ($i = 1; $i <= $number; $i++) {
    $sum += $i;
}

print "La somme des entiers jusqu'à $number est: $sum\n";;
