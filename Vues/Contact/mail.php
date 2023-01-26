<?php

require '../../phpmailer/includes/Exception.php';
require '../../phpmailer/includes/PHPMailer.php';
require '../../phpmailer/includes/SMTP.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$mailDestination = $_POST["email"];
$mailSubject = $_POST["subject"];
$mailBody = $_POST["message"];
$name = $_POST["name"];

//recup des variable du formulaire
//$sql = "insert into RETRIEVE_PASSWORD values (:mail_dest, :token)";
//$sth = $con->prepare($sql);
//$sth->bindValue(':token', $token, PDO::PARAM_INT);
//$sth->bindValue(':mail_dest', $mailDestination, PDO::PARAM_STR);
//$sth -> execute();


// On crée une instance de PHPMailer
$mail = new PHPMailer();

// Encodage UTF-8 pour les accents...
$mail->CharSet = 'UTF-8';

// On utilise le serveur mail SMTP
$mail->isSMTP();

// On définit l'hôte smtp (dans notre cas GMAIL)
$mail->Host = "smtp.gmail.com";

// On active l'authentification SMTP
$mail->SMTPAuth = true;

// On utilise l'encryptage de type tls (Transport Layer Security)
$mail->SMTPSecure = "tls";

// On se connecte sur le port 587 qui est un port sécurité
$mail->Port = "587";

// On donne l'utilisateur à savoir le login du compte GMAIL
$mail->Username = "maisondespatisseries@gmail.com";

// On donne le mot de passe qui à été généré dans la partie sécurité du compte GMAIL
$mail->Password = "mhvqqxxtedkmwpur";

// Le sujet de l'email
$mail->Subject = $mailSubject;

// La personne qui envoie l'email
$mail->setFrom($mailDestination,$mailDestination );

// Le corp du mail
$mail->Body = $mailBody;

// On active le format pages (On peu utiliser la synthaxe pages a savoir les balises dans le corps du mail et celui-ci sera reconnu)
$mail->isHTML(true);


// On ajoute l'adresse mail du destinataire
$mail->addAddress("maisondespatisseries@gmail.com");


// Enfin on envoie le mail
if ( $mail->send() ) {
    header("location: /");
    echo("Votre message a été envoyé avec succès");
    exit;
}else{
    echo("Le message n'as pas pu être envoyé " . $mail->ErrorInfo);
    exit;
}

// On ferme la connexion SMTP au compte GMAIL
$mail->smtpClose();

?>