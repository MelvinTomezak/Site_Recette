



<?php
$recette = ModeleRecette::laRecette();
// Ajouter la requête à la variable $A_vue
$A_vue['recette'] = $recette;
// Supprimer les doublons
$A_vue['recette'] = array_unique($A_vue['recette']);
// Parcourir le tableau et récupérer les valeurs
foreach ($A_vue['recette'] as $value) {
    // Afficher la vue
    echo "<p>" . $value . "</p>";
}
?>