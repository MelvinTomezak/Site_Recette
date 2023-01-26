
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
        <input type="number" min="1" max="5" id="note_moyenne" name="note_moyenne" class="form-control">
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
        <label for="difficulte">Difficulté :</label>
        <input type="text" id="difficulte" name="difficulte" class="form-control">
    </div>
    <div class="form-group">
        <label for="cout">Coût :</label>
        <input type="text" id="cout" name="cout" class="form-control">
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
        <label for="liste_particularite">Particularité :</label>
        <textarea id="liste_particularite" name="liste_particularite" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="liste_appreciation">Appréciation :</label>
        <textarea id="liste_appreciation" name="liste_appreciation" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
