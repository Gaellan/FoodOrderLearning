<?php

require "src/Customer.php";
require "src/Counter.php";
require "src/Order.php";

$john = new Customer("John", "Doe", 17);
$jane = new Customer("Jane", "Doe", 23);

$counter = new Counter(true);

// $jane et $john vont chacun créer une commande (Order) pour le produit "Pizza+Bière".

$orderJohn = new Order($john, "Pizza+Bière");
$orderJohn->print();

$orderJane = new Order($jane, "Pizza+Bière");
$orderJane->print();

// Initialisez les deux Order dans le fichier index.php et afficher les avec leur méthode print().

