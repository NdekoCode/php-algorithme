<?php
// 03.
$heure = (int) readline("Entrer une heure \n");
$minute = (int) readline("Entrer la minute \n");
if ($minute >= 59) {
    $heure = $heure + 1;
    $minute = 0;
}
print "Dans une minute il sera $heure:$minute\n";

// 05.
$heure = (int) readline("Entrer une heure \n");
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
print "Dans une minute il sera $heure:$minute:$seconde\n";
