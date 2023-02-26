<?php

/** Que produit l’algorithme suivant ?
 *
 * Tableau Nb(5) en Entier
 * Variable i en Entier
 * Début
 * Pour i ← 0 à 5
 * Nb(i) ← i * i
 * i suivant
 * Pour i ← 0 à 5
 * Ecrire Nb(i)
 * i suivant
 * Fin 
 * 
 * Peut-on simplifier cet algorithme avec le même résultat ?
 * */
$Nb = [];/* 
for ($i = 0; $i <= 5; $i++) {
    $Nb[] = $i * $i;
}
for ($i = 0; $i <= 5; $i++) {
    print $Nb[$i] . "\n";
} */
// Simplification
for ($i = 0; $i <= 5; $i++) {
    $Nb[] = $i * $i;
    print $Nb[$i] . "\n";
}
