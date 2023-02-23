<?php

// 04.
$nbr_phot = (int) readline("Entrer le nombre de photocopie");
$nbprice;
if ($nbr_phot <= 10) {
    $nbprice = $nbr_phot * 0.10;
} elseif ($nbr_phot <= 30) {
    $nbprice = (10 * 0.10) + ($nbr_phot - 10) * 0.09;
} else {
    $nbprice = (10 * 0.1) + (20 * 0.09) + ($nbr_phot - 30) * 0.08;
}
print "la facture correspondante est $price €";


// 05.
/**
 * Les habitants de Zorglub paient l’impôt selon les règles suivantes :
• les hommes de plus de 20 ans paient l’impôt
• les femmes paient l’impôt si elles ont entre 18 et 35 ans
• les autres ne paient pas d’impôt
Le programme demandera donc l’âge et le sexe du Zorglubien, et se prononcera donc
ensuite sur le fait que l’habitant est imposable.
 */

$sexe = readline("Entrer votre sexe \n");
$age = (int) readline("Entrer votre age \n");
if (($sexe === "M" && $age > 20) || ($sexe === "F" && $age >= 18 && $age <= 35)) {
    print "Tu paie l'impot \n";
} else {
    print "Tu ne paie pas l'impot \n";
}
