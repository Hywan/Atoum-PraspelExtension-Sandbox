![atoum](http://downloads.atoum.org/images/logo.png)
+
![Hoa](http://static.hoa-project.net/Image/Hoa_small.png)

[atoum](http://atoum.org/) is a **simple**, **modern** and **intuitive** unit
testing framework for PHP!

[Hoa](http://hoa-project.net/) is a **modular**, **extensible** and
**structured** set of PHP libraries.  Moreover, Hoa aims at being a bridge
between industrial and research worlds.

# Atoum\PraspelExtension sandbox.

This is a sandbox for a [PhD thesis](https://github.com/Hywan/PhdThesis)
experimentation. It uses the
[`Atoum\PraspelExtension`](http://central.hoa-project.net/Resource/Contributions/Atoum/PraspelExtension).
This latter introduces
[Praspel](http://central.hoa-project.net/Resource/Library/Praspel) inside atoum.

## Install

All you need is [Composer](https://getcomposer.org):

```sh
$ composer install
```

And you are ready.

## PhD thesis experimentation

Since all people involved in this experimentation are French speaking, I will
continue in French.

### Protocole expérimental

Il est demandé d'appliquer le protocole expérimental :

  1. sélectionner plusieurs méthodes déjà testée ;
  2. annoter ces méthodes avec des contrats Praspel ;
  3. générer automatiquement une suite de tests satisfaisant le critère de
     couverture de contrat All-G (sélectionnée par défaut), et l'exécuter ;
  4. comparer la suite MT (Manual Tests) à la suite AGT (Automatically Generated
     Tests).

### Comparaison de la couverture de code des suites de tests

  * comparer le score de la couverture de code (critère tous-les-arcs) entre les
    deux suites ;
  * essayer de regrouper les résultats par type de données manipulés (regroupe
    les scalaires en nombres et chaînes de caractères, et les structurels à
    part, avec les tableaux et les objets).

### Temps de rédactions des suites de tests

  1. Combien de temps pour écrire la suite MT ?
  2. Combien de temps pour écrire la suite AGT ?

### Générations de données de tests

Les suites AGT ne sont évidemment pas complètes. Pourquoi ? Que manque-t-il ?

Pour compenser, des MT sont écrits.

  1. En quoi les algorithmes de générations de données sont-ils utiles et
     efficaces ?
  2. Est-ce que des tests ont été réécrits avec les algorithmes de générations
     de données ? Si oui, quels ont été les résultats ?

### Tests paramétrés

C'est une approche hybride. Quels ont été les résultats par rapport à la
technique manuel et automatique ?

### Retour des ingénieurs

  * Est-ce que l'approche des contrats est pertinente ?
  * Est-ce que vous avez l'impression de gagner du temps ? De l'argent ? De la
    qualité logiciel ?
  * Que faudrait-il pour gagner en maturité ?
  * Est-ce que des bugs ont été trouvés ? Si oui, peut-on estimer leur coût ou
    criticité ?

Questions spécifiques aux contrats :

  * Qu'est-ce que cela apporte à votre méthodologie ?
  * Travaillez-vous plus lentement ? Plus rapidement ?
  * Est-ce que cette notion est facile à prenre en main et à comprendre ?
  * Est-ce que Praspel est facile à comprendre ?

## Aide

  * N'hésitez pas à venir sur `#hoaproject-atoum` ;
  * N'hésitez pas à utiliser `$ hoa realdom:reflection` pour de l'aide sur les
    domaines réalistes ;
  * N'hésitez pas à utiliser `$ hoa praspel:shell` pour tester Praspel.

## Documentation of Hoa

Different documentations can be found on the website:
[http://hoa-project.net/](http://hoa-project.net/).

## License

Hoa, along with this extension, is under the NewÂ BSDÂ License (BSD-3-Clause).
Please, see [`LICENSE`](http://hoa-project.net/LICENSE).
