<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="Accueil.css">
<head>
    <style>
        .body {
            width: 300px;
            height: 300px;
            background: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px;
            padding: 10px;
            border: 1px solid #000;
            float:left;
            border-radius: 10px;
            box-shadow: 1px 1px 20px black;

        button{
            width: 200px;
            height: 100px;
        }
        }
        body {
            margin: 10px;
            padding: 10px;

        }

        .title {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .text {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<?php
$recettes = Recette::toutesLesRecettes();

foreach($recettes as $recette) {
    ?>
    <div  class='box-recette'>
        <div class="body" >
            <h2 class="title"><?php echo $recette['photographie'] ?></h2>
            <p class="text">Difficulté :<?php echo $recette['difficulte']?></p>
            <p class="text">temps de preparation :  <?php echo $recette['temps_preparation'] ?> min</p>
            <p class="text">note_moyenne :  <?php echo $recette['note_moyenne'] ?>/20</p>
            <a href="/Recette/recette/<?php echo $recette['id'] ?>"><button><?= $recette['id'] ?> Recette</button></a></div>
    </div>
    <?php
}
?>
</html>