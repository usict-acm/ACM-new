<?php

class User
{
    private $conn;
    private $table = "dashboardUsers";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function fetchUserByEmail($email)
    {
        $query =
            "SELECT * from $this->table
            WHERE email = '$email'";
        $res = $this->conn->query($query);
        return $res;
    }

    public function register($details)
    {
        $hashedPassword = password_hash($details['password'], PASSWORD_BCRYPT);
        $query =
            "INSERT INTO $this->table
            (userType, email, password, name, acmMemberId, course, branch, rollNo, college)
            VALUES (
                'user',
                '$details[email]',
                '$hashedPassword',
                '$details[name]',
                NULLIF('$details[acmMemberId]',''),                
                '$details[course]',
                '$details[branch]',
                '$details[rollNo]',
                '$details[college]'
            )";
        $res = $this->conn->query($query);
        return $res;
    }

    public function updateProfile($email, $userDoc)
    {
        $updatedName = $userDoc["name"];
        $updatedAcmId = $userDoc["acmMemberId"];
        $updatedProfilePhoto = $userDoc["profilePhoto"];
        $updatedCollege = $userDoc["college"];

        $query = $updatedProfilePhoto === "" ?
            
            "UPDATE $this->table
             SET name ='$updatedName', acmMemberId = '$updatedAcmId', college = '$updatedCollege'
             WHERE email = '$email'" :        
            
            "UPDATE $this->table
             SET name ='$updatedName', acmMemberId = '$updatedAcmId', profilePhoto = '$updatedProfilePhoto', college = '$updatedCollege'
             WHERE email = '$email'";
        
        $res = $this->conn->query($query);
        return $res;
    }

    public function checkUserExist($user) {
        $userByEmailQuery =
            "SELECT * from $this->table
            WHERE email = '$user[email]'";
        $userByEmail = $this->conn->query($userByEmailQuery);

        $userByRollNoQuery = 
            "SELECT * from $this->table
            WHERE rollNo = '$user[rollNo]'
            AND college = '$user[college]'";
        $userByRollNo = $this->conn->query($userByRollNoQuery);

        $userByMemberIDQuery =
            "SELECT * from $this->table
            WHERE acmMemberId = '$user[acmMemberId]'";
        $userByMemberID = $this->conn->query($userByMemberIDQuery);        

        return ($userByEmail->num_rows > 0 || $userByRollNo->num_rows > 0 || ( $user['acmMemberId'] && $user['acmMemberId'] !== '' && $userByMemberID->num_rows > 0));
    }
}
