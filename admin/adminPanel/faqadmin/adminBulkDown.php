<?php
    header("Content-type: application/zip");
    include_once '../../blogAdmin/database.php';
    require('fpdf.php');
    include 'phpqrcode/qrlib.php';
    $database = new Database();
    $conn = $database->connect();
    
    if(isset($_GET["noOfRows"]) ){
        $noOfRows = mysqli_real_escape_string($conn,$_GET['noOfRows']);
        // echo $noOfRows;  
         //$sql = "SELECT * FROM certificate ";
        $sql = "SELECT * FROM certificate ORDER BY ID DESC LIMIT ".$noOfRows."";
        // echo $sql;
        //print_r( mysqli_num_rows($result) );
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $zip = new ZipArchive;                
                $zip->open('../../../verify/BulkDownload.zip', ZipArchive::CREATE);
                while($row = mysqli_fetch_array($result)){
                  //  echo mysqli_num_rows($result);
                    //$row = mysqli_fetch_array($result);
                    //print_r($row);
                    header('Content-type: image/png');
                $font=realpath('arial.ttf');
                //$image;
                $rank = $row['rank'];
                if(strlen($rank)>0){
                    $image=imagecreatefrompng("Certificate.png");
                    $color=imagecolorallocate($image, 51, 51, 102);


                    //  if($rank==''){
                    //     $image=imagecreatefrompng("participation.png");
                    //     $color=imagecolorallocate($image, 51, 51, 102);
                    //    //echo"ayushi";
                    //    }


                    $date=$row['startDate'];
                    imagettftext($image, 25, 0, 1025, 1015, $color,$font, $date);
                    $name=strtoupper($row['nameParticipant']);
                    $uni = $row['uniqueNo'];
                    $course = $row['course'];
                    $enroll = $row['enrollment_no'];
                    $college = $row['college'];
                    $event = $row['event'];
                    $id = $row['ID'];
                    $path = 'images/';
                    $id_num = substr($uni, -4);
                    //echo $uni;
                    $file = $path.uniqid().".png";
                    // $ecc = 'L';
                    $frame_Size = 1;
                    $qrtext = "https://usict.acm.org/test_acm/verify?id=".$id_num;
                    QRcode::png($qrtext, $file,'L', 3, $frame_Size);
                    $qr = imagecreatefrompng($file);
                    $marge_right = 130;
                    $marge_bottom = 130;
                    $sx = imagesx($qr);
                    $sy = imagesy($qr);
                    imagettftext($image, 30, 0, 600, 680, $color,$font, $name);
                    imagettftext($image, 30, 0, 370, 830, $color,$font, $course);
                    imagettftext($image, 30, 0, 1350, 830, $color,$font, $enroll);
                    imagettftext($image, 30, 0, 310, 960, $color,$font, $event);
                    imagettftext($image, 25, 0, 1650, 350, $color,$font, $uni);
                    imagettftext($image, 30, 0, 700, 900, $color,$font, $college);
                    imagettftext($image, 30, 0, 1480, 900, $color,$font, $rank);
                    imagecopy($image, $qr, imagesx($image) - $sx - $marge_right, imagesy($image) - $sy - $marge_bottom, 0, 0, imagesx($qr), imagesy($qr));
                    unlink($file);
                    // imagepng($image);
                    imagepng($image,"../../../verify/$id_num.png");
                    imagedestroy($image);
                    //echo "<img width='500' height='350' align='top' alt='' src='certificate/$id.png' />";

                    $pdf=new FPDF();
                    $pdf->AddPage("L");
                    $pdf->Image("../../../verify/$id_num.png",0,0,297,210);
                    $pdf->Output("../../../verify/$id_num.pdf","F");
                    // $pdf->Output("$uni.pdf","D");
                    $zip->addFile("../../../verify/".$id_num.'.pdf', str_replace('/', '_', $uni).'.pdf');

                }else{

                    $image=imagecreatefrompng("participation.png");
                    $color=imagecolorallocate($image, 51, 51, 102);
                    $date=$row['startDate'];
                    imagettftext($image, 25, 0, 1025, 1015, $color,$font, $date);
                    $name=strtoupper($row['nameParticipant']);
                    $uni = $row['uniqueNo'];
                    $course = $row['course'];
                    $enroll = $row['enrollment_no'];
                    $college = $row['college'];
                    $event = $row['event'];
                    $id = $row['ID'];
                    $path = 'images/';
                    $id_num = substr($uni, -4);
                    //echo $uni;
                    $file = $path.uniqid().".png";
                    // $ecc = 'L';
                    $frame_Size = 1;
                    $qrtext = "https://usict.acm.org/test_acm/verify?id=".$id_num;
                    QRcode::png($qrtext, $file,'L', 3, $frame_Size);
                    $qr = imagecreatefrompng($file);
                    $marge_right = 130;
                    $marge_bottom = 130;
                    $sx = imagesx($qr);
                    $sy = imagesy($qr);
                    imagettftext($image, 30, 0, 600, 680, $color,$font, $name);
                    imagettftext($image, 30, 0, 370, 830, $color,$font, $course);
                    imagettftext($image, 30, 0, 1350, 830, $color,$font, $enroll);
                    imagettftext($image, 30, 0, 310, 960, $color,$font, $event);
                    imagettftext($image, 25, 0, 1650, 350, $color,$font, $uni);
                    imagettftext($image, 30, 0, 700, 900, $color,$font, $college);
                    //imagettftext($image, 30, 0, 1480, 900, $color,$font, $rank);
                    imagecopy($image, $qr, imagesx($image) - $sx - $marge_right, imagesy($image) - $sy - $marge_bottom, 0, 0, imagesx($qr), imagesy($qr));
                    unlink($file);


                    imagepng($image,"../../../verify/$id_num.png");
                    // imagepng($image);
                    //echo"alert('certificate genrated scuusessfully')";
                    imagedestroy($image);

                    $pdf=new FPDF();
                    $pdf->AddPage("L");
                    $pdf->Image("../../../verify/$id_num.png",0,0,297,210);
                    $pdf->Output("../../../verify/$id_num.pdf","F");
                    // $pdf->Output("$uni.pdf","D");
                    $zip->addFile("../../../verify/".$id_num.'.pdf', str_replace('/', '_', $uni).'.pdf');
                } 
                
                }
                // var_dump($zip);
                $zip->close();
                $endCert = $id_num + $noOfRows -1;
                header("Content-Disposition: attachment; filename=$uni-$endCert.zip"); 
                readfile("../../../verify/BulkDownload.zip");
                unlink('../../../verify/BulkDownload.zip');
            }      
    }
?>