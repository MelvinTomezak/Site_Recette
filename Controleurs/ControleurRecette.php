<?php

class ControleurRecette{
    public function voirAction($params){

        var_dump($params);
        if(isset($params[0])){
            $id = htmlspecialchars($params[0]);
            $ajouteRecette = new ModeleRecette($id);
            $ajouteRecette->uneRecette();

        }

        //    Vue::montrer("gabarit", Recette::uneRecette());

    }



    /* Récupérer la liste des types */
    public static function readAll(){
        $pageTitle = "Toutes les recettes";
        $tab_t = ModeleRecette::readAll();

    }

    public static function add(){
        $pageTitle = "...";
        if(isset($_POST['recette'])){
            $id = htmlspecialchars($_POST['recette']);
            $ajoutRecette = new ModeleRecette($id);
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
            $modifieRecette = new ModeleRecette($id);
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
            $supprimeRecette = new ModeleRecette($id);
            $supprimeRecette->delete();

        }
        else{
            controllerErreur::erreur("Problème dans la suppression de la  recette");
        }
    }
    public static function recetterandomAction(){
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $recetteModel = new ModeleRecette($db);
        $recette = $recetteModel->avoir3recettes;

        Vue::montrer('Acceuil/Acceuil', array('recette' => $recette));

    }



    public static function laRecetteAction()
    {
        $pageTitle = "...";
        if (isset($_GET['recette'])) {
            $id = htmlspecialchars($_GET['recette']);
            $recette = new ModeleRecette($id);
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