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
        $sql = "SELECT * FROM utkrisht ORDER BY id DESC LIMIT ".$noOfRows."";
        // echo $sql;
        //print_r( mysqli_num_rows($result) );
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $zip = new ZipArchive;                
                $zip->open('../../../verify/utkrisht/BulkDownload.zip', ZipArchive::CREATE);
                while($row = mysqli_fetch_array($result)){
                  //  echo mysqli_num_rows($result);
                    //$row = mysqli_fetch_array($result);
                    //print_r($row);
                    header('Content-type: image/png');
                    $font=realpath('arial.ttf');
                    //$image;


                    $image=imagecreatefrompng("utkrisht.png");
                    $color=imagecolorallocate($image, 51, 51, 102);
                    // $date=$row['startDate'];
                    // imagettftext($image, 25, 0, 1025, 1015, $color,$font, $date);
                    $id = $row['id'];
                    $uni = $row['uniqueNo'];
                    $name=strtoupper($row['name']);
                    $email=strtoupper($row['email']);
                    $enroll = $row['enrollment'];
                    $branch = $row['branch'];
                    $branch = "B.Tech ".$branch;
                    $mentor = $row['mentor'];
                    
                    $path = '../../../verify/utkrisht/';
                    $id_num = substr($uni, -4);
                    //echo $uni;
                    $file = $path.uniqid().".png";
                    // $ecc = 'L';
                    $frame_Size = 1;
                    $qrtext = "https://usict.acm.org/verify/utkrisht/".$id_num.".pdf";
                    QRcode::png($qrtext, $file,'L', 5.2, $frame_Size);
                    $qr = imagecreatefrompng($file);
                    $marge_right = 50;
                    $marge_bottom = 43;
                    $sx = imagesx($qr);
                    $sy = imagesy($qr);
                    imagettftext($image, 50, 0, 720, 790, $color,$font, $name);
                    imagettftext($image, 30, 0, 450, 910, $color,$font, $branch);
                    imagettftext($image, 30, 0, 1300, 910, $color,$font, $enroll);
                    imagettftext($image, 30, 0, 1300, 975, $color,$font, $mentor);
                    //imagettftext($image, 30, 0, 1480, 900, $color,$font, $rank);
                    imagecopy($image, $qr, imagesx($image) - $sx - $marge_right, imagesy($image) - $sy - $marge_bottom, 0, 0, imagesx($qr), imagesy($qr));
                    unlink($file);


                    imagepng($image,"../../../verify/utkrisht/$id_num.png");
                    // imagepng($image);
                    //echo"alert('certificate genrated scuusessfully')";
                    imagedestroy($image);

                    $pdf=new FPDF();
                    $pdf->AddPage("L");
                    $pdf->Image("../../../verify/utkrisht/$id_num.png",0,0,297,210);
                    $pdf->Output("../../../verify/utkrisht/$id_num.pdf","F");
                    // $pdf->Output("$uni.pdf","D");
                    $zip->addFile("../../../verify/utkrisht/".$id_num.'.pdf',  $id_num.'.pdf');
                
                
                }
                // var_dump($zip);
                $zip->close();
                $endCert = $id_num + $noOfRows -1;
                header("Content-Disposition: attachment; filename=$uni-$endCert.zip"); 
                readfile("../../../verify/utkrisht/BulkDownload.zip");
                unlink('../../../verify/utkrisht/BulkDownload.zip');
            }      
    }
?>