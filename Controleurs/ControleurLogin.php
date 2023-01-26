<?php

final class ControleurLogin
{
    public function connecterAction()
    {
        // Récupération des variables
        $identifiant = $_POST['identifiant'];
        $mot_de_passe = $_POST['mot_de_passe'];

        // Connexion à la base de données
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        if ($db === false) {
            echo '<div>Impossible de se connecter à la base de données.</div>';
            return;
        }
        // Vérification des identifiants
        $req = 'SELECT * FROM utilisateur WHERE identifiant = \'' . $identifiant . '\' AND mot_de_passe = \'' . $mot_de_passe . '\'';
        $req_prep = $db->prepare($req);
        $req_prep->execute();
        $result = $req_prep->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) == 0) {
            // Mauvais identifiant ou mot de passe
            echo '<div>Mauvais identifiant ou mot de passe.</div>';
        } else {
            // Connecté
            $_SESSION['identifiant'] = $identifiant;
            echo '<div>Vous êtes connecté.</div>';
        }
    }


}
?>