# Exercices Algorithemique

## 1. Les variables

1. Exercice 1.1
Quelles seront les valeurs des variables A et B après exécution des instructions
suivantes ?

```{ALGO}
Variables A, B en Entier
Début
A ← 1
B ← A + 3
A ← 3
Fin
```

2. Exercice 1.2
Quelles seront les valeurs des variables A, B et C après exécution des instructions
suivantes ?

```{ALGO}

Variables A, B, C en Entier
Début
A ← 5
B ← 3
C ← A + B
A ← 2
C ← B – A
Fin
```

3. Exercice 1.3
Quelles seront les valeurs des variables A et B après exécution des instructions
suivantes ?

```{ALGO}

Variables A, B en Entier
Début
A ← 5
B ← A + 4
A ← A + 1
B ← A – 4
Fin
```

4. Exercice 1.4
Quelles seront les valeurs des variables A, B et C après exécution des instructions
suivantes ?

```{ALGO}

Variables A, B, C en Entier
Début
A ← 3
B ← 10
C ← A + B
B ← A + B
A ← C
Fin
```

5. Exercice 1.5
Quelles seront les valeurs des variables A et B après exécution des instructions
suivantes ?

```{ALGO}
Variables A, B en Entier
Début
A ← 5
B ← 2
A ← B
B ← A
Fin
```

Moralité : les deux dernières instructions permettent-elles d’échanger les deux valeurs
de B et A ? Si l’on inverse les deux dernières instructions, cela change-t-il quelque
chose ?

6. Exercice 1.6
Plus difficile, mais c’est un classique absolu, qu’il faut absolument maîtriser : écrire un
algorithme permettant d’échanger les valeurs de deux variables A et B, et ce quel que
soit leur contenu préalable.

7. Exercice 1.7
Une variante du précédent : on dispose de trois variables A, B et C. Ecrivez un
algorithme transférant à B la valeur de A, à C la valeur de B et à A la valeur de C
(toujours quels que soient les contenus préalables de ces variables).

8. Exercice 1.8
Que produit l’algorithme suivant ?

```{ALGO}

Variables A, B, C en Caractères
Début
A ← "423"
B ← "12"
C ← A + B
Fin
```

9. Exercice 1.9
Que produit l’algorithme suivant ?

```{ALGO}

Variables A, B, C en Caractères
Début
A ← "423"
B ← "12"
C ← A & B
Fin
```

## Partie 2: Lecture et Ecriture

1. Exercice 2.1
Quel résultat produit le programme suivant ?

```{ALGO}

Variables val, double numériques
Début
Val ← 231
Double ← Val * 2
Ecrire Val
Ecrire Double
Fin
```

2. Exercice 2.2
Ecrire un programme qui demande un nombre à l’utilisateur, puis qui calcule et affiche le
carré de ce nombre

3. Exercice 2.3
Ecrire un programme qui lit le prix HT d’un article, le nombre d’articles et le taux de
TVA, et qui fournit le prix total TTC correspondant. Faire en sorte que des libellés
apparaissent clairement.

4. Exercice 2.4
Ecrire un algorithme utilisant des variables de type chaîne de caractères, et affichant
quatre variantes possibles de la célèbre « belle marquise, vos beaux yeux me font
mourir d’amour ». On ne se soucie pas de la ponctuation, ni des majuscules.

## Partie 3: TEST et conditions

1. Exercice 3.1
Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce
nombre est positif ou négatif (on laisse de côté le cas où le nombre vaut zéro).
2. Exercice 3.2
Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si
leur produit est négatif ou positif (on laisse de côté le cas où le produit est nul).
Attention toutefois : on ne doit pas calculer le produit des deux nombres.
3. Exercice 3.3
Ecrire un algorithme qui demande trois noms à l’utilisateur et l’informe ensuite s’ils sont rangés ou non dans l’ordre alphabétique.
4. Exercice 3.4
Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce
nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre
vaut zéro).
5. Exercice 3.5
Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si le
produit est négatif ou positif (on inclut cette fois le traitement du cas où le produit
peut être nul). Attention toutefois, on ne doit pas calculer le produit !
6. Exercice 3.6
Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur. Ensuite, il l’informe de
sa catégorie :

```{P}
• "Poussin" de 6 à 7 ans
• "Pupille" de 8 à 9 ans
• "Minime" de 10 à 11 ans
• "Cadet" après 12 ans
```

Peut-on concevoir plusieurs algorithmes équivalents menant à ce résultat ?

## Partie 4: La Logique sur les operateurs conditionnelles

1. Exercice 4.1
Formulez un algorithme équivalent à l’algorithme suivant :

```{ALGO}
Si Tutu > Toto + 4 OU Tata = "OK" Alors
 Tutu ← Tutu + 1
Sinon
 Tutu ← Tutu – 1
Finsi
```

2. Exercice 4.2
Cet algorithme est destiné à prédire l'avenir, et il doit être infaillible !
Il lira au clavier l’heure et les minutes, et il affichera l’heure qu’il sera une minute plus
tard. Par exemple, si l'utilisateur tape 21 puis 32, l'algorithme doit répondre :
"Dans une minute, il sera 21 heure(s) 33".
NB : on suppose que l'utilisateur entre une heure valide. Pas besoin donc de la vérifier.

3. Exercice 4.3
De même que le précédent, cet algorithme doit demander une heure et en afficher une
autre. Mais cette fois, il doit gérer également les secondes, et afficher l'heure qu'il
sera une seconde plus tard.
Par exemple, si l'utilisateur tape 21, puis 32, puis 8, l'algorithme doit répondre : "Dans
une seconde, il sera 21 heure(s), 32 minute(s) et 9 seconde(s)".
NB : là encore, on suppose que l'utilisateur entre une date valide.

4. Exercice 4.4
Un magasin de reprographie facture 0,10 E les dix premières photocopies, 0,09 E les
vingt suivantes et 0,08 E au-delà. Ecrivez un algorithme qui demande à l’utilisateur le
nombre de photocopies effectuées et qui affiche la facture correspondante.

5. Exercice 4.5
Les habitants de Zorglub paient l’impôt selon les règles suivantes :
• les hommes de plus de 20 ans paient l’impôt
• les femmes paient l’impôt si elles ont entre 18 et 35 ans
• les autres ne paient pas d’impôt
Le programme demandera donc l’âge et le sexe du Zorglubien, et se prononcera donc
ensuite sur le fait que l’habitant est imposable.

6. Exercice 4.6
Les élections législatives, en Guignolerie Septentrionale, obéissent à la règle suivante :
• lorsque l'un des candidats obtient plus de 50% des suffrages, il est élu dès le
premier tour.
• en cas de deuxième tour, peuvent participer uniquement les candidats ayant
obtenu au moins 12,5% des voix au premier tour.
Vous devez écrire un algorithme qui permette la saisie des scores de quatre candidats
au premier tour. Cet algorithme traitera ensuite le candidat numéro 1 (et uniquement
lui) : il dira s'il est élu, battu, s'il se trouve en ballottage favorable (il participe au
second tour en étant arrivé en tête à l'issue du premier tour) ou défavorable (il
participe au second tour sans avoir été en tête au premier tour).

7. Exercice 4.7
Une compagnie d'assurance automobile propose à ses clients quatre familles de tarifs
identifiables par une couleur, du moins au plus onéreux : tarifs bleu, vert, orange et
rouge. Le tarif dépend de la situation du conducteur :

- un conducteur de moins de 25 ans et titulaire du permis depuis moins de deux
ans, se voit attribuer le tarif rouge, si toutefois il n'a jamais été responsable
d'accident. Sinon, la compagnie refuse de l'assurer.
- un conducteur de moins de 25 ans et titulaire du permis depuis plus de deux ans,
ou de plus de 25 ans mais titulaire du permis depuis moins de deux ans a le droit
au tarif orange s'il n'a jamais provoqué d'accident, au tarif rouge pour un
accident, sinon il est refusé.
- un conducteur de plus de 25 ans titulaire du permis depuis plus de deux ans
bénéficie du tarif vert s'il n'est à l'origine d'aucun accident et du tarif orange
pour un accident, du tarif rouge pour deux accidents, et refusé au-delà
- De plus, pour encourager la fidélité des clients acceptés, la compagnie propose un
contrat de la couleur immédiatement la plus avantageuse s'il est entré dans la
maison depuis plus d'un an.
Ecrire l'algorithme permettant de saisir les données nécessaires (sans contrôle de
saisie) et de traiter ce problème. Avant de se lancer à corps perdu dans cet exercice, on
pourra réfléchir un peu et s'apercevoir qu'il est plus simple qu'il n'en a l'air (cela
s'appelle faire une analyse !)

8. Exercice 4.8
Ecrivez un algorithme qui a près avoir demandé un numéro de jour, de mois et d'année à
l'utilisateur, renvoie s'il s'agit ou non d'une date valide.
Cet exercice est certes d’un manque d’originalité affligeant, mais après tout, en
algorithmique comme ailleurs, il faut connaître ses classiques ! Et quand on a fait cela
une fois dans sa vie, on apprécie pleinement l’existence d’un type numérique « date »
dans certains langages…).
Il n'est sans doute pas inutile de rappeler rapidement que le mois de février compte 28
jours, sauf si l’année est bissextile, auquel cas il en compte 29. L’année est bissextile si
elle est divisible par quatre. Toutefois, les années divisibles par 100 ne sont pas
bissextiles, mais les années divisibles par 400 le sont. Ouf !
Un dernier petit détail : vous ne savez pas, pour l’instant, exprimer correctement en
pseudo-code l’idée qu’un nombre A est divisible par un nombre B. Aussi, vous vous
contenterez d’écrire en bons télégraphistes que A divisible par B se dit « A dp B ».
