<html>
<head>
    <link rel="stylesheet" href="contact.css" />
    <script type="text/javascript" src="contact.js"></script>
</head>
<body>
<ul class="navbar">
    <li><a href="Accueil.php">Accueil</a></li>
    <li><a href="Contact.php">A propos de nous</a></li>
    <li><a href="Contact.php">Contact</a></li>
    <li class="search-bar">
        <form>
            <input type="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </li>
    <li class="right">
        <a href="/Vues/Connexion/Login.php">Login</a>
        <a href="/Vues/Connexion/Register.php">Register</a>
    </li>
</ul>
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
