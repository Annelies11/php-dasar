<?php

require_once "Person.php";

$person1 = new Person();

$person1->name = "Aris";
$person1->address = "Tulungagung";
$person1->country = "Indonesia";

//var_dump($person1);
echo "Name : $person1->name".PHP_EOL;
echo "Name : $person1->address".PHP_EOL;
echo "Name : $person1->country".PHP_EOL;