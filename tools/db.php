<?php
function getDatabaseConnection() {
    /*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "beststoredb";
    */
    $servername = "";
    $username = "";
    $password = "";
    $database = "";
    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);
    if($connection->connect_error){
        die("Error failed to connect to MySQL: " . $connection->connect_error);
    }

    return $connection;
}
?>
