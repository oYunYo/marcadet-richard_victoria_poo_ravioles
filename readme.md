1) Ecrire une interface qui obligera une classe à implémenter la fonction login prenant en
paramètre un user et un password (0.5 point)

```php
<?php
    interface LoginInterface {
        public function login($user, $password);
    }

    class Interface implements LoginInterface {
        
        public function login($user, $password) {
            // ACTIONS OBLIGATOIRES
        }
    }
```

2) Citez 6 méthodes magiques. Expliquez à quelle moment elles sont déclenchées et les
paramètres qu’elles prennent. (1.5 points)

__construct() méthode appelée quand on utilise le mot clé new ...(). Elle sert à construire l'objet 

__destruct() méthode appelée pour détruire un objet. Elle est appelé implicitement à la fin d'un script php 

__get($name) méthode appelée quand on cherche à accéder à un attribut dont on a pas l'accès (privé ou protected ou qui n'existe pas)

__set($name, $value) méthode appelée quand on essaie d'attribuer une valeur à un attribut dont on a pas l'accès ou qui n'existe pas (modifié)

__isset($name) méthode appelée quand isset() ou empty() sont appelées sur des propriétés inaccessibles (privées ou protected) ou inexistante

__unset($name) méthode appelée quand unset() est appelé sur des propriétés inaccessibles ou non existante

3) Je suis une méthode magique appelé implicitement à la fin d’un script. Qui suis-je ? (1
point)

__destruct()

4) Je suis une classe qui pourra être hérité mais qui ne pourra pas être instancier (impossible
de faire new ...). Qui suis-je et comment faire pour me créer ? (1 point)

Une classe abstraite : elle servira de modèle à d'autres classes qui pourront en hériter.

```php
<?php
abstract class AbstractClass 
{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut() {
        print $this->getValue() . "\n";
   }
}
```

5) Donnez 3 types de visibilité sur un attribut expliquez la différence. (1.5 points)

Principe qui s'appelle l'encapsulation :  
- public : les attributs, variables et fonctions sont accessibles en dehors de l'objet. 
- protected: les attributs, variables et fonctions sont accessibles par l'objet lui même et les classes qui en héritent.
- private : Accessible seulement à l’intérieur de la classe (seul l'objet créé aura accès à ses attributs/fonctions).

6) Expliquez ce qu’est une exception. Décrire les éléments qui la compose (1 point)

C'est la classe de base pour toutes les exceptions utilisateur.
Exception implémente l'interface Throwable. 
message : le message de l'exception (string)
code : le code de l'exception (int)
file : le nom du fichier dans lequel l'exception a été créée (string)
line : la ligne où l'exception a été créée (int)

7) Dans un modèle MVC quel est le rôle du router. Quelle est la variable super globale qu’il
utilise pour accomplir son rôle ? (1 point)

index.php : ce sera le nom de notre routeur. 
Le routeur est le premier fichier qu'on appelle en général sur un site. 
Il va se charger d'appeler le bon contrôleur.
Il utilise $_GET.

8) Expliquez les avantages de l’utilisation d’un pattern MVC. (1.5 points)

Plusieurs développeurs peuvent travailler sur la même appli sans se marcher dessus.
Il est utile pour une définition claire des zones d'intervention des développeurs. 
Par exemple, les développeurs de l’UI peuvent se concentrer exclusivement sur l’interface, 
sans être gênés par le reste de l'application. 
Le code est plus « visible », parce que très standardisé, 
il est plus aisé de reprendre le travail d’un collègue par exemple.
La possibilité d'utiliser et de substituer les Contrôleurs et Vues pour le même Modèle 
afin de fournir une autre interface. 

9) Détaillez les éléments qui composent un pattern MVC (1 point) 

Modèle : cette partie gère les données de votre site. Son rôle est d'aller récupérer 
les informations « brutes » dans la base de données, de les organiser et de les assembler pour 
qu'elles puissent ensuite être traitées par le contrôleur. On y trouve donc entre autres les requêtes SQL. 
On y trouve 2 types de fichiers :
- Les objets représentatifs de notre base de donnée
- les managers qui effectuent les requêtes SQL

Vue : cette partie se concentre sur l'affichage. 
Elle ne fait presque aucun calcul et se contente de récupérer des variables pour savoir 
ce qu'elle doit afficher. On y trouve essentiellement du code HTML mais aussi quelques 
boucles et conditions PHP très simples, pour afficher par exemple une liste de messages. 

Contrôleur : cette partie gère la logique du code qui prend des décisions. 
C'est en quelque sorte l'intermédiaire entre le modèle et la vue : le contrôleur va demander 
au modèle les données, les analyser, prendre des décisions et renvoyer le texte à afficher à la vue. 
Le contrôleur contient exclusivement du PHP. C'est notamment lui qui détermine si le visiteur 
a le droit de voir la page ou non (gestion des droits d'accès). 
Son role est de traiter convertir des données mais pas de les afficher.

IMPORTANT A LIRE
Explications sur l'appli MVC de ravioles :
- j'ai supprimé le fichier d'edit form, c'est le même pour ajouter et éditer une recette de ravioles,
j'ai ajouté des conditions pour que ça marche.
- j'ai ajouté la gestion des erreurs dans le formulaire, mais comme tu peux le voir 
j'ai laissé le //TODO parce que je ne sais pas comment faire pour les ajouter 
(comme y a des mélanges html/php, on a pas vu comment faire, j'ai pas trouvé toute seule).
Après c'était pas demandé dans le TP donc pour ça que j'ai pas insisté.