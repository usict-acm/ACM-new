<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once './database.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();
//echo $db;
$year = $_GET['year'];
echo $year;

$sql = "SELECT * FROM magazine WHERE year = $year";
echo $db;
$stmt = $db->query($sql);
echo $stmt;
// $stmt->bind_param('s', $year);
// echo $year;
// $stmt->execute();
// echo $year;
// $result = $stmt->get_result();
// echo $year;
// $row = $result->fetch_array();
// echo $year;
// echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>';
// echo $year;


//reference https://stackoverflow.com/questions/20556773/php-display-image-blob-from-mysql
?>