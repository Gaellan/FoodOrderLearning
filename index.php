<?php

require "src/Customer.php";
require "src/Counter.php";
require "src/Order.php";

$john = new Customer("John", "Doe", 17);
$jane = new Customer("Jane", "Doe", 23);

$counter = new Counter(true);

//Ensuite dans l'index.php , utilisez les nouvelles méthodes pour que $jane et $joe commande chacun "Pizza+Bière". 

$orderJohn = $john->order("Pizza+Bière");
$orderJane = $jane->order("Pizza+Bière");

//Utilisez ensuite les nouvelles méthodes du Counter pour ajouter ces commandes à sa liste et affichez le résultat.

$resultJohn = $counter->addOrder($orderJohn);
$resultJane = $counter->addOrder($orderJane);

echo "Commande de John : " . $resultJohn . "</br></br>";
echo "Commande de Jane : " . $resultJane . "</br></br>";


