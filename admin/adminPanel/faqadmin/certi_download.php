<?php 
//include 'faqadmin/qrlib.php';
if(isset($_GET["Sno"]) ){
    include_once '../../blogAdmin/database.php';
    $database = new Database();
    $conn = $database->connect();
    $Sno = mysqli_real_escape_string($conn,$_GET['Sno']);
    $sql = "SELECT * FROM certificate WHERE uniqueNo ='".$Sno."'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
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
// $path = 'images/';
// $file = $path.uniqid().".png";
// $ecc = 'L';
// $pixel_Size = 10;
// $frame_Size = 10;
// QRcode::png($uni, $file, $ecc, $pixel_Size, $frame_Size);
imagettftext($image, 22, 0, 620, 500, $color,$font, $name);
imagettftext($image, 22, 0, 420, 610, $color,$font, $course);
imagettftext($image, 22, 0, 1010, 610, $color,$font, $enroll);
imagettftext($image, 22, 0, 650, 660, $color,$font, $rank);
imagettftext($image, 22, 0, 850, 660, $color,$font, $event);
imagettftext($image, 20, 0, 1250, 50, $color,$font, $uni);
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
?>