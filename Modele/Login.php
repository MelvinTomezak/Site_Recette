<?php

class Login {
    private $req_prep;

    public function __construct($req_prep) {
        $this->req_prep = $req_prep;
    }

    public function submitAction($nom_affichage, $identifiant, $mot_de_passe){
        if($nom_affichage == NULL || $identifiant == NULL || $mot_de_passe == NULL){
            $_SESSION['error_message'] = "Veuillez remplir tous les champs";
            return;
        }

        $stmt = $this->req_prep->prepare("SELECT * FROM Login WHERE Email = ?");
        $stmt->execute(array($identifiant));
        $result = $stmt->fetchAll();

        if(count($result) > 0) {
            $_SESSION['error_message'] = "L'adresse mail existe déja";
            return;
        } else {
            $token = bin2hex(random_bytes(32));

            $query = $this->db->prepare("INSERT INTO Login (id_compte, pseudo, email, password, admin, token, date_creation, date_connexion) VALUES (:id_compte, :pseudo, :email, :password, :admin, :token, :date_creation, :date_connexion);");
            $query->bindValue(':id_compte', '', PDO::PARAM_INT);
            $query->bindValue(':nom_affichage', $nom_affichage, PDO::PARAM_STR);
            $query->bindValue(':email', $identifiant, PDO::PARAM_STR);
            $query->bindValue(':password', $mot_de_passe, PDO::PARAM_STR);
            $query->bindValue(':token', $token, PDO::PARAM_STR);
            $query->bindValue(':date_creation', date("Y-m-d H:i:s"), PDO::PARAM_STR);
            $query->bindValue(':date_connexion', date("Y-m-d H:i:s"), PDO::PARAM_STR);
            $query->execute();
            $_SESSION['token'] = $token;
            $_SESSION['nom_affichage'] = $nom_affichage;
        }
    }

    public function getCompteAction($identifiant, $mot_de_passe){

        $dateConnexion = date("Y-m-d H:i:s");

        $stmt2 = $this->db->prepare("UPDATE Login SET date_connexion = ?  WHERE identifiant=?");
        $stmt2->execute(array($dateConnexion,$identifiant));

        /*$stmt2 = $this->db->prepare("UPDATE Compte SET date_connexion = '?'  WHERE email=$mail");
        $stmt2->execute(array(date("Y-m-d H:i:s")));*/

        $stmt = $this->req_prep->prepare("SELECT * FROM Login WHERE Email = ?");
        $stmt->execute(array($identifiant));
        $result = $stmt->fetchAll();
        if ($result[0]["password"] == $mot_de_passe && $mot_de_passe != "") {
            $_SESSION['token'] = $result[0]['token'];
            $_SESSION['nom_affichage'] = $result[0]['nom_affichage'];
            $_SESSION['error_message'] = "";
        } else {
            $_SESSION['error_message'] = "Mauvais mot de passe ou pseudo";
        }

    }

}