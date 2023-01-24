<nav>
    <ul class="navbar">
        <li><a href="Accueil.php">Home</a></li>
        <li><a href="Contact.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li class="search-bar">
            <form>
                <input type="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </li>
        <li class="right">
            <?php if (isset($_SESSION['user'])) { ?>
                <a href="profile.php">Profile</a>
                <a href="logout.php">Logout</a>
            <?php } else { ?>


                <div class="log">
                    <a href="../Connexion/Login.php">Login</a>
                </div>

                <div class="reg">
                    <a href="../Connexion/Register.php">Register</a>
                </div>



            <?php } ?>
        </li>
    </ul>
</nav>



<head>
    <style>
        nav {
            background: linear-gradient(#e66465, #9198e5);
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


    </style>
</head>