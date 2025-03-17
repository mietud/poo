<?php
 require_once "./class/Car.php";
 require_once "./class/Audi.php";

$myCar = new Audi("Audi");
echo "<br>";
echo $myCar->intro();
echo "<br>";
$myCar->setMatricule("0001 AAA");
$myCar->myName = "Mietud";
echo "<br>";
echo $myCar->myName;
echo "<br>";
$myCar->sayHello();
echo "<br>";
$myCar->displayNbrPneud();

