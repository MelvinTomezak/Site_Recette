<?php
// La class ControleurUtilisateur représente un contrôleur Utilisateur qui permet d'effectuer des actions sur un utilisateur.
// Elle permet de récupérer la liste des utilisateurs, d'ajouter, de modifier et supprimer un utilisateur et une
// action réservée pour un administrateur. Les méthodes utilisées proviennent du modèle Utilisateur.

class ControleurUtilisateur
{
    /* Récupérer la liste des types */
    public static function readAll()
    {
        $pageTitle = "Tous les utilisateur";
        $tab_t = ModeleUtilisateur::readAll();

    }

    public static function add()
    {
        $pageTitle = "...";
        if (isset($_POST['appreciation'])) {
            $id = htmlspecialchars($_POST['utilisateur']);
            $ajoutModelUtilisateur = new ModeleUtilisateur($id);
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
            $modifieModelUtilisateur = new ModeleUtilisateur($id);
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
            $supprimeModelUtilisateur = new ModeleAppreciation($id);
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