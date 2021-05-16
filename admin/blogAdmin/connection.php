
<?php
$server = "localhost:3307";
    $username = "root";
    $password = "";
    $database_name = "acmbackend";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$database_name);

    if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

?>