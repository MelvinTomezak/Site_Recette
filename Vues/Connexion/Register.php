<?php
session_start();
?>


<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="connexion.css">

<form action="/Login/inscrire" method="POST">

    <label for="nom_affichage">Username</label>
    <input type="text" name="nom_affichage" id="nom_affichage"/>

    <label for="identifiant">Email</label>
    <input type="email" name="identifiant" id="identifiant"/>

    <label for="mot_de_passe">Password</label>
    <input type="password" name="mot_de_passe" id="mot_de_passe"/>

    <input type="submit" value="Register"/>

</form>


