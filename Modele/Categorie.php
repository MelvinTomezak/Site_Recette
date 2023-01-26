<?php

class Categorie
{
    public function rechercherRecette($recherche){
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'SELECT * FROM recette WHERE difficulte LIKE :recherche';
        $req_prep = $db->prepare($req);
        $req_prep->bindValue(':recherche', "%$recherche%", PDO::PARAM_STR);
        $req_prep->execute();
        $resultat = $req_prep->fetchAll();
        return $resultat;
    }
}