<?php

/**
 * Toujours et encore sur le même principe, écrivez un algorithme permettant, à
 * l’utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée,
 * renvoie le nombre de ces notes supérieures à la moyenne de la classe.
 */
$notes = [];
$sum = 0;
$numberBigger = 0;
for ($i = 0; $i < 9; $i++) {
    $notes[] = (float)readline("Entrer la note numero " . ($i + 1) . " : \n");
    $sum += $notes[$i];
}
$average = $sum / count($notes);
for ($i = 0; $i < count($notes); $i++) {
    if ($notes[$i] > $average) {
        $numberBigger++;
    }
}
print "Le nombre des notes superieur à la moyenne $$average sont au nombre de $numberBigger\n";
print_r($notes);
