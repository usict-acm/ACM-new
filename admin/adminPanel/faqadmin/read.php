<?php
// Check existence of Sno parameter before processing further
if(isset($_GET["Sno"]) && !empty(trim($_GET["Sno"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM blog WHERE Sno = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["Sno"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $question = $row["question"];
                $answer = $row["answer"];
                $lang = $row["lang"];
            } else{
                // URL doesn't contain valid Sno parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain Sno parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>View Record</title>
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
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>question</label>
                        <p class="form-control-static"><?php echo $row["question"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>answer</label>
                        <p class="form-control-static"><?php echo $row["answer"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>lang</label>
                        <p class="form-control-static"><?php echo $row["lang"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>