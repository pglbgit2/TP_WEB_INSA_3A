<?php
session_start();

function isLoggin(){
    if (isset($_SESSION['user_cd'])){
        return true;
    }
    else{
        return false;
    }
}
?>