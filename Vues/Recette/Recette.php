<html>

<head>
    <link rel="stylesheet" href="recette.css" />
</head>

<body>


    <div class="row">
        <div class="col-md-4">
            <?php if (isset($A_vue['recette'][0])) { ?>
                <img class="rounded-lg" src="<?= $A_vue['recette'][0]->photographie ?>"">
            <?php } ?>
        </div>
        <div class="col-md-8">
            <?php if (isset($A_vue['recette'][0])) { ?>
                <h3 class="text-3xl mb-5"><?= $A_vue['recette'][0]->nom_recette ?></h3>
                <p><?= $A_vue['recette'][0]->description_textuelle_preparation ?></p>
            <?php } ?>
        </div>
    </div>

    <h4 class="text-2xl mt-4">Ingrédients</h4>
    <ul>
        <?php foreach($A_vue['recette'] as $recette): ?>
            <?php if (isset($recette->liste_ingredient)) { ?>
                <li><?= $recette->liste_ingredient ?></li>
            <?php } ?>
        <?php endforeach ?>
    </ul>

    <h4 class="text-2xl mt-4">Préparation</h4>
    <?php if (isset($A_vue['recette'][0]->description_textuelle_preparation)) { ?>
        <p><?= $A_vue['recette'][0]->description_textuelle_preparation ?></p>
    <?php } ?>

    <h4 class="text-2xl mt-4">Ustensiles</h4>
    <?php if (isset($A_vue['recette'][0]->liste_ustensiles)) { ?>
        <p><?= $A_vue['recette'][0]->liste_ustensiles ?></p>
    <?php } ?>

    <h4 class="text-2xl mt-4">Temps de préparation</h4>
    <?php if (isset($A_vue['recette'][0]->temps_preparation)) { ?>
        <p><?= $A_vue['recette'][0]->temps_preparation ?></p>
    <?php }?>

    <h4 class="text-2xl mt-4">Difficulté</h4>
    <?php if (isset($A_vue['recette'][0]->difficulte)) { ?>
        <p><?= $A_vue['recette'][0]->difficulte ?></p>
    <?php }?>

    <h4 class="text-2xl mt-4">Coût</h4>
    <?php if (isset($A_vue['recette'][0]->cout)) { ?>
        <p><?= $A_vue['recette'][0]->cout ?></p>
    <?php }?>



    <h4 class="text-2xl mt-4">Type de cuisson</h4>
    <?php if (isset($A_vue['recette'][0]->type_cuisson)) { ?>
        <p><?= $A_vue['recette'][0]->type_cuisson ?></p>
    <?php }?>

    <h4 class="text-2xl mt-4">Particularités</h4>
    <?php if (isset($A_vue['recette'][0]->liste_particularite)) { ?>
        <p><?= $A_vue['recette'][0]->liste_particularite ?></p>
    <?php }?>

    <h4 class="text-2xl mt-4">Appréciations</h4>
    <?php if (isset($A_vue['recette'][0]->liste_apprecation)) { ?>
        <p><?= $A_vue['recette'][0]->liste_apprecation ?></p>
    <?php }?>


    <!-- formulaire pour ajouter un commentaire -->
    <h2>Ajouter un commentaire</h2>
    <form action="/Admin/commenter" method="post" class="formulaire">
        <input type="text" name="id" placeholder="ID Auteur"><br><br>
        <input type="text" name="nom_auteur" placeholder="Nom Auteur"><br><br>
        <input type="text" name="date" placeholder="Date"><br><br>
        <input type="text" name="note" placeholder="Note"><br><br>
        <textarea name="commentaire" placeholder="Commentaire" cols="30" rows="10"></textarea><br><br>
        <input type="submit" name="submit" value="Ajouter">
    </form>


<style>



    body {
        background-color: #9198e5;
    }

    .formulaire {
        text-align: center;
        justify-content: center;
        width: 500px;
        padding: 15px;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .formulaire input[type="text"],
    .formulaire textarea {
        width: 90%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 14px;
    }

    .formulaire input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        margin: 10px 0;
        border: none;
        border-radius: 3px;
        font-size: 14px;
        cursor: pointer;
    }

    p, li {
        text-align: center;
        font-size: 20px;
    }

    h2, h3, h4 {
        text-align: center;
        color: #4287f5;
        width: 300px;
        margin: auto;
        border: 3px solid;
        font-size: 20px;
        width: 50%;
        height: 20px;
        background-color: #D2691E;
        font-size: 1.2em;
        font-weight: bold;
        color: black;
    }

    col-md-8 {
        text-align: center;
        color: #4287f5;
        width: 300px;
        margin: auto;
        border: 3px solid #4287f5;
    }




</style>


</body>
</html>


