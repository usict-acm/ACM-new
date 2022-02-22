<?php 

  $db = mysqli_connect('localhost', 'root', 'root', 'acmbackend');
  
  $username = "";
  if (isset($_POST['reg'])) {
  	$linkFor = $_POST['in1'];
  	$originalLink = $_POST['in2'];
    $s1Link='https://usict.acm.org/';
  	$s2Link = $_POST['in3'];
    $exx = explode(" ",$s2Link);
    $s2Link = join("_",$exx);
    $shortLink=$s1Link.$s2Link;
  	$sql_u = "SELECT * FROM link WHERE shortLink='$shortLink'";
  	$res_u = mysqli_query($db, $sql_u);

  	if (mysqli_num_rows($res_u) > 0) {
        echo "<div style='position:absolute;margin:400px 0px 0px 460px; color:red;'>";
        echo "<h2>Custom name Already Taken !!</h2>"	;
        echo "<h2> &nbsp; Try Another Custom Name..</h2>"	;
        echo "</div>";
  	}else{

           $query = "INSERT INTO link (linkFor, originalLink, shortLink) 
      	    	  VALUES ('$linkFor', '$originalLink', '$shortLink')";
           $results = mysqli_query($db, $query);

           echo "<div style='position:absolute;margin:200px 0px 0px 360px; color:green; font-weight:bold;'>";
           echo "<h2 style=' font-weight:bold; margin-left:100px;'> &nbsp;&nbsp; Congratulations..🥳</h2>"	;
           echo "<h2 >Your Short link has been Generated !!</h2>"	;
           echo "</div>";
           exit();
  	}
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <style type="text/css">
        .wrapper {
            width: 650px;
            margin: 0 auto;
        }

        .page-header h2 {
            margin-top: 0;
        }

        table tr td:last-child a {
            margin-right: 15px;
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

        .alignment123 {
            position: relative;
            top: -10px;
        }
        .form-text{
            position:relative;
            width:500px;
        }
        #in3{
            padding:20px 5px 20px 170px;
            font-weight:100em;
            width:100%;

        }
        .new{
            display:inline-block;
        }
        .static-value{
            position:absolute;
            /* background-color:#337ab7; */
            color:white;
            left:10px;
            font-weight:bold;
            font-size:1.1em;
            color:#444;
            top:9px;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Shorten Link Admin Panel</h2>
                        <!-- <a href="?table=AddLink" class="btn btn-primary pull-right">Add New File</a> -->
                    </div>
                    <div id="container">
                        <form method="POST">
                            <input type="text" id="in1" class='form-control alignment123' name="in1" placeholder="Link is for" required />
                            <br>
                            <input type="text" id="in2" class='form-control' name="in2" placeholder="Enter previous link" required />
                            <br>
                            <!-- <div class="input-group mb-3">
                                <div class="input-group-addon">
                                    <span class="input-group-text" id="basic-addon3">https://usict.acm.org/</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Custom Link">
                            </div> -->
                            <div class="form-text new">
                                <input type=text class="form-control" name="in3" placeholder="Custom Link Name" id="in3" required />
                                <label for="in3" class="static-value">https://usict.acm.org/  </label>
                            </div> 
                            <button id="" class="btn btn-primary new" type="" name="" value="">Get Preview</button>
                            <br><br><br>
                            <button type="submit" class="btn btn-primary" id="submitForm" name="reg" >Check & Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // document.getElementById("submitForm").addEventListener("click", function(e) {
        //     e.preventDefault();
        //     // console.log("dsfg");
        //     let in11= document.querySelector('#in1').value;
        //     // console.log(in11);
        //     let in22= document.querySelector('#in2').value;
        //     // console.log(in22);
        //     let in33= document.querySelector('#in3').value;
        //     // console.log(in33);
        //     console.log("dsfgh");
        //     if(in11=="" || in22=="" || in33==""){
        //         // console.log("error");
        //         alert("Fill all fields");
        //     }
        // });
    </script>
   
</body>
</html>