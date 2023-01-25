<?php
session_start();
?>

<!doctype html>
<html lang="fr">


<link rel="stylesheet" href="connexion.css">

<form action="Login/inscrire" method="POST">
    <label for="username">Username</label>
    <input type="text" name="username" id="username"/>

    <label for="email">Email</label>
    <input type="email" name="email" id="email"/>

    <label for="password">Password</label>
    <input type="password" name="password" id="password"/>

    <input type="submit" value="Register"/>

</form>

