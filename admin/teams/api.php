<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once './database.php';
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
            $multi_array_member = array();

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

        array_push($multi_array_member,$member_arr);

        // Turn to JSON & output
        echo json_encode($multi_array_member);

        } else {
        // No Posts
            echo json_encode(array('message' => 'No members found'));
        }
    };

    $q = $_GET['q'];
    switch ($q){
        case 'readMember':
            read();
            break;
        default:
            echo "Invalid Query";
    }
?>