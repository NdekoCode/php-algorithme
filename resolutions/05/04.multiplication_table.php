<?php

/** Ecrire un algorithme qui demande un nombre de départ, et qui ensuite écrit la table de multiplication de ce nombre, présentée comme suit (cas où l'utilisateur entre le nombre 7) : */
$number = (int)readline("Entrer un nombre \n");
print "La table de multiplication de $number est: \n";
for ($i = 1; $i <= 12; $i++) {
    print "$number X $i = " . ($number * $i) . "\n";
}
