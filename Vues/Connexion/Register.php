<?php
session_start();
?>
<!-- Ce code est un formulaire d'inscription pour un utilisateur.
Il définit une page HTML avec une forme qui permet à un utilisateur de créer un compte en saisissant un nom d'affichage,
une adresse email et un mot de passe. Les données saisies dans le formulaire sont ensuite envoyées à l'URL "/Login/inscrire" en utilisant la méthode POST.
 Il y a aussi un lien pour permettre aux utilisateurs qui ont déjà un compte de se connecter. Le code inclut également un fichier "entete.php" pour inclure
 des éléments communs à l'en-tête de la page, et un fichier "connexion.css" pour les styles de la page.
 Il utilise aussi une session PHP pour gérer les informations de l'utilisateur.
 -->
<!doctype html>
<html lang="fr">
<head>
    <?php include '../standard/entete.php'; ?>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
<form action="/Login/inscrire" method="POST">
    <label for="nom_affichage">Username</label>
    <input type="text" name="nom_affichage" id="nom_affichage"/>
    <label for="identifiant">Email</label>
    <input type="email" name="identifiant" id="identifiant"/>

    <label for="mot_de_passe">Password</label>
    <input type="password" name="mot_de_passe" id="mot_de_passe"/>

    <input type="submit" value="Créer un compte"/>

    <a href="Login.php">Vous avez déjà un compte ?</a>
</form>
</body>
</html>

