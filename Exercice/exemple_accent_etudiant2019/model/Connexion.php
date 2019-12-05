<?php

class Connexion
{
	// protected car on en veut pas qu'il soit accessible directement, seulement par ses filles en héritage
    protected function getConnexion()
    {
        $db = new \PDO('mysql:host=localhost;dbname=ecole', 'root', '',array( 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // le \pdo c'est pour le namespace globale
        return $db;
    }
}



?>