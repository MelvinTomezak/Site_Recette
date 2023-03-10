

<!doctype html>
<!-- Affiche 3 recettes au hasard -->
<html lang="fr">
<head>
    <link rel="stylesheet" href="accueil.css">
    <title> Accueil</title>
</head>
<body>
<div  class="center-button">
    <div>
        <a href="/Recette/catalogueRecette/"><button>Catalogue de recette</button></a>
    </div>
<div class='box-recette'>
    <?php
    for ($i = 0; $i < 3; $i++) {
        ?>
        <div class="recette-info">
            <h1 class="title"><?php echo $A_vue['recette'][$i]['nom_recette'] ?></h1>
            <div class="test">
                <p class="text"> DifficultÃ© :<?php echo $A_vue['recette'][$i]['difficulte']?></p>
                <p class="text"> Temps de preparation : <?php echo $A_vue['recette'][$i]['temps_preparation'] ?> min</p>
                <p class="text">Note_moyenne : <?php echo $A_vue['recette'][$i]['note_moyenne'] ?>/20</p>
                <div class="center-button">
                    <a href="/Recette/recette/<?= $A_vue['recette'][$i]['id'] ?>"><button><?= $A_vue['recette'][$i]['nom_recette'] ?></button></a></div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</div>
</body>
</html>
<style>
     .recette-info  {
        width: 80%;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
        padding: 10px;
        float:left;
        border-radius: 10px;
        box-shadow: 1px 1px 20px black;
        display: flex;
        flex-wrap: wrap;
        background-repeat: no-repeat;
        background-size: cover;
         border: solid;
         background:#9198e5;
    }

    button{
        width: 50%;
        height: 100px;
        background-color: #ffa600;
        border-radius: 10px;
        font-size: 1.2em;
        font-weight: bold;
        color: white;
    }

    body {
        margin: 10px;
        padding: 10px;
        background: #F5F5DC;
    }

    .title {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.5em;
        font-weight: bold;
        color: #ffa600;
    }

    .text {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.2em;
        color: #ffa600;
    }

    h2.title::before {
        content: "ð";
        font-size: 2em;
        margin-right: 10px;
    }

    p.text::before {
        content: "ð°ï¸";
    }

    button
    {
        cursor: pointer;
        padding: 10px;
        font-size: 20px;
    }
    .center-button
    {
        text-align: center;
    }

     .center-button {
         text-align: center;
     }

     .center-button button {
         padding: 10px 20px;
         background-color: #D2691E;
         color: white;
         border: none;
         border-radius: 5px;
         font-size: 18px;
         cursor: pointer;
         width: fit-content;
         border : solid black;
     }




</style>
</head>
<body>