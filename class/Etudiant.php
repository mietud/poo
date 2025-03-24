<?php
require_once "Exceptions/AgeException.php";

class Etudiant{
    private $age;

     /**
     * Définit l'âge de l'étudiant
     * @param int $age L'âge à attribuer
     * @throws AgeException Si l'âge est négatif
     */
    public function setAge($age){
        if($age < 0){
            // Lève une exception personnalisée si la condition est remplie
            throw new AgeException();
        }
        // Affecte la valeur si elle est valide
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}