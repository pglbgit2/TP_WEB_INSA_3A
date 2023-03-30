<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--<link rel="stylesheet" href="static/CSS/login.css" />-->
        <title>Connexion</title>
    </head>
<body>
    <?php    
        session_start();
        if (isset($_POST['submit']) or isset($_SESSION['submit']))
        {
            if ($_SESSION['login']=="rtas" && $_SESSION['password']=="azerty" && $_SESSION['submit']=="yes")
            {
                echo $login ;
                echo "<p>correctly connected</p>" ;
            }
            else{
                $login=(isset($_POST['login'])) ? $_POST['login'] :'';
                $pass=(isset($_POST['pass'])) ? $_POST['pass']:'';
                if (($login=="rtas") && ($pass == "azerty"))
                {
                    $_SESSION['login'] = "rtas";
                    $_SESSION['password'] = "azerty";
                    $_SESSION['submit'] = "yes";
                    echo $login ;
                    echo "<p>correctly connected</p>" ;
                }
                else
                {
                    echo '<p style="color:#FF0000; font-weight:bold;">Erreur de connexion</p>';
                }
            }
            
        }
        else
        {
            echo '
            <form id="conn" method="post" action="" >
                <p><label for="login">Login:</label><input type="text" id="login" name="login"/></p>
                <p><label for="pass">Mot de passe:</label><input type="password" id="pass" name="pass" /></p>
                <p><input type="submit" id="submit" name="submit" value="Connexion"/></p>
            </form>';
            
        };?>
    </body>