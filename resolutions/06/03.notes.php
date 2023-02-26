<?php

/**
 * Ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l’utilisateur.
 */
$notes = [];
for ($i = 1; $i <= 9; $i++) {
    $notes[] = (float)readline("Entrer la note numero $i : \n");
}
