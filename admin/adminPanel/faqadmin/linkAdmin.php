<?php     include(__DIR__.'/../../../link/siteName.php');
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
        <style type="text/css">
        .wrapper{
            width: 800px;
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
    .copybutton {
        /* position: absolute; */
        border-width: 0;
        color: #337ab7;
        background-color: #f9f9f9;
    }
    .edit-logo{
        position: absolute;
        margin: 0 0 0px 10px;
    }
    .tash-bin{
        position: relative;
        margin:0px 0 0  15px;
    }
    .centerAlign{
        text-align:center;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Link Admin Panel</h2>
                        <a href="?table=AddLink" class="btn btn-primary pull-right">Make New Link</a>
                    </div>
                    <?php
                    // Include config file
                    // require_once "config.php";
                    require('../blogAdmin/database.php');
                    $database = new Database();
                    $link = $database->connect();
                    $connection = $link;

                    $sql = "SELECT * FROM link ORDER BY id DESC ";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Link For</th>";
                                        echo "<th>Original Link</th>";
                                        echo "<th>Shortened Link</th>";
                                        echo "<th>Clicks</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    $count = 0;
                                    echo "<script>
                                    let links = [];
                                    
                                        function copy2 (count){navigator.clipboard.writeText('".$siteLink."'+links[count]);}</script>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        $ii = $row['originalLink'];
                                        $ii = substr($ii,0,51);
                                        echo "<td>" . $row['linkFor'] . "</td>";
                                        echo "<td>" . $ii . "....</td>";
                                        echo "<td><a target='_blank' href='".$siteLink."". $row['code'] ."'>".$siteLink."". $row['code'] ."</a></td>";
                                        $short = $row['code'];
                                        echo "<script>links.push('".$short."'); </script>";
                                        echo "<td class='centerAlign'>" . $row['count'] . "</td>";
                                        
                                        echo "<td>";
                                            echo "<button class = 'copybutton' onclick = copy2(".$count.")><span class = 'glyphicon glyphicon-duplicate'></span></button>";
                                            echo "<a class='edit-logo' href='?table=editLink&&linkFor=". $row['linkFor'] ."&&originalLink=".$row['originalLink']."&&shortLink=". $row['code']."' title='Edit Record' data-toggle='tooltip'><span class='glyphicon glyphicon-edit'></span></a>";
                                            echo "<a class='tash-bin' href='faqadmin/del.php?Sno=". $row['code'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";

                                    echo "</tr>";
                                    $count++;
                                }
                            echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No Record Found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                    }
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


