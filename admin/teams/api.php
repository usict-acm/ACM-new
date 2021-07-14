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
        $category = $_GET['category'];

        // Member query
        $result = $member->readMember($year, $category);

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
            $image = $_FILES['image'];
            $name = $_POST['name'];
            $designation = $_POST['designation'];
            $linkedin = $_POST['linkedin'];
            $github = $_POST['github'];
            $instagram = $_POST['instagram'];
            $year = $_POST['year'];
            $category = $_POST['category'];
            
            print_r($file);
        
            $filename = $file['name'];
            $fileerror = $file['error'];
            $filetemppath= $file['tmp_name'];
        
            $fileext = explode('.',$filename);
            $filecheck = strtolower(end($fileext));
        
            $fileextstored = array('png','jpg','jpeg');
        
            if(in_array($filecheck,$fileextstored)) {
                $destinationfile = './assets/images/team/'.$filename;
                $uploadLocation = '../../assets/images/team/'.$filename;
                move_uploaded_file($filetemppath,$uploadLocation);
                
                $sql = "INSERT INTO `team` (`image`, `name`, `designation`, `linkedin`, `github`, `instagram`, `year`, `category`, `added_on`) VALUES ('$destinationfile', '$name', '$designation', '$linkedin', '$github', '$instagram', '$year', '$category' , current_timestamp());";
                
                if($db->query($sql) == true) {
                echo '<script type="text/javascript">';
                echo ' alert("Member uploaded successfully!")';
                echo '</script>';
                }
                else {
                echo "ERROR: $sql <br> $db->error";
                }    
            }
            else {
            echo '<script type="text/javascript">';
            echo ' alert("Image not uploaded, check the extension or try again!")';
            echo '</script>';
            }
        // }
    };
    
    function delMember(){
        $database = new Database();
        $db = $database->connect();
        // if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $year = $_POST['year'];
            
            $sql = "DELETE FROM `team` WHERE name LIKE '%" . $name . "%' AND year=" . $year ;
            
            // echo $sql;

            if($db->query($sql) == true) {
                echo '<script type="text/javascript">';
                echo ' alert("Member deleted successfully!")';
                echo '</script>';
            }
            else {
                echo "ERROR: $sql <br> $db->error";
            }    
        // }
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
?>