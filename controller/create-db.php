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
        echo "<p>Database created successfully" . $database. "</p>"; //checks if the database has been created or not.
    }
} else {
    echo"<p>database already exist</p>"; //echoeing that we already made a database.
}

$query = $connection -> query("CREATE TABLE posts ("
        . "id int(11)NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))"); //created a table

if($query){
    echo "<p>successfully create table: Posts</p> ";
}

else{
    echo"<p> $connection->error </p>"; 
}

$connection->close(); //closes my conecion.

