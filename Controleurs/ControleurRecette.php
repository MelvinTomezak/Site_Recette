<?php

// La class ControleurRecette permet de définir une classe qui contient des méthodes
// permettant d'afficher et de gérer des recettes. Les méthodes voirAction, recetteAction,
// supprimerRecetteAction, catalogueRecetteAction, readAll, laRecetteAction et rechercherAction
// permettent respectivement de voir une recette, de voir une recette en détail, de supprimer une recette,
// d'afficher un catalogue de recettes, de récupérer la liste des recettes, d'afficher les détails d'une recette
// et de rechercher une recette.
final class ControleurRecette{
    public function voirAction($params){

        var_dump($params);
        if(isset($params[0])){
            $id = htmlspecialchars($params[0]);
            $ajouteRecette = new Recette($id);
            $ajouteRecette->uneRecette();

        }

        //    Vue::montrer("gabarit", Recette::uneRecette());

    }

    public static function recetteAction($params){
    $modelRecette = new Recette();
    $recette = $modelRecette->laRecette($params[0]);

    Vue::montrer('Recette/Recette',array('recette' => $recette));    }

    public static function supprimerRecetteAction($params){
        $modelRecette = new Recette();
        $recette = $modelRecette->laRecette($params[0]);
        Vue::montrer('Recette/Recette',array('recette' => $recette));    }



    public  function catalogueRecetteAction(){
        $recetteModel = new Recette();
        $recette = $recetteModel->toutesLesRecettes();

        Vue::montrer('Recette/CatalogueRecette', array('recette' => $recette));

    }

    /* Récupérer la liste des types */
    public static function readAll(){
        $pageTitle = "Toutes les recettes";
        $tab_t = Recette::readAll();

    }









    public static function laRecetteAction()
    {
        $pageTitle = "...";
        if (isset($_GET['recette'])) {
            $id = htmlspecialchars($_GET['recette']);
            $recette = new Recette($id);
            $recettes = $recette->uneRecette();
            //Vue::montrer('Accueil/Accueil', array('recette' =>  $recette));

        }

    }

    public function rechercherAction()
    {
        if (isset($_POST['recherche'])) {
            $recherche = $_POST['recherche'];

            $admin = new Recette();
            $resultat=$admin->rechercherRecette($recherche);
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
            } else {
                echo 'Aucun résultat trouvé pour votre recherche';
            }


        }

    }











}