</html>

<?php
session_start();
?>
<?php include '../standard/entete.php'?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<style>
    body{
        background: linear-gradient(#e66465, #9198e5);        }
    .rectangle {
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
    }
</style>

<body>
<div class="form-container">
    <form action="/Modele/Login/connecter/" method="POST">
        <h1>Inscription</h1>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Register">

        <div class="have-account">
            <span>Vous avez déja un compte ?</span>
            <a href="Login.php">Connectez-vous</a>
        </div>
    </form>
</div>


</body>
<?php include '../standard/pied.php'?>
</html>





