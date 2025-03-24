<?php
// Définition d'une classe d'exception personnalisée pour gérer les erreurs liées à l'âge
class AgeException extends Exception { 
    /**
     * Constructeur de l'exception AgeException
     * @param string $message Message d'erreur par défaut si aucun n'est fourni
     */
    public function __construct($message = "Age doit être un nombre positif") 
    {
        // Appelle le constructeur de la classe parent (Exception) avec le message personnalisé
        parent::__construct($message);
    }
}
