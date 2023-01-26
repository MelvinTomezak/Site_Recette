<?php
session_start();
?>
<?php include '../standard/entete.php'?>

<!doctype html>
<html lang="fr">
<title> Connexion</title>

<link rel="stylesheet" href="connexion.css">

<form action="/Login/connecter" method="POST">

    <label for="identifiant">Identifiant</label>
    <input type="text" name="identifiant" id="identifiant"/>

    <label for="mot_de_passe">Mot de passe</label>
    <input type="password" name="mot_de_passe" id="mot_de_passe"/>

    <input type="submit" value="Connexion"/>
    <div class="connexion">
        <div class="left-align">
            <a href="mdpOublie.php"> Mot de passe oublié ?</a>
        </div>
        <div class="right-align">
            <a href="Register.php"> Vous n'avez pas de compte ?</a>
        </div>
    </div>

</form>
<?php include '../standard/pied.php'?>

