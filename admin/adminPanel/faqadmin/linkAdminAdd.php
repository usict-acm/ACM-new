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
  	$link_for = $_POST['in1'];
  	$original_link = $_POST['in2'];
      $s1Link='https://usict.acm.org/';
  	$short_link = $_POST['in3'];
      $exx = explode(" ",$short_link);
      $short_link = join("_",$exx);
      $short_link=$s1Link.$short_link;
      
    $sql_u = "SELECT * FROM link WHERE shortLink='$short_link'";
    $res_u = mysqli_query($link, $sql_u);
    if (preg_match('/[\'^£$%&*(}){@#~?><>,|=+¬]/', $short_link)){
  
        $lf=$link_for;
        $sl="";
        $ol=$original_link;
        include('linkPanel2.php');

                    echo "<div style='position:absolute;margin:225px 0px 0px 255px; color:red; font-weight:bold;'>";
                    echo "<h6 style=' margin-left:70px; font-size: 1rem;'>  Don't use special characters in custom name</h6>"  ;
                    echo "</div>";
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
        $sql = "SELECT * FROM link WHERE originalLink='$original_link'";
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
    $s1Link='https://usict.acm.org/';
    $s2Link = $_POST['in3'];

    $copyS2=$s2Link;
    $exx = explode(" ",$s2Link);
    $s2Link = join("_",$exx);
    $shortLink=$s1Link.$s2Link;
    $sql_u = "SELECT * FROM link WHERE shortLink='$shortLink'";
    $sql_o = "SELECT * FROM link WHERE originalLink='$originalLink'";
    $res_o = mysqli_query($link, $sql_o);
    $res_u = mysqli_query($link, $sql_u);

    if (filter_var($originalLink, FILTER_VALIDATE_URL)) {
        
        if (mysqli_num_rows($res_o) > 0) {
                    echo "<div id='appendDiv' class='wrapper' style='margin:0px 0px 0px 270px;'>";
                        echo "<h2>ShortedLink for Given Link has Been Generated previously..</h2>";
                        echo "<h3>You can edit it too..</h3>";
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

                                $lf=$val_link_for;
                                $sl=$copyS2;
                                $ol=$val_original;
                                include('linkPanel2.php');
                            }
                        }
                    mysqli_free_result($result);
                } else{
                    echo "<p class='lead'><em>No Record Found.</em></p>";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
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
                if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $s2Link)){
                    echo "<div style='position:absolute;margin:260px 0px 0px 285px; color:red; font-weight:bold;'>";
                    echo "<h5 style=' margin-left:70px;'>  Don't use special characters in custom name</h5>"  ;
                    echo "</div>";
                    $lf=$linkFor;
                    $sl="";
                    $ol=$originalLink;
                    include('linkPanel.php');
                    exit();
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
                    exit();
                }

            }
        }
    } else {
        echo "<div style='position:absolute;margin:400px 0px 0px 550px; color:red;'>";
        echo "<h2 style='font-weight: bold; margin-left: 30px;'>URL is Invalid !!</h2>"	;
        echo "<h2 style='font-weight: bold;'> Try with Correct 'http' URL 😠</h2>"	;
        echo "</div>";
        $lf=$linkFor;
        $sl=$s2Link;
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