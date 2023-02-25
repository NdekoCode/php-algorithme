<?php

$number = 0;
while (!($number >= 1 && $number < 3)) {
    $number = (int) readline("Entrer un nombre entre 1 et 3: \n");
}
print "Bravo, vous avez entrer le nombre $number\n";
