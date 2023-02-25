<?php

/**
 * Ecrivez un algorithme qui a près avoir demandé un numéro de jour, de mois et d'année à l'utilisateur, renvoie s'il s'agit ou non d'une date valide. Cet exercice est certes d’un manque d’originalité affligeant, mais après tout, en algorithmique comme ailleurs, il faut connaître ses classiques ! Et quand on a fait cela une fois dans sa vie, on apprécie pleinement l’existence d’un type numérique « date » dans certains langages…). Il n'est sans doute pas inutile de rappeler rapidement que le mois de février compte 28 jours, sauf si l’année est bissextile, auquel cas il en compte 29. L’année est bissextile si elle est divisible par quatre. Toutefois, les années divisibles par 100 ne sont pas bissextiles, mais les années divisibles par 400 le sont. Ouf ! Un dernier petit détail : vous ne savez pas, pour l’instant, exprimer correctement en pseudo-code l’idée qu’un nombre A est divisible par un nombre B. Aussi, vous vous contenterez d’écrire en bons télégraphistes que A divisible par B se dit « A dp B ».
 */
$day = (int) readline("Entrer le numero du jour : \n");
$month = (int) readline("Entrer le numero du moi : \n");
$year = (int) readline("Entrer l'année : \n");
$date = "$day/$month/$year";
$testDay = $day > 0 && $day <= 31;
$testMonth = $month > 0 && $month <= 12;
$testYear = $year > 1000;

if ($month === 2) {
    $testBissextile = $year % 4 === 0 && $year % 100 !== 0 || $year % 400 === 0;
    if ($testBissextile) {
        $testDay = $day > 0 && $day <= 29;
    }
} elseif ($month === 4 || $month === 6 || $month === 9 || $month === 11) {
    $testDay = $day > 0 && $day <= 30;
}
if ($testDay && $testMonth && $testYear) {
    print "La date $date est valide\n";
} else {
    print "Date invalide\n";
}
