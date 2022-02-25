<?php 

/*                      included database.php           */

class Link{
          // DB stuff
          private $conn;

            // Post Properties
            public $id;

            public function __construct($db){
                $this->conn = $db;
            }

            public function latestLink(){
                $query = 'SELECT shortLink FROM link ORDER BY id DESC LIMIT 1';
                $stmt = $this->conn->query($query);
                $countID =  $stmt->fetch_assoc();
                foreach ($countID as $key => $item) {
                        $count = $item;
                }
                // echo $count;
                return $count;
            }
}


class Database{
  private $server;
  private $username;
  private $password;
  private $database;
  private $port;

  public function connect(){
    include(__DIR__.'/../../../enviornment.php');
    $this->server = $env_server;
    $this->username = $env_username;
    $this->password = $env_password;
    $this->database = $env_database;
    $this->port = $env_port;
    
    $conn = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
    return $conn;
  }
}
$database = new Database();
$link = $database->connect();
$connection = $link;

/*                      *********           */
if (isset($_POST['reg1'])) {
  	$link_for = $_POST['inn1'];
  	$original_link = $_POST['inn2'];
      $s1Link='https://usict.acm.org/';
  	$short_link = $_POST['inn3'];
      $exx = explode(" ",$short_link);
      $short_link = join("_",$exx);
      $short_link=$s1Link.$short_link;
    //   echo $short_link;
    //  echo $original_link;
    $sql_u = "SELECT * FROM link WHERE shortLink='$short_link'";
    $res_u = mysqli_query($link, $sql_u);
    if (preg_match('/[\'^£$%&*(}){@#~?><>,|=+¬]/', $short_link)){
  
            echo "<div class='wrapper'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div id='container'>
                            <form method='POST' > 
                                <div class='form-text new' style='display:inline-block;'>
                                <div style='width: 700px; margin-left: 300px;'>
                                <h6>Link For</h6>
                                <input type='text' class='form-control ' value='".$link_for."' readonly /> <br>
                    
                                <h6>Original Link</h6>
                                <input type='text' class='form-control ' value='".$original_link."' readonly />
                                <br>
                                            <input type='text' id='' style='position:absolute; width: 0px; height: 0px; margin-left: -300px;' name='inn1' value='".$link_for."' />
                                            <input type='text' id='' style='position:absolute; width: 0px; height: 0px; margin-left: -300px;' name='inn2' value='".$original_link."' />
                                                
                                    <input type=text class='form-control' name='inn3' style='  padding:20px 5px 20px 180px; font-weight:100em; width:100%;' placeholder='Custom Link Name' id='inn3' required />
                                    <label for='in3' class='static-value' style=' position:absolute;
                                        color:white;
                                        left:320px;
                                        font-weight:bold;
                                        font-size:1.1em;
                                        color:#444;
                                        top:190px;'>https://usict.acm.org/  
                                    </label>
                                </div> 
                            </div>

                                <br><br>
                                <button type='submit' class='btn btn-primary' id='submitBtn' name='reg1' style='margin-left: 300px;' >Check & Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
                    echo "<div style='position:absolute;margin:225px 0px 0px 255px; color:red; font-weight:bold;'>";
                    echo "<h6 style=' margin-left:70px; font-size: 1rem;'>  Don't use special characters in custom name</h6>"  ;
                    echo "</div>";
        // echo "<br>";
        // echo "<script>function copyAlGen(){navigator.clipboard.writeText('".$row['shortLink']."');}</script>";
        // echo "<h6>Shorted Link</h6>";
        // echo "<input type='text' class='form-control ' value='".$row['shortLink']."' readonly />";
    }else if(mysqli_num_rows($res_u) > 0){
        echo "<div class='wrapper'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-12'>
                    <div id='container'>
                        <form method='POST' > 
                            <div class='form-text new' style='display:inline-block;'>
                            <div style='width: 700px; margin-left: 300px;'>
                            <h6>Link For</h6>
                            <input type='text' class='form-control ' value='".$link_for."' readonly /> <br>
                
                            <h6>Original Link</h6>
                            <input type='text' class='form-control ' value='".$original_link."' readonly />
                            <br>
                                        <input type='text' id='' style='position:absolute; width: 0px; height: 0px; margin-left: -300px;' name='inn1' value='".$link_for."' />
                                        <input type='text' id='' style='position:absolute; width: 0px; height: 0px; margin-left: -300px;' name='inn2' value='".$original_link."' />
                                            
                                <input type=text class='form-control' name='inn3' style='  padding:20px 5px 20px 180px; font-weight:100em; width:100%;' placeholder='Custom Link Name' id='inn3' required />
                                <label for='in3' class='static-value' style=' position:absolute;
                                    color:white;
                                    left:320px;
                                    font-weight:bold;
                                    font-size:1.1em;
                                    color:#444;
                                    top:190px;'>https://usict.acm.org/  
                                </label>
                            </div> 
                        </div>

                            <br><br>
                            <button type='submit' class='btn btn-primary' id='submitBtn' name='reg1' style='margin-left: 300px;' >Check & Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    echo "<div style='position:absolute;margin:400px 0px 0px 460px; color:red;'>";
                echo "<h2>Custom name Already Taken !!</h2>"    ;
                echo "<h2> &nbsp; Try Another Custom Name..</h2>"   ;
                echo "</div>";
    }else{
        $sql = "SELECT * FROM link";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        if($row['originalLink']==$original_link){
                         
                            $query = "UPDATE link SET shortLink = '". $short_link."'";
                            $results = mysqli_query($link, $query);
                            // echo "<br>" . $query;
                            echo "<script>function copy2(){navigator.clipboard.writeText('".$short_link."');}</script>";
                    
    
                            echo "<div class='wrapper' style='margin:100px 0px 0px 350px;'>";
                                echo "<div class='container-fluid'>";
                                    echo "<div class='row'>";
                                        echo "<div class='col-md-12'>";
                                            echo "<div class='page-header'></div>";
                                            echo "<h2>Your Link has been updated ..🥳</h2> ";
                                            echo "<br>";
                                        echo "<div>";
                                    echo "<div>";
                                echo "<div>";
                            echo "<div>";
                            echo "<h4 style='display:inline-block; color:#4e73df; font-weight:bold;'>".$short_link."</h4>";
                            echo "<button style='margin-left:20px; display:inline-block;' class='btn btn-primary' onclick=copy2()>Copy</button>";
                            
                        }
                    }
                mysqli_free_result($result);
            } else{
                echo "<p class='lead'><em>No Record Found.</em></p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }

      exit();
}





  if (isset($_POST['reg'])) {
  	$linkFor = $_POST['in1'];
  	$originalLink = $_POST['in2'];
    if (filter_var($originalLink, FILTER_VALIDATE_URL)) {
        $s1Link='https://usict.acm.org/';
        $s2Link = $_POST['in3'];
        $exx = explode(" ",$s2Link);
        $s2Link = join("_",$exx);
        $shortLink=$s1Link.$s2Link;
        $sql_u = "SELECT * FROM link WHERE shortLink='$shortLink'";
        $sql_o = "SELECT * FROM link WHERE originalLink='$originalLink'";
        $res_o = mysqli_query($link, $sql_o);
        $res_u = mysqli_query($link, $sql_u);
        
       
        if (mysqli_num_rows($res_o) > 0) {
                    echo "<div id='appendDiv' class='wrapper' style='margin:50px 0px 0px 270px;'>";
                        echo "<div class='container-fluid'>";
                            echo "<div class='row'>";
                                echo "<div class='col-md-12'>";
                                    echo "<div class='page-header'></div>";
                                    echo "<h2>ShortedLink for Given Link has Been Generated previously..</h2>";
                                    echo "<br>";
                                echo "<div>";
                            echo "<div>";
                        echo "<div>";
                    echo "<div>";
            $sql = "SELECT * FROM link";
            $val_original;
            $val_short;
            $val_link_for;

            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            if($row['originalLink']==$originalLink){
                                $val_original = $row['originalLink'];
                                $val_short = $row['shortLink'];
                                $val_link_for = $row['linkFor'];

                                echo "<h6>Original Link</h6>";
                                echo "<input type='text' class='form-control ' value='".$originalLink."' readonly />";
                                echo "<br>";
                                echo "<script>function copyAlGen(){navigator.clipboard.writeText('".$row['shortLink']."');}</script>";
                                echo "<h6>Shorted Link</h6>";
                                echo "<input type='text' class='form-control ' value='".$row['shortLink']."' readonly />";
                                echo "<button style='position:absolute;left:800px;top:187px; display:inline-block;' class='btn btn-primary' onclick=copyAlGen()>Copy</button>";
                            }
                        }
                    mysqli_free_result($result);
                } else{
                    echo "<p class='lead'><em>No Record Found.</em></p>";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            echo "<br><h2> Wanna change Shorted Link ?</h2>";
            echo "<button id='edit-link' style='position-absolute; margin: -80px 0px 0px 450px;' class='btn btn-primary'>Yes</button>";
            echo "  <script type='text/javascript'>
                      document.getElementById('edit-link').addEventListener('click', function(){
                        //   console.log('aasdfg');
                        let divTag = document.getElementById('appendDiv');
                        divTag.innerHTML += `
                        <div class='wrapper'>
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div id='container'>
                                        <form method='POST' > 
                                            <div class='form-text new' style='display:inline-block;'>
                                            <input type='text' id='' style='position:absolute; width: 0px; height: 0px; margin-left: -300px;' name='inn1' value='".$val_link_for."' />
                                            <input type='text' id='' style='position:absolute; width: 0px; height: 0px; margin-left: -300px;' name='inn2' value='".$val_original."' />
                                                <input type=text class='form-control' name='inn3' style='  padding:20px 5px 20px 180px; font-weight:100em; width:100%;' placeholder='Custom Link Name' id='inn3' required />
                                                <label for='in3' class='static-value' style=' position:absolute;
                                                    color:white;
                                                    left:20px;
                                                    font-weight:bold;
                                                    font-size:1.1em;
                                                    color:#444;
                                                    top:12px;'>https://usict.acm.org/  
                                                </label>
                                            </div> 
                                            <br><br>
                                            <button type='submit' class='btn btn-primary' id='submitBtn' name='reg1' >Check & Confirm</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                      });
                    </script>";
            exit();
        }else{
            if (mysqli_num_rows($res_u) > 0) {
                echo "<div style='position:absolute;margin:400px 0px 0px 460px; color:red;'>";
                echo "<h2>Custom name Already Taken !!</h2>"    ;
                echo "<h2> &nbsp; Try Another Custom Name..</h2>"   ;
                echo "</div>";
            }else{
                if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $s2Link)){
                    echo "<div style='position:absolute;margin:260px 0px 0px 285px; color:red; font-weight:bold;'>";
                    echo "<h5 style=' margin-left:70px;'>  Don't use special characters in custom name</h5>"  ;
                    echo "</div>";
                }else{
    
                    $query = "INSERT INTO link (`linkFor`, `originalLink`, `shortLink`) 
                            VALUES ('$linkFor', '$originalLink', '$shortLink')";
                    $results = mysqli_query($link, $query);
                    $oneLink = new Link($link);  
                    $latestLink = $oneLink->latestLink();


                    echo "<script>function copy(){navigator.clipboard.writeText('".$latestLink."');}</script>";
                

                    echo "<div class='wrapper' style='margin:100px 0px 0px 350px;'>";
                        echo "<div class='container-fluid'>";
                            echo "<div class='row'>";
                                echo "<div class='col-md-12'>";
                                    echo "<div class='page-header'></div>";
                                    echo "<h2>Your Link has been created..🥳</h2> ";
                                    echo "<br>";
                                echo "<div>";
                            echo "<div>";
                        echo "<div>";
                    echo "<div>";
                    echo "<h4 style='display:inline-block; color:#4e73df; font-weight:bold;'>".$latestLink."</h4>";
                    echo "<button style='margin-left:20px; display:inline-block;' class='btn btn-primary' onclick=copy()>Copy</button>";
                    // echo "<br><br><a style='margin:300px 0px 0px 70px; color:#4e73df; font-weight:20px;' href='?table=ShortLink'  ><- Back to Link Dashboard</a>";
                    exit();
                }

            }
        }
    } else {
        echo "<div style='position:absolute;margin:400px 0px 0px 550px; color:red;'>";
        echo "<h2 style='font-weight: bold; margin-left: 30px;'>URL is Invalid !!</h2>"	;
        echo "<h2 style='font-weight: bold;'> Try with Correct 'http' URL 😠</h2>"	;
        echo "</div>";
    }

  }
  mysqli_close($link);
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
        .randDiv{
            margin:20px 0 0 150px;
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
                        <form method="POST" > 
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
                                <input type=text class="form-control" name="in3" placeholder="Custom Link Name" onchange="checkSpec()" id="in3" required />
                                <label for="in3" class="static-value">https://usict.acm.org/  </label>
                            </div> 
                            <button id="" class="btn btn-primary new" type="" name="" value="">Get Preview</button>
                            <br>
                            <div class="randDiv">
                                <span style="font-weight:bold;">OR</span>
                                <button type="button" class="btn btn-primary" id="randomBtn" name="random" >Genrate Random Short Link ??</button>
                            </div>
                            <br><br>
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
            document.querySelector('#randomBtn').addEventListener("click",function(){
                <?php $randNum= bin2hex(random_bytes(3));?>
                console.log('<?php echo $randNum; ?>');
                document.querySelector('#in3').value='<?php echo $randNum; ?>';
            });
        function checkSpec(){
            console.log("aa");
        }
    </script>
   
</body>
</html>