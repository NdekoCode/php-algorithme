<?php

// 06.
$age = (int)readline("Entrer votre age \n");
if ($age >= 6 && $age <= 7) {
    print "Poussin\n";
} elseif ($age >= 8 && $age <= 9) {
    print "Pupille\n";
} elseif ($age >= 10 && $age <= 11) {
    print "Minime\n";
} elseif ($age >= 12) {
    print "Cadet\n";
} else {
    print "Entrer un age valide";
}
