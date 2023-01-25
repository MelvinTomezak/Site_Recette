<div class="row">
    <div class="col-md-4">
        <?php if (isset($A_vue['recette'][1])) { ?>
            <img class="rounded-lg" src="<?= $A_vue['recette'][1]['photographie'] ?>" alt="<?= $A_vue['recette'][0]['nom'] ?>">
        <?php } ?>
    </div>
    <div class="col-md-8">
        <?php if (isset($A_vue['recette'][1])) { ?>
            <h3 class="text-3xl mb-5"><?= $A_vue['recette'][1]['nom'] ?></h3>
            <p><?= $A_vue['recette'][0]['description_textuelle_preparation'] ?></p>
        <?php } ?>
    </div>
</div>

<h4 class="text-2xl mt-4">Ingrédients</h4>
<ul>
    <?php foreach($A_vue['recette'] as $recette): ?>
        <?php if (isset($recette['liste_ingredient'])) { ?>
            <li><?= $recette['liste_ingredient'] ?></li>
        <?php } ?>
    <?php endforeach ?>
</ul>

<h4 class="text-2xl mt-4">Préparation</h4>
<?php if (isset($A_vue['recette'][0]['description_textuelle_preparation'])) { ?>
    <p><?= $A_vue['recette'][0]['description_textuelle_preparation'] ?></p>
<?php } ?>

<h4 class="text-2xl mt-4">Ustensiles</h4>
<?php if (isset($A_vue['recette'][0]['liste_ustensiles'])) { ?>
    <p><?= $A_vue['recette'][0]['liste_ustensiles'] ?></p>
<?php } ?>

<h4 class="text-2xl mt-4">Temps de préparation</h4>
<?php if (isset($A_vue['recette'][0]['temps_preparation'])) { ?>
    <p><?= $A_vue['recette'][0]['temps_preparation'] ?></p>
<?php }?>

<h4 class="text-2xl mt-4">Difficulté</h4>
<?php if (isset($A_vue['recette'][0]['difficulte'])) { ?>
    <p><?= $A_vue['recette'][0]['difficulte'] ?></p>
<?php }?>

<h4 class="text-2xl mt-4">Coût</h4>
<?php if (isset($A_vue['recette'][0]['cout'])) { ?>
    <p><?= $A_vue['recette'][0]['cout'] ?></p>
<?php }?>

<h4 class="text-2xl mt-4">Type de cuisson</h4>
<?php if (isset($A_vue['recette'][0]['type_cuisson'])) { ?>
    <p><?= $A_vue['recette'][0]['type_cuisson'] ?></p>
<?php }?>

<h4 class="text-2xl mt-4">Particularités</h4>
<?php if (isset($A_vue['recette'][0]['liste_particularite'])) { ?>
    <p><?= $A_vue['recette'][0]['liste_particularite'] ?></p>
<?php }?>

<h4 class="text-2xl mt-4">Appréciations</h4>
<?php if (isset($A_vue['recette'][0]['liste_apprecation'])) { ?>
    <p><?= $A_vue['recette'][0]['liste_apprecation'] ?></p>
<?php }?>