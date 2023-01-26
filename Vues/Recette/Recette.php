
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Commentaires</title>
</head>
<body>

<!-- formulaire pour ajouter un commentaire -->
<h2>Ajouter un commentaire</h2>
<form action="Admin\commenter" method="post">
    <input type="text" name="id_auteur" placeholder="ID Auteur"><br><br>
    <input type="text" name="nom_auteur" placeholder="Nom Auteur"><br><br>
    <input type="text" name="date" placeholder="Date"><br><br>
    <input type="text" name="note" placeholder="Note"><br><br>
    <textarea name="commentaire" placeholder="Commentaire" cols="30" rows="10"></textarea><br><br>
    <input type="submit" name="submit" value="Ajouter">
</form>
<?php $comments = (new Admin)->getComments(); ?>
<!-- afficher les commentaires -->
<h2>Commentaires</h2>
<?php foreach($comments as $comment): ?>
    <div>
        <p><b><?php echo $comment['nom_auteur']; ?></b> <?php echo $comment['date']; ?></p>
        <p><?php echo $comment['commentaire']; ?></p>
    </div>
<?php endforeach; ?>

</body>
</html>
