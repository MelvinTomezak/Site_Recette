</html>

<?php
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="connexion.css">
</head>

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

</html>





