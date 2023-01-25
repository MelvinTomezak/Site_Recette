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

        $stmt = $this->req_prep->prepare("SELECT * FROM Login WHERE identifiant = ?");
        $stmt->execute(array($identifiant));
        $result = $stmt->fetchAll();

        if(count($result) > 0) {
            $_SESSION['error_message'] = "L'adresse mail existe déja";
            return;
        } else {
            $token = bin2hex(random_bytes(32));

            $query = $this->req_prep->prepare("INSERT INTO Login (id, nom_affichage, identifiant, mot_de_passe, date_premiere_connexion, date_derniere_connexion) VALUES (:id, :nom_affichage, :identifiant, :mot_de_passe, :date_premiere_connexion, :date_derniere_connexion);");
            $query->bindValue(':id', '', PDO::PARAM_INT);
            $query->bindValue(':nom_affichage', $nom_affichage, PDO::PARAM_STR);
            $query->bindValue(':identifiant', $identifiant, PDO::PARAM_STR);
            $query->bindValue(':mot_de_passe', $mot_de_passe, PDO::PARAM_STR);
            $query->bindValue(':token', $token, PDO::PARAM_STR);
            $query->bindValue(':date_premiere_connexion	', date("Y-m-d H:i:s"), PDO::PARAM_STR);
            $query->bindValue(':date_derniere_connexion', date("Y-m-d H:i:s"), PDO::PARAM_STR);
            $query->execute();
            $_SESSION['token'] = $token;
            $_SESSION['nom_affichage'] = $nom_affichage;
            return "success";
        }
    }

    public function connecterAction($identifiant, $mot_de_passe){

        $stmt = $this->req_prep->prepare("SELECT * FROM Login WHERE identifiant = ?");
        $stmt->execute(array($identifiant));
        $result = $stmt->fetchAll();
        if ($result[0]["mot_de_passe"] == $mot_de_passe && $mot_de_passe != "") {
            $_SESSION['token'] = $result[0]['token'];
            $_SESSION['nom_affichage']            = $result[0]['nom_affichage'];
            $_SESSION['error_message'] = "";
            $stmt2 = $this->req_prep->prepare("UPDATE Login SET date_derniere_connexion = ?  WHERE identifiant=?");
            $stmt2->execute(array(date("Y-m-d H:i:s"),$identifiant));
            return "success";
        } else {
            $_SESSION['error_message'] = "Identifiant ou mot de passe incorrect";
            return "fail";
        }

    }

}

