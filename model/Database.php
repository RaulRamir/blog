<?php

class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($connection->connect_error) {
            die("<p>Reeor: " . $this->connection->connect_error . "</p>");
            //kills the connection when theirs is an error in the connection
        }
    }

    public function closeConnection() {
        if(isset($this->connection)) {
            $this->connection->close();
        }   
    }

    public function query($string) {
        //create an new object and call it specifically on this function 
    }

}
