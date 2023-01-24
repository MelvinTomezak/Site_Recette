<?php


class ControleurLogin
{
    private $identifiant;
    private $mot_de_passe;

    public function __construct($identifiant, $mot_de_passe)
    {
        $this->identifiant = $identifiant;
        $this->mot_de_passe = $mot_de_passe;
    }

    public function login()
    {
        // Vérification des informations de connexion
        if ($this->identifiant && $this->mot_de_passe) {
            // Requête de vérification des informations de connexion
            $sql = "SELECT * FROM utilisateur WHERE identifiant = :identifiant AND mot_de_passe = :mot_de_passe";
            $stmt = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N")->prepare($sql);
            $stmt->bindParam(':identifiant', $this->identifiant);
            $stmt->bindParam(':mot_de_passe', $this->mot_de_passe);
            $stmt->execute();

            // Vérification du résultat de la requête
            if ($stmt->rowCount() > 0) {
                // Stockage des informations de connexion
                session_start();
                $_SESSION['identifiant'] = $this->identifiant;
                $_SESSION['mot_de_passe'] = $this->mot_de_passe;

                // Redirection vers la page d'accueil
                header("Location: index.php");
            } else {
                // Affichage d'un message d'erreur
                echo "Les informations de connexion sont incorrectes.";
            }
        }
    }
}