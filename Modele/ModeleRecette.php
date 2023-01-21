<?php


class ModeleRecette{

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
    public function recetterandom3(){
        $sql = 'SELECT * FROM recettes 
ORDER BY RAND() 
LIMIT 3;';
        $req_prep = Database::$con->prepare($sql);
        $values = array("id" => $this->id);
        $req_prep->execute($values);
        $response = $req_prep->fetch();
        return $response;
    }
//    public  function uneRecette(){
//        $sql = 'SELECT * FROM recettes
//ORDER BY RAND()
//LIMIT 1;';
//        $req_prep = Database::$con->prepare($sql);
//        $values = array("id" => $this->id);
//        $req_prep->execute($values);
//        $recette = $req_prep->fetch();
//        return $recette;
//    }
    public static function uneRecette(){
        $sql = 'SELECT * FROM recette 
ORDER BY RANDOM() 
LIMIT 1;';
        $req_prep = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N")->prepare($sql);
        $req_prep->execute();
        $recette = $req_prep->fetch();
        return $recette;
    }
    public static function laRecette(){
$sql = 'SELECT  photographie, difficulte, temps_preparation ,note_moyenne
FROM recette
WHERE id = :id';

$req_prep = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N")->prepare($sql);
$values = array(":id" => 1);
$req_prep->execute($values);
$recette = $req_prep->fetch();
return $recette;

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


}