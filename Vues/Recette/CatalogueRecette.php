<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="Accueil.css">

<?php
$recettes = Recette::toutesLesRecettes();

foreach($recettes as $recette) {
    ?>
    <div  class='box-recette'>
        <div class="body"  >
            <h2 class="title"><?php echo $recette['photographie'] ?></h2>
            <p class="text">Difficulté :<?php echo $recette['difficulte']?></p>
            <p class="text">temps de preparation :  <?php echo $recette['temps_preparation'] ?> min</p>
            <p class="text">note_moyenne :  <?php echo $recette['note_moyenne'] ?>/20</p>
            <a href="/Recette/recette/<?php echo $recette['id'] ?>"><button><?= $recette['id'] ?> Recette</button></a></div>
            <form action="/Admin/supprimer" method="post">
                <input type="hidden" name="id" value="<?php echo $recette['id'] ?>">
                <input type="submit" value="Supprimer">
            </form>
    </div>
    <?php
}
?>
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
<?php