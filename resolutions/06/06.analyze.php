<?php

/**
 * Que produit l’algorithme suivant ?
 * Tableau Suite(7) en Entier
 * Variable i en Entier
 * Début
 * Suite(0) ← 1
 * Suite(1) ← 1
 * Pour i ← 2 à 7
 * Suite(i) ← Suite(i-1) + Suite(i-2)
 * i suivant
 * Pour i ← 0 à 7
 * Ecrire Suite(i)
 * i suivant
 * Fin

 */
$N = [];
$N[0] = 1;
$N[1] = 1;
for ($i = 2; $i <= 7; $i++) {
    $N[$i] = $N[$i - 1] + $N[$i - 2];
}
print_r($N);
