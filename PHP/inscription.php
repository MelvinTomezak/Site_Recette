<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../css/inscription.css" media="screen" type="text/css" />
</head>
<body>
<div class="container">
    <div class="menu">
        <a href="produits.php">Produits</a>
        <a href="contact.php">Contact</a>
        <a href="Accueil.php">Accueil</a>
    </div>
</div>
<div id="Formulaire">
    <!-- zone de connexion -->

    <form action="verification.php" method="POST">
        <h1>Inscription</h1>

        <label><b>E-Mail </b></label>
        <br>
        <input type="email" placeholder="Entrer votre email" name="mail" required>

        <br>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value='LOGIN' >
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
        <div class="Connexion">
            <a href="connexion.php"> <p>Connexion</p></a>
        </div>
    </form>

</div>

<footer>
    <p>Company © W3docs. All rights reserved.</p>
</footer>
</body>
</html>