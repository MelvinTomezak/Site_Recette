<?php

class Admin
{
    public function ajouterRecette($Id, $Nom, $Note, $Image, $Ingredients, $Ustensiles, $TempsPreparation, $Difficulte, $Cout, $Description, $Cuisson, $Particularite)
    {
        $db = Database::connect("rogue.db.elephantsql.com", "ykutlvtz", "3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'SELECT * FROM recette WHERE id = :id';
        $req_prep = $db->prepare($req);
        $req_prep->bindParam(':id', $Id, PDO::PARAM_INT);
        $req_prep->execute();
        if ($req_prep->rowCount() > 0) {
            echo '<div> ID déjà utilisé. </div>';
        } else {
            $req = 'INSERT INTO recette (id, nom_recette, note_moyenne, photographie, liste_ingredient, liste_ustensile, temps_preparation, difficulte, cout, description_textuelle_preparation, type_cuisson, liste_particularite) 
VALUES (:id, :nom_recette, :note_moyenne, :photographie, :liste_ingredient, :liste_ustensile, :temps_preparation, :difficulte, :cout, :description_textuelle_preparation, :type_cuisson, :liste_particularite)';
            $req_prep = $db->prepare($req);
            $req_prep->bindParam(':id', $Id, PDO::PARAM_INT);
            $req_prep->bindParam(':nom_recette', $Nom, PDO::PARAM_STR);
            $req_prep->bindParam(':note_moyenne', $Note, PDO::PARAM_INT);
            $req_prep->bindParam(':photographie', $Image, PDO::PARAM_STR);
            $req_prep->bindParam(':liste_ingredient', $Ingredients, PDO::PARAM_STR);
            $req_prep->bindParam(':liste_ustensile', $Ustensiles, PDO::PARAM_STR);
            $req_prep->bindParam(':temps_preparation', $TempsPreparation, PDO::PARAM_INT);
            $req_prep->bindParam(':difficulte', $Difficulte, PDO::PARAM_STR);
            $req_prep->bindParam(':cout', $Cout, PDO::PARAM_INT);
            $req_prep->bindParam(':description_textuelle_preparation', $Description, PDO::PARAM_STR);
            $req_prep->bindParam(':type_cuisson', $Cuisson, PDO::PARAM_STR);
            $req_prep->bindParam(':liste_particularite', $Particularite, PDO::PARAM_STR);
            $req_prep->execute();
        }
    }

    public function RechercherRecette($Recherche){
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'SELECT * FROM recette WHERE nom_recette = :Recherche';
        $req_prep = $db->prepare($req);
        $req_prep->bindParam(':Recherche', $Recherche,PDO::PARAM_STR);
        $req_prep->execute();
    }
    public function RecupererImage($photographie){
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'SELECT photographie FROM recette WHERE id = :id';
        $req_prep = $db->prepare($req);
        $req_prep->bindParam(':id', $photographie);
        $req_prep->execute();
}
    public function supprimerRecette($Id)
    {
        $db = Database::connect("rogue.db.elephantsql.com", "ykutlvtz", "3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'DELETE FROM recette WHERE id = :id';
        $req_prep = $db->prepare($req);
        $req_prep->bindParam(':id', $Id, PDO::PARAM_INT);
        $req_prep->execute();
    }

    public function deconnexion()
    {
        session_destroy();
    }

//fonction pour ajouter un commentaire
    public function ajouterCommentaire($Id, $nom, $note, $date, $commentaire)
    {
        $db = Database::connect("rogue.db.elephantsql.com", "ykutlvtz", "3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'INSERT INTO appreciation (id, nom_auteur, note, date, commentaire)
VALUES (:id, :nom_auteur, :note, :date, :commentaire)';
        $req_prep = $db->prepare($req);
        $req_prep->bindParam(':id', $Id, PDO::PARAM_INT);
        $req_prep->bindParam(':nom_auteur', $nom, PDO::PARAM_STR);
        $req_prep->bindParam(':note', $note, PDO::PARAM_INT);
        $req_prep->bindParam(':date', $date, PDO::PARAM_STR);
        $req_prep->bindParam(':commentaire', $commentaire, PDO::PARAM_STR);
        $req_prep->execute();

    }

    public function modifierRecette($Id, $Nom, $Note, $Image, $Ingredients, $Ustensiles, $TempsPreparation, $Difficulte, $Cout, $Description, $Cuisson, $Particularite)
    {
        $db = Database::connect("rogue.db.elephantsql.com", "ykutlvtz", "3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'UPDATE recette SET nom_recette = :nom_recette, note_moyenne = :note_moyenne, photographie = :photographie, liste_ingredient = :liste_ingredient, liste_ustensile = :liste_ustensile, temps_preparation = :temps_preparation, difficulte = :difficulte, cout = :cout, description_textuelle_preparation = :description_textuelle_preparation, type_cuisson = :type_cuisson, liste_particularite = :liste_particularite WHERE id = :id';
        $req_prep = $db->prepare($req);
        $req_prep->bindParam(':id', $Id, PDO::PARAM_INT);
        $req_prep->bindParam(':nom_recette', $Nom, PDO::PARAM_STR);
        $req_prep->bindParam(':note_moyenne', $Note, PDO::PARAM_INT);
        $req_prep->bindParam(':photographie', $Image, PDO::PARAM_STR);
        $req_prep->bindParam(':liste_ingredient', $Ingredients, PDO::PARAM_STR);
        $req_prep->bindParam(':liste_ustensile', $Ustensiles, PDO::PARAM_STR);
        $req_prep->bindParam(':temps_preparation', $TempsPreparation, PDO::PARAM_INT);
        $req_prep->bindParam(':difficulte', $Difficulte, PDO::PARAM_STR);
        $req_prep->bindParam(':cout', $Cout, PDO::PARAM_INT);
        $req_prep->bindParam(':description_textuelle_preparation', $Description, PDO::PARAM_STR);
        $req_prep->bindParam(':type_cuisson', $Cuisson, PDO::PARAM_STR);
        $req_prep->bindParam(':liste_particularite', $Particularite, PDO::PARAM_STR);
        $req_prep->execute();
    }
}

