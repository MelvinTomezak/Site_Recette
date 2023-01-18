<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil de la Patisserie</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/Accueil.css">
</head>
<body>
<div class="container">
    <div class="menu">
        <a href="produits.php">Produits</a>
        <a href="contact.php">Contact</a>
        <div class="Connexion">
            <p>Vous n'avez pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
            <p>Déja inscrit ? <a href="connexion.php">Cliquez ici</a></p>
        </div>
        <form action="recherche.php" method="post">
            <img src="../Image/imageRecherche.jpg" width="2%" height="2%" >
            <input type="text" name="recherche">
        </form>
    </div>
    <div class="contenu">
        <h2>Notre gamme de produits</h2>
        <img src="../Image/ParisBrestjpg.jpg" alt="Cake">
        <p>Notre patisserie propose une large gamme de produits, allant des gâteaux traditionnels aux gâteaux personnalisés, en passant par des tartes, des biscuits et des glaces. Nous proposons également des produits végétariens et sans gluten. Nous sommes fiers de proposer des produits de qualité et nous nous efforçons de satisfaire tous vos goûts et préférences.</p>
    </div>
</div>
<footer>
    <p>Company © W3docs. All rights reserved.</p>
</footer>
</body>
</html>