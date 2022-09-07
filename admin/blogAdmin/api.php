<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

    include_once './database.php';
    include_once './posts.php';
    include_once '../../events/eventPost.php';
    include_once './forms.php';

include_once '../../mail.php';

$method = $_SERVER['REQUEST_METHOD'];
function read()
{
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
                'Sno' => $row["blogId"],
                'Title' => $row["blogTitle"],
                'Author' => $row["userName"],
                'Content' => $row["content"],
                'Category' => unserialize($row["tags"]),
                // 'Event' => $row["Event"],
                'Image' => $row["coverImage"],
                'Date' => $row["published"],
            );
            // Push to "data"
            array_push($posts_arr, $post_item);
        }

        array_push($multi_array_posts, $posts_arr);
        array_push($multi_array_posts, $pages);

        // Turn to JSON & output
        echo json_encode(utf8ize($multi_array_posts));
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
        echo json_encode(utf8ize($posts_arr));
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
                // 'Event' => $row["Event"],
                'Image' => $row["coverImage"],
                'Date' => $row["Date"],
            );
            // Push to "data"
            array_push($posts_arr, $post_item);
        }

        // Turn to JSON & output
        echo json_encode(utf8ize($posts_arr));
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
                'Sno' => $row["blogId"],
                'Title' => $row["blogTitle"],
                'Author' => $row["userName"],
                'Content' => $row["content"],
                'Category' => unserialize($row["tags"]),
                // 'Event' => $row["Event"],
                'Image' => $row["coverImage"],
                'Date' => $row["published"],
            );
            // Push to "data"
            array_push($posts_arr, $post_item);
        }

        // Turn to JSON & output
        echo json_encode(utf8ize($posts_arr));
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
                'Sno' => $row["blogId"],
                'Title' => $row["blogTitle"],
                'Author' => $row["userName"],
                'Content' => $row["content"],
                'Category' => unserialize($row["tags"]),
                // 'Event' => $row["Event"],
                'Image' => $row["coverImage"],
                'Date' => $row["published"],
            );
            // Push to "data"
            array_push($posts_arr, $post_item);
        }

        // Turn to JSON & output
        echo json_encode(utf8ize($posts_arr));
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
        echo json_encode(utf8ize($posts_arr));
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
        $tags = serialize([]);
        $isDraft = 0;
        $approved = 1;
        // print_r($file);

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

            $sql = "INSERT INTO `blogs` (`blogTitle`, `coverImage`, `userName`, `content`, `created`, `published`, `isDraft`, `tags` , `approved`) VALUES ('$title', 'upload/blogs/$filename' , '$author', '$content', current_timestamp(), current_timestamp(), '$isDraft' , '$tags' , '$approved');";
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
function yearWiseEvent1()
{
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
    if ($result) {

        // Post array
        $posts_arr = array();

        while ($row = $result->fetch_assoc()) {
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
        $sendResponse = json_encode($posts_arr);
        // echo $sendResponse;
        // echo json_last_error()." Something went wrong here \n";
        // echo json_last_error_msg()." or maybe here";
        // var_dump($sendResponse);
        // var_dump($posts_arr);
        echo $sendResponse;
        //    echo "5";

    } else {
        // No Posts
        echo json_encode(
            array('message' => 'No Posts Found')
        );
    }
};

function approveRequest()
{
    $database = new Database();
    $db = $database->connect();
    $id = $_GET["Id"];
    $sql = "UPDATE `blogs` SET approved = '1' WHERE blogId='" . $id . "'";    

    // Instantiate blog post object
    $post = new Post($db);
    // Blog post query
    $result = $post->readOne($id);
    $blogData = $result->fetch_assoc();

    if ($db->query($sql) == true) {
        blogApprovedMail($blogData["userEmail"], $blogData["blogTitle"], $blogData["blogId"]);
        echo json_encode(
            array('message' => 'Form has been submitted')
        );
    } else {
        echo json_encode(
            array('message' => 'Internal Server Error. Try Again')
        );
    }
}

function rejectRequest()
{
    $database = new Database();
    $db = $database->connect();
    $id = $_GET["Id"];
    $sql = "UPDATE `blogs` SET approved = '0',isDraft='1' WHERE blogId='" . $id . "'";

    // Instantiate blog post object
    $post = new Post($db);
    // Blog post query
    $result = $post->readOne($id);
    $blogData = $result->fetch_assoc();
    
    if ($db->query($sql) == true) {
        blogRejectedMail($blogData["userEmail"], $blogData["blogTitle"], $blogData["blogId"]);
        echo json_encode(
            array('message' => 'Form has been submitted')
        );
    } else {
        echo json_encode(
            array('message' => 'Internal Server Error. Try Again')
        );
    }
}

function utf8ize( $mixed ) {
    if (is_array($mixed)) {
        foreach ($mixed as $key => $value) {
            $mixed[$key] = utf8ize($value);
        }
    } elseif (is_string($mixed)) {
        return mb_convert_encoding($mixed, "UTF-8", "UTF-8");
    }
    return $mixed;
}

function readEvents()
{
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
    $result = $post->readYearEvent($year, $start, $limit);
    $countYear = $post->countEventsPerYear($year);
    foreach ($countYear as $key => $item) {
        $count = $item;
    }

    $pages = ceil($count / $limit);

    $numRows = mysqli_num_rows($result);
    // echo $numRows;
    // Check if any posts
    if ($result) {

        // Post array
        $posts_arr = array();
        $multi_array = array();

        while ($row = $result->fetch_assoc()) {
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

        array_push($multi_array, $posts_arr);
        array_push($multi_array, $count);
        array_push($multi_array, $pages);
        // Turn to JSON & output
        echo json_encode(utf8ize($multi_array));
    } else {
        // No Posts
        echo json_encode(
            array('message' => 'No Posts Found')
        );
    }
};

function carouselFunctionAPI()
{
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

    if (sizeof($count)==1) {
        // echo "dfgh";
        $result = $post->carouselquerryOne();
    } else {
        $result = $post->carouselquerry();
    }
    // echo "5";

    // Check if any posts
    if ($result) {

        // Post array
        $posts_arr = array();

        while ($row = $result->fetch_assoc()) {
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

function readAllAnnouncements()
{
    $database = new Database();
    $db = $database->connect();
    $announcement = new Announcement($db);

    $result = $announcement->getAnnouncements();

    if ($result) {
        $announcements_arr = array();
        while ($row = $result->fetch_assoc()) {
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

function postAnnouncement()
{
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

    if (!$file) {
        echo json_encode(
            array('message' => 'Insert the image')
        );
    }

    $filename = $file['name'];
    $filetemppath= $file['tmp_name'];
    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if (in_array($filecheck, $fileextstored)) {
        $destinationfile = './upload/announcements/' . $filename;
        $uploadLocation = '../../upload/announcements/' . $filename;
        move_uploaded_file($filetemppath, $uploadLocation);

        $sql = "INSERT INTO `event` (`sno`, `name`, `description`, `startDate`, `endDate` , `button1Text`, `button1Link`, `button2Text`, `button2Link` , `partners` , `speakers` , `poster` , `year` , `time`) VALUES ('0', '$txtTitle', '$txtDescription','$txtStartdate','$txtEnddate','$txtButton1Text', '$txtButton1Link', '$txtButton2Text', '$txtButton2Link', '$txtPartners','$txtSpeakers', '$destinationfile', '$txtYear', '$txtTime');";
        if ($db->query($sql) == true) {
            echo json_encode(
                array('message' => 'Form has been submitted')
            );
        } else {
            echo json_encode(
                array('message' => 'Internal Server Error. Try Again')
            );
        }
    } else {
        echo json_encode(
            array('message' => 'Insert the image')
        );
    }
};

function certificateForm(){
    $database = new Database();
    $db = $database->connect();
    $name = $_POST["name"];
    $college= $_POST["college"];
    $uniq = $_POST["uniqueno"];
    $startdate = $_POST["startDate"];
    $enddate = $_POST["endDate"];
    $email = $_POST["email"];
    $event = $_POST["event"];
    $rank = $_POST["rank"];
    $enroll = $_POST["enroll"];
    $course = $_POST["course"];
   
    $sql = "INSERT INTO `certificate` (`uniqueNO`, `nameParticipant`,`email`, `startDate`, `endDate`, `course`, `enrollment_no`, `event`, `rank`, `college`) VALUES ('$uniq', '$name', '$email', '$startdate', '$enddate',  '$course', '$enroll','$event', '$rank', '$college');";
    
    if ($db->query($sql) == true) {
        echo json_encode(
            array('message' => 'Form has been submitted')
        );
    } else {
        echo json_encode(
            array('message' => 'Internal Server Error. Try Again')
        );
    }
}

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

function getForms()
{
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
    include_once './forms.php';
//      // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();
//    // Instantiate blog post object
    $post = new Form($db);
    $ID = $_GET['Id'];
    // echo($ID);
    $formName = "";
    $allFields = $post->readFields($ID,$formName);
    $responses = $post->readAllResponses($ID,$formName);
    $countNumberOfFields = $post->countFields($ID,$formName);

    foreach ($countNumberOfFields as $key => $item) {
        $count = $item;
    }

    $allResponses = array();
    $fieldItem = array();
    $i=0;
    
    while ($row=$allFields->fetch_assoc()){
        $value = explode(" ",$row['fieldName']);
        $val = join("_",$value);
        array_push($fieldItem,$val);
        $i++;
    }

    array_push($allResponses,$fieldItem);

    while($row=$responses->fetch_assoc()){
        $fieldItem = array();
        $i=0;
        while($i < $count){
            array_push($fieldItem,$row[$allResponses[0][$i]]);
            $i++;
        }
        array_push($allResponses,$fieldItem);
    }

    echo json_encode($allResponses);

 };

//  function testResponses(){

//     $conn = mysqli_connect("localhost","root","","acmbackend");

//     $query = 'SELECT * FROM responses_event_1_registration';
//     $query_run = mysqli_query($conn,$query);
//     $result_array = [];

//     if (mysqli_num_rows($query_run)>0)
//     {
//         foreach($query_run as $row)
//         {
//             array_push($result_array,$row);
//         }
//         header('Content-type: application/json');
//         echo json_encode($result_array);
//     }
//     else{}
//     // {
//     //     echo $return = "<h4>No record found.</h4>"
//     // }
//  }

 function getFields(){
    include_once './forms.php';

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
   $Id = $_GET["Id"];  
   // Blog post query
   $result = $post->fieldsQuery($Id);
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
           'required' => $row["required"],
           'ifCheckbox' => $row["ifCheckbox"],
           'ifRadio' => $row["ifRadio"],
           
       );
    //    if($row["ifCheckbox"]) {
    //     array_push('ifCheckbox' => $row["ifCheckbox"]);

    //    }
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

function postForm(){
    $database = new Database();
    $db = $database->connect();
    $fieldID1 = $_POST["fieldID1"];

    $formTitle = $_POST["formTitle"];
    // $sql = "INSERT INTO `event` (`sno`, `name`, `description`, `startDate`, `endDate` , `button1Text`, `button1Link`, `button2Text`, `button2Link` , `partners` , `speakers` , `poster` , `year` , `time`) VALUES ('0', '$txtTitle', '$txtDescription','$txtStartdate','$txtEnddate','$txtButton1Text', '$txtButton1Link', '$txtButton2Text', '$txtButton2Link', '$txtPartners','$txtSpeakers', '$destinationfile', '$txtYear', '$txtTime');";
    if($db->query($sql) == true){
        echo json_encode(
            array('message' => 'Form has been submitted')
        );       
    } else{
        echo json_encode(
            array('message' => 'Internal Server Error. Try Again')
        );
    }
};

function saveForm(){
    $database = new Database();
    $db = $database->connect();

    $form = new Form($db);

    $name = "event 1";

    $value = explode(" ",$name);
    $val = join("_",$value);

    $request = array();
    array_push($request,$val);

    for($i = 0; $i < 3; $i++){
        $field_array = array();
        array_push($field_array,"Email$i");
        array_push($field_array,"textbox");
        array_push($request,$field_array);
    }

    $form->saveFormInFormsTable($name,$request);
    $result = $form->createResponseTable($request);
}

function dataForm(){
    $database = new Database();
    $db = $database->connect();
    $textt = $_POST["text1"];
    $txtTitle = json_decode($textt);
    $form = new Form($db);
    $value = explode(" ",$txtTitle[0]);
    $val = join("_",$value);
    $form->saveDataResponsesInTable($val,$txtTitle);
}
function fileupload(){
    // $uploadLocation = '../../upload/announcements/'.$filename;
    $id = $_POST["id"];
    echo $id;
    $filename = $_FILES["file"]["name"];
    $filetemppath= $_FILES["file"]['tmp_name'];
    $fileerror = $_FILES["file"]["error"];
    echo $filename;
    echo $filetemppath;
    echo $fileerror;
    
        $uploadLocation = '../../forms/responsesfile/'.$id.'_'.$filename;
        move_uploaded_file($filetemppath,$uploadLocation);
}

function joinus(){
    $database = new Database();
    $db = $database->connect();

    $fistname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $course = $_POST["course"];
    $clubs = $_POST["clubs"];
    $year = $_POST["year"];
    $acm_no = $_POST["acm_no"];
    $enroll = $_POST["enroll"];
    

    $sql = "INSERT INTO `join_us` (`firstname`, `lastname`,`email`, `phone_number`, `year`, `acm_no`, `course`, `club`, `enrollment_no`) VALUES ('$fistname', '$lastname', '$email', '$phone',  '$year', '$acm_no', '$course', '$clubs', '$enroll');";

    

    if ($db->query($sql) == true) {
        echo json_encode(
            array('message' => 'Form has been submitted')
        );
    } else {
        echo json_encode(
            array('message' => 'Internal Server Error. Try Again')
        );
    }

}

function contactus()
{
    // echo "<script></script>ertyt";
    $database = new Database();
    // print_r($database);
    $db = $database->connect();
    // print_r($db);
    $name = $_POST["name"];
    $email =  $_POST["email"];
    $mobile = $_POST["mobile"];
    $college = $_POST["college"];
    $message = $_POST["message"];

    $sql = "INSERT INTO `contactus` (`name`, `email`, `mobile`, `college`, `message`) VALUES ('$name', '$email', '$mobile', '$college','$message');";
    // print_r($sql);
    // echo "<script>console.log(".$sql.")</script>";
        if ($db->query($sql) == true) {
            echo json_encode(
                array('message' => 'Form has been submitted')
            );
        } else {
            echo json_encode(
                array('message' => 'Internal Server Error. Try Again')
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
    case 'approveRequest':
        approveRequest();
        break;
    case 'rejectRequest':
        rejectRequest();
        break;
    case 'fields':
        getFields();
        break;
    case 'saveForm':
        saveForm();
        break;
    case 'dataForm':
        dataForm();
        break;
    case 'fileupload':
        fileupload();
        break;
    case 'HardFetchResponses':
        testResponses();
        break;
    case 'certificateForm':
        certificateForm();
        break;
    case 'joinus';
        joinus();
        break;
    case 'contactus';
        contactus();
        break;
    default:
        echo "Invalid Query";
}