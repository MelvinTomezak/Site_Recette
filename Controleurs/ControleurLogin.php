<?php
session_start();

final class ControleurLogin {
    public function defautAction(){
        $_SESSION['error_message'] = "";
        Vue::montrer('Connexion/Register');
    }

    public function connexionAction(){
        $_SESSION['error_message'] = "";
        Vue::montrer('Connexion/Login');
    }

    public function deconnexionAction(){
        session_destroy();
        header("Location: /");
    }

    public function inscriptionAction(){
        $_SESSION['error_message'] = "";
        Vue::montrer('Connexion/Register');
    }

    public function inscrireAction()
    {
        $db = new Database();
        $model = new Login($db);
        $nom_affichage = $_POST['nom_affichage'];
        $identifiant = $_POST['identifiant'];
        $mot_de_passe = $_POST['mot_de_passe'];

        if($nom_affichage == NULL || $identifiant == NULL || $mot_de_passe == NULL){
            $_SESSION['error_message'] = "Veuillez remplir tous les champs";
            Vue::montrer('Connexion/Register');
            return;
        }

        $result = $model->submitAction($nom_affichage, $identifiant, $mot_de_passe);

        if($result == "exists") {
            $_SESSION['error_message'] = "L'adresse mail existe déja";
            Vue::montrer('Connexion/Register');
            return;
        } elseif ($result == "success") {
            header("Location: /");
        } else {
            Vue::montrer('Connexion/Register');
        }
    }

    public function connecterAction(){
        $db = new Database();
        $model = new Login($db);
        $identifiant = $_POST['identifiant'];
        $mot_de_passe = $_POST['mot_de_passe'];

        if($identifiant == NULL || $mot_de_passe == NULL){
            $_SESSION['error_message'] = "Veuillez remplir tous les champs";
            Vue::montrer('Connexion/Login');
            return;
        }

        $result = $model->connecterAction($identifiant, $mot_de_passe);

        if($result == "success") {
            header("Location: /");
        } else {
            $_SESSION['error_message'] = "Identifiant ou mot de passe incorrect";
            Vue::montrer('Connexion/Login');
        }
    }
}

?>