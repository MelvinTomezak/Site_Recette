<?php include '../standard/entete.php'?>

    <!doctype html>
<!-- Cette page permet d'ajouter une patisserie en spécifiant ses différentes spécificités -->
    <html lang="fr">
<head>
    <title> Ajouter une recette</title>

    <link rel="stylesheet" href="edit.css">
</head>
<body>
<form action="/Admin/ajouter" method="POST">
    <div class="form-group">
        <label for="id">ID :</label>
        <input type="text" id="id" name="id" class="form-control">
    </div>
    <div class="form-group">
        <label for="nom_recette">Nom de la recette :</label>
        <input type="text" id="nom_recette" name="nom_recette" class="form-control">
    </div>
    <div class="form-group">
        <label for="note_moyenne">Note :</label>
        <input type="number" min="1" max="20" id="note_moyenne" name="note_moyenne" class="form-control">
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
        <label for="liste_ustensile">Ustensiles :</label>
        <textarea id="liste_ustensile" name="liste_ustensile" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="temps_preparation">Temps de préparation :</label>
        <input type="number" id="temps_preparation" name="temps_preparation" class="form-control">
    </div>


    <div class="form-group">
        <label for="difficulte" id="difficulte">Difficulté :</label>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="tres_facile">Très facile</label>
            <input class="form-check-input" type="radio" name="difficulte" value="très facile">

        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="facile">Facile</label>
            <input class="form-check-input" type="radio" name="difficulte" value="facile">

        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="moyen">Moyen</label>
            <input class="form-check-input" type="radio" name="difficulte" value="moyen">

        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="difficile">Difficile</label>
            <input class="form-check-input" type="radio" name="difficulte" value="difficile">

        </div>
    </div>
    <div class="form-group">
        <label for="cout" id="cout">Cout :</label>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="bon marche">bon marche</label>
            <input class="form-check-input" type="radio" name="cout" value="bon marche">

        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="cout moyen">cout moyen</label>
            <input class="form-check-input" type="radio" name="cout" value="cout moyen">

        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="assez cher">assez cher</label>
            <input class="form-check-input" type="radio" name="cout" value="assez cher">

        </div>
    </div>
    <div class="form-group">
        <label for="description_textuelle_preparation">Description :</label>
        <textarea id="description_textuelle_preparation" name="description_textuelle_preparation" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="type_cuisson">Type de cuisson :</label>
        <input type="text" id="type_cuisson" name="type_cuisson" class="form-control">
    </div>
    <div class="form-group">
        <label for="liste_particularite" id="liste_particularite">Particularite :</label>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="vegetarien">vegetarien</label>
            <input class="form-check-input" type="radio" name="liste_particularite" value="vegetarien">

        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="vegan">vegan</label>
            <input class="form-check-input" type="radio" name="liste_particularite" value="vegan">

        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="sans gluten">sans gluten</label>
            <input class="form-check-input" type="radio" name="liste_particularite" value="sans gluten">

        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="sans lactose">sans lactose</label>
            <input class="form-check-input" type="radio" name="liste_particularite" value="sans lactose">

        </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter une recette</button>
</form>
</body>
<?php include '../standard/pied.php'?>