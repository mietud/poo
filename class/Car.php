<?php
/* 
  C'est une class qui ne peut pas être instanciée directement.
  Elle sert de model pour les calsses enfants.

*/
abstract class Car {
    public $name;
    private $matricule;

    // Constructeur
    public function __construct($name) {
      $this->name = $name;
    }

    //Exemple methode abstraite.
    abstract public function intro() : string;
   
    /**
    * Set matricule 
    * @param string $matricule matricule
    *
    */
    public function setMatricule($matricule){
      $this->matricule = $matricule;
    }
    public function getMatricule(){
      return $this->matricule;
    }
  }
