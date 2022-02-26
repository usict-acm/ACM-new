<?php 

/*                      included database.php           */


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
if(isset($_GET["table"]) && isset($_GET["linkFor"]) && isset($_GET["shortLink"]) && isset($_GET["originalLink"]) ){

    $linkFor = mysqli_real_escape_string($link,$_GET['linkFor']);
    $shortLink = mysqli_real_escape_string($link,$_GET['shortLink']);
    $originalLink = mysqli_real_escape_string($link,$_GET['originalLink']);
  
    //   echo $linkFor;
    //   echo $shortLink;
    //   echo $originalLink;
} 

if (isset($_POST['reg'])) {
    $sl = $_POST['in3'];
    $s1Link='https://usict.acm.org/';
    $exx = explode(" ",$sl);
    $sl = join("_",$exx);
    $sl=$s1Link.$sl;

    $sql_u = "SELECT * FROM link WHERE shortLink='$sl'";
    $res_u = mysqli_query($link, $sql_u);


  if (preg_match('/[\'^£$%&*(}){@#~?><>,|=+¬]/', $sl)){

          echo "<div class='wrapper'>
          <div class='container-fluid'>
              <div class='row'>
                  <div class='col-md-12'>
                      <div id='container'>
                          <form method='POST' > 
                              <div class='form-text new' style='display:inline-block;'>
                              <div style='width: 700px; margin-left: 300px;'>
                              <h6>Link For</h6>
                              <input type='text' class='form-control ' value='".$linkFor."' readonly /> <br>
                  
                              <h6>Original Link</h6>
                              <input type='text' class='form-control ' value='".$originalLink."' readonly />
                              <br>
                                         
                                              
                                  <input type=text class='form-control' name='in3' style='  padding:20px 5px 20px 180px; font-weight:100em; width:100%;' placeholder='Custom Link Name' id='inn3' required />
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
                              <button type='submit' class='btn btn-primary' id='submitBtn' name='reg' style='margin-left: 300px;' >Check & Confirm</button>
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
                          <input type='text' class='form-control ' value='".$linkFor."' readonly /> <br>
              
                          <h6>Original Link</h6>
                          <input type='text' class='form-control ' value='".$originalLink."' readonly />
                          <br>                            
                              <input type=text class='form-control' name='in3' style='  padding:20px 5px 20px 180px; font-weight:100em; width:100%;' placeholder='Custom Link Name' id='inn3' required />
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
                          <button type='submit' class='btn btn-primary' id='submitBtn' name='reg' style='margin-left: 300px;' >Check & Confirm</button>
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
        $query = "UPDATE link SET shortLink = '". $sl."'";
        $results = mysqli_query($link, $query);
        // echo "<br>" . $query;
        echo "<script>function copy2(){navigator.clipboard.writeText('".$sl."');}</script>";


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
        echo "<h4 style='display:inline-block; color:#4e73df; font-weight:bold;'>".$sl."</h4>";
        echo "<button style='margin-left:20px; display:inline-block;' class='btn btn-primary' onclick=copy2()>Copy</button>";
  }

    exit();
}
// mysqli_close($link);
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
        #container{
            margin:50px 0 0 0 ;
        }
        .sub-head{
            margin-bottom: 2rem;
            font-weight: 400;
            line-height: 1.2;
            font-size:1.7rem;
        }
        .org-head{
            margin-bottom:1rem;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="container" >
                        <form method="POST" > 
                            <div class="form-text">
                            <h5 class="sub-head">Link For</h5>
                            <input type="text" id="in1" class='form-control alignment123' name="in1" placeholder="<?php echo $linkFor  ?>" required readonly/>
                            <h5 class="sub-head org-head">Original Link</h5>
                            <input type="text" id="in2" class='form-control' name="in2" placeholder="<?php echo $originalLink  ?>" required readonly/>
                            <br>
                            <div class="form-text new">
                                <input type=text class="form-control" name="in3" placeholder="Custom Link Name" id="in3" required />
                                <label for="in3" class="static-value">https://usict.acm.org/  </label>
                            </div> 
                   
                            <div class="randDiv">
                                <span style="font-weight:bold;">OR</span>
                                <button type="button" class="btn btn-primary" id="randomBtn" name="random" >Genrate Random Short Link ??</button>
                            </div>
                            <br><br>
                            <button type="submit" class="btn btn-primary" id="submitForm" name="reg" >Check & Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

            document.querySelector('#randomBtn').addEventListener("click",function(){
                <?php $randNum= bin2hex(random_bytes(3));?>
                console.log('<?php echo $randNum; ?>');
                document.querySelector('#in3').value='<?php echo $randNum; ?>';
            });
    </script>
   
</body>
</html>
