<?php 
     class Form{
          // DB stuff
          private $conn;
          private $table = 'forms';

          // Post Properties
          public $id;
          public $name;

              // DB stuff
          private $table1 = 'fields';


          // Post Properties
          public $formName;
          public $formId;
          public $fieldName;
          public $fieldType;
          public function __construct($db){
               $this->conn = $db;
          }

          public function saveFormInFormsTable($name){
               $result = $this->conn->query("SELECT COUNT(*) FROM forms");
               $r = $result->fetch_assoc();
               foreach ($r as $key => $item) {
                    $formID = $item;
               }
               $query = "INSERT INTO `forms` (`formID`,`formName`) VALUES ('$formID','$name')";
               $this->conn->query($query);
          }

          public function saveFormFields($name,$request){
               $result = $this->conn->query("SELECT COUNT(*) FROM forms");
               $r = $result->fetch_assoc();
               foreach ($r as $key => $item) {
                    $formID = $item;
               }
               for($i = 1; $i < count($request); $i++){
                    $valueText = $request[$i][0];
                    $valueType = $request[$i][1];
                    $query = "INSERT INTO `fields` (`formID`,`formName`,`fieldName`,`fieldType`) VALUES ('$formID','$name','$valueText','$valueType')";
                    $this->conn->query($query);
               }
          }

          public function createResponseTable($request){
               $tableName = "Responses_" . $request[0];
               $query = "CREATE TABLE $tableName (
                    id INT(6) PRIMARY KEY
               )";
               $this->conn->query($query);
               for($i = 1; $i < count($request); $i++){
                    $value = explode(" ",$request[$i][0]);
                    $val = join("_",$value);
                    $query1 = "ALTER TABLE $tableName ADD $val VARCHAR(255)";
                    $this->conn->query($query1); 
               }

               $query2 = "SHOW FULL TABLES";
               $stmt = $this->conn->query($query2);
               return $stmt;
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

          public function readAllResponses($ID,$formName) {
               // Create query
               // $formName = $formName;
               // $value = explode(" ",$formName);
               // $val = join("_",$value);
               $tableName = "responses_" . $formName;
               $query = 'SELECT * FROM ' . $tableName .'';                                 
               echo $query;
               $stmt = $this->conn->query($query); 
               // echo "statement".$stmt;  
               return $stmt;
               }

          public function readFields($id,$formname) {
               $value = explode("_",$formname);
               $val = join(" ",$value);
               $query = ' SELECT f.* FROM fields f WHERE f.formID = '.$id.' '; 
               $stmt = $this->conn->query($query); 
               // echo "statement".$stmt;  
               // echo $query;
               return $stmt;
               
          }

          public function countFields($id,$formname) {
               $query = ' SELECT COUNT(*) FROM fields WHERE formID = '.$id.' '; 
               $stmt = $this->conn->query($query); 
               // echo "statement".$stmt;  
               // echo $query;
               return $stmt->fetch_assoc();
          }

          public function fieldsQuery() {
               // Create query
               $query = 'SELECT b.* FROM ' . $this->table1 .' b';
               $stmt = $this->conn->query($query);
               return $stmt;
             }
     }

