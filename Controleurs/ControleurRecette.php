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
        $pageTitle = "...";
        if(isset($_POST['recette'])){
            $id = htmlspecialchars($_POST['recette']);
            $ajouteRecette = new ModeleRecette($id);
            $ajouteRecette->uneRecette();

        }
        
       // Vue::montrer("gabarit", Recette::uneRecette());
    }

    public static function laRecetteAction(){
        $pageTitle = "...";
        if(isset($_GET['recette'])){
            $id = htmlspecialchars($_GET['recette']);
            $ajouteRecette = new ModeleRecette($id);
            $ajouteRecette->laRecette();

        }

//        Vue::montrer("gabarit", Recette::laRecette());
    }


  /*  public function recetteRandomAffichage()
    {
        $O_recette =  new Recette();
        Vue::montrer('helloworld/voir', $O_recette->recetterandom3());

    }
    public function recetteRandom1affichage()
    {
        $O_recette =  new Recette();
        Vue::montrer('helloworld/voir', $O_recette->uneRecette());

    }*/

    /* Action reservée pour un administrateur */
    public static function something(){
        if(session::is_admin()){
            $pageTitle = "...";
        }
        else{
            controllerErreur::erreur("Action non autorisée pour un client");
        }
    }

}