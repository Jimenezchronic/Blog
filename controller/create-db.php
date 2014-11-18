<?php

require_once ("../model/database.php");
$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die(' Error (' . $connection->connect_error . ') '
            . $mysqli->connect_error);
            
}
 else{
     echo"success" . $connection->host_info;
 }
 
 $connection ->close();

