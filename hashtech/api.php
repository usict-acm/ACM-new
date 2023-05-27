<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once '../admin/blogAdmin/database.php';

$method = $_SERVER['REQUEST_METHOD'];

function postForm() {
    $database = new Database();

    $db = $database->connect();

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email =  $_POST["email"];
    $mobile = $_POST["mobileNumber"];
    $message = $_POST["message"];

    $sql = "INSERT INTO hashtech_contactus (firstname, lastname, email, mobile_number, user_message) VALUES ('$firstName', '$lastName', '$email', '$mobile', '$message')";

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
    case 'postForm':
        postForm();
        break;
    default:
        echo "Invalid Query";
}
?>


