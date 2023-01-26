<?php include '../standard/entete.php'?>


<!DOCTYPE html>
<html>
<head>
    <title> Catégories des recettes</title>
</head>
<body>
<h1> Toute nos catégories</h1>
<h2> Par rapport à la difficulté : </h2>
<div style="display: flex;">

    <button style="flex: 1;">Très facile</button>
    <button style="flex: 1;">facile</button>
    <button style="flex: 1;">Moyen</button>
    <button style="flex: 1;">Difficile</button>
</div>
<h2> Par rapport au coût : </h2>
<div style="display: flex;">

    <button style="flex: 1;">Bon marché</button>
    <button style="flex: 1;">Coût moyen</button>
    <button style="flex: 1;">Assez cher</button>
</div>
<h2> Rapport aux particularites</h2>
<div style="display: flex;">
    <button style="flex: 1;">Vegetarien</button>
    <button style="flex: 1;">Vegan</button>
    <button style="flex: 1;">Sans Lactose</button>
    <button style="flex: 1;">Sans gluten</button>
</div>
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
