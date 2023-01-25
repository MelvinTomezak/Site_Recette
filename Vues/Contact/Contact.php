<html>
<head>
    <?php include '../standard/entete.php'; ?>
    <link rel="stylesheet" href="contact.css" />
    <script type="text/javascript" src="contact.js"></script>
</head>
<body>
<div id="box">
    <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
        <h3>Formulaire de contact</h3>
        <label>Nom: <span>*</span></label>
        <input type="text" id="name" name="name" placeholder="Nom"/>
        <label>Email: <span>*</span></label><span id="info" class="info"></span>
        <input type="email" id="email" name="email" placeholder="Email"/>
        <label>Sujet: <span>*</span></label>
        <input type="text" id="subject" name="subject" placeholder="Demande de renseignement"/>
        <label>Message:</label>
        <textarea id="message" name="message" placeholder="Message..."></textarea>
        <input type="submit" name="send" value="Envoyer le message"/>
    </form>
</div>
</body>
</html>



<?php include '../standard/pied.php';?>