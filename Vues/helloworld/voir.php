<?php
$recette = ModeleRecette::laRecette();
$i = 0;
$arr[' '] = '';
// Ajouter la requête à la variable $A_vue
$A_vue['recette'] = $recette;
// Supprimer les doublons
$A_vue['recette'] = array_unique($A_vue['recette']);
// Récupérer les clés
$clés = array_keys($A_vue['recette']);
// Créer un tableau
echo "<table>";
// Parcourir le tableau et récupérer les valeurs
foreach ($A_vue['recette'] as $value) {
    // Afficher le nom de l'attribut et la valeur dans une ligne de tableau
    echo "<tr><td>" . $clés[$i] . "</td><td>" . $value . "</td></tr>";
    $i++;
}
echo "</table>";
?>