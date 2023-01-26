<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="Accueil.css">
<div class="redirection">
    <p> Vous aurez la possibilité d'observer nos différentes catégories </p><a href="/Vues/Recette/Categorie.php">ici</a>
</div>
<?php
$recettes = Recette::toutesLesRecettes();

foreach($recettes as $recette) {
    ?>
    <div  class='box-recette'>
        <div class="recette"  >
            <h1 class="title"><?php echo $recette['nom_recette'] ?></h1>
            <h2 class="title"><?php echo $recette['photographie'] ?></h2>
            <p class="text">Difficulté :<?php echo $recette['difficulte']?></p>
            <p class="text">temps de preparation :  <?php echo $recette['temps_preparation'] ?> min</p>
            <p class="text">note_moyenne :  <?php echo $recette['note_moyenne'] ?>/20</p>
            <a href="/Recette/recette/<?php echo $recette['id'] ?>"><button><?php echo "{$recette['nom_recette']} Recette" ?></button></a>
                <form action="/Admin/supprimer" method="post">
                    <div class="supp">
                        <input type="hidden" name="id" value="<?php echo $recette['id'] ?>">
                        <input type="submit" value="Supprimer">
                    </div>
                </form>
    </div>
    <?php
}
?>
</html>
<style>
    .recette-info  {
        width: 80%;
        height: 30%;
        background: brown;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 1%;
        padding: 1%;
        float:left;
        display: flex;
        flex-wrap: wrap;
        background-repeat: no-repeat;
        background-size: cover;
    }

    button{
        width: 50%;
        height: 10%;
        background-color: #ffa600;
        border-radius: 5%;
        font-size: 95%;
        font-weight: bold;
        color: white;
    }

    .title {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 100%;
        font-weight: bold;
        color: #ffa600;
    }

    .text {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 100%;
        color: #ffa600;
    }

    h2.title::before {
        content: "🎂";
        font-size: 100%;
        margin-right: 10px;
    }

    p.text::before {
        content: "🕰️";
    }

    .recette
    {
        border: solid;
        background:#9198e5;
        justify-content: center;
        align-items: center;
    }

    .redirection {
        text-align: center;
        margin: 2%;
        padding: 2%;
        border:  solid #ccc;
    }

    .redirection p {
        font-size: 100%;
        font-weight: bold;
        margin-bottom: 1%;
    }

    .redirection a {
        color: blue;
        text-decoration: none;
        font-size: 100%;
        font-weight: bold;
    }

    .redirection a:hover {
        color: red;
    }

    .box-recette {
        text-align: center;
    }

    .supp {
        text-align: center;
    }

    .supp input[type="submit"] {
        padding: 1% 2%;
        background-color: red;
        color: white;
        border: none;
        border-radius: 1%;
        font-size: 100%;
        cursor: pointer;
        margin:1%;
    }

    .supp input[type="submit"]:hover {
        background-color: darkred;
    }

</style>

<?php