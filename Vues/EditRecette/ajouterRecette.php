
<?php include '../standard/entete.php'; ?>
<!doctype html>
<html lang="fr">
<title> Ajouter Recette</title>

    <link rel="stylesheet" href="ajoutRecette.css">

<form action="/Admin/ajouter" method="POST">
    <div class="form-group">
        <label for="id">ID :</label>
        <input type="text" id="id" name="id" class="form-control">
    </div>
    <div class="form-group">
        <label for="note_moyenne">Note :</label>
        <input type="number" id="note_moyenne" min="1" max="5" id="note_moyenne" name="note_moyenne" class="form-control">
    </div>

    <div class="form-group">
        <label for="photographie">Lien image :</label>
        <input type="text" id="photographie" name="photographie" class="form-control">
    </div>

    <div class="form-group">
        <label for="liste_ingredient">Ingrédients :</label>
        <textarea id="liste_ingredient" name="liste_ingredient" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="liste_ustensiles">Ustensiles :</label>
        <textarea id="liste_ustensiles" name="liste_ustensiles" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="temps_preparation">Temps de préparation :</label>
        <input type="text" id="temps_preparation" name="temps_preparation" class="form-control">
    </div>

    <div class="form-group">
        <label for="difficulte">Difficulté :</label>
        <select id="difficulte" name="difficulte" class="form-control">
            <option value="Très facile">très facile</option>
            <option value="Facile">Facile</option>
            <option value="Moyen">Moyen</option>
            <option value="Difficile">Difficile</option>
        </select>
    </div>

    <div class="form-group">
        <label for="cout">Coût :</label>
        <select id="cout" name="cout" class="form-control">
            <option value="Bon marché">bon Marcher</option>
            <option value="Cout moyen">cout moyen</option>
            <option value="Assez cher">assez cher</option>
        </select>
    </div>

    <div class="form-group">
        <label for="description_textuelle_preparation">Description de la préparation :</label>
        <textarea id="description_textuelle_preparation" name="description_textuelle_preparation" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="type_cuisson">Type de cuisson :</label>
        <input type="text" id="type_cuisson" name="type_cuisson" class="form-control">
    </div>

    <div class="form-group">
        <label for="liste_particularite">Particularités :</label>
        <select id="liste_particularite" name="liste_particularite" class="form-control">
            <option value="Vegetarien">vegetarien</option>
            <option value="Vegan">vegan</option>
            <option value="Sans gluten">sans gluten</option>
            <option value="Sans lactose">sans lactose</option>
        </select>
    </div>
    <div class="form-group">
        <label for="liste_apprecation">Appréciation :</label>
        <input type="number" id="liste_apprecation" min="1" max="5" id="liste_apprecation" name="liste_apprecation" class="form-control">
    </div>
    <input type="submit" value="Valider">
</form>

<?php include '../standard/pied.php';?>