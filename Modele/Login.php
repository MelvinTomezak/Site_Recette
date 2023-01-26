<?php

class Login {
    public function checkLogin($identifiant, $mot_de_passe)
    {
        // Connexion à la base de données
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");

        // Requête pour vérifier l'utilisateur
        $req = 'SELECT * FROM utilisateur WHERE identifiant = \'' . $identifiant . '\' AND mot_de_passe = \'' . $mot_de_passe . '\'';
        $req_prep = $db->prepare($req);
        $req_prep->execute();
        $result = $req_prep->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) == 0) {
            return 'Mauvais identifiant ou mot de passe.';
        } else {
            return true;
        }
    }

    public function checkRegister($identifiant, $mot_de_passe, $nom_affichage)
    {
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        if ($db === false) {
            echo '<div>Impossible de se connecter à la base de données.</div>';
            return;
        }
        // Vérification des identifiants
        $req = 'SELECT * FROM utilisateur WHERE identifiant = :identifiant';
        $req_prep = $db->prepare($req);
        $req_prep->bindParam(':identifiant', $identifiant);
        $req_prep->execute();
        $result = $req_prep->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            // Mauvais identifiant ou mot de passe
            echo '<div>Cet identifiant est déjà utilisé.</div>';
        } else {
            // Connecté
            $req = 'INSERT INTO utilisateur (identifiant, mot_de_passe,nom_affichage,date_premiere_connexion,date_derniere_connexion, photographie) VALUES (:identifiant, :mot_de_passe, :nom_affichage, NOW(), NOW(), NULL)';
            $req_prep = $db->prepare($req);
            $req_prep->bindParam(':identifiant', $identifiant);
            $req_prep->bindParam(':mot_de_passe', $mot_de_passe);
            $req_prep->bindParam(':nom_affichage', $nom_affichage);
            $req_prep->execute();
        }
    }

    public function deconnexion(){
        session_destroy();
    }

}

