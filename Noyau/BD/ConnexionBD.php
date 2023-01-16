<?php

class Database
{
    // Définition des informations de connexion à la base de données
    private $host = "rogue.db.elephantsql.com";
    private $user = "ykutlvtz";
    private $pass = "3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N";
    private $db = "ykutlvtz";

    // Tentative de connexion à la base de données
    public function connect()
    {
        try {
            $con = new PDO("pgsql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
        }
            // En cas d'erreur, affichage d'un message d'erreur
        catch (PDOException $e) {
            die("Erreur !: " . $e->getMessage());
        }
    }
}

$database = new Database();
$database->connect();

?>