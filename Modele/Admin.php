<?php

class Admin
{
    public function ajouterRecette($Id, $Note, $Image,$Ingredients, $Ustensiles, $TempsPreparation, $Difficulte, $Cout, $Description, $Cuisson, $Particularite, $Appreciation ){
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $req = 'SELECT * FROM recette WHERE id = :id';
        $req_prep = $db->prepare($req);
        $req_prep->bindParam(':id', $Id, PDO::PARAM_INT);
        $req_prep->execute();
        if ($req_prep->rowCount() > 0) {
            echo '<div> ID déjà utilisé. </div>';
        }
        else {
            $req = 'INSERT INTO recette (id, note_moyenne, photographie, liste_ingredient, liste_ustensiles, temps_preparation, difficulte, cout, description_textuelle_preparation, type_cuisson, liste_particularite, liste_apprecation) VALUES(:id, :note_moyenne, :photographie, :liste_ingredient, :liste_ustensiles, :temps_preparation, :difficulte, :cout, :description_textuelle_preparation, :type_cuisson, :liste_particularite, :liste_apprecation)';
            $req_prep = $db->prepare($req);
            $req_prep->bindParam(':id', $Id, PDO::PARAM_INT);
            $req_prep->bindParam(':note_moyenne', $Note, PDO::PARAM_INT);
            $req_prep->bindParam(':photographie', $Image, PDO::PARAM_STR);
            $req_prep->bindParam(':liste_ingredient', $Ingredients, PDO::PARAM_STR);
            $req_prep->bindParam(':liste_ustensiles', $Ustensiles, PDO::PARAM_STR);
            $req_prep->bindParam(':temps_preparation', $TempsPreparation, PDO::PARAM_INT);
            $req_prep->bindParam(':difficulte', $Difficulte, PDO::PARAM_INT);
            $req_prep->bindParam(':cout', $Cout, PDO::PARAM_STR);
            $req_prep->bindParam(':description_textuelle_preparation', $Description,PDO::PARAM_STR);
            $req_prep->bindParam(':type_cuisson', $Cuisson, PDO::PARAM_STR);
            $req_prep->bindParam(':liste_particularite', $Particularite, PDO::PARAM_STR);
            $req_prep->bindParam(':liste_apprecation', $Appreciation, PDO::PARAM_INT);
            $req_prep->execute();
        }
    }


}

?>