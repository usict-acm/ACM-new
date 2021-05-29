<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once './database.php';
    include_once './posts.php';

    $method = $_SERVER['REQUEST_METHOD'];

    function read(){
         // Instantiate DB & connect
        $database = new Database();
        $db = $database->connect();

        // Instantiate blog post object
        $post = new Post($db);

        // Blog post query
        $result = $post->read();

        // Check if any posts
        if($result) {
        // Post array
        $posts_arr = array();

        while($row=$result->fetch_assoc()){
            $post_item = array(
                'Sno' => $row["Sno"],
                'Title' => $row["Title"],
                'Author' => $row["Author"],
                'Content' => $row["Content"],
                'Category' => $row["Category"],
                'Event' => $row["Event"],
                'Image' => $row["Image"],
                'Date' => $row["Date"],
            );
                // Push to "data"
                array_push($posts_arr, $post_item);
        }

        // Turn to JSON & output
        echo json_encode($posts_arr);

        } else {
        // No Posts
        echo json_encode(
            array('message' => 'No Posts Found')
        );
        }
    };


    function read_home(){
         // Instantiate DB & connect
        $database = new Database();
        $db = $database->connect();

        // Instantiate blog post object
        $post = new Post($db);

        // Blog post query
        $result = $post->readThree();

        // Check if any posts
        if($result) {
        // Post array
        $posts_arr = array();

        while($row=$result->fetch_assoc()){
            $post_item = array(
                'Sno' => $row["Sno"],
                'Title' => $row["Title"],
                'Author' => $row["Author"],
                'Content' => $row["Content"],
                'Category' => $row["Category"],
                'Event' => $row["Event"],
                'Image' => $row["Image"],
                'Date' => $row["Date"],
            );
                // Push to "data"
                array_push($posts_arr, $post_item);
        }

        // Turn to JSON & output
        echo json_encode($posts_arr);

        } else {
        // No Posts
        echo json_encode(
            array('message' => 'No Posts Found')
        );
        }
    };

    function read_one(){
        // Instantiate DB & connect
       $database = new Database();
       $db = $database->connect();
       $id = $_GET['id'];

       // echo $db;

       // Instantiate blog post object
       $post = new Post($db);

       // Blog post query
       $result = $post->readOne($id);

       // Check if any posts
       if($result) {
       // Post array
       $posts_arr = array();

       while($row=$result->fetch_assoc()){
           $post_item = array(
               'Sno' => $row["Sno"],
               'Title' => $row["Title"],
               'Author' => $row["Author"],
               'Content' => $row["Content"],
               'Category' => $row["Category"],
               'Event' => $row["Event"],
               'Image' => $row["Image"],
               'Date' => $row["Date"],
           );
               // Push to "data"
               array_push($posts_arr, $post_item);
       }

       // Turn to JSON & output
       echo json_encode($posts_arr);

       } else {
       // No Posts
       echo json_encode(
           array('message' => 'No Posts Found')
       );
       }
   };

   function postblog(){
    $database = new Database();
    $db = $database->connect();
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
            move_uploaded_file($filetemppath,$destinationfile);
    
            $sql = "INSERT INTO `blog` (`Title`, `Author`, `Content`, `Category`, `Event`, `Image`, `Date`) VALUES ('$title', '$author', '$content', '$category','$event', '$destinationfile', current_timestamp());";
            if($db->query($sql) == true){
            echo '<script type="text/javascript">';
            echo ' alert("Ho Gaya submit, ja aram kar")';
            echo '</script>';
        }
        else{
            echo "ERROR: $sql <br> $db->error";
        }
    
        }
    
        else{
            echo '<script type="text/javascript">';
            echo ' alert("Image submit karo sir")';
            echo '</script>';
        }
    }
   };


    $q = $_GET['q'];
    switch ($q){
        case 'readAll':
            read();
            break;
        case 'readHome':
            read_home();
            break;
        case 'readOne':
            read_one();
            break;
        case 'postblog':
            postblog();
            break;
        default:
            echo "Invalid Query";
    }
?>





