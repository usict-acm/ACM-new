<?php

    include_once './userFunctions.php';

    function userInit(){
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

    function fetchUserDoc()
    {
        if ($_SERVER['REQUEST_METHOD'] != "POST") {
            echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /fetchUserDoc";
            return;
        }
        $user = userInit();
        $req = json_decode(file_get_contents('php://input'), true);
        if ($req["email"] && $req["userId"]) {
            $user_data = fetchUserByEmail($user, $req["email"]);
            if ($user_data) {
                if($user_data["userId"] == $req["userId"]){
                    echo json_encode(array(
                        'message' => 'success',
                        'user' => array(
                            'userId' => $user_data["userId"],
                            'name' => $user_data["name"],
                            'email' => $user_data["email"],
                            'profilePhoto' => $user_data["profilePhoto"],
                            'acmMemberId' => $user_data["acmMemberId"],
                            'course' => $user_data["course"],
                            'branch' => $user_data["branch"],
                            'rollNo' => $user_data["rollNo"],
                            'college' => $user_data["college"],
                            'created' => $user_data["created"],
                            'lastUpdated' => $user_data["lastUpdated"]
                        )
                    ));
                    return;
                } else {
                    echo json_encode(array('error' => 'Invalid Details'));
                    return;
                }
            } else {
                echo json_encode(array('error' => 'Invalid Details'));
                return;
            }
        } else {
            echo json_encode(array('error' => 'One or more fields are missing.'));
            return;
        }
    }

    function login()
    {
        if ($_SERVER['REQUEST_METHOD'] != "POST") {
            echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /login";
            return;
        }
        $user = userInit();
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
                            'college' => $user_data["college"],
                            'created' => $user_data["created"],
                            'lastUpdated' => $user_data["lastUpdated"]
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
        $user = userInit();
        $req = json_decode(file_get_contents('php://input'), true);
        if ($req["email"] && $req["password"] && $req["name"] && $req["course"] && $req["branch"] && $req["rollNo"] && $req["college"]) {
            if ($user->checkUserExist($req)) {
                echo json_encode(array('error' => "user with similar credentials already exist..."));
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
                            'college' => $user_data["college"],
                            'created' => $user_data["created"],
                            'lastUpdated' => $user_data["lastUpdated"]
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
        $user = userInit();
        $req = json_decode(file_get_contents('php://input'), true);
        if ($req["email"] && $req["name"] && $req["course"] && $req["branch"] && $req["rollNo"]) {
            $result = $user->updateProfile($req["email"], $req);
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
                            'college' => $user_data["college"],
                            'created' => $user_data["created"],
                            'lastUpdated' => $user_data["lastUpdated"]
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