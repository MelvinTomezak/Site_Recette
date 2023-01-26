<?php

class Categorie
{
    // Méthode pour rechercher une recette en fonction de sa difficulté
    public function rechercherRecette($recherche){
        // Connexion à la base de données en utilisant les informations de connexion données
        $db = Database::connect("rogue.db.elephantsql.com","ykutlvtz","3bqbVY-4n626jHaAdvIIraI3Ds5QcD4N");
        // Requête SQL pour sélectionner toutes les recettes où la colonne "difficulté" contient la chaîne de recherche
        $req = 'SELECT * FROM recette WHERE difficulte LIKE :recherche';
        // Préparation de la requête
        $req_prep = $db->prepare($req);

        $req_prep->bindValue(':recherche', "%$recherche%", PDO::PARAM_STR);
        // Exécution de la requête
        $req_prep->execute();
        // Stockage des résultats de la requête dans la variable $resultat
        $resultat = $req_prep->fetchAll();
        // Retour des résultats de la requête
        return $resultat;
    }
}