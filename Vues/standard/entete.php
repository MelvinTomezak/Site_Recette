<nav>
    <ul class="navbar">
        <li><a href="/">Accueil</a></li>
        <li><a href="/Vues/About/aPropos">A propos de nous</a></li>
        <li><a href="/Vues/Contact/Contact">Contact</a></li>
        <li class="search-bar">
            <form action="/Recette/rechercher" method="post">
                <input type="search" id ="recherche" name="recherche" placeholder="Search...">
                <button class="searchbutton" type="submit">Search</button>
            </form>



        </li>
        <li class="right">

            <?php
            if (isset($_SESSION['identifiant'])) {
                echo "<li><a href='/Login/deconnexion'> Se déconnecter </a></li>";
                echo "<li><a href='/Vues/EditRecette/ajouterRecette'>Ajouter une recette</a></li>";
            }
            else{
                echo '<a href="/Vues/Connexion/Login">Login</a>';
                echo '<a href="/Vues/Connexion/Register">Register</a>';
            }
            ?>

        </li>
    </ul>
</nav>
    <!--  css -->
    <style>

        a{
            padding-right: 20px;

        }

        nav {
            background-color: #FDA50F;
            border-radius: 10px;
            border: 2px solid #2a5c8e;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        nav ul li {
            margin: 0 10px;
        }
        nav ul li a {
            color: black;
            text-decoration: none;
            font-family: sans-serif;
            font-weight: bold;
        }
        nav ul li a:hover {
            background-color: #2f6cc9;
            color: white;
            padding: 1px;
            border-radius: 5px;
        }
        nav ul li.search-bar {
            margin-left: 50px;
        }
        nav form {
            display: flex;
            align-items: center;
            padding-top: 10px;
        }
        nav input[type="search"] {
            padding: 10px;
            border: none;
            border-radius: 10px;
            margin-right: 10px;
        }
        nav button[type="submit"] {
            background-color: #2f6cc9;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
        }

        .searchbutton{
            width: 50%;
            height: 50%;
        }
    </style>
