<?php

require "src/Customer.php";
require "src/Counter.php";
require "src/Order.php";

$john = new Customer("John", "Doe", 17);
$jane = new Customer("Jane", "Doe", 23);

$counter = new Counter(true);


