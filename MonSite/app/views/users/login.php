<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--<link rel="stylesheet" href="static/CSS/login.css" />-->
        <title>Connection</title>
    </head>
<body>
    <?php    
        include('../../config/config.php');
        include(APP_ROOT . '/app/controllers/Users.php');    
        session_start();
        var_dump($_SESSION['email']); 
        if(isset($_SESSION['email']))
        {
            echo('correctly connected');
        }
        else if (isset($_POST['submit']) and isset($_POST['email']) and isset($_POST['password']))
        {
            $users = new Users();
            $users->login();
            $_POST=null;
        }
        else
        {
            echo '
            <form id="conn" method="post" action="" >
                <p><label for="email">Email:</label><input type="text" id="email" name="email"/></p>
                <p><label for="password">Mot de passe:</label><input type="password" id="password" name="password" /></p>
                <p><input type="submit" id="submit" name="submit" value="Connexion"/></p>
            </form>';
            
        };?>
    </body>