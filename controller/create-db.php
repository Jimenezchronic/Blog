<?php
require_once (__DIR__ ."/../model/database.php"); //this code allows me to get out of this file to accept code from another file.
$connection = new mysqli($host, $username, $password); //variable that connects to server.

if ($connection->connect_error) {
    die(' Error:  (' . $connection->connect_error . ') '
            . $mysqli->connect_error);       //checks my connection.
}
 
else{
     echo"Success: " . $connection->host_info; //echos "success to inform me that the connection was successful.
 }
 
 $connection ->close(); //closes my conecion.

