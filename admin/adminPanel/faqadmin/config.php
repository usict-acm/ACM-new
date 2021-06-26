<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// $DB_SERVER = "localhost";
// $DB_USERNAME = "root";
// $DB_PASSWORD = "";
// $DB_NAME = "acmbackend";
 
// /* Attempt to connect to MySQL database */
// $link = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }

    require('../blogAdmin/database.php');
    $database = new Database();
    $link = $database->connect();
    $connection = $link;
?>
