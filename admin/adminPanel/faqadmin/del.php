<?php
// Process delete operation after confirmation
if(isset($_GET["Sno"]) ){

    include_once '../../blogAdmin/database.php';
    $database = new Database();
    $conn = $database->connect();
    // $connection = $link;

    // $conn=mysqli_connect('localhost','root','root','db');
    $Sno = mysqli_real_escape_string($conn,$_GET['Sno']);
  
  
    // Prepare a delete statement
    $sql = "DELETE FROM link WHERE code ='".$Sno."'";
    // $sql = "DELETE FROM forms WHERE formID ='df17d23b'";
    // echo $sql;
    // echo $Sno;

     if($conn->query($sql)==true){
         
        echo "Sucessfully Deleted";
        header("location: ../index.php?table=ShortLink");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

        <style>
                    .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    .hh_button {
    display: inline-block;
    text-decoration: none;
    background: linear-gradient(to right,#ff8a00,#da1b60);
    border: none;
    color: white;
    padding: 10px 25px;
    font-size: 1rem;
    border-radius: 3px;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
    position: relative;
    margin-top: 30px;
    margin: 0px;
    position: absolute;
    right: 20px;
    top: 1.5%;
    }
    header {
    color: white;
    padding: 20px;
    margin-bottom: 20px;
    }
    header a,  header a:hover {
        text-decoration: none;
        color: white;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="Sno" value="<?php echo trim($_GET["Sno"]); ?>"/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="../index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
