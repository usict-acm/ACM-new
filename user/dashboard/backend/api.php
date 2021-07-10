<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once './database.php';
    include_once './user.php';
    $method = $_SERVER['REQUEST_METHOD'];
    
    function init(){
        $database = new Database();
        $db = $database->connect();
        $user = new User($db);
        return $user;
    }

    function fetchUserByEmail($user, $email){
        $result = $user->fetchUserByEmail($email);
        $user_data = $result->fetch_assoc();
        return $user_data;
    }

    function checkUserExist($user, $inputEmail){
        $user_data = fetchUserByEmail($user, $req["email"]);
        if($user_data) return true;
        else return false;
    }

    function login(){
        if($_SERVER['REQUEST_METHOD'] != "POST"){
            echo "Cannot ".$_SERVER['REQUEST_METHOD']." /login";
            return;
        }
        $user = init();
        $req = json_decode(file_get_contents('php://input'), true); 
        if($req["email"] && $req["password"]){
            $user_data = fetchUserByEmail($user, $req["email"]);
            if($user_data){
                if(password_verify($req["password"],$user_data["password"])){
                    echo json_encode(array(
                        'userId' => $user_data["userId"],
                        'name' => $user_data["name"],
                        'email' => $user_data["email"],
                        'profilePhoto' => $user_data["profilePhoto"],
                        'acmMemberId' => $user_data["acmMemberId"],
                        'blogsId' => $user_data["blogsId"],
                        'eventsId' => $user_data["eventsId"],
                    ));
                }else{
                    echo "Invalid email/password";
                }
            }else{
                echo "Invalid email/password";
            }
        }
        else{
            echo json_encode(array('message' => 'One or more fields are missing.'));
            return;
        }
    }

    function register(){
        if($_SERVER['REQUEST_METHOD'] != "POST"){
            echo "Cannot ".$_SERVER['REQUEST_METHOD']." /register";
            return;
        }
        $user = init();
        $req = json_decode(file_get_contents('php://input'), true);
        if($req["email"] && $req["userType"] && $req["password"] && $req["name"] && $req["acmMemberId"] && $req["course"] && $req["branch"] && $req["batch"]){            
            if(checkUserExist($user, $req['email'])){
                echo json_encode(array('message'=>"user with same email already exist..."));
                return;
            }
            $result = $user->register($req);
            if($result){
                echo json_encode(array('message'=>"user registered successfully..."));
            }
            else{
                echo json_encode(array('message'=>"failed to register"));
            }            
        }
        else{
            echo json_encode(array('message' => 'One or more fields are missing.'));
            return;
        }
    }

    $q = $_GET['q'];
    switch ($q){
        case 'login':
            login();
            break;
        case 'register':
            register();
            break;
        default:
            echo "Invalid Query";
    }
?>