<?php
session_start();
?>


<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="connexion.css">

<form action="/Login/connecterAction/" method="POST">

    <label for="identifiant">Identifiant</label>
    <input type="text" name="identifiant" id="identifiant"/>

    <label for="mot_de_passe">Mot de passe</label>
    <input type="password" name="mot_de_passe" id="mot_de_passe"/>

    <input type="submit" value="Connexion"/>

</form>


