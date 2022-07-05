<?php

require "src/Customer.php";
require "src/Counter.php";
require "src/Product.php";
require "src/Pizza.php";
require "src/Beverage.php";
require "src/SoftDrink.php";
require "src/HardDrink.php";
require "src/Menu.php";
require "src/Order.php";

$john = new Customer("John", "Doe", 17);
$jane = new Customer("Jane", "Doe", 23);

$counter = new Counter(true);

$hawaienne = new Pizza("ananas", "jambon");
$savoyarde = new Pizza("reblochon", "oignons", "patates", "lardons");

$pinte = new HardDrink(50, 5);
$demi = new HardDrink(25, 5);

$coca = new SoftDrink(33, "Coca-cola");
$orangina = new SoftDrink(33, "Orangina");

$orderJohn = $john->orderMenu($hawaienne, $pinte);
$resultJohn = $counter->addOrder($orderJohn);

echo "Résultat John : " . $resultJohn . "<br><br>";



