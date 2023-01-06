<?php 
//database  connecting config
$database = new Database();
$conn = $database->connect();

//adding new visitors
$visitor_ip = $_SERVER['REMOTE_ADDR'];

//checking if the visitor is unique
$query = "SELECT * FROM visitor_counter WHERE ip_address='$visitor_ip'";
$result = mysqli_query($conn, $query);

//checking query error 
if(!$result){
    die("Retriving Query error <br>".$query);
}
$total_visitors = mysqli_num_rows($result);
if($total_visitors < 1){
    $query = "INSERT INTO visitor_counter(ip_address) VALUES('$visitor_ip')";
    $result = mysqli_query($conn, $query); 
}
//retrive existing number of visitor 
$query = "SELECT * FROM visitor_counter";
$result = mysqli_query($conn, $query);

//checking query error 
if(!$result){
    die("Retriving Query error <br>".$query);
}

$total_visitors = mysqli_num_rows($result);
?>