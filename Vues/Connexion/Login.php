<?php
session_start();
?>

<!doctype html>
<html lang="fr">


<link rel="stylesheet" href="connexion.css">

<form action="/Controleurs/ControleurLogin.php" method="POST">

    <label for="email">Email</label>
    <input type="email" name="email" id="email"/>

    <label for="password">Password</label>
    <input type="password" name="password" id="password"/>

    <input type="submit" value="Login"/>

</form>





