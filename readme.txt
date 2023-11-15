Cet exercice consiste à développer un compteur de points de black jack, tu n’as pas besoin de connaitre les règles du jeu pour effectuer cet exercice.
Développer une fonction qui prend en entrée un tableau contenant des cartes. Ces cartes représentent une main au blackjack qui contient entre 2 et 5 cartes.
Valeurs possibles : two, three, four, five, six, seven, eight, nine, ten, jack, queen, king, ace.
Exemple de main : [“two”, “nine”, “five”] 
La fonction doit retourner “bellow” si le joueur est en dessous de 21, “above” s’il est au-dessus et “blackjack” s’il fait 21, suivi de la carte la plus haute de son jeu.
Les cartes entre 2 et 9 valent leur valeur nominale, la carte 10 ainsi que le valet, la dame et le roi valent 10 points. L’as quant à lui vaut 11 points si le nombre de points total ne dépasse pas 21, 1 point sinon.
Dans notre exemple, la fonction doit retourner “bellow nine”.
Exemple si une main comporte un as : [“king”, “three”, “ace”]
Résultat attendu : “bellow king” (L’as est ici compté pour 1)

Si dans une main la carte 10 et une tête sont les cartes les plus hautes c’est la tête qui doit être retournée, si la main comporte plusieurs têtes, elles doivent respecter la hiérarchie suivante : jack, queen, king.
Exemple : [“jack”, “king”, “four”]
Résultat attendu :  “above jack”

Conseils : utiliser des objets et plusieurs fonctions afin de structurer ton programme.
