<?php
function getDatabaseConnection() {
    /*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "beststoredb";
    */
    $servername = "lsql100.byethost13.com";
    $username = "b13_37181280";
    $password = "Mu773r2001";
    $database = "b13_37181280_beststoredb";
    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);
    if($connection->connect_error){
        die("Error failed to connect to MySQL: " . $connection->connect_error);
    }

    return $connection;
}
?>