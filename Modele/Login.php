<?php

class Login {
    public function checkLogin($identifiant, $mot_de_passe)
    {
        // Connexion à la base de données
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");

        // Requête pour vérifier l'utilisateur
        $req = pg_query($db, 'SELECT * FROM utilisateur WHERE identifiant = \'' . $identifiant . '\' AND mot_de_passe = \'' . $mot_de_passe . '\'');

        if (pg_num_rows($req) > 0) {
            return true;
        } else {
            return 'Mauvais identifiant ou mot de passe.';
        }
    }

}

