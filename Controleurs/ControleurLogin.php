<?php
//La class controleurLogin est un contrôleur qui gère les actions liées à la connexion et à
// l'inscription d'un utilisateur. Elle définit des méthodes "connecterAction",
// "inscrireAction" et "deconnexionAction" qui récupèrent les variables POST, vérifient les identifiants et
// déconnectent l'utilisateur.
final class ControleurLogin
{
    public function connecterAction()
    {
        // Récupération des variables
        $identifiant = $_POST['identifiant'];
        $mot_de_passe = $_POST['mot_de_passe'];

        // Vérification des identifiants
        $login = new Login();
        $result = $login->checkLogin($identifiant, $mot_de_passe);

        if ($result == false) {
            // Mauvais identifiant ou mot de passe
            echo '<div>Mauvais identifiant ou mot de passe.</div>';
        } else {
            // Connecté
            $_SESSION['identifiant'] = $identifiant;
            echo '<div>Vous êtes connecté.</div>';
            header("Location: /");
        }
    }

    public function inscrireAction(){
        $identifiant = $_POST['identifiant'];
        $mot_de_passe = $_POST['mot_de_passe'];
        $nom_affichage = $_POST['nom_affichage'];

        // Vérification des identifiants
        $login = new Login();
        $login->checkRegister($identifiant, $mot_de_passe, $nom_affichage);
        $_SESSION['identifiant'] = $identifiant;
        echo '<div>Vous êtes inscrit.</div>';
    }



    public function deconnexionAction(){
        $deconnexion = new Login();
        $deconnexion->deconnexion();
        echo '<div>Vous êtes déconnecté.</div>';
        header("Location: /");
    }




}
?>