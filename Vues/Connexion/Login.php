<html>

<?php
session_start();
?>
<?php include '../standard/entete.php'?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Page de connexion</title>
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
        <h1>Connectez-vous</h1>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required />
        <input type="submit" value="Login" class="form-submit" />
        <div class="password-forgot">
            <a href="Register.php">Mot de passe oublié ?</a>
        </div>

        <div class="have-account">
            <span>Vous n'avez pas de  compte ?</span>
            <a href="Register.php">Inscrivez-vous</a>
        </div>
    </form>
</div>

<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si les identifiants sont corrects
    if ($email == "admin@admin.fr" && $password == "admin") {
        $_SESSION['user_connected'] = true;
        header('Location: /Modele/Login/accueil/');
        exit();
    } else {
        echo "<p class='error-msg'>Identifiants invalides.</p>";
    }
}
?>
</body>
<?php include '../standard/pied.php'?>
</html>





