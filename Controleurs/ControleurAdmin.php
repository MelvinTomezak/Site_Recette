<?php

class ControleurAdmin
{
    public function ajouterAction()
    {
        $Id = $_POST['id'];
        $Nom = $_POST['nom_recette'];
        $Note = $_POST['note_moyenne'];
        $Image = $_POST['photographie'];
        $Ingredients = $_POST['liste_ingredient'];
        $Ustensiles = $_POST['liste_ustensile'];
        $TempsPreparation = $_POST['temps_preparation'];
        $Difficulte = $_POST['difficulte'];
        $Cout = $_POST['cout'];
        $Description = $_POST['description_textuelle_preparation'];
        $Cuisson = $_POST['type_cuisson'];
        $Particularite = $_POST['liste_particularite'];

        $ajouter = new Admin();
        $ajouter->ajouterRecette($Id, $Nom, $Note, $Image, $Ingredients, $Ustensiles, $TempsPreparation, $Difficulte, $Cout, $Description, $Cuisson, $Particularite);
        echo '<div>Recette ajoutée.</div>';


    }

    public function supprimerAction()
    {
        $Id = $_POST['id'];
        $supprimer = new Admin();
        $supprimer->supprimerRecette($Id);
        echo '<div>Recette supprimée.</div>';

    }

    public function commenterAction()
    {
//fonction pour ajouter un commentaire
        if (isset($_POST['submit'])) {
            $id_auteur = $_POST['id_auteur'];
            $nom_auteur = $_POST['nom_auteur'];
            $note = $_POST['note'];
            $date = date("Y-m-d");
            $commentaire = $_POST['commentaire'];

            //execution de la fonction addComment()
            $query = addComment($id_auteur, $nom_auteur, $note, $date, $commentaire);
            if ($query) {
                //si la requete est executée avec succès
                header("location:index.php?success");
            } else {
                //si la requete n'est pas executée
                header("location:index.php?failed");
            }
        }


//fonction pour recuperer tous les commentaires
        $comments = getComments();
    }


}





