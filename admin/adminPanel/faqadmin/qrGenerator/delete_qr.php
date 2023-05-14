<?php
// Process delete operation after confirmation
if(isset($_GET["Sno"]) ){

    // Database connection
    require('../../../blogAdmin/database.php');
    $database = new Database();
    $conn = $database->connect();

    // 'Sno' obtained from QrCode.php 
    $Sno = $_GET['Sno'];

    // Deleting Qr link
    $sql = "DELETE FROM qr_link WHERE id =".$Sno;

     if($conn->query($sql)==true){

        echo "Sucessfully Deleted";
        header("location: .../../../../index.php?table=QrCode");
        // exit();
    }else {
        echo "ERROR: $sql <br> $conn->error";
    }
    
} else{
    // Check existence of Sno parameter
    if(empty(trim($_GET["Sno"]))){
        // URL doesn't contain Sno parameter. Redirect to error page
        header("location: .../../../../index.php?table=QrCode");
        exit();
    }
}
?>

