<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

    include_once './database.php';
    include_once './posts.php';
    include_once '../../events/eventPost.php';
    include_once './forms.php';
 

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
           'button2Text' => $row["button2Text"],
           'startDate' => $row["startDate"],
           'endDate' => $row["endDate"],
           'button1Text' => $row["button1Text"],
           'button1Link' => $row["button1Link"],
           'button2Link' => $row["button2Link"],
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
    
    $numEvents = $post->countEvents();

    foreach ($numEvents as $key => $item) {
        $count = $item;
    }
    // echo $count;
    // var_dump($count);
    // echo sizeof($count);

    if(sizeof($count==1)){
        // echo "dfgh";
        $result = $post->carouselquerryOne();
    }else{
        $result = $post->carouselquerry();
    }
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
    $txtTitle = $_POST["name"];
    $txtDescription =  $_POST["description"];
    $txtStartdate = $_POST["startDate"];
    $txtEnddate = $_POST["endDate"];
    $txtButton1Text = $_POST["button1Text"];
    $txtButton1Link = $_POST["button1Link"];
    $txtButton2Text = $_POST["button2Text"];
    $txtButton2Link = $_POST["button2Link"];
    $txtPartners = $_POST["partners"];
    $txtSpeakers = $_POST["speakers"];
    $txtYear = $_POST["year"];
    $txtTime = $_POST["time"];
    $file = isset($_FILES['poster']) ? $_FILES['poster'] : false;

    if(!$file){
        echo json_encode(
            array('message' => 'Insert the image')
        );
    }

    $filename = $file['name'];
    $filetemppath= $file['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png','jpg','jpeg');
    
    if(in_array($filecheck,$fileextstored)){
        $destinationfile = 'upload/announcements/'.$filename;
        $uploadLocation = '../../upload/announcements/'.$filename;
        move_uploaded_file($filetemppath,$uploadLocation);

        $sql = "INSERT INTO `event` (`sno`, `name`, `description`, `startDate`, `endDate` , `button1Text`, `button1Link`, `button2Text`, `button2Link` , `partners` , `speakers` , `poster` , `year` , `time`) VALUES ('0', '$txtTitle', '$txtDescription','$txtStartdate','$txtEnddate','$txtButton1Text', '$txtButton1Link', '$txtButton2Text', '$txtButton2Link', '$txtPartners','$txtSpeakers', '$destinationfile', '$txtYear', '$txtTime');";
        if($db->query($sql) == true){
            echo json_encode(
                array('message' => 'Form has been submitted')
            );       
        } else{
            echo json_encode(
                array('message' => 'Internal Server Error. Try Again')
            );
        }
    } else{
        echo json_encode(
            array('message' => 'Insert the image')
        );
    }
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
            $destinationfile = 'upload/announcements/' . $filename;
            $uploadLocation = '../../upload/announcements/' . $filename;

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

function getForms(){
    // Instantiate DB & connect
   $database = new Database();
   $db = $database->connect();
   // Instantiate blog post object
   $post = new Form($db);

$limit = 10;
$page = isset($_GET['page']) ? $_GET["page"] : 1;
$start = ($page - 1) * $limit;

// Blog post query
$result = $post->read($start, $limit);
$countForms = $post->countForms();
foreach ($countForms as $key => $item) {
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
           'formID' => $row["Id"],
           'formName' => $row["name"],
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


function readResponses(){
//     include_once './forms.php';
//      // Instantiate DB & connect
//     $database = new Database();
//     $db = $database->connect();
//  // echo $db;
//    // Instantiate blog post object
//     $post = new Form($db);
 

//     $ID = $_GET['Id'];
//     $formName = $_GET['name'];


//     $result0 = $post->readFields($ID,$formName);
    
 
//     $result = $post->readAllResponses($ID,$formName);
    

//     $result3 = $post->countFields($ID,$formName);
//     foreach ($result3 as $key => $item) {
//         $count = $item;
//     }



//     $fielditem = array();
//     $i=0;
    
//     // while ($i<$count){
//     //     array_push($fielditem,$row['fieldName']);
//     //     $i++;
//     // }


//     while($row=$result0->fetch_assoc()){
//         $i=0;
//         // while ($i<$count){
//         //     $formitem = array(
//         //         $row[$i] => $row[$row[$i]]
//         //     );
//         // }
//         $post_item = array(
//             'fieldName' => $row["fieldName"]
//         );
//         array_push($fielditem,$post_item);
//         // print_r($row);
//     }

//     $sizeofarray = sizeof($fielditem);
//     $responses_array = array();

//     while($row=$result->fetch_assoc()){
//         echo json_encode($row);

//         $i=0;
//         while($i<$sizeofarray){
//             $fielditem[$i].$fieldName=>$row[$fielditem[$i].$fieldName]
//             $i++;

//         }
//         echo json_encode($post_item);

//     }
    


    // echo json_encode($fielditem);


 
    // array_push($multi_array,$posts_arr);
    // array_push($multi_array,$count);
    // array_push($multi_array,$pages);
    // // Turn to JSON & output
    // echo json_encode($multi_array);
 
    // } else {
    // // No Posts
    // echo json_encode(
    //     array('message' => 'No Posts Found')
    // );
    // }
    // print_r($result0);



 };

function getFields(){
    
    // Instantiate DB & connect
    $database = new Database();
    // echo "check1";
    $db = $database->connect();
    // echo "check2";
    // echo $db;
    // echo "checking";
  // Instantiate blog post object
   $post = new Form($db);
//    echo "check3";
  
   // Blog post query
   $result = $post->fieldsQuery();
//    echo "check4";
// var_dump($result);
   
   // Check if any posts
   if($result) {
    
   // Post array
   $posts_arr = array();

   while($row=$result->fetch_assoc()){
    //    echo $row;
       $post_item = array(
           'formName' => $row["formName"],
           'fieldName' => $row["fieldName"],
           'fieldType' => $row["fieldType"],
           'formID' => $row["formID"],
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
    case 'forms':
        getForms();
        break;
    case 'readResponses':
        readResponses();
        break;
        
    case 'fields':
        getFields();
        break;
    default:
        echo "Invalid Query";
}
?>
