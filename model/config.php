<?php
    require_once(__DIR__ . "/database.php");

    $path = "/ramirez-blog/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";

    $connection = new Database($host, $username, $password, $database);
