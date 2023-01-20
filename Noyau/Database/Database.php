<?php

class Database
{
    // Définition des informations de connexion à la base de données

    // Tentative de connexion à la base de données
    public static function connect(String $host,String $user,String $password) : PDO{
        try
        {
            $bdd = new PDO("pgsql:host=$host; port=5432; dbname=$user; user=$user; password=$password");
            return $bdd;
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}

$database = new Database();
$database->connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");

?>