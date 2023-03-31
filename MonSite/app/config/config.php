<?php
$local = getcwd();
$local = str_replace( '/app' ,'',$local);
$local = str_replace( '/static' ,'',$local);
$local = str_replace( '/config' ,'',$local);
$local = str_replace( '/helpers' ,'',$local);
$local = str_replace( '/libraries' ,'',$local);
$local = str_replace( '/models' ,'',$local);
$local = str_replace( '/views' ,'',$local);
$local = str_replace( '/users' ,'',$local);
$local = str_replace( '/register.php' ,'',$local);
$local = str_replace( '/login.php' ,'',$local);

define('APP_ROOT', $local);
define('URL_ROOT', "http://monsite.fr");
?>