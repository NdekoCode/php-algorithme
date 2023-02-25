<?php

/**Ecrire un algorithme qui demande un nombre compris entre 10 et 20, jusqu’à ce que la
réponse convienne. En cas de réponse supérieure à 20, on fera apparaître un message :
« Plus petit ! », et inversement, « Plus grand ! » si le nombre est inférieur à 10. */
$number = 0;
while (!($number >= 10 && $number < 20)) {
    $number = (int) readline("Entrer un nombre compris entre 10 et 20: \n");
    if ($number >= 10 && $number < 20) {
        break;
    }
    if ($number >= 20) {
        print "Entrer un nombre « Plus petit ! »\n";
    } else {
        print "Entrer un nombre « Plus grand ! »\n";
    }
}
print "Bravo vous avez entrer le rang exacter $number\n";
