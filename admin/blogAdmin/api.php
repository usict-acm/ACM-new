<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

    include_once './database.php';
    include_once './posts.php';
    include_once '../../events/eventPost.php';
 

    $method = $_SERVER['REQUEST_METHOD'];
    function read(){
         // Instantiate DB & connect
        $database = new Database();
        $db = $database->connect();
        // Instantiate blog post object
        $post = new Post($db);

    $limit = 10;
    $page = isset($_GET['page']) ? $_GET["page"] : 1;
    $start = ($page - 1) * $limit;

    // Blog post query
    $result = $post->read($start, $limit);
    $countBlogs = $post->countBlogs();
    foreach ($countBlogs as $key => $item) {
        $count = $item;
    }
    $pages = ceil($count / $limit);
    // echo $pages;

    // Check if any posts
    if ($result) {
        // Post array
        $posts_arr = array();
        $multi_array_posts = array();

        while ($row = $result->fetch_assoc()) {
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

        array_push($multi_array_posts, $posts_arr);
        array_push($multi_array_posts, $pages);

        // Turn to JSON & output
        echo json_encode($multi_array_posts);
        // echo json_encode($pages);

    } else {
        // No Posts
        echo json_encode(array('message' => 'No Posts Found'));
    }
};

function readCategory()
{
    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate blog post object
    $post = new Post($db);

    // Blog post query
    $result = $post->getCategories();

    // Check if any posts
    if ($result) {
        // Post array
        $posts_arr = array();

        while ($row = $result->fetch_assoc()) {
            $post_item = array(
                'Category' => $row["Category"],
                'catCount' => $row["CatCount"],
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

function showCategory()
{
    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();
    $category = $_GET['id'];

    // Instantiate blog post object
    $post = new Post($db);

    // Blog post query
    $result = $post->readCategories($category);

    // Check if any posts
    if ($result) {
        // Post array
        $posts_arr = array();

        while ($row = $result->fetch_assoc()) {
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

function read_home()
{
    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate blog post object
    $post = new Post($db);

    // Blog post query
    $result = $post->readThree();

    // Check if any posts
    if ($result) {
        // Post array
        $posts_arr = array();

        while ($row = $result->fetch_assoc()) {
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

function read_one()
{
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
    if ($result) {
        // Post array
        $posts_arr = array();

        while ($row = $result->fetch_assoc()) {
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



function getImage()
{

    $database = new Database();
    $db = $database->connect();

    $post = new Post($db);

    $result = $post->readGalleryImage();

    if ($result) {
        $posts_arr = array();

        while ($row = $result->fetch_assoc()) {
            $post_item = array(
                'Sno' => $row["Sno"],
                'Image' => $row["source"],
                'Date' => $row["date"],
            );
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

function postblog()
{
    $database = new Database();
    $db = $database->connect();
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $content = $_POST['content'];
        $event = $_POST['event'];
        $file = $_FILES['file'];

        print_r($file);

        $filename = $file['name'];
        $fileerror = $file['error'];
        $filetemppath = $file['tmp_name'];

        $fileext = explode('.', $filename);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array('png', 'jpg', 'jpeg');

        if (in_array($filecheck, $fileextstored)) {
            $destinationfile = 'upload/blogs/' . $filename;
            $uploadLocation = '../../upload/blogs/' . $filename;
            move_uploaded_file($filetemppath, $uploadLocation);

            $sql = "INSERT INTO `blog` (`Title`, `Author`, `Content`, `Category`, `Event`, `Image`, `Date`) VALUES ('$title', '$author', '$content', '$category','$event', '$destinationfile', current_timestamp());";
            if ($db->query($sql) == true) {
                echo '<script type="text/javascript">';
                echo ' alert("Ho Gaya submit, ja aram kar")';
                echo '</script>';
            } else {
                echo "ERROR: $sql <br> $db->error";
            }
        } else {
            echo '<script type="text/javascript">';
            echo ' alert("Image submit karo sir")';
            echo '</script>';
        }
    }
   };
   function yearWiseEvent1(){
    // include_once '../../events/eventPost.php';
    //   echo "checing";
    // Instantiate DB & connect
    $database = new Database();
    // echo "check1";
    $db = $database->connect();
    // echo "check2";
    // echo $db;
    // echo "checking";
  // Instantiate blog post object
   $post = new PostEvent($db);
//    echo "check3";
  
   // Blog post query
   $result = $post->eventFolder();
//    echo "check4";
// var_dump($result);
   
   // Check if any posts
   if($result) {
    
   // Post array
   $posts_arr = array();

   while($row=$result->fetch_assoc()){
    //    echo $row;
       $post_item = array(
           'sno' => $row["sno"],
           'year' => $row["year"],
           'numberOfEvents' => $row["numberOfEvents"],
           'heading' => $row["heading"],
           'more' => $row["more"],
       );
           // Push to "data"
           array_push($posts_arr, $post_item);
   }

   // Turn to JSON & output
   echo json_encode($posts_arr);
//    echo "5";

   } else {
   // No Posts
   echo json_encode(
       array('message' => 'No Posts Found')
   );
   }
};
function readEvents(){
   include_once '../../events/eventPost.php';
    // Instantiate DB & connect
   $database = new Database();
   $db = $database->connect();
// echo $db;
  // Instantiate blog post object
   $post = new PostEvent($db);

//    echo $year;
// echo "helllo";
   $year = $_GET['year'];
   $limit = 7;
   $page = isset($_GET['page']) ? $_GET["page"] : 1;
//    echo $page;
   $start = ($page - 1) * $limit;
   // Blog post query
   $result = $post->readYearEvent($year,$start,$limit);
   $countYear = $post->countEventsPerYear($year);
   foreach ($countYear as $key => $item) {
       $count = $item;
   }

   $pages = ceil($count/$limit);

   $numRows = mysqli_num_rows($result);
    // echo $numRows;
   // Check if any posts
   if($result) {

   // Post array
   $posts_arr = array();
   $multi_array = array();

   while($row=$result->fetch_assoc()){
       $post_item = array(
           'sno' => $row["sno"],
           'name' => $row["name"],
           'description' => $row["description"],
           'regLink' => $row["regLink"],
           'startDate' => $row["startDate"],
           'endDate' => $row["endDate"],
           'viewResource' => $row["viewResource"],
           'partners' => $row["partners"],
           'speakers' => $row["speakers"],
           'poster' => $row["poster"],
           'year' => $row["year"],
           'time' => $row["time"],
       );
           // Push to "data"
           array_push($posts_arr, $post_item);
   }

   array_push($multi_array,$posts_arr);
   array_push($multi_array,$count);
   array_push($multi_array,$pages);
   // Turn to JSON & output
   echo json_encode($multi_array);

   } else {
   // No Posts
   echo json_encode(
       array('message' => 'No Posts Found')
   );
   }
};

function carouselFunctionAPI(){
    include_once '../../events/eventPost.php';
    // echo "1";
    // Instantiate DB & connect
    $database = new Database();
    // echo "2";
    $db = $database->connect();
    // echo "3";
    // echo $db;
    // Instantiate blog post object
    $post = new PostEvent($db);
    // echo "4";
    
    //    echo $year;
    // echo "helllo";
    // $year = $_GET['year'];
    // Blog post query
    $result = $post->carouselquerry();
    // echo "5";

   // Check if any posts
   if($result) {

   // Post array
   $posts_arr = array();

   while($row=$result->fetch_assoc()){
       $post_item = array(
           'poster' => $row["poster"],
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

function readAllAnnouncements(){
    $database = new Database();
    $db = $database->connect();
    $announcement = new Announcement($db);

    $result = $announcement->getAnnouncements();

    if($result){
        $announcements_arr = array();
        while($row=$result->fetch_assoc()){
            $announcement_item = array(
                'sno' => $row["sno"],
                'name' => $row["name"],
                'description' => $row["description"],
                'regLink' => $row["regLink"],
                'startDate' => $row["startDate"],
                'endDate' => $row["endDate"],
                'viewResource' => $row["viewResource"],
                'partners' => $row["partners"],
                'speakers' => $row["speakers"],
                'poster' => $row["poster"],
                'year' => $row["year"],
                'time' => $row["time"],

            );
            array_push($announcements_arr, $announcement_item);
        } 
        echo json_encode($announcements_arr);
    }
}

function postAnnouncement(){
    $database = new Database();
    $db = $database->connect();
    // if(isset($_POST['submit'])){
    $txtTitle = isset($_POST['name']) ? $_POST["name"] : false;
    $txtDescription = isset($_POST['description']) ? $_POST["description"] : false;
    $txtReglink = isset($_POST['regLink']) ? $_POST["regLink"] : false;
    $txtStartdate= isset($_POST['startDate']) ? $_POST["startDate"] : false;
    $txtEnddate= isset($_POST['endDate']) ? $_POST["endDate"] : false;
    $txtviewResource = isset($_POST['viewResource']) ? $_POST["viewResource"] : false;
    $txtPartners = isset($_POST['partners']) ? $_POST["partners"] : false;
    $txtSpeakers = isset($_POST['speakers']) ? $_POST["speakers"] : false;
    $txtYear = isset($_POST['year']) ? $_POST["year"] : false;
    $txtTime = isset($_POST['time']) ? $_POST["time"] : false;
    $file = $_FILES['poster'];
    // echo $file;

    $filename = $file['name'];
    // $fileerror = $file['error'];
    $filetemppath= $file['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png','jpg','jpeg');
    
    if(!$txtTitle || !$txtDescription || !$txtReglink || !$txtStartdate || !$txtEnddate || !$txtviewResource || !$txtPartners || !$txtSpeakers || !$txtYear || !$txtTime){
        echo json_encode(http_response_code(400));    
    } else {
        if(in_array($filecheck,$fileextstored)){
            $destinationfile = 'upload/announcements/'.$filename;
            $uploadLocation = '../../upload/announcements/'.$filename;
            move_uploaded_file($filetemppath,$uploadLocation);

            $sql = "INSERT INTO `event` (`sno`, `name`, `description`, `regLink`, `startDate`, `endDate` , `viewResource` , `partners` , `speakers` , `poster` , `year` , `time`) VALUES ('0', '$txtTitle', '$txtDescription', '$txtReglink' ,'$txtStartdate','$txtEnddate','$txtviewResource','$txtPartners','$txtSpeakers', '$destinationfile', '$txtYear', '$txtTime');";
            if($db->query($sql) == true){
                echo json_encode("Form has been submitted");        
            } else{
            // echo json_encode("ERROR: $sql <br> $db->error");
                echo json_encode(http_response_code(400));
            }
        } else{
            echo json_encode(http_response_code(400));
            // echo json_encode("Fill all the fields");
        }
    }
    // }
};

function postImage()
{
    $database = new Database();
    $db = $database->connect();
    if (isset($_POST['submit'])) {
        $date = $_POST['date'];
        $file = $_FILES['file'];

        $filename = $file['name'];
        $fileerror = $file['error'];
        $filetemppath = $file['tmp_name'];

        $fileext = explode('.', $filename);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array('png', 'jpg', 'jpeg');

        if (in_array($filecheck, $fileextstored)) {
            $destinationfile = 'upload/eventGallery/' . $filename;
            $uploadLocation = '../../upload/eventGallery/' . $filename;

            move_uploaded_file($filetemppath, $uploadLocation);

            $sql = "INSERT INTO `gallery` (`source`, `date`) VALUES ('$destinationfile', '$date');";
            if ($db->query($sql) == true) {
                echo '<script type="text/javascript">';
                echo ' alert("Ho Gaya submit, ja aram kar")';
                echo '</script>';
            } else {
                echo "ERROR: $sql <br> $db->error";
            }
        } else {
            echo '<script type="text/javascript">';
            echo ' alert("Image submit karo sir")';
            echo '</script>';
        }
    }
};

$q = $_GET['q'];
switch ($q) {
    case 'readAll':
        read();
        break;
    case 'readHome':
        read_home();
        break;
    case 'readOne':
        read_one();
        break;
    case 'getPostByCategory':
        showCategory();
        break;
    case 'showCategory':
        readCategory();
        break;
    case 'postblog':
        postblog();
        break;
    case 'postImage':
        postImage();
        break;
    case 'getImage':
        getImage();
        break;
    case 'readAllAnnouncements':
        readAllAnnouncements();
        break;
    case 'postAnnouncement':
        postAnnouncement();
        break;
    case 'getYearEvent':
        yearWiseEvent1();
        break;
    case 'readAllEvent':
        readEvents();
        break;
    case 'carousel':
        carouselFunctionAPI();
        break;
    default:
        echo "Invalid Query";
}
?>