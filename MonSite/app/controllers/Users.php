<?php
include("../libraries/Controller.php");
include("../models/User.php");
include('../config/helpers/url_helpers.php');
class Users extends Controller{

    private $model;
    public function __construct(){
        $this->model("User");
    }


    // public function logins($email, $password){

    //     session_start();

    //     $_POST['email'] = $email;
    //     $_POST['password'] = $password; 

    //     $this->user->login($_POST['email'], $_POST['password']);
    // }

    public function register(){
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = password_hash($_POST['password'], "PASSWORD_DEFAULT");
        $date['role'] = 'normal';
        $test = 1;
        if (strcmp($data['username'],'')){
            echo 'no username';
            $test = 0;
        }
        if (strcmp($data['email'],'')){
            echo 'no email';
            $test = 0;
        }
        if (strcmp($data['password'],'')){
            echo 'no password';
            $test = 0;
        }
        if (strcmp($data['role'],'')){
            echo 'no role';
            $test = 0;
        }
        if ($this->model->findUserByEmail($data['email'])){
            echo 'already existing email';
            $test = 0;
        }
        if ($test == 0){
            redirect('/views/users/register.php');
        }
        redirect('/views/users/login.php');


    }

}

$u=new Users()

?>