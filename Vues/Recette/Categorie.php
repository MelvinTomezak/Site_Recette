<?php include '../standard/entete.php'?>


<!DOCTYPE html>
<html>
<head>
    <title> Catégories des recettes</title>
</head>
<body>
<form action="/Categorie/rechercher" method="post">
<h1> Toute nos catégories</h1>
<h2> Par rapport à la difficulté : </h2>
<div style="display: flex;">

    <button style="flex: 1;"id="tres facile" name="tres facile">Très facile </button>
    <button style="flex: 1;" id="facile" name="facile">facile</button>
    <button style="flex: 1;" id="moyen" name="moyen">Moyen</button>
    <button style="flex: 1;" id="difficile" name="difficile">Difficile</button>
</div>
<h2> Par rapport au coût : </h2>
<div style="display: flex;">

    <button style="flex: 1;" id="bon marche" name="bon marche">Bon marché</button>
    <button style="flex: 1;" id="cout moyen" name="cout moyen">Coût moyen</button>
    <button style="flex: 1;" id="assez cher" name="assez cher">Assez cher</button>
</div>
<h2> Rapport aux particularites</h2>
<div style="display: flex;">
    <button style="flex: 1;" id="vegetarien" name="vegetarien">Vegetarien</button>
    <button style="flex: 1;" id="vegan" name="vegan">Vegan</button>
    <button style="flex: 1;" id="sans lactose" name="sans lactose">Sans Lactose</button>
    <button style="flex: 1;" id="sans gluten" name="sans gluten">Sans gluten</button>
</div>
</form>
</body>
</html>
<?php include '../standard/pied.php'?>

<style>
    body {
        background-color:#F5F5DC;
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    h2 {
        margin-top: 50px;
        text-align: center;
    }

    button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
    }

    button:hover {
        background-color: #3e8e41;
    }

</style>