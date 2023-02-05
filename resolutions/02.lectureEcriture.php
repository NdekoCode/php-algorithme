<?php
// 2.2
$nbrUser = (int) readline("Entrer un chiffre : \n");
$carrer = $nbrUser * $nbrUser;
print "Le carré de ce nombre est: $carrer \n";

// 2.3
$prixHT = (float)readline("Entrer le prix HT de l'article : \n");
$nbrArticle = (int)readline("Entrer le nombre d'article : \n");
$tauxTVA = (float)readline("Entrer le taux TVA : \n");
$TTC = $nbrArticle * $prixHT * (1 + $tauxTVA);
print "le PRIX TTC: $TTC  \n";

// 2.4
$str1 = "belle marquise";
$str2 = "vos beaux yeux";
$str3 = "me font mourir";
$str4 = "d’amour ";
$phrase1 = "$str3 $str4 $str2 $str1 \n";
$phrase2 = "$str2 $str1 $str3 $str4 \n";
$phrase3 = "$str4 $str2 $str1 $str3 \n";
$phrase4 = "$str2 $str1 $str4 $str3 \n";
echo $phrase1;
echo $phrase2;
echo $phrase3;
echo $phrase4;
