<?php
 require_once "Car.php";
 require_once "MyTrait.php";
 require_once "MyTrait2.php";

class Audi extends Car {
    use MyTrait, MyTrait2;

    public $nombrePneud;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->nombrePneud = 4;
    
    }
    
    //Concretisation methode intro de la classe Abstraite Car
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
}