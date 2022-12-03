<?php

require '../../blogAdmin/database.php';
$database = new Database();
$conn = $database->connect();





$sql = "SELECT * from invite";
$result = mysqli_query($conn,$sql);
// var_dump($result);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        // echo $row['name'];
        // header('Content-type: image/png'); 
        
        
            $font=realpath('arial.ttf');
    
            $image = imagecreatefrompng("./invite/image.png");
            $color=imagecolorallocate($image, 0, 37, 67);
            imagettftext($image, 40, 0, 500, 720, $color,$font, $row['name']);
            imagepng($image, "./invite/invitations/".$row['id'].".png");
            imagedestroy($image);
        // else{
        //     echo "Error";
        // }
    }
}


?>