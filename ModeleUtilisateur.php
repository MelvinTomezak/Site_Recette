<?php
require_once("../Noyau/Database/Database.php");

class ModeleUtilisateur{

    public static function readAll(){
        $sql = "SELECT * FROM utilisateur";
        $rep = Database::$con->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'appreciation');
        return $rep->fetchAll();
    }

    public function create(){
        $sql = "INSERT INTO utilisateur(id) VALUES (:idT)";
        $req_prep = Database::$con->prepare($sql);
        $values = array("id" => NULL);
        $req_prep->execute($values);
    }

    public function update(){
        $sql = 'UPDATE utilisateur SET id = :idT';
        $req_prep = Database::$con->prepare($sql);
        $values = array("id" => $this->id);
        $req_prep->execute($values);
    }

    public function delete(){
        $sql = "DELETE FROM utilisateur WHERE id = :idT";
        $req_prep = Database::$con->prepare($sql);
        $values = array("id" => $this->id);
        $req_prep->execute($values);
    }

}