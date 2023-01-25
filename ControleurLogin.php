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
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $model = new Login($db);
        $model->submitAction($_GET['username'], $_GET['email'], $_GET['password'], 0);
        if($_SESSION['error_message'] != ""){
            Vue::montrer('Connexion/Login');
        }else{
            header("Location: /");
        }
    }

    public function connecterAction(){
        if($_GET['email'] == NULL || $_GET['password'] == NULL){
            $_SESSION['error_message'] = "Veuillez remplir tous les champs";
            Vue::montrer('Connexion/Register');
            return;
        }
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        $model = new Login($db);
        $model->connecterAction($_GET['email'], $_GET['password']);
        if($_SESSION['token'] == true){
            header("Location: /");
        } else {
            Vue::montrer('Connexion/Login');
        }
    }
}

?>