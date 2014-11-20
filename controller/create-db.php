<?php

require_once (__DIR__ . "/../model/database.php"); //this code allows me to accept code from another file.
$connection = new mysqli($host, $username, $password); //variable that connects to server.

if ($connection->connect_error) {
    die(" Error: " . $connection->connect_error);
}

$exist = $connection->select_db($database); //selecting a database.


if (!$exist) {
    $query = $connection->query("CREATE DATABASE $database"); //sending a query to the server to create a new database.

    
    if ($query) {
        echo "Database created successfully" . $database; //checks if the database has been created or not.
    }
} else {
    echo"database already exist";
}



$connection->close(); //closes my conecion.

