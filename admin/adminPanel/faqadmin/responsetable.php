<?php


$db = mysqli_connect("localhost","root","","acmbackend");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>



<!DOCTYPE html>
<html>
<head>
  <title>Responses</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
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
                    <div class="page-header clearfix">
                    <h2 class="pull-left">Responses</h2>
                    <table class="table table-bordered table-striped">
                    <tr>
                        <td>ID</td>
                        <td>Email 0</td>
                        <td>Email 1</td>
                        <td>Email 2</td>
                    </tr>

                    <?php

                    // include "dbConn.php"; // Using database connection file here

                    $records = mysqli_query($db,"select * from responses_first_form"); // fetch data from database

                    while($data = mysqli_fetch_array($records))
                    {
                    ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['Email0']; ?></td>
                        <td><?php echo $data['Email1']; ?></td>
                        <td><?php echo $data['Email2']; ?></td>
                    </tr>	
                    <?php
                    }
                    ?>
                    </table>
                </div>
            </div>        
        </div>
    </div>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>