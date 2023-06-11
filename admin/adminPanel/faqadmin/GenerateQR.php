<?php 
    include(__DIR__.'/../../../link/siteName.php');

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
        $query = 'SELECT code FROM link ORDER BY id DESC LIMIT 1';
        $stmt = $this->conn->query($query);
        $codeID =  $stmt->fetch_assoc();
        foreach ($codeID as $key => $item) {
                $code = $item;
        }
        // echo $count;
        return "".$siteLink."$code";
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

    $short_link = $_POST['inn3'];
      $exx = explode(" ",$short_link);
      $short_link = join("_",$exx);
      $short_link=$short_link;
    //   echo $short_link;
    //  echo $original_link;
    $sql_u = "SELECT * FROM link WHERE code='$short_link'";
    $res_u = mysqli_query($link, $sql_u);
    if (preg_match('/[\'^£$%&*}{@#~?><>,|=+)(¬]/', $short_link)){
  
        $lf=$link_for;
        $sl="";
        $ol=$original_link;
        include('linkPanel2.php');

                    echo "<div style='position:absolute;margin:225px 0px 0px 255px; color:red; font-weight:bold;'>";
                    echo "<h6 style=' margin-left:100px; font-size: 1.4rem; margin-top:42px;'>  Don't use special characters in custom name</h6>"  ;
                    echo "</div>";
        // echo "<br>";
        // echo "<script>function copyAlGen(){navigator.clipboard.writeText('".$row['shortLink']."');}</script>";
        // echo "<h6>Shorted Link</h6>";
        // echo "<input type='text' class='form-control ' value='".$row['shortLink']."' readonly />";
    }else if(mysqli_num_rows($res_u) > 0){
        $lf=$link_for;
        $sl="";
        $ol=$original_link;
        include('linkPanel2.php');
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
                         
                            $query = "UPDATE link SET code = '". $short_link."'";
                            $results = mysqli_query($link, $query);
                            // echo "<br>" . $query;
                            echo "<script>function copy2(){navigator.clipboard.writeText('".$siteLink."".$short_link."');}</script>";
                    
    
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
                            echo "<h4 style='display:inline-block; color:#4e73df; font-weight:bold;'>".$siteLink."".$short_link."</h4>";
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

    $shortLink = $_POST['in3'];
    $exx = explode(" ",$shortLink);
    $shortLink = join("_",$exx);
    $sql_u = "SELECT * FROM link WHERE code='$shortLink'";
    $sql_o = "SELECT * FROM link WHERE originalLink='$originalLink'";
    $res_o = mysqli_query($link, $sql_o);
    $res_u = mysqli_query($link, $sql_u);

    if (filter_var($originalLink, FILTER_VALIDATE_URL)) {
        
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
                                $val_short = $row['code'];
                                $val_link_for = $row['linkFor'];

                                echo "<h6>Original Link</h6>";
                                echo "<input type='text' class='form-control ' value='".$originalLink."' readonly />";
                                echo "<br>";
                                echo "<script>function copyAlGen(){navigator.clipboard.writeText('".$siteLink."".$row['code']."');}</script>";
                                echo "<h6>Shorted Link</h6>";
                                echo "<input type='text' class='form-control ' value='".$siteLink."".$row['code']."' readonly />";
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
                                                    top:12px;'>".$siteName."
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
                $lf=$linkFor;
                $sl="";
                $ol=$originalLink;
                include('linkPanel.php');
                exit();
            }else{
                if (preg_match('/[\'^£$%&*}{@#~?><>,|=+)(¬]/', $shortLink)){
                    echo "<div style='position:absolute;margin:260px 0px 0px 285px; color:red; font-weight:bold;'>";
                    echo "<h5 style=' margin-left:70px;'>  Don't use special characters in custom name</h5>"  ;
                    echo "</div>";
                    $lf=$linkFor;
                    $sl="";
                    $ol=$originalLink;
                    include('linkPanel.php');
                    exit();
                }else{
    
                    $query = "INSERT INTO link (`linkFor`, `originalLink`, `code`, `count`) 
                            VALUES ('$linkFor', '$originalLink', '$shortLink', 0)";
                    $results = mysqli_query($link, $query);
                    $oneLink = new Link($link);  
                    $latestLink = $oneLink->latestLink();


                    echo "<script>function copy(){navigator.clipboard.writeText('".$siteLink."".$latestLink."');}</script>";
                

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
                    echo "<h4 style='display:inline-block; color:#4e73df; font-weight:bold;'>".$siteLink."".$latestLink."</h4>";
                    echo "<button style='margin-left:20px; display:inline-block;' class='btn btn-primary' onclick=copy()>Copy</button>";
                    // echo "<br><br><a style='margin:300px 0px 0px 70px; color:#4e73df; font-weight:20px;' href='?table=ShortLink'  ><- Back to Link Dashboard</a>";
                    exit();
                }

            }
        }
    } else {
        echo "<div style='position:absolute;margin:400px 0px 0px 550px; color:red;'>";
        echo "<h2 style='font-weight: bold; margin-left: 30px;'>URL is Invalid !!</h2>" ;
        echo "<h2 style='font-weight: bold;'> Try with Correct 'http' URL 😠</h2>"  ;
        echo "</div>";
        $lf=$linkFor;
        $sl=$shortLink;
        $ol="";
        include('linkPanel.php');
        exit();
    }

  }
  mysqli_close($link);
?>

<!DOCTYPE html>
<html lang='en'>
<?php
    $lf="";
    $sl="";
    $ol="";
    include('linkPanel.php');
?>
</body>
</html>