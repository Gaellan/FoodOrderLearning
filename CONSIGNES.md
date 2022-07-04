# Exercices sur les classes
_Objectif : manipuler les classes, attributs et méthodes_

## Exercice 1

`$jane` et `$joe` vont chacun créer une commande (`Order`) pour le produit `"Pizza+Bière"`.

Initialisez les deux `Order` dans le fichier `index.php` et afficher les avec leur méthode `print()`.

## Exercice 2

Nous allons maintenant faire en sorte que notre classe `Counter` ne permette plus à une personne mineure de commander le produit `"Pizza+Bière"`.

À chaque nouvelle commande il va devoir vérifier que ce n'est pas le cas.

Dans la classe `Counter` la méthode `setOrders(array $orders)` devient `private`.
Toujours dans la classe `Counter` ajoutez une méthode avec le prototype suivant et complétez-la :

```php
public function addOrder(Order $order) : int 
{
  // si un-e mineur-e essaie de commande Pizza+Bière, je ne fais rien et renvoie -1
  // sinon j'ajoute l'$order à la liste des orders et je renvoie 1
}
```

C'est à présent la classe `Customer` qui va se charger de commander ( plus exactement d'instancier les `Order`).

Ajoutez donc la méthode suivante dans la classe `Customer` et complétez-la : 

```php
public function order(string $product) : Order
{
  // créer une Order avec $product et soi-même en customer
  // retourner l'Order créée
}
```
Ensuite dans l'`index.php` , utilisez les nouvelles méthodes pour que `$jane` et `$joe` commande chacun `"Pizza+Bière"`. Utilisez ensuite les nouvelles méthodes du `Counter` pour ajouter ces commandes à sa liste et affichez le résultat.

