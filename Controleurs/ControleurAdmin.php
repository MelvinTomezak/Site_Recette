<?php

class ControleurAdmin
{
    public function ajouterAction(){
        $Id = $_POST['id'];
        $Note = $_POST['note_moyenne'];
        $Image = $_POST['photographie'];
        $Ingedients = $_POST['liste_ingredient'];
        $Ustensiles = $_POST['liste_ustensiles'];
        $TempsPreparation = $_POST['temps_preparation'];
        $Difficulte = $_POST['difficulte'];
        $Cout = $_POST['cout'];
        $Description = $_POST['description_textuelle_preparation'];
        $Cuisson = $_POST['type_cuisson'];
        $Particularite = $_POST['liste_particularite'];
        $Appreciation = $_POST['liste_apprecation'];

        $ajouter = new Admin();
        $ajouter->ajouterRecette($Id, $Note, $Image,$Ingedients, $Ustensiles, $TempsPreparation, $Difficulte, $Cout, $Description, $Cuisson, $Particularite, $Appreciation);
        echo '<div>Recette ajoutée.</div>';


    }
}