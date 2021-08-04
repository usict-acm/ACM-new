<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../blogAdmin/database.php';
    include_once './member.php';

    $method = $_SERVER['REQUEST_METHOD'];

    function read(){

        $database = new Database();
        $db = $database->connect();
        
        $member = new Member($db);

        $year = $_GET['year'];

        // Member query
        $result = $member->readMember($year);

        // Check if any members
        if($result) {
        // Member array
            $member_arr = array();

            while($row = $result->fetch_assoc()){
                $member_item = array(
                'id' => $row["id"],
                'image' => $row["image"],
                'name' => $row["name"],
                'designation' => $row["designation"],
                'linkedin' => $row["linkedin"],
                'github' => $row["github"],
                'instagram' => $row["instagram"],
                'year' => $row["year"],
                'category' => $row["category"]
            );
                // Push to "data"
                array_push($member_arr, $member_item);
        }

        // Turn to JSON & output
        echo json_encode($member_arr);

        } else {
        // No Posts
            echo json_encode(array('message' => 'No members found'));
        }
    };

    function postMember(){
        $database = new Database();
        $db = $database->connect();
        // if(isset($_POST['submit'])){
            $name = isset($_POST['name']) ? $_POST["name"] : false;
            $designation = isset($_POST['designation']) ? $_POST["designation"] : false;
            $linkedin = isset($_POST['linkedin']) ? $_POST["linkedin"] : false;
            $github = isset($_POST['github']) ? $_POST["github"] : false;
            $instagram = isset($_POST['instagram']) ? $_POST["instagram"] : false;
            $year = isset($_POST['year']) ? $_POST["year"] : false;
            $category = isset($_POST['category']) ? $_POST["category"] : false;
            $file = $_FILES['image'];

            // print_r($file);
        
            $filename = $file['name'];
            // $fileerror = $file['error'];
            $filetemppath= $file['tmp_name'];
        
            $fileext = explode('.',$filename);
            $filecheck = strtolower(end($fileext));
        
            $fileextstored = array('png','jpg','jpeg');
        
            if(in_array($filecheck,$fileextstored)) {
                $destinationfile = 'upload/teams/'.$filename;
                $uploadLocation = '../../upload/teams/'.$filename;
                move_uploaded_file($filetemppath,$uploadLocation);
                
                $sql = "INSERT INTO `team` (`image`, `name`, `designation`, `linkedin`, `github`, `instagram`, `year`, `category`, `added_on`) VALUES ('$destinationfile', '$name', '$designation', '$linkedin', '$github', '$instagram', '$year', '$category' , current_timestamp());";
                
                if($db->query($sql) == true) {
                    echo json_encode("Member has been added!");
                }
                else {
                    echo json_encode(http_response_code(400));
                }    
            }
            else {
                echo json_encode(http_response_code(400));
            }
        // }
    };
    
    function delMember(){
        $database = new Database();
        $db = $database->connect();

            $sql = "UPDATE `team` SET active = 0 WHERE id= " .$_POST["id"];
            
            if($db->query($sql) == true) {
                echo json_encode("Member deleted successfully!");
            }
            else {
                echo json_encode(http_response_code(400));
            }
    };

    $q = $_GET['q'];
    switch ($q){
        case 'readMember':
            read();
            break;
        case 'postMember';
            postMember();
            break;
        case 'delMember';
            delMember();
            break;
        default:
            echo "Invalid Query";
    }
