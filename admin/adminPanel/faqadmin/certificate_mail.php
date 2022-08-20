<?php 
    require('../../../mail.php');
    //phpinfo();
    if(isset($_GET["Sno"]) && isset($_GET["email"])){
        
        include_once '../../blogAdmin/database.php';
        $database = new Database();
        $conn = $database->connect();
        $Sno = mysqli_real_escape_string($conn,$_GET['Sno']);
        $email = $_GET['email'];
        $sql = "SELECT * FROM certificate WHERE uniqueNo ='".$Sno."'";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $Sno = $row['uniqueNo'];
                $nameParticipant = $row['nameParticipant'];
                $email = $row['email'];
                $event = $row['event'];
                $date = $row['startDate'];
                certificateMail($Sno, $nameParticipant, $email, $event, $date);
                echo json_encode(
                    array('message' => 'Mailed successfully')
                );
                echo '<script>
                        alert("Mailed successfully");
                        window.location.replace("../index.php?table=Certificate")
                    </script>';
            }
        }
        else {
            echo json_encode(
                array('message' => 'Error in getting mailing info!')
            );
            echo '<script>alert("Error in getting mailing info!")
                    window.location.replace("../index.php?table=Certificate")
                </script>';
        }
    }
?>