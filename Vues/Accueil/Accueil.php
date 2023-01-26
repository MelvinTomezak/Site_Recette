<!doctype html>

<html lang="fr">
<head>
    <link rel="stylesheet" href="accueil.css">
</head>
<body>
<div  class="center-button">
    <div><a href="/Recette/catalogueRecette/"><button>Catalogue de recette</button></a>
    </div>
<div class='box-recette'>
    <?php
    for ($i = 0; $i < 3; $i++) {
        ?>
        <div class="recette-info">
            <h1 class="title"><?php echo $A_vue['recette'][$i]['nom_recette'] ?></h1>
            <h2 class="title"><?php echo $A_vue['recette'][$i]['photographie'] ?></h2>
            <div class="test">
                <p class="text"> Difficulté :<?php echo $A_vue['recette'][$i]['difficulte']?></p>
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

</html>
<style>
     .recette-info  {
        width: 80%;
        height: 55%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 2%;
        padding: 2%;
        float:left;
        border-radius:1%;
        display: flex;
        flex-wrap: wrap;
        background-repeat: no-repeat;
        background-size: cover;
         border: solid;
         background:#9198e5;
    }

    button{
        width: 50%;
        height: 20%;
        background-color: #ffa600;
        border-radius: 1%;
        font-weight: bold;
        color: white;
    }

    body {
        margin: 1%;
        padding: 1%;
        background: #F5F5DC;
    }

    .title {
        display: flex;
        flex-direction: column;
        align-items: center;
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
        content: "🎂";
        margin-right: 1%;
    }

    p.text::before {
        content: "🕰️";
    }

    button
    {
        cursor: pointer;
        padding: 1%;
        font-size: 2%;
    }
    .center-button
    {
        text-align: center;
    }

     .center-button {
         text-align: center;
     }

     .center-button button {
         padding: 1% 2%;
         background-color: #D2691E;
         color: white;
         border: none;
         border-radius: 5%;
         font-size: 95%;
         cursor: pointer;
         width: fit-content;
         border : solid black;
     }

</style>
</head>
<body>