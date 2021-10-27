<?php

include_once './blogFunctions.php';

function blogInit()
{
    $database = new Database();
    $db = $database->connect();
    $blog = new Blog($db);
    return $blog;
}

function createBlog()
{
    if ($_SERVER['REQUEST_METHOD'] !== "POST") {
        echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /createBlog";
        return;
    }

    $blog = blogInit();
    $req = json_decode(file_get_contents('php://input'), true);
    if ($req["blogTitle"] && $req["userEmail"] && $req["userName"] && $req["content"]) {
        $result = $blog->createBlog($req);
        if ($result) {
            $allBlogs = $blog->fetchAllBlogs($req["userEmail"]);
            $allBlogsArr = array();
            if ($allBlogs->num_rows > 0) {
                while ($row = $allBlogs->fetch_assoc()) {
                    $blogRow = array(
                        "blogId" => $row["blogId"],
                        "blogTitle" => $row["blogTitle"],
                        "content" => $row["content"],
                        "userEmail" => $row["userEmail"],
                        "userName" => $row["userName"],
                        "isDraft" => boolval($row["isDraft"]),
                        "tags" => unserialize($row["tags"]),
                        "created" => $row["created"],
                        "published" => $row["published"],
                        "lastUpdated" => $row["lastUpdated"]
                    );
                    array_push($allBlogsArr, $blogRow);
                }
                echo json_encode(array("message" => "success", "blogs" => $allBlogsArr));
            } else {
                echo json_encode(array("error" => "no blogs found"));
            };
        }
    } else {
        echo json_encode(array('error' => 'One or more fields are missing.'));
        return;
    }
}

function fetchUserBlogs()
{
    if ($_SERVER['REQUEST_METHOD'] !== "POST") {
        echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /blogs";
        return;
    }

    $blog = blogInit();
    $req = json_decode(file_get_contents('php://input'), true);
    if ($req["userEmail"]) {
        $allBlogs = $blog->fetchAllBlogs($req["userEmail"]);
        $allBlogsArr = array();
        if ($allBlogs->num_rows > 0) {
            while ($row = $allBlogs->fetch_assoc()) {
                $blogRow = array(
                    "blogId" => $row["blogId"],
                    "blogTitle" => $row["blogTitle"],
                    "content" => $row["content"],
                    "userEmail" => $row["userEmail"],
                    "userName" => $row["userName"],
                    "isDraft" => boolval($row["isDraft"]),
                    "tags" => unserialize($row["tags"]),
                    "created" => $row["created"],
                    "published" => $row["published"],
                    "lastUpdated" => $row["lastUpdated"]
                );
                array_push($allBlogsArr, $blogRow);
            }
            echo json_encode(array("message" => "success", "blogs" => $allBlogsArr));
        } else {
            echo json_encode(array("error" => "no blogs found"));
        };
    } else {
        echo json_encode(array('error' => 'One or more fields are missing.'));
        return;
    }
}

function updateBlog()
{
    if ($_SERVER['REQUEST_METHOD'] !== "POST") {
        echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /updateBlog";
        return;
    }

    $blog = blogInit();
    $req = json_decode(file_get_contents('php://input'), true);
    if ($req["blogId"] && $req["blogTitle"] && $req["userEmail"] && $req["content"]) {
        $result = $blog->updateBlog($req);
        if ($result) {
            $allBlogs = $blog->fetchAllBlogs($req["userEmail"]);
            $allBlogsArr = array();
            if ($allBlogs->num_rows > 0) {
                while ($row = $allBlogs->fetch_assoc()) {
                    $blogRow = array(
                        "blogId" => $row["blogId"],
                        "blogTitle" => $row["blogTitle"],
                        "content" => $row["content"],
                        "userEmail" => $row["userEmail"],
                        "userName" => $row["userName"],
                        "isDraft" => boolval($row["isDraft"]),
                        "tags" => unserialize($row["tags"]),
                        "created" => $row["created"],
                        "published" => $row["published"],
                        "lastUpdated" => $row["lastUpdated"]
                    );
                    array_push($allBlogsArr, $blogRow);
                }
                echo json_encode(array("message" => "success", "blogs" => $allBlogsArr));
            } else {
                echo json_encode(array("error" => "no blogs found"));
            };
        }
    } else {
        echo json_encode(array('error' => 'One or more fields are missing.'));
        return;
    }
}

function deleteBlog()
{
    if ($_SERVER['REQUEST_METHOD'] !== "POST") {
        echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /deleteBlog";
        return;
    }

    $blog = blogInit();
    $req = json_decode(file_get_contents('php://input'), true);
    if ($req["blogId"] && $req["userEmail"]) {
        $result = $blog->deleteBlog($req["blogId"]);
        if ($result) {
            $allBlogs = $blog->fetchAllBlogs($req["userEmail"]);
            $allBlogsArr = array();
            if ($allBlogs->num_rows > 0) {
                while ($row = $allBlogs->fetch_assoc()) {
                    $blogRow = array(
                        "blogId" => $row["blogId"],
                        "blogTitle" => $row["blogTitle"],
                        "content" => $row["content"],
                        "userEmail" => $row["userEmail"],
                        "userName" => $row["userName"],
                        "isDraft" => boolval($row["isDraft"]),
                        "tags" => unserialize($row["tags"]),
                        "created" => $row["created"],
                        "published" => $row["published"],
                        "lastUpdated" => $row["lastUpdated"]
                    );
                    array_push($allBlogsArr, $blogRow);
                }
                echo json_encode(array("message" => "success", "blogs" => $allBlogsArr));
            } else {
                echo json_encode(array("error" => "No Blogs"));
            };
        }
    } else {
        echo json_encode(array('error' => 'Missing id'));
        return;
    }
}
