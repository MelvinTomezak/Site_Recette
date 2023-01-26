<?php

class ControleurAdmin
{
    public function ajouterAction(){
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

    public function supprimerAction(){
        $Id = $_POST['id'];
        $supprimer = new Admin();
        $supprimer->supprimerRecette($Id);
        echo '<div>Recette supprimée.</div>';

    }



}