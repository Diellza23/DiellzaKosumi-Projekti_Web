<?php

class DatabasePDOConfiguration
{
    private $connection;

    private $host = "localhost";
    private $username = "root";
    private $dbName = "restoranti";
    private $password = "";

    private function createConnection()
    {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        $this->password;
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    protected function getConnection()
    {
        $this->createConnection();
        return $this->connection;
    }
}

class DatabaseMySQLiConfiguration
{
    private $connection;

    private $host = "localhost";
    private $username = "root";
    private $dbName = "restoranti";
    private $password = "";

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    }

    protected function getConnection()
    {
        return $this->connection;
    }
}
