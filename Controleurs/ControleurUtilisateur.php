<?php


class ControleurUtilisateur
{
    /* Récupérer la liste des types */
    public static function readAll()
    {
        $pageTitle = "Tous les utilisateur";
        $tab_t = ModelUtilisateur::readAll();

    }

    public static function add()
    {
        $pageTitle = "...";
        if (isset($_POST['appreciation'])) {
            $id = htmlspecialchars($_POST['utilisateur']);
            $ajoutModelUtilisateur = new ModelUtilisateur($id);
            $ajoutModelUtilisateur->create();

        } else {
            controllerErreur::erreur("Problème dans la création de la recette");
        }
    }

    public static function update()
    {
        $pageTitle = "...";
        if (isset($_POST['utilisateur'])) {
            $id = htmlspecialchars($_POST['utilisateur']);
            $modifieModelUtilisateur = new ModelUtilisateur($id);
            $modifieModelUtilisateur->update();

        } else {
            controllerErreur::erreur("Problème dans la modification de la recette");
        }
    }

    public static function delete()
    {
        $pageTitle = "...";
        if (isset($_POST['utilisateur'])) {
            $id = htmlspecialchars($_POST['utilisateur']);
            $supprimeModelUtilisateur = new ModelAppreciation($id);
            $supprimeModelUtilisateur->delete();

        } else {
            controllerErreur::erreur("Problème dans la suppression de la  recette");
        }
    }

    /* Action reservée pour un administrateur */
    public static function something()
    {
        if (session::is_admin()) {
            $pageTitle = "...";
        } else {
            controllerErreur::erreur("Action non autorisée pour un client");
        }
    }

}