<?php 
    // var_dump("aesrdtfhgfdrseasrdtfhgjhfdrsedtfygjh");
    require('../../../../mail.php');
    //phpinfo();
    // var_dump($_GET);
    if(isset($_GET["Countrows"])){
       
        include_once '../../../blogAdmin/database.php';
        $database = new Database();
        $conn = $database->connect();

         $lastRows = $_GET["Countrows"]-1;
        $sql = "SELECT * FROM invite ORDER by id DESC LIMIT ".$lastRows;
        // echo $sql;
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){

                    $Sno = $row['id'];
                    // var_dump($Sno);
    
                    $nameParticipant = $row['name'];
                    $email = $row['email'];
    
                    inviteMail($Sno, $nameParticipant, $email);
    
    
                    // echo json_encode(
                    //     array('message' => 'Mailed successfully')
                    // );
                    // echo '<script>
                    //         alert("Mailed successfully");
                    //         window.location.replace("../index.php?table=invite")
                    //     </script>';
                }

            }
        }
        else {
            echo json_encode(
                array('message' => 'Error in getting mailing info!')
            );
            echo '<script>alert("Error in getting mailing info!")
                    window.location.replace("../index.php?table=invite")
                </script>';
        }
    }
?>