<?php
    include_once '../../blogAdmin/database.php';
    $database = new Database();
    $conn = $database->connect();

    
    if(isset($_GET["noOfRows"]) ){
        $noOfRows = mysqli_real_escape_string($conn,$_GET['noOfRows']);
        // echo $noOfRows;

  
        // $sql = "SELECT * FROM certificate WHERE uniqueNo ='".$Sno."'";
        $sql = "SELECT * FROM certificate ORDER BY ID DESC LIMIT ".$noOfRows."";
        // echo $sql;
        
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){

                    // echo mysqli_num_rows($result);
                    $row = mysqli_fetch_array($result);
                    // print_r($row);
                    header('Content-type: image/jpeg');
                    $font=realpath('arial.ttf');
                    $image=imagecreatefromjpeg("certi.jpeg");
                    $color=imagecolorallocate($image, 51, 51, 102);
                    $date=$row['startDate'];
                    imagettftext($image, 18, 0, 1025, 710, $color,$font, $date);
                    $name=strtoupper($row['nameParticipant']);
                    $uni = $row['uniqueNo'];
                    $course = $row['course'];
                    $enroll = $row['enrollment_no'];
                    $rank = $row['rank'];
                    $event = $row['event'];
                    imagettftext($image, 22, 0, 620, 500, $color,$font, $name);
                    imagettftext($image, 22, 0, 420, 610, $color,$font, $course);
                    imagettftext($image, 22, 0, 1010, 610, $color,$font, $enroll);
                    imagettftext($image, 22, 0, 650, 660, $color,$font, $rank);
                    imagettftext($image, 22, 0, 850, 660, $color,$font, $event);
                    
                    imagejpeg($image,"certificate/$uni.jpg");
                    imagejpeg($image);
                    imagedestroy($image);
                    
                    require('fpdf.php');
                        $pdf=new FPDF();
                        $pdf->AddPage();
                        $pdf->Image("certificate/$uni.jpg",0,0,210,150);
                        $pdf->Output("certificate/$uni.pdf","F");
                }
            }
        }
        
    }
?>