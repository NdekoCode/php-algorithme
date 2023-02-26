<?php

/**
 * Ecrivez un algorithme permettant à l’utilisateur de saisir un nombre quelconque de valeurs, qui devront être stockées dans un tableau. L’utilisateur doit donc commencer par entrer le nombre de valeurs qu’il compte saisir. Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée, le programme affichera le nombre de valeurs négatives et le nombre de valeurs positives.
 */
$number = (int) readline("Entrer le nombre de valeur que vous voulez entrer :\n");
$positif = [];
$negatif = [];
$numersUser = [];
for ($i = 0; $i < $number; $i++) {
    $input = (int)readline("Entrer le nombre numero " . ($i + 1) . ": \n");
    $numersUser[] = $input;
    if ($input >= 0) {
        $positif[] = $input;
    } else {
        $negatif[] = $input;
    }
}
print "Le nombre de valeurs négatives est " . (count($negatif)) . " et le nombre de valeurs positives " . (count($positif)) . "\n";
