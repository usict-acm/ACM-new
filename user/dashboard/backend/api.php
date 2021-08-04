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
                echo json_encode(array(
                    'message' => 'Login successful',
                    'user' => array(
                        'userId' => $user_data["userId"],
                        'name' => $user_data["name"],
                        'email' => $user_data["email"],
                        'profilePhoto' => $user_data["profilePhoto"],
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
                echo json_encode(array(
                    'message' => 'Signup successful',
                    'user' => array(
                        'userId' => $user_data["userId"],
                        'name' => $user_data["name"],
                        'email' => $user_data["email"],
                        'profilePhoto' => $user_data["profilePhoto"],
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
    if ($req["email"] && $req["password"] && $req["name"] && $req["course"] && $req["branch"] && $req["rollNo"]) {
        $result = $user->updateProfile($req["email"], $req);
        // echo $result;
        if ($result) {
            $user_data = fetchUserByEmail($user, $req["email"]);
            if ($user_data) {
                echo json_encode(array(
                    'message' => 'Update successful',
                    'user' => array(
                        'userId' => $user_data["userId"],
                        'name' => $user_data["name"],
                        'email' => $user_data["email"],
                        'profilePhoto' => $user_data["profilePhoto"],
                        'acmMemberId' => $user_data["acmMemberId"],
                        'course' => $user_data["course"],
                        'branch' => $user_data["branch"],
                        'rollNo' => $user_data["rollNo"],
                    )
                ));
            }
        } else {
            echo json_encode(array('error' => "Failed to Update"));
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
