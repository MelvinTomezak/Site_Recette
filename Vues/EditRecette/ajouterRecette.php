<html>

    <?php include '../standard/entete.php'; ?>
<body>
<form action="../../Controleurs/ControleurDefaut.php" method="POST">
    <div class="form-group">
        <label for="id">id:</label>
        <input type="text" id="idRecette" name="id" class="form-control">
    </div>
    <div class="form-group">
        <label for="note">Note:</label>
        <input type="number" id="noteRecette" min="1" max="5" id="note" name="note" class="form-control">
    </div>

    <div class="form-group">
        <label for="image">Lien image:</label>
        <input type="text" id="imageRecette" name="image" class="form-control">
    </div>

    <div class="form-group">
        <label for="ingredient">Ingrédients:</label>
        <textarea id="ingredientRecette" name="ingredient" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="ustensile">Ustensiles:</label>
        <textarea id="ustensileRecette" name="ustensile" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="temps">Temps de préparation:</label>
        <input type="text" id="tempsRecette" name="temps" class="form-control">
    </div>

    <div class="form-group">
        <label for="difficulte">Difficulté:</label>
        <select id="difficulteRecette" name="difficulte" class="form-control">
            <option value="très facile">très facile</option>
            <option value="facile">Facile</option>
            <option value="moyen">Moyen</option>
            <option value="difficile">Difficile</option>
        </select>
    </div>

    <div class="form-group">
        <label for="cout">Coût:</label>
        <select id="coutRecette" name="cout" class="form-control">
            <option value="bon Marcher">bon Marcher</option>
            <option value="cout moyen">cout moyen</option>
            <option value="assez cher">assez cher</option>
        </select>
    </div>

    <div class="form-group">
        <label for="description">Description de la préparation:</label>
        <textarea id="descriptionRecette" name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="cuisson">Type de cuisson:</label>
        <input type="text" id="cuissonRecette" name="cuisson" class="form-control">
    </div>

    <div class="form-group">
        <label for="particularite">Particularités:</label>
        <select id="particulariteRecette" name="particularite" class="form-control">
            <option value="vegetarien">vegetarien</option>
            <option value="vegan">vegan</option>
            <option value="sans gluten">sans gluten</option>
            <option value="sans lactose">sans lactose</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Appreciation">Appreciation:</label>
        <input type="number" id="AppreciationRecette" min="1" max="5" id="note" name="Appreciation" class="form-control">
    </div>
    <input type="submit" value="Valider">
</form>
</body>
</html>



<?php include '../standard/pied.php';?>