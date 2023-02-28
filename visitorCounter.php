<?php 
$database = new Database();
$conn = $database->connect();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// Execute the SQL query
$sql = "SELECT count FROM visitor_count WHERE id = 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the result row
    $row = $result->fetch_assoc();
    $visitor_count = $row["count"];
}else {
    // The visitor count row does not exist, create it with a count of 0
    $visitor_count = 0;
    $sql = "INSERT INTO visitor_count (id, count) VALUES (1, 0);";
    $conn->query($sql);
  }
$visitor_count+=1;
// Update the visitor count in the database
$sql = "UPDATE visitor_count SET count = $visitor_count WHERE id = 1";
$conn->query($sql);

$sql = "SELECT count FROM visitor_count WHERE id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$visitor_count = $row["count"];

?>