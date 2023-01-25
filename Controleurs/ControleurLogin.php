<?php
session_start();

final class ControleurLogin
{
    public function defautAction(){
        $_SESSION['error_message'] = "";
        Vue::montrer('Connexion/Register');
    }

    public function connexionAction(){
        $_SESSION['error_message'] = "";
        Vue::montrer('Connexion/Login');
    }

    public function deconnexionAction(){
        $_SESSION['error_message'] = "";
        $_SESSION["pseudo"] = NULL;
        $_SESSION["token"] = NULL;
        header("Location: /");
    }

    public function inscriptionAction(){
        $_SESSION['error_message'] = "";
        Vue::montrer('Connexion/Register');
    }

    public function inscrireAction()
    {
        $req_prep = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $model = new Login($req_prep);
        $model->submitAction($_GET['nom_affichage'], $_GET['identifiant'], $_GET['mot_de_passe']);
        if($_SESSION['error_message'] != ""){
            Vue::montrer('Connexion/Register');
        }else{
            header("Location: /");
        }
    }

    public function connecterAction(){
        if($_GET['identifiant'] == NULL || $_GET['mot_de_passe'] == NULL){
            $_SESSION['error_message'] = "Veuillez remplir tous les champs";
            Vue::montrer('Connexion/Login');
            return;
        }

        $req_prep = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $model = new Login($req_prep);
        $model->getCompteAction($_GET['identifiant'], $_GET['mot_de_passe']);
        if($_SESSION['token'] == true){
            header("Location: /");
        } else {
            Vue::montrer('Connexion/Login');
        }
    }

}
?>