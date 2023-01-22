<nav>
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
            <?php if (isset($_SESSION['user'])) { ?>
                <a href="profile.php">Profile</a>
                <a href="logout.php">Logout</a>
            <?php } else { ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
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
            padding: 10px;
            border-radius: 10px;
        }

        nav ul li.search-bar {
            margin-left: auto;
            margin-right: auto;
        }

        nav form {
            display: flex;
            align-items: center;
        }
        li .right {
            float: right;
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

        nav ul li.right {
            margin-left: auto;
        }


    </style>
</head>