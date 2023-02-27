<?php 
//database  connecting config
$database = new Database();
$conn = $database->connect();

//adding new visitors
//$visitor_ip = $_SERVER['REMOTE_ADDR'];

//checking if the visitor is unique
$query = "SELECT * FROM visitor_counter where id=1";
$result = mysqli_query($conn, $query);


//checking query error 
if(!$result){
    die("Retriving Query error <br>".$query);
}
$total_visitors = mysqli_num_rows($result);
var_dump($result);
$total_visitors++;
//$queries ="INSERT INTO `visitor_counter` (`id`, `count`) VALUES ('1', '".$total_visitors."')";
$queries ="update visitor_counter set count =".$total_visitors." where id =1";
// $query = "INSERT INTO visitor_counter(ip_address) VALUES('$visitor_ip')";
// $result = mysqli_query($conn, $query); 

// $query = "SELECT * FROM visitor_counter";
// $result = mysqli_query($conn, $query);

//checking query error 
$result = mysqli_query($conn, $query);


//checking query error 
if(!$result){
    die("Retriving Query error <br>".$query);
}

$total_visitors = mysqli_num_rows($result);
?>