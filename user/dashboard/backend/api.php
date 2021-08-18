<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once './database.php';
include_once './user.php';
$method = $_SERVER['REQUEST_METHOD'];

function init()
{
    $database = new Database();
    $db = $database->connect();
    $user = new User($db);
    return $user;
}

function fetchUserByEmail($user, $email)
{
    $result = $user->fetchUserByEmail($email);
    $user_data = $result->fetch_assoc();
    return $user_data;
}

function checkUserExist($user, $inputEmail)
{
    $user_data = fetchUserByEmail($user, $inputEmail);
    if ($user_data) return true;
    else return false;
}

function login()
{
    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /login";
        return;
    }
    $user = init();
    $req = json_decode(file_get_contents('php://input'), true);
    if ($req["email"] && $req["password"]) {
        $user_data = fetchUserByEmail($user, $req["email"]);
        if ($user_data) {
            if (password_verify($req["password"], $user_data["password"])) {
                include("./enviornment.php");
                $profilePhoto = $user_data["profilePhoto"] ? $server_url.$user_data["profilePhoto"] : NULL;
                echo json_encode(array(
                    'message' => 'Login successful',
                    'user' => array(
                        'userId' => $user_data["userId"],
                        'name' => $user_data["name"],
                        'email' => $user_data["email"],
                        'profilePhoto' => $profilePhoto,
                        'acmMemberId' => $user_data["acmMemberId"],
                        'course' => $user_data["course"],
                        'branch' => $user_data["branch"],
                        'rollNo' => $user_data["rollNo"],
                    )
                ));
            } else {
                echo json_encode(array('error' => 'Invalid email/password'));
            }
        } else {
            echo json_encode(array('error' => 'Invalid email/password'));
        }
    } else {
        echo json_encode(array('error' => 'One or more fields are missing.'));
        return;
    }
}

function register()
{
    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /register";
        return;
    }
    $user = init();
    $req = json_decode(file_get_contents('php://input'), true);
    if ($req["email"] && $req["password"] && $req["name"] && $req["course"] && $req["branch"] && $req["rollNo"]) {
        if (checkUserExist($user, $req['email'])) {
            echo json_encode(array('error' => "user with same email already exist..."));
            return;
        }
        $result = $user->register($req);
        if ($result) {
            $user_data = fetchUserByEmail($user, $req["email"]);
            if ($user_data) {
                include("./enviornment.php");
                $profilePhoto = $user_data["profilePhoto"] ? $server_url.$user_data["profilePhoto"] : NULL;
                echo json_encode(array(
                    'message' => 'Signup successful',
                    'user' => array(
                        'userId' => $user_data["userId"],
                        'name' => $user_data["name"],
                        'email' => $user_data["email"],
                        'profilePhoto' => $profilePhoto,
                        'acmMemberId' => $user_data["acmMemberId"],
                        'course' => $user_data["course"],
                        'branch' => $user_data["branch"],
                        'rollNo' => $user_data["rollNo"],
                    )
                ));
            }
        } else {
            echo json_encode(array('error' => "Failed to register"));
        }
    } else {
        echo json_encode(array('error' => 'One or more fields are missing.'));
        return;
    }
}

function update()
{
    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /update";
        return;
    }
    $user = init();
    $req = json_decode(file_get_contents('php://input'), true);
    if ($req["email"] && $req["name"] && $req["course"] && $req["branch"] && $req["rollNo"]) { 
        if($_FILES['newProfilePhoto']){
            $uploadDir = "../../../upload/dashboard/profile/";
            $fileName = $req["email"];
            $fileTempPath = $_FILES["newProfilePhoto"]["tmp_name"];
            $error = $_FILES["newProfilePhoto"]["error"];
            $fileExt = strtolower(end(explode('.',$_FILES["newProfilePhoto"]["name"])));
            $fileExtAllowed = array('png','jpg','jpeg');
            if($error > 0){
                echo json_encode(array('error' => "Failed to Upload"));     
            }else {
                if(in_array($fileExt,$fileExtAllowed)){
                    $uploadLocation = $uploadDir.$fileName.".".$fileExt;
                    move_uploaded_file($fileTempPath, $uploadLocation);
                    $req['profilePhoto'] = "upload/dashboard/profile/".$fileName.".".$fileExt;
                }
            }            
        }
        $result = $user->updateProfile($req["email"], $req);        
        if ($result) {
            $user_data = fetchUserByEmail($user, $req["email"]);            
            if ($user_data) {
                include("./enviornment.php");
                $profilePhoto = $user_data["profilePhoto"] ? $server_url.$user_data["profilePhoto"] : NULL;
                echo json_encode(array(
                    'message' => 'Update successful',
                    'user' => array(
                        'userId' => $user_data["userId"],
                        'name' => $user_data["name"],
                        'email' => $user_data["email"],
                        'profilePhoto' => $profilePhoto,
                        'acmMemberId' => $user_data["acmMemberId"],
                        'course' => $user_data["course"],
                        'branch' => $user_data["branch"],
                        'rollNo' => $user_data["rollNo"],
                    )
                ));
            }
        } else {
            echo json_encode(array('error' => "Failed To Update"));
        }
    } else {
        echo json_encode(array('error' => 'One or more fields are missing.'));
        return;
    }
}

$q = $_GET['q'];
switch ($q) {
    case 'login':
        login();
        break;
    case 'register':
        register();
        break;
    case 'update':
        update();
        break;
    default:
        echo "Invalid Query";
}
