<?php

    class User {
        private $conn;
        private $table = "users";

        public function __construct($db) {            
            $this->conn = $db;
        }

        public function fetchUserByEmail ($email) {            
            $query = "SELECT * from ".$this->table." WHERE email = '".$email."'";
            $res = $this->conn->query($query);
            return $res;
        }

        public function register ($details) {
            $query = "INSERT INTO ".$this->table." (userType, email, password, name, acmMemberId, course, branch, batch, eventsId, blogsId, profilePhoto) VALUES('".$details['userType']."', '".$details['email']."', '".password_hash($details['password'], PASSWORD_BCRYPT)."', '".$details['name']."', '".$details['acmMemberId']."', '".$details['course']."', '".$details['branch']."', '".$details['batch']."', '".$details['email']."-ev', '".$details['email']."-bl', '".$details['profilePhoto']."')";
            
            $res = $this->conn->query($query);
            return $res;
        }
    }
?>