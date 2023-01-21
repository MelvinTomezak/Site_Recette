<?php
echo '<ul class="navbar">';
echo '<li><a href="home.php">Accueil</a></li>';
echo '<li><a href="about.php">A propos</a></li>';
echo '<li><a href="contact.php">Contact</a></li>';
echo '<li class="right"><a href="login.php">Connection</a></li>';
echo '<li class="right"><a href="search.php">Rechercher</a></li>';
echo '</ul>';

?>

<head>
    <style>
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
           // background-color: white;
            background: linear-gradient(#e66465, #9198e5);
            border-radius: 10px;
            border: 2px solid #2a5c8e;
        }

        ul.navbar li {
            float: left;
        }

        ul.navbar li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: sans-serif;
            font-weight: bold;
        }

        ul.navbar li a:hover {
            background-color: #2f6cc9;
        }

        ul.navbar li.right {
            float: right;
        }
    </style>
</head>


