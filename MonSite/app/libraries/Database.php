<?php

class Database
{
    private $db = "Blog1";
    private $host="localhost";
    private $username="rtas";
    private $password="azerty";
    protected $_connexion;

    private $stat;

    public function __construct()
    {
        $this->_connexion = null;
        try {
            $this->_connexion = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->db,
                $this->username,
                $this->password
            );
            //var_dump($this->_connexion);
        } catch (PDOException $exception){
            echo("Err :" . $exception->getMessage());
        }
    }



    public function prepare($sql)
    {
        $this->stat = $this->_connexion->prepare($sql);

    }

    public function execute()
    {
        $this->stat->execute();
    }

    public function single()
    {
        return $this->stat->fetch();
    }

    public function resultSet()
    {
        return $this->stat->fetchAll();
    }

    public function rowCount()
    {
        return $this->stat->rowCount();
    }

    public function lastInsertedId()
    {
        return $this->_connexion->lastInsertId();
    }
}

