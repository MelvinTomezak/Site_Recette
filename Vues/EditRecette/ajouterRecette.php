<html>

    <?php include '../standard/entete.php'; ?>
    <head>
        <link rel="stylesheet" href="ajoutRecette.css">
    </head>
<body>
<form action="Admin/add" method="POST">
    <div class="form-group">
        <label for="id">id:</label>
        <input type="text" id="id" name="id" class="form-control">
    </div>
    <div class="form-group">
        <label for="note">Note:</label>
        <input type="number" id="note_moyenne" min="1" max="5" id="note" name="note" class="form-control">
    </div>

    <div class="form-group">
        <label for="image">Lien image:</label>
        <input type="text" id="photographie" name="image" class="form-control">
    </div>

    <div class="form-group">
        <label for="ingredient">Ingrédients:</label>
        <textarea id="liste_ingredient" name="ingredient" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="ustensile">Ustensiles:</label>
        <textarea id="liste_ustensiles" name="ustensile" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="temps">Temps de préparation:</label>
        <input type="text" id="temps_preparation" name="temps" class="form-control">
    </div>

    <div class="form-group">
        <label for="difficulte">Difficulté:</label>
        <select id="difficulte" name="difficulte" class="form-control">
            <option value="Très facile">très facile</option>
            <option value="Facile">Facile</option>
            <option value="Moyen">Moyen</option>
            <option value="Difficile">Difficile</option>
        </select>
    </div>

    <div class="form-group">
        <label for="cout">Coût:</label>
        <select id="cout" name="cout" class="form-control">
            <option value="Bon marché">bon Marcher</option>
            <option value="Cout moyen">cout moyen</option>
            <option value="Assez cher">assez cher</option>
        </select>
    </div>

    <div class="form-group">
        <label for="description">Description de la préparation:</label>
        <textarea id="description_textuelle_preparation" name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="cuisson">Type de cuisson:</label>
        <input type="text" id="type_cuisson" name="cuisson" class="form-control">
    </div>

    <div class="form-group">
        <label for="particularite">Particularités:</label>
        <select id="liste_particularite" name="particularite" class="form-control">
            <option value="Vegetarien">vegetarien</option>
            <option value="Vegan">vegan</option>
            <option value="Sans gluten">sans gluten</option>
            <option value="Sans lactose">sans lactose</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Appreciation">Appreciation:</label>
        <input type="number" id="liste_apprecation" min="1" max="5" id="note" name="Appreciation" class="form-control">
    </div>
    <input type="submit" value="Valider">
</form>
</body>
</html>



<?php include '../standard/pied.php';?>