<?php
require_once("../Noyau/Database/Database.php");

class ModeleAppreciation
{

    // Méthode pour lire toutes les lignes de la table "appreciation"
    public static function readAll()
    {
        // Requête SQL pour sélectionner toutes les lignes de la table "appreciation"
        $sql = "SELECT * FROM appreciation";
        // Exécution de la requête et stockage des résultats dans la variable $rep
        $rep = Database::$con->query($sql);
        // Définition du mode de fetch pour que chaque ligne soit retournée sous la forme d'un objet de la classe "appreciation"
        $rep->setFetchMode(PDO::FETCH_CLASS, 'appreciation');
        // Retour des résultats de la requête
        return $rep->fetchAll();
    }

    // Méthode pour créer une nouvelle ligne dans la table "appreciation"
    public function create()
    {
        // Requête SQL pour insérer une nouvelle ligne dans la table "appreciation"
        $sql = "INSERT INTO appreciation(id) VALUES (:idT)";
        // Préparation de la requête
        $req_prep = Database::$con->prepare($sql);
        // Définition des valeurs à insérer dans la requête
        $values = array("id" => NULL);
        // Exécution de la requête
        $req_prep->execute($values);
    }

    // Méthode pour mettre à jour une ligne existante dans la table "appreciation"
    public function update()
    {
        // Requête SQL pour mettre à jour la ligne correspondant à l'objet courant dans la table "appreciation"
        $sql = 'UPDATE appreciation SET id = :idT';
        // Préparation de la requête
        $req_prep = Database::$con->prepare($sql);
        // Définition des valeurs à mettre à jour dans la requête
        $values = array("appreciation" => $this->id);
        // Exécution de la requête
        $req_prep->execute($values);
    }


// Méthode pour supprimer une ligne de la table "appreciation"
    public function delete()
    {
        // Requête SQL pour supprimer la ligne correspondant à l'objet courant de la table "appreciation"
        $sql = "DELETE FROM appreciation WHERE id = :idT";
        // Préparation de la requête
        $req_prep = Database::$con->prepare($sql);
        // Définition des valeurs à utiliser pour la suppression dans la requête
        $values = array("id" => $this->id);
        // Exécution de la requête
        $req_prep->execute($values);
    }
}