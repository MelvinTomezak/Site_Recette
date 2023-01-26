<?php
// La classe ControleurDefaut définit le contrôleur par défaut pour le système.
// Elle définit les méthodes nécessaires pour gérer les actions de l'utilisateur, telles que lire, ajouter, mettre à jour et supprimer des recettes.
// Elle définit également la méthode par défautAction() qui est appelée pour afficher les trois recettes par défaut et la méthode laRecetteAction() qui est appelée pour afficher une recette spécifique.
// Enfin, elle définit la méthode something() qui vérifie si la session est administrateur. Si ce n'est pas le cas, une erreur est déclenchée.
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




}