<?php

// Initialize the database variables
$host = "rogue.db.elephantsql.com";
$user = "ykutlvtz";
$password = "3PxkHEMPaNMPMyiiHpHEj6ZgWzShh54N65";
$db = "ykutlvtz";


abstract class Model{

    private static $_bdd;

    // CONNEXION BDD

    private static function setBdd()
    {
        self::$_bdd = new PDO("pgsql:host=$host; port=5432; dbname=$db; user=$user; password=$password");
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            
    }

    // RECUP BDD
    protected function getBdd()
    {
        if(self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }


    protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->getBdd->prepare('SELECT * FROM'.table. 'ORDER BY id desc');
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }






?>