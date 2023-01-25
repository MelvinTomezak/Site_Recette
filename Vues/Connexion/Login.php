<?php
session_start();
?>
<?php include '../standard/entete.php'; ?>
<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="connexion.css">

<form action="/Login/connecter/" method="POST">

    <label for="email">Email</label>
    <input type="email" name="email" id="email"/>

    <label for="password">Password</label>
    <input type="password" name="password" id="password"/>

    <input type="submit" value="Login"/>

</form>
<?php include '../standard/pied.php'; ?>




