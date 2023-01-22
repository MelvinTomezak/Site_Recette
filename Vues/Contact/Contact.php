<link rel="stylesheet" type="text/css" href="style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(#e66465, #9198e5);        }
        .rectangle {
            width: 300px;
            height: 300px;
            background: red;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px;
            padding: 10px;
            border: 1px solid #000;
            float: :left;
            border-radius: 10px;
            box-shadow: 1px 1px 20px black;

        }
    </style>
</head>
<body >

<div style="display: flex">
    <?php
    $i = 0;
    $recette = ModeleRecette::laRecette();
    $arr[' '] = '';
    // Ajouter la requête à la variable $A_vue
    $A_vue['recette'] = $recette;
    // Supprimer les doublons
    $A_vue['recette'] = array_unique($A_vue['recette']);
    $i = 0;
    foreach ($A_vue['recette'] as $value) {
        echo "<div class='rectangle'>";
        echo "<table>";
        foreach ($A_vue['recette'] as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        echo "</table>";
        echo "</div>";
        $i++;
    }
    ?>
</div>
</body>
</html>
