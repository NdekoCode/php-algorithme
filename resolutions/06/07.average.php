<?php

/**
 * Ecrivez la fin de l’algorithme 6.3 afin que le calcul de la moyenne des notes soit effectué et affiché à l’écran.
 */
$notes = [];
$sum = 0;
for ($i = 0; $i <= 8; $i++) {
    $notes[] = (float)readline("Entrer la note numero " . ($i + 1) . " : \n");
    $sum += $notes[$i];
}
print "La moyenne de notes des eleves est : " . ($sum / count($notes)) . "\n";
