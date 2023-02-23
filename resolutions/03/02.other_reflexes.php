<?php

$nom1 = readline("Entrer un nom : \n");
$nom2 = readline("Entrer un autre nom : \n");
$nom3 = readline("Entrer un autre nom : \n");
if ($nom1 < $nom2 && $nom2 < $nom3) {
    echo "Ces noms sont classées de manière alphabetique\n";
} else {

    echo "Ces noms ne sont pas classées de manière alphabetique\n";
}
