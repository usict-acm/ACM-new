<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//require('../blogAdmin/database.php');
include_once './database.php';
include_once './member.php';
$database = new Database();
    $conn = $database->connect();
$method = $_SERVER['REQUEST_METHOD'];
if(isset($_GET["Sno"]) ){

$Sno = mysqli_real_escape_string($conn,$_GET['Sno']);
  
  
    // Prepare a delete statement
    $sql = "DELETE FROM team WHERE id ='".$Sno."'";
    

     if($conn->query($sql)==true){
         
        echo "Sucessfully Deleted";
        header("location: ../../index.php?table=Teams");
        // exit();
    }else {
        echo "ERROR: $sql <br> $conn->error";
    }
    
    mysqli_stmt_close($stmt);
} else{
    // Check existence of Sno parameter
    if(empty(trim($_GET["Sno"]))){
        // URL doesn't contain Sno parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>