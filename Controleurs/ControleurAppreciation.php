<?php
//La class ControleurAppreciation est un contrôleur qui permet d'effectuer des actions sur les appreciations.
//Elle contient des méthodes pour créer, modifier, supprimer et lire des appreciations.

class ControleurAppreciation
{
    /* Récupérer la liste des types */
    public static function readAll()
    {
        $pageTitle = "Toutes les appreciations";
        $tab_t = ModeleAppreciation::readAll();

    }
    //la fonction add permet d'ajouter une appréciation
    public static function add()
    {
        $pageTitle = "...";
        if (isset($_POST['appreciation'])) {
            $id = htmlspecialchars($_POST['appreciation']);
            $ajoutModelAppreciation = new ModeleAppreciation($id);
            $ajoutModelAppreciation->create();

        } else {
            controllerErreur::erreur("Problème dans la création de la recette");
        }
    }
    //la fonction update permet de mettre a jour une appréciation
    public static function update()
    {
        $pageTitle = "...";
        if (isset($_POST['appreciation'])) {
            $id = htmlspecialchars($_POST['appreciation']);
            $modifieModelAppreciation = new ModeleAppreciation($id);
            $modifieModelAppreciation->update();

        } else {
            controllerErreur::erreur("Problème dans la modification de la recette");
        }
    }
    //la fonction delete permete de supprimer une appreciation
    public static function delete()
    {
        $pageTitle = "...";
        if (isset($_POST['appreciation'])) {
            $id = htmlspecialchars($_POST['appreciation']);
            $supprimeModelAppreciation = new ModeleAppreciation($id);
            $supprimeModelAppreciation->delete();

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