<?php

    class Blog{
        private $conn;
        private $table = "blogs";

        public function __construct($db){
            $this->conn = $db;
        }

        public function createBlog($details){
            boolval($details['isDraft']) ? $isDraft = 1 : $isDraft = 0;
            $tags = $details['tags'] ? serialize($details['tags']) : serialize([]);

            $query =
                "INSERT INTO blogs
                (userEmail, userName, blogTitle, content, tags, isDraft)
                VALUES (
                    '$details[userEmail]',
                    '$details[userName]',
                    '$details[blogTitle]',
                    '$details[content]',
                    '$tags',
                    '$isDraft'
                )";                
            $res = $this->conn->query($query);
            return $res;
        }

        public function fetchAllBlogs($userEmail){
            $query = 
                "SELECT * FROM $this->table 
                WHERE userEmail = '$userEmail'";
            
            $res = $this->conn->query($query);            
            return $res;
        }
    }
