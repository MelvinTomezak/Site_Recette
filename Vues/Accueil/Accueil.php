
<!doctype html>

<html lang="fr">
<head>
    <link rel="stylesheet" href="accueil.css">
</head>
<body>
<div  class="center-button">
    <div><a href="/Recette/catalogueRecette/"><button>Catalogue de recette</button></a></div>
<div class='box-recette'>
    <?php
    for ($i = 0; $i < 3; $i++) {
        ?>
        <div class="recette-info">
            <h2 class="title"><?php echo $A_vue['recette'][$i]['photographie'] ?></h2>
            <div class="test">
                <p class="text"> Difficulté :<?php echo $A_vue['recette'][$i]['difficulte']?></p>
                <p class="text"> Temps de preparation : <?php echo $A_vue['recette'][$i]['temps_preparation'] ?> min</p>
                <p class="text">Note_moyenne : <?php echo $A_vue['recette'][$i]['note_moyenne'] ?>/20</p>
                <div class="center-button">
                    <a href="/Recette/recette/<?php echo $A_vue['recette'][$i]['id'] ?>"><button><?= $A_vue['recette'][$i]['id'] ?> Recette</button></a></div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</html>
<style>
    . .recette-info  {
        width: 80%;
        height: 300px;
        background: brown;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
        padding: 10px;
        border: 1px solid #000;
        float:left;
        border-radius: 10px;
        box-shadow: 1px 1px 20px black;
        display: flex;
        flex-wrap: wrap;
        background-repeat: no-repeat;
        background-size: cover;
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
        background: #9198e5;
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
        content: "🎂";
        font-size: 2em;
        margin-right: 10px;
    }

    p.text::before {
        content: "🕰️";
    }

    button
    {
        cursor: pointer;
        text-align: center;
        padding: 10px;
        font-size: 20px;
    }


</style>
</head>
<body>