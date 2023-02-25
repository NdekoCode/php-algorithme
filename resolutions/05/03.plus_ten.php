<?php

/**Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix
nombres suivants. Par exemple, si l'utilisateur entre le nombre 17, le programme
affichera les nombres de 18 à 27. */
$number = (int) readline("Entrer un nombre : \n");
for ($i = $number + 1; $i <= $number + 10; $i++) {

    print "$i\n";
}
