<?php

use Shuchkin\SimpleXLSX;

?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
    <style>
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }

        .hh_button {
            display: inline-block;
            text-decoration: none;
            background: linear-gradient(to right, #ff8a00, #da1b60);
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

        header a,
        header a:hover {
            text-decoration: none;
            color: white;
        }

        #cno{
        text-align: center;
        font-weight: bold;
        font-size: 25px;
        }

    </style>
    </head>
    <body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Certificate in Bulk</h2>
                    </div>
        <form action = "#" method = "POST" enctype="multipart/form-data">
            <input type = "file" name = "excel">
            <input type = "submit" class="btn btn-primary btn-md pull-right" name = "submit">

        </form>
        </div>
            </div>
        </div>
    </div>
<?php
if(isset($_FILES['excel']['name'])){
    require('../blogAdmin/database.php');
    $database = new Database();
    $link = $database->connect();
    $connection = $link;
    $sql = "SELECT * FROM certificate ORDER BY id DESC LIMIT 1";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $u = $row['uniqueNo'];
    $id = substr($u, -1);
    echo $id;
    ord($id);
    
}
else{
    $id = 1;
}
    include "xlsx.php";
    $noOfRows = 0;
    if($connection){
        $excel = SimpleXLSX::parse($_FILES['excel']['tmp_name']);
       // print_r($excel->rows());
       $i=0;
       $query="";
       $unique = "ACM/DC/000";
       //$str_result = '0123456789abcdef';
       foreach ($excel->rows() as $key => $row) {
        //print_r($row);
        $q="";
        if($i>0){
        $id = $id+1;
        $unique=  "'".$unique.$id. "',";
        //echo $unique;
        }
        foreach ($row as $key => $cell) {
            //$unique = strtolower(substr(str_shuffle($str_result),0, 10));$sql = "SELECT * FROM certificate ORDER BY id DESC LIMIT 1";
            

            
            // echo $unique;
            if($i>0){
                $q.="'".$cell. "',";
            }
        }
        
    
        if($i>0){
            $query="INSERT INTO certificate (uniqueNO, nameParticipant,email, startDate, endDate,course,enrollment_no,event,rank, college) values (".$unique.rtrim($q,",").");";
            $unique = "ACM/DC/000";
            echo $query;
        }
        
        if($i>0){
        if(mysqli_query($connection,$query))
			{
				// echo "true";
                // echo $i;
                $noOfRows = $i;
			}
        }
        $i++;
    }
    }

    echo "<div class='container-fluid'>";
            echo "<div class='row'>";
                    echo "<a class='btn btn-success btn-md pull-right' style='margin-left: 43% ;margin-top:2%' href='./faqadmin/adminBulkDown.php?noOfRows=". $noOfRows ."'  >Download All  <span class='glyphicon glyphicon-download-alt'></span></span></a>";
            echo "</div>";
    echo "</div>";
 

}
?>
    </body>
</html>