<?php
echo '<ul class="navbar">';
echo '<li><a href="home.php">Accueil</a></li>';
echo '<li><a href="about.php">A propos</a></li>';
echo '<li><a href="contact.php">Contact</a></li>';
echo '</ul>';

?>
<head>
    <style>
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        ul.navbar li {
            float: left;
        }

        ul.navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.navbar li a:hover {
            background-color: #111;
        }
    </style>
</head>