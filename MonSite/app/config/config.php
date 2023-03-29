<?php
// echo (str_replace('app/config/config.php', '', $_SERVER['SCRIPT_FILENAME']));
define('APP_ROOT', str_replace('app/config', '', dirname(__FILE__)));
define('URL_ROOT', "http://monsite.fr");