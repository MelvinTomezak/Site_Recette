<?php

final class ControleurRecette{
    public function voirAction($params){

        var_dump($params);
        if(isset($params[0])){
            $id = htmlspecialchars($params[0]);
            $ajouteRecette = new Recette($id);
            $ajouteRecette->uneRecette();

        }

        //    Vue::montrer("gabarit", Recette::uneRecette());

    }

    public static function recetteAction($params){
    $modelRecette = new Recette();
    $recette = $modelRecette->laRecette($params[0]);

    Vue::montrer('Recette/Recette',array('recette' => $recette));    }

    public static function supprimerRecetteAction($params){
        $modelRecette = new Recette();
        $recette = $modelRecette->laRecette($params[0]);
        Vue::montrer('Recette/Recette',array('recette' => $recette));    }



    public  function catalogueRecetteAction(){
        $recetteModel = new Recette();
        $recette = $recetteModel->toutesLesRecettes();

        Vue::montrer('Recette/CatalogueRecette', array('recette' => $recette));

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

}