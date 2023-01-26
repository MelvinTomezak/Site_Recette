<!-- W3C Verif -->

<?php
session_start(); // Initialise une session PHP
?>
<?php include '../standard/entete.php'?>
<!-- inclure le contenu d'un fichier appelé 'entete.php' qui contient probablement les informations d'en-tête pour la page web, telles que les éléments <head> et <body> -->

<!doctype html>
<html lang="fr">
<head>
    <title> Connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
<!-- Formulaire pour se connecter -->
<form action="/Login/connecter" method="POST">
    <label for="identifiant">Identifiant</label>
    <input type="text" name="identifiant" id="identifiant">
    <label for="mot_de_passe">Mot de passe</label>
    <input type="password" name="mot_de_passe" id="mot_de_passe">
    <input type="submit" value="Connexion">
    <div class="connexion">
        <div class="left-align">
            <a href="mdpOublie.html"> Mot de passe oublié ?</a>
        </div>
        <div class="right-align">
            <a href="register.html"> Vous n'avez pas de compte ?</a>
        </div>
    </div>
</form>
</body>
</html>

<?php include '../standard/pied.php'?>
<!-- inclure le contenu d'un fichier appelé 'pied.php' qui contient probablement les informations de pied de page pour la page web -->


