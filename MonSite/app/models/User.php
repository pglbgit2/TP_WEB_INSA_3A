<?php
include_once(APP_ROOT . "/app/libraries/Database.php");

class User
{
    private $connection;

    private $id;
    private $password;
    private $email;
    private $role;
    private $user;

    public function __construct()
    {
        $this->connection=new Database();
    }

    public function get_db()
    {
        return $this->connection;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function get_role()
    {
        return $this->role;
    }
    public function get_user()
    {
        return $this->user;
    }



    public function login($email, $password)
    {
        $sql="SELECT * from Users where email='" . $email."';";
        $this->get_db()->prepare($sql);
        $this->get_db()->execute();
        $row = $this->get_db()->single();
         if (password_verify($password, $row["password"])){
             return $row;
        }

        if (strcmp($password, $row["password"])==0){
            return $row;
        } 
        else {
            return false;
        }
    }



    public function findUserByEmail($email)
    {
        $sql="SELECT * from Users where email='" . $email . "';";
        $this->get_db()->prepare($sql);
        $this->get_db()->execute();
        if($this->get_db()->single() == false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function getUserById($id)
    {
        $sql="SELECT * from Users where id=" . $id . ";";
        $this->get_db()->prepare($sql);
        $this->get_db()->execute();
        return ($this->get_db()->single());
    }
    public function register($data)
    {
        $sql = "INSERT INTO Users (username, email, password, role) VALUES('" . $data['username'] . "','" . $data['email'] . "','" . ($data['password']) . "','" . $data['role'] . "');";
        $this->get_db()->prepare($sql);
        $this->get_db()->execute();
        if ($this->get_db()->single() == false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}


