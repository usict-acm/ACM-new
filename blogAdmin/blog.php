<?php

require("./connection.php");
if(isset($_POST['submit'])){


    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    $event = $_POST['event'];
    $file = $_FILES['file'];

    print_r($file);

    $filename = $file['name'];
    $fileerror = $file['error'];
    $filetemppath= $file['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png','jpg','jpeg');

    if(in_array($filecheck,$fileextstored)){
        $destinationfile = 'upload/blogs/'.$filename;
        $uploadLocation = '../../upload/blogs/'.$filename;
        move_uploaded_file($filetemppath,$uploadLocation);

        $sql = "INSERT INTO `blog` (`Title`, `Author`, `Content`, `Category`, `Event`, `Image`, `Date`) VALUES ('$title', '$author', '$content', '$category','$event', '$destinationfile', current_timestamp());";
        if($con->query($sql) == true){
        echo '<script type="text/javascript">';
        echo ' alert("Ho Gaya submit, ja aram kar")';
        echo '</script>';
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    }

    else{
        echo '<script type="text/javascript">';
        echo ' alert("Image submit karo sir")';
        echo '</script>';
    }
}    
    
    $con->close();
