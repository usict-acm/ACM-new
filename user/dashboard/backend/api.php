<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once './database.php';
include_once './userApi.php';
include_once './blogApi.php';

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
    case 'createBlog':
        createBlog();
        break;
    default:
        echo "Invalid Query";
}
