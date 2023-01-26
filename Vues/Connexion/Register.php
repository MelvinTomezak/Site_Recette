<?php
session_start();
?>


<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="connexion.css">

<form action="/Login/inscrire" method="POST">

    <label for="username">Username</label>
    <input type="text" name="nom_affichage" id="nom_affichage"/>

    <label for="email">Email</label>
    <input type="email" name="identifiant" id="identifiant"/>

    <label for="password">Password</label>
    <input type="password" name="mot_de_passe" id="mot_de_passe"/>

    <input type="submit" value="Register"/>

</form>


