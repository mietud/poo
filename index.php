<?php
 require_once "./class/Car.php";
 require_once "./class/Audi.php";

$myCar = new Audi("Audi");

echo $myCar->intro();
$myCar->setMatricule("0001 AAA");


