<?php
 require_once "Car.php";
class Audi extends Car {
    //Concretisation methode intro de la classe Abstraite Car
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
}