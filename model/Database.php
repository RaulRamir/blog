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

        $this->connection = new mysqli($host, $username, $password);

        if ($this->connection->connect_error) {
            die("<p>Reeor: " . $this->connection->connect_error . "</p>");
        } else {
            echo "Success" . $connection->host_info;
        }
        $exists = $connection->select_db($database);

        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database");

            if ($query) {
                echo "<p>Successfully created database:" . $database . "</p>";
            }
        } else {
            echo "<p>Database already exists.</p>";
        }
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($connection->connect_error) {
            die("<p>Reeor: " . $this->connection->connect_error . "</p>");
            //kills the connection when theirs is an error in the connection
        }
    }

    public function closeConnection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        //create an new object and call it specifically on this function 
        $this->openConnection();

        $query = $this->conection->query($string);

        $this->closeConnection();

        return $query;
    }

}
