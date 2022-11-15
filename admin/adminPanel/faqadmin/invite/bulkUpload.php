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
                        <h2>Invite in Bulk</h2>
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
    require('../blogAdmin/database.php');
    $database = new Database();
    $link = $database->connect();
if(isset($_FILES['excel']['name'])){
    // require('../blogAdmin/database.php');

    // var_dump($link);



    include "xlsx.php";
    $noOfRows = 0;
    if($link){
        $excel = SimpleXLSX::parse($_FILES['excel']['tmp_name']);
       // print_r($excel->rows());
       $i=0;
       $query="";
       echo "<script>
        window.value = false;
        if (confirm('Do you want to mail this certificate to the student?') == true) { 
            window.value = true;    
        }
        </script>";
    foreach ($excel->rows() as $key => $row) {
        //print_r($row);
        $q="";


        foreach ($row as $key => $cell) {
            if($i>0){
                $q.="'".$cell. "',";
            }
        }
        
    
        if($i>0){
            $query="INSERT INTO invite (name, email) values (".rtrim($q,",").");";
            $array = explode(',', $q);
            $email = $array [1];

            // echo "<script>
            //     if(window.value == true)
            //         certi_mail($unique $email);

            //         function certi_mail(unique, email) {
            //             console.log(unique, email);
            //             let certi_data = JSON.stringify({'Sno': unique, 'email': email});
            //             $.ajax({
            //                 type: 'POST',
            //                 url: '../adminPanel/faqadmin/certificate_mail.php',
            //                 data : certi_data,
            //                 cache: false,
            //                 processData: false,
            //                 contentType: false,
            //                 success: function(data){
            //                     // console.log('Success');
            //                 },
            //                 error: function(xhr, status, error){
            //                     console.log(error);
            //                 },
            //             });
            //         }
            //         </script>";
            // $unique = "ACM/DC/000";
            // echo $query;
        }
        
        if($i>0){
        if(mysqli_query($link,$query))
			{
				// echo "true";
                // echo $i;
                $noOfRows = $i;
			}
        }
        $i++;
    }
    }
    mysqli_close($link);
    echo "<script>
            location.replace('./faqadmin/sample.php');  
            if (window.value == true)
            alert('Certificates mailed succesfully')
            </script>";

}
?>
    </body>
</html>