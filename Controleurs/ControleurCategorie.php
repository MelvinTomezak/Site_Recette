<?php

class ControleurCategorie
{
    public function rechercherAction()
    {
            $recherche = $_POST['facile'];
            $admin = new Categorie();
            $resultat = $admin->rechercherRecette($recherche);
            if (!empty($resultat)) {
                echo '<ul>';
                foreach ($resultat as $recette) {
                    echo '<li>' . $recette['nom_recette'] . '</li>';
                    echo '<li>' . $recette['note_moyenne'] . '</li>';
                    echo '<li>' . $recette['photographie'] . '</li>';
                    echo '<li>' . $recette['liste_ingredient'] . '</li>';
                    echo '<li>' . $recette['liste_ustensile'] . '</li>';
                    echo '<li>' . $recette['temps_preparation'] . '</li>';
                    echo '<li>' . $recette['difficulte'] . '</li>';
                    echo '<li>' . $recette['cout'] . '</li>';
                    echo '<li>' . $recette['description_textuelle_preparation'] . '</li>';
                    echo '<li>' . $recette['type_cuisson'] . '</li>';
                    echo '<li>' . $recette['liste_particularite'] . '</li>';
                    // ou afficher d'autres infos de la recette
                }
                echo '</ul>';
            }
        }
}