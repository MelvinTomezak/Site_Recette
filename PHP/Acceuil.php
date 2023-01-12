<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil de la Patisserie</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/Acceuil.css">
</head>
<body>
<h1>Bienvenue à la Patisserie</h1>
</body>
</html>
<div class="container">
    <div class="banner">
        <img src="../Image/Bannière_Choc.jpg.jfif" alt="Bakery">
    </div>
    <div class="menu">
        <a href="produits.php">Produits</a>
        <a href="contact.php">Contact</a>
    </div>

    <div class="champ_recherche">
        <h2>Rechercher des produits</h2>
        <form action="recherche.php" method="post">
            <input type="text" name="recherche" placeholder="Entrez votre recherche" required>
            <input type="submit" name="submit" value="Rechercher">
        </form>
    </div>
    <div class="contenu">
        <h2>Notre gamme de produits</h2>
        <img src="../Image/ParisBrestjpg.jpg" alt="Cake">
        <p>Notre patisserie propose une large gamme de produits, allant des gâteaux traditionnels aux gâteaux personnalisés, en passant par des tartes, des biscuits et des glaces. Nous proposons également des produits végétariens et sans gluten. Nous sommes fiers de proposer des produits de qualité et nous nous efforçons de satisfaire tous vos goûts et préférences.</p>
    </div>
</div>
<footer>
<div class="formulaire">

        <h2>Formulaire d'inscription et connexion</h2>

        <form action="traitement.php" method="post">
            <label>Adresse e-mail : </label>
            <input type="text" name="email" placeholder="Entrez votre adresse e-mail" required><br>
            <label>Mot de passe : </label>
            <input type="password" name="password" placeholder="Entrez votre mot de passe" required><br>
            <input type="submit" name="submit" value="Se connecter">
        </form>
        <span>Vous n'avez pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></span><br>
        <span>Mot de passe oubliÃ© ? <a href="mdp_oublie.php">Cliquez ici</a></span>
        <p>Company © W3docs. All rights reserved.</p>
</div>
    </footer>

</body>
</html>