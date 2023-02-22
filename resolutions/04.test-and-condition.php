<?php
$Tutu = 3;
$Toto = 1;
$Tata = "OK";
if (($Tutu <= $Toto + 4) && $Tata !== "OK") {
    $Tutu = $Tutu + 1;
} else {
    $Tutu = $Tutu + 1;
}
// 03.
/* $heure = (int) readline("Entrer une heure \n");
$minute = (int) readline("Entrer la minute \n");
if ($minute >= 59) {
    $heure = $heure + 1;
    $minute = 0;
}
print "Dans une minute il sera $heure:$minute\n"; */
// 05.
/* $heure = (int) readline("Entrer une heure \n");
$minute = (int) readline("Entrer la minute \n");
$seconde = (int)readline("Entrer la minute \n");
$seconde = $seconde + 1;
if ($seconde === 60) {
    $minute++;
    $seconde = 0;
}
if ($minute === 60) {
    $heure++;
    $minute = 0;
}
if ($heure === 24) {
    $heure = 0;
}
print "Dans une minute il sera $heure:$minute:$seconde\n"; */

// 06.
$nbr_phot = (int) readline("Entrer le nombre de photocopie");
$nbprice;
if ($nbr_phot <= 10) {
    $nbprice = $nbr_phot * 0.10;
} elseif ($nbr_phot <= 20) {
    $nbprice = $nbr_phot * 0.09;
} else {

    $nbprice = $nbr_phot * 0.08;
}
print "la facture correspondante est $price €";
