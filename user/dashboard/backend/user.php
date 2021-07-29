<?php

    class User {
        private $conn;
        private $table = "users";

        public function __construct($db) {            
            $this->conn = $db;
        }

        public function fetchUserByEmail ($email) {
            $query =
            "SELECT * from $this->table
            WHERE email = '$email'";
            $res = $this->conn->query($query);
            return $res;
        }

        public function register ($details) {
            $hashedPassword = password_hash($details['password'], PASSWORD_BCRYPT);
            $query =
            "INSERT INTO $this->table
            (userType, email, password, name, acmMemberId, profilePhoto, course, branch, rollNo)
            VALUES (
                'user',
                '$details[email]',
                '$hashedPassword',
                '$details[name]',
                NULLIF('$details[acmMemberId]',''),                
                NULLIF('$details[profilePhoto]',''),
                '$details[course]',
                '$details[branch]',
                '$details[rollNo]'
            )";
            $res = $this->conn->query($query);
            return $res;
        }

        // public function updateProfile ($email,$userDoc) {
        //     $query = 
        //     "UPDATE $this->table
        //     SET name = "$userDoc["name"]", acmMemberId = "$userDoc["acmMemberId"]"
        //     WHERE email = '$email'";
        //     $res = $this->conn->query($query);
        //     return $res;
        // }
    }
?>