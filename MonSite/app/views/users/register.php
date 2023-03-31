<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Connexion</title>
    </head>
<body>



    <p id="navheader"> </p>
    <script src="../../../static/code.js">
    </script>
    <script>navbar(); </script>

    <?php
    include('../../config/config.php');
    include(APP_ROOT . '/app/controllers/Users.php');
        session_start();
        echo(APP_ROOT);
        if (isset($_POST['submit']))
        {
            if ($_POST['user']!="" && $_POST['email']!="" && $_POST['password']!="")
            {
                echo "<p>bon</p>" ;
                $users = new Users();
                $users->register();
            }
            else
            {
                echo '<p> NNNOOOON</p>';
            }
        }
        else
        {
            echo'
            <form id="conn" method="post" action="" >
                <p><label for="user">Login:</label><input type="text" id="user" name="user"/></p>
                <p><label for="email">Email:</label><input type="email" id="email" name="email"></p>
                <p><label for="password">Mot de passe:</label><input type="password" id="password" name="password" /></p>
                <p><input type="submit" id="submit" name="submit" value="Register"/></p>
            </form>;
            ';
        }
        ?>
    </body>