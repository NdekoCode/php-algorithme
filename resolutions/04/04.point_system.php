<?php

/**
 * Une compagnie d'assurance automobile propose à ses clients quatre familles de tarifs identifiables par une couleur, du moins au plus onéreux : tarifs bleu, vert, orange et rouge. Le tarif dépend de la situation du conducteur :
 * • un conducteur de moins de 25 ans et titulaire du permis depuis moins de deux ans, se voit attribuer le tarif rouge, si toutefois il n'a jamais été responsable d'accident. Sinon, la compagnie refuse de l'assurer.
 * • un conducteur de moins de 25 ans et titulaire du permis depuis plus de deux ans, ou de plus de 25 ans mais titulaire du permis depuis moins de deux ans a le droit au tarif orange s'il n'a jamais provoqué d'accident, au tarif rouge pour un accident, sinon il est refusé.
 * • un conducteur de plus de 25 ans titulaire du permis depuis plus de deux ans bénéficie du tarif vert s'il n'est à l'origine d'aucun accident et du tarif orange pour un accident, du tarif rouge pour deux accidents, et refusé au-delà
 * • De plus, pour encourager la fidélité des clients acceptés, la compagnie propose un contrat de la couleur immédiatement la plus avantageuse s'il est entré dans la maison depuis plus d'un an.
 * • Ecrire l'algorithme permettant de saisir les données nécessaires (sans contrôle de saisie) et de traiter ce problème. Avant de se lancer à corps perdu dans cet exercice, on pourra réfléchir un peu et s'apercevoir qu'il est plus simple qu'il n'en a l'air (cela s'appelle faire une analyse !)
 */

/* tarifs bleu,
 * - vert,
 * - orange et
 * - rouge.
 * Le tarif dépend de la situation du conducteur :
 *      - un conducteur de moins de 25 ans et titulaire du permis depuis moins de deux ans: "ROUGE"  si il n'a jamais été responsable d'accident. Sinon, "il n'est pas assurer par la compagnie."
 *  -  un conducteur de moins de 25 ans et titulaire du permis depuis plus de deux ans, OU de plus de 25 ans mais titulaire du permis depuis moins de deux ans a le droit au tarif "ORANGE" s'il n'a jamais provoqué d'accident, au tarif "ROUGE" pour un accident, "il n'est pas assurer par la compagnie."
 * - un conducteur de plus de 25 ans titulaire du permis depuis plus de deux ans bénéficie du tarif "VERT" s'il n'est à l'origine d'aucun accident et du tarif "ORANGE" pour un accident, du tarif "ROUGE" pour deux accidents, et "il n'est pas assurer par la compagnie." au-delà de 2 accidents.
 * - Pour encourager la fidélité des clients acceptés, la compagnie propose un contrat de la couleur immédiatement la plus avantageuse(VERT) s'il est entré dans la maison depuis plus d'un an.
 *
 * */
define('TARIF_BLUE', "Tarif BLUE\n");
define('TARIF_VERT', "Tarif VERT\n");
define('TARIF_ROUGE', "Tarif ROUGE\n");
define('TARIF_ORANGE', "Tarif ORANGE\n");
define('NO_ASSURANCE', "Vous n'etes pas assurer\n");

$age = (int) readline("Entrer votre age: \n");
$nbrAccident = (int) readline("Entrer le nombre d'accident que vous avez déjà eu: \n");
$yearOfPermis = (int)readline("Vous possedez votre permis depuis combien d'année ?: \n");
$ageEnEntreprise = (int) readline("Entrer le nombre de temps que vous etes dans cet compagnie: \n");
$C1 = $age >= 25;
$C2 = $yearOfPermis >= 2;
$C3 = $ageEnEntreprise > 1;
// Avec un systeme d'attribution des points.
$p = 0;
if (!$C1) {
    $p++;
}
if (!$C2) {
    $p++;
}
$p += $nbrAccident;

if ($p < 3 && $C3) {
    $p--;
}
if ($p === -1) {
    $situation = TARIF_BLUE;
} elseif ($p === 0) {
    $situation = TARIF_VERT;
} elseif ($p === 1) {
    $situation = TARIF_ORANGE;
} elseif ($p === 2) {
    $situation = TARIF_ROUGE;
} else {
    $situation = NO_ASSURANCE;
}
print "Votre situtation est: $situation \n";

print "Age: $age, Nbre d'accident: $nbrAccident, age en Entreprise: $ageEnEntreprise,
temps avec permis: $yearOfPermis, POINT: $p \n";
