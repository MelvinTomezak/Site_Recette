<?php

class Recette{


    public  function readAll(){
        $sql = "SELECT * FROM recette";
        $rep = Database::$con->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Recette');
        return $rep->fetchAll();
    }

    public function create(){
        $sql = "INSERT INTO recette(id) VALUES (:idT)";
        $req_prep = Database::$con->prepare($sql);
        $values = array("id" => NULL);
        $req_prep->execute($values);
    }

    public function update(){
        $sql = 'UPDATE recette SET id = :idT';
        $req_prep = Database::$con->prepare($sql);
        $values = array("id" => $this->id);
        $req_prep->execute($values);
    }

    public function delete(){
        $sql = "DELETE FROM recette WHERE id = :idT";
        $req_prep = Database::$con->prepare($sql);
        $values = array("id" => $this->id);
        $req_prep->execute($values);
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
    public function delete1(){
        $database = new Database();
        $con = $database->getConnection();
        $sql = "DELETE FROM recette WHERE id = :idT";
        $req_prep = $con->prepare($sql);
        $values = array("id" => $this->id);
        $req_prep->execute($values);
        return $req_prep;
    }
    public function ajouterRecette($Id, $Note, $Image,$Ingredients, $Ustensiles, $TempsPreparation, $Difficulte, $Cout, $Description, $Cuisson, $Particularite, $Appreciation ){
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'INSERT INTO recette (id, note_moyenne, photographie, liste_ingredient, liste_ustensiles, temps_preparation, difficulte, cout, description_textuelle_preparation, type_cuisson, liste_particularite, liste_apprecation) VALUES(:id, :note_moyenne, :photographie, :liste_ingredient, :liste_ustensiles, :temps_preparation, :difficulte, :cout, :description_textuelle_preparation, :type_cuisson, :liste_particularite, :liste_apprecation)';
        $req_prep = $db->prepare($req);
        $req_prep->bindParam(':id', $Id);
        $req_prep->bindParam(':note_moyenne', $Note);
        $req_prep->bindParam(':photographie', $Image);
        $req_prep->bindParam(':liste_ingredient', $Ingredients);
        $req_prep->bindParam(':liste_ustensiles', $Ustensiles);
        $req_prep->bindParam(':temps_preparation', $TempsPreparation);
        $req_prep->bindParam(':difficulte', $Difficulte);
        $req_prep->bindParam(':cout', $Cout);
        $req_prep->bindParam(':description_textuelle_preparation', $Description);
        $req_prep->bindParam(':type_cuisson', $Cuisson);
        $req_prep->bindParam(':liste_particularite', $Particularite);
        $req_prep->bindParam(':liste_apprecation', $Appreciation);
        $req_prep->execute();

    }



}