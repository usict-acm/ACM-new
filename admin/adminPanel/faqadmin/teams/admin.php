<?php 
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
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 0px;
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
        margin: 0 0 0px 0px;
    }
    .tash-bin{
        position: relative;
        margin: 0px 0 0  1px;
    }
    .centerAlign{
        text-align:center;
    }
    .marginset{
        margin-top: 43px;
        margin-left: 13px;
    }
    .top-fix{
        padding: 0%;
        margin: 0%;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header clearfix top-fix">
                        <h2 class="pull-left" style="margin-top: 7%">Teams Admin Panel</h2>
                        <a href="?table=AddMember" class="btn btn-primary pull-right marginset">Add a member</a>
                        
                    </div>
                    <?php
                    // Include config file
                    // require_once "config.php";
                    require('../blogAdmin/database.php');
                    $database = new Database();
                    $link = $database->connect();
                    $connection = $link;

                    $sql = "SELECT * FROM team ORDER BY id DESC ";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped' style='table-layout: fixed; width: 100%; word-wrap: break-word;'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Name</th>";
                                        echo "<th>Designation</th>";
                                        echo "<th>LinkedIn</th>";
                                        //echo "<th>Role of the Participant</th>";
                                        echo "<th>GitHub</th>";
                                        echo "<th>Instagram</th>";
                                        echo "<th>Year</th>";
                                        //echo "<th>Signed By</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    // $count = 0;
                                    // echo "<script>
                                    // let links = [];
                                    
                                    //     function copy2 (count){navigator.clipboard.writeText('".$siteLink."'+links[count]);}</script>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        // $ii = $row['originalLink'];
                                        // $ii = substr($ii,0,51);
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['designation']."</td>";
                                        echo "<td>" . $row['linkedin']."</td>";
                                        //echo "<td>" . $row['role']."</td>";
                                        echo "<td>" . $row['github']."</td>";
                                        echo "<td>" . $row['instagram']."</td>";
                                        echo "<td>" . $row['year']."</td>";
                                        // echo "<td><a target='_blank' href='".$siteLink."". $row['code'] ."'>".$siteLink."". $row['code'] ."</a></td>";
                                        // $short = $row['code'];
                                        // echo "<script>links.push('".$short."'); </script>";
                                        // echo "<td class='centerAlign'>" . $row['count'] . "</td>";

                                        echo "<td>";
                                            
                                            echo "<a class='tash-bin 'href='./faqadmin/teams/delete_member.php?Sno=". $row['id'] ."' title='Delete Member' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                           
                                        // echo "<form method='POST' action = 'faqadmin/certificate/index.php?Sno=". $row['uniqueNo'] ."'> 
                                        //     <button type='submit' class='btn btn-primary' id='submitBtn' name='down-btn' data-toggle='tooltip'>Download</button>
                                        // </form>";

                                        echo "</td>";

                                    echo "</tr>";
        
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


