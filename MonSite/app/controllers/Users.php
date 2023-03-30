<?php
require_once(APP_ROOT."/app/libraries/Controller.php");
include_once(APP_ROOT."/app/models/User.php");
include_once(APP_ROOT.'/app/config/helpers/url_helpers.php');
class Users extends Controller{

    private $model;
    public function __construct(){
        $this->model("User");
    }


    public function login(){

       $test=$this->User->login($_POST['email'], $_POST['password']);
       if($test != false)
       {
        $_SESSION['email']=$_POST['email'];
       }
       redirect('test.php');
    }

    public function register(){
        $data['username'] = $_POST['user'];
        $data['email'] = $_POST['email'];
        $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $data['role'] = 'normal';
        echo $data['username'];
        echo $data['email'];
        echo $data['password'];
        echo $data['role'];

        $test = 1;
        if (!strcmp($data['username'],'')){
            echo 'no username';
            $test = 0;
        }
        if (!strcmp($data['email'],'')){
            echo 'no email';
            $test = 0;
        }
        if (!strcmp($data['password'],'')){
            echo 'no password';
            $test = 0;
        }
        if (!strcmp($data['role'],'')){
            echo 'no role';
            $test = 0;
        }
        if ($this->User->findUserByEmail($data['email'])){
            echo 'already existing email';
            $test = 0;
        }
        if ($test == 0){
            redirect('register.php');
        }
        else
        {
            $this->User->register($data);
            redirect('login.php');
        }
        

    }

}

?>