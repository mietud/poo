<?php
 require_once "./class/Car.php";
 require_once "./class/Audi.php";
 require_once "./class/Etudiant.php";
 require_once "./class/Exceptions/AgeException.php";

$myCar = new Audi("Audi");
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

//Exception
$etudiant = new Etudiant();
echo "<br><strong>Custom Exception</strong>";
echo "<br>";
try{
    $etudiant->setAge(-10);
}
catch(AgeException $e){
    echo $e->getMessage();
}
echo "<br>";
echo "Age : ".$etudiant->getAge();




