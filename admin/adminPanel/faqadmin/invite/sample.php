<?php
 header('Content-type: image/png');
$font=realpath('arial.ttf');
            if (is_readable("Certificate.png")) {
               $image = imagecreatefrompng("image.png");
                var_dump("ewarsdthfgjmhghfrstdghfjgteartsdfhgj,hrteqrydfhgj,hfjytersydfgjhre");
            $color=imagecolorallocate($image, 40, 13, 253);
            imagettftext($image, 40, 0, 500, 720, $color,$font, "Apoorv Aron");
            imagepng($image, "./invitations/apoorv1.png");
            imagedestroy($image);
            }
            else{
                echo "hdfskjhgkjsghkjsfhgjfshgkjfhgjfgkjd";
            }
            //$image=imagecreatefrompng("img.png");
            
            

             //imagepng($image, "sample.png");
//echo "jfkjdfgjlksdfnglkjfngjnfjdnbfdjbnldjfbd";
?>