</html>

<?php
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>

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
            <span>Vous avez déjà un compte ?</span>
            <a href="Register.php">Connectez-vous</a>
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

</html>





