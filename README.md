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
