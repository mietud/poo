<?php
 require_once "Car.php";
 require_once "MyTrait.php";

class Audi extends Car {
    use MyTrait;

    //Concretisation methode intro de la classe Abstraite Car
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
}