<?php

class ControleurDefaut{
    public function voirAction($params){

        var_dump($params);
        if(isset($params[0])){
            $id = htmlspecialchars($params[0]);
            $ajouteRecette = new Recette($id);
            $ajouteRecette->uneRecette();

        }

        //    Vue::montrer("gabarit", Recette::uneRecette());

    }



    /* Récupérer la liste des types */
    public static function readAll(){
        $pageTitle = "Toutes les recettes";
        $tab_t = Recette::readAll();

    }

    public static function add(){
        $pageTitle = "...";
        if(isset($_POST['recette'])){
            $id = htmlspecialchars($_POST['recette']);
            $ajoutRecette = new Recette($id);
            $ajoutRecette->create();

        }
        else{
            controllerErreur::erreur("Problème dans la création de la recette");
        }
    }

    public static function update(){
        $pageTitle = "...";
        if(isset($_POST['type'])){
            $id = htmlspecialchars($_POST['recette']);
            $modifieRecette = new Recette($id);
            $modifieRecette->update();

        }
        else{
            controllerErreur::erreur("Problème dans la modification de la recette");
        }
    }

    public static function delete(){
        $pageTitle = "...";
        if(isset($_POST['recette'])){
            $id = htmlspecialchars($_POST['recette']);
            $supprimeRecette = new Recette($id);
            $supprimeRecette->delete();

        }
        else{
            controllerErreur::erreur("Problème dans la suppression de la  recette");
        }
    }
    public  function defautAction(){
        $recetteModel = new Recette();
        $recette = $recetteModel->avoir3recettes();

        Vue::montrer('Accueil/Accueil', array('recette' => $recette));

    }



    public static function laRecetteAction()
    {
        $pageTitle = "...";
        if (isset($_GET['recette'])) {
            $id = htmlspecialchars($_GET['recette']);
            $recette = new Recette($id);
            $recettes = $recette->uneRecette();
            //Vue::montrer('Accueil/Accueil', array('recette' =>  $recette));

        }

    }





    public static function something(){
        if(session::is_admin()){
            $pageTitle = "...";
        }
        else{
            controllerErreur::erreur("Action non autorisée pour un client");
        }
    }

    public function addRecette(){
        $Note = $_POST['note_moyenne'];
        $Image = $_POST['photographie'];
        $Ingedient = $_POST['liste_ingredient'];
        $Ustensiles = $_POST['liste_ustensiles'];
        $TempsPreparation = $_POST['temps_preparation'];
        $Difficulte = $_POST['difficulte'];
        $Cout = $_POST['cout'];
        $Description = $_POST['description_textuelle_preparation'];
        $Cuisson = $_POST['type_cuisson'];
        $Particularite = $_POST['liste_particularite'];
        $Appreciation = $_POST['liste_apprecation'];
        if($Note == NULL  || $Ingedient == NULL || $Ustensiles == NULL || $TempsPreparation == NULL || $Difficulte == NULL|| $Cout == NULL|| $Description == NULL|| $Cuisson == NULL|| $Particularite == NULL|| $Appreciation == NULL){
            $_SESSION['error_message'] = "Veuillez remplir tous les champs";
            return '../Vues/EditRecette/ajouterRecette';
        }

    }
}