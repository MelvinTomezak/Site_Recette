<?php
require_once("../Noyau/Database/ConnexionBD.php");

class ModelAppreciation{

    public static function readAll(){
        $sql = "SELECT * FROM appreciation";
        $rep = Database::$con->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'appreciation');
        return $rep->fetchAll();
    }

    public function create(){
        $sql = "INSERT INTO appreciation(id) VALUES (:idT)";
        $req_prep = Database::$con->prepare($sql);
        $values = array("id" => NULL);
        $req_prep->execute($values);
    }

    public function update(){
        $sql = 'UPDATE appreciation SET id = :idT';
        $req_prep = Database::$con->prepare($sql);
        $values = array("appreciation" => $this->id);
        $req_prep->execute($values);
    }

    public function delete(){
        $sql = "DELETE FROM appreciation WHERE id = :idT";
        $req_prep = Database::$con->prepare($sql);
        $values = array("id" => $this->id);
        $req_prep->execute($values);
    }

}