<?php

/**
 * Que produit l’algorithme suivant ?
 * Tableau N(6) en Entier
 * Variables i, k en Entier
 * Début
 * N(0) ← 1
 * Pour k ← 1 à 6
 * N(k) ← N(k-1) + 2
 * k Suivant
 * Pour i ← 0 à 6
 * Ecrire N(i)
 * i suivant
 * Fin
 * Peut-on simplifier cet algorithme avec le même résultat ?
 */
$N = [];
$N[0] = 1;
/* for ($k = 1; $k <= 6; $k++) {
    $N[$k] = $N[$k - 1] + 2;
}
for ($k = 1; $k <= 6; $k++) {
    print ($N[$k]) . "\n";
} */
// Simplification

print ($N[0]) . "\n";
for ($k = 1; $k <= 6; $k++) {
    $N[$k] = $N[$k - 1] + 2;
    print ($N[$k]) . "\n";
}
