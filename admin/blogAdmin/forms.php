<?php 
     class Form{
          public function __construct($db){
               $this->conn = $db;
          }

          public function createResponseTable($request){
               $tableName = "Responses_" . $request[0];
               $query = "CREATE TABLE $tableName (
                    id INT(6) PRIMARY KEY
               )";
               $this->conn->query($query);

               for($i = 1; $i < count($request); $i++){
                    $valueText = $request[$i][0];
                    $valueType = $request[$i][1];
                    $query1 = "ALTER TABLE $tableName
                               ADD $valueText VARCHAR(200),
                                   $valueType VARCHAR(200);";
                    echo($query1);
                    $this->conn->query($query1); 
               }

               $query2 = "SHOW FULL TABLES";
               $stmt = $this->conn->query($query2);
               return $stmt;
          }
     }


     class getForms
     {
     // DB stuff
     private $conn;
     private $table = 'forms';

     // Post Properties
     public $id;
     public $name;

     // Constructor with DB
     public function __construct($db)
     {
     $this->conn = $db;
     }

     // Get Posts
     public function read($start, $limit)
     {
     $query = 'SELECT b.id, b.name FROM ' . $this->table . ' b ORDER BY b.id DESC LIMIT ' . $start . ',' . $limit;
     $stmt = $this->conn->query($query);
     return $stmt;
     }

     public function countForms()
     {
     $query = 'SELECT COUNT(*) FROM forms';
     $stmt = $this->conn->query($query);
     return $stmt->fetch_assoc();
     }
     }

