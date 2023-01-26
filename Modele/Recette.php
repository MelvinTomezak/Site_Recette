
//Ce code définit une classe Recette qui contient des méthodes statiques pour récupérer des informations en base de données et pour commenter une recette. Les méthodes readAll() et avoir3recettes() permettent de récupérer des informations sur les recettes, laRecette() permet de récupérer une recette unique et toutesLesRecettes() permet de récupérer toutes les recettes. La méthode commenter() permet de commenter une recette et la méthode rechercherRecette() permet de rechercher une recette par son nom.

<?php

class Recette{


    public  function readAll(){
        $sql = "SELECT * FROM recette";
        $rep = Database::$con->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Recette');
        return $rep->fetchAll();
    }
    public static function avoir3recettes(){

        $sql = 'SELECT id, nom_recette, photographie, difficulte, temps_preparation ,note_moyenne FROM recette ORDER BY RANDOM() LIMIT 3';
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
        $sql = "SELECT * FROM recette WHERE id = ? ";
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

    public static function commenter(){
        $sql = 'INSERT into ';
        $req_prep = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N")->prepare($sql);

    }


    public function rechercherRecette($recherche){
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'SELECT * FROM recette WHERE nom_recette LIKE :recherche';
        $req_prep = $db->prepare($req);
        $req_prep->bindValue(':recherche', "%$recherche%", PDO::PARAM_STR);
        $req_prep->execute();
        $resultat = $req_prep->fetchAll();
        return $resultat;
    }






}