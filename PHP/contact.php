<!DOCTYPE html>
<html>
<head>
    <title>Page de contact</title>
    <link rel="stylesheet" href="../css/Accueil.css">

</head>
<body>
<div class="menu">
    <a href="produits.php">Produits</a>
    <a href="contact.php">Contact</a>
</div>
<h1>Page de contact</h1>
<form action="contact.php" method="post">
    <label>Votre nom :</label><br>
    <input type="text" name="name" value=""><br><br>
    <label>Votre adresse email :</label><br>
    <input type="text" name="email" value=""><br><br>
    <label>Votre message :</label><br>
    <textarea name="message" rows="5" cols="30"></textarea><br><br>
    <input type="submit" name="submit" value="Envoyer">
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'monemail@test.com';
    $subject = 'Message de la page de contact';
    $msg = "Nom : $name\n"
        . "Email : $email\n"
        . "Message : $message\n";
    $from = "From: $name <$email>\r\n";

    mail($to, $subject, $msg, $from);

    echo "Le message a été envoyé";
}
?>