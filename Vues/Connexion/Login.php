<?php
session_start();
?>
<?php include '../standard/entete.php'; ?>
<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="connexion.css">

<form action="/connexion/connecterAction/" method="POST">

    <label for="identifiant">Identifiant</label>
    <input type="text" name="identifiant" id="identifiant"/>

    <label for="mot_de_passe">Mot de passe</label>
    <input type="password" name="mot_de_passe" id="mot_de_passe"/>
    <?php if(isset($_SESSION['error_message'])) { echo $_SESSION['error_message']; } ?>
    <input type="submit" value="Connexion"/>

</form>
<?php include '../standard/pied.php'; ?>
