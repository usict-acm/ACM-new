<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once './database.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$year = $_GET['year'];

$sql = "SELECT year,magazine FROM magazine WHERE year = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param('s', $year);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array();
if($row[1] == ''){
    echo "No magazine exists for this year";
}
else{
    print("<html>");
    print ('<img src="data:image/jpeg;base64,'.base64_encode($row[1]).'"/>');
    print("<html/>");
}

//reference https://stackoverflow.com/questions/20556773/php-display-image-blob-from-mysql
?>