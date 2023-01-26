<?php

class Recette{


    public  function readAll(){
        $sql = "SELECT * FROM recette";
        $rep = Database::$con->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Recette');
        return $rep->fetchAll();
    }



    public static function avoir3recettes(){

        $sql = 'SELECT id, photographie, difficulte, temps_preparation ,note_moyenne FROM recette ORDER BY RANDOM() LIMIT 3';
        $req_prep = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N")->prepare($sql);
        $req_prep->execute();
        $recettes = $req_prep->fetchAll(PDO::FETCH_ASSOC);
        return $recettes;
    }
    public static function uneRecette(){
        $sql = 'SELECT  photographie, difficulte, temps_preparation ,note_moyenne FROM recette 
ORDER BY RANDOM() 
LIMIT 3';
        $req_prep = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N")->prepare($sql);
        $req_prep->execute();
        $recette = $req_prep->fetch();
        return $recette;
    }
    public static function laRecette($id){
        $sql = "SELECT * FROM recette WHERE $id = $1 ";
        $req_prep = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N")->prepare($sql);
        $values = array($id);
        $req_prep->execute($values);
        $recette = $req_prep->fetchAll(PDO::FETCH_OBJ);
        return $recette;

    }
    public static function toutesLesRecettes() {
        $sql = 'SELECT * FROM recette  LIMIT 100';

        $req_prep = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N")->prepare($sql);
        $req_prep->execute();
        $recettes = $req_prep->fetchAll(PDO::FETCH_ASSOC);
        return $recettes;
    }


}