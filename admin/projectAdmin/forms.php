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
          public $required;

          public function __construct($db){
               $this->conn = $db;
          }

          public function saveFormInFormsTable($name,$request){
               $formID = bin2hex(random_bytes(4));
               $query = "INSERT INTO `forms` (`formID`,`formName`) VALUES ('$formID','$name')";
               $this->conn->query($query);

               for($i = 1; $i < count($request); $i++){
                    $valueText = $request[$i][0];
                    $valueType = $request[$i][1];
                    $valueRequired = $request[$i][2];
                    $check="";
                    $radio="";
                    if($valueType == "checkbox"){
                         $valueCheckbox = $request[$i][3];
                         for($j=0; $j<count($valueCheckbox)-1; $j++){
                              $check = $check.$valueCheckbox[$j].",";
                         }
                         $check = $check.$valueCheckbox[count($valueCheckbox)-1];
                    }
                    if($valueType == "radioAns"){
                         $valueRadio = $request[$i][3];
                         for($j=0; $j<count($valueRadio)-1; $j++){
                              $radio = $radio.$valueRadio[$j].",";
                         }
                         $radio = $radio.$valueRadio[count($valueRadio)-1];
                    }

                    $query = "INSERT INTO `fields` (`formID`,`formName`,`fieldName`,`fieldType`, `ifCheckbox`, `ifRadio`, `required`) VALUES ('$formID','$name','$valueText','$valueType', '$check' ,'$radio' , '$valueRequired')";
                    $this->conn->query($query);
               }
          }

          public function createResponseTable($request){
               $tableName = "Responses_" . $request[0];
               $query = "CREATE TABLE $tableName (
                    id INT(6) AUTO_INCREMENT PRIMARY KEY
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

               $q = "SELECT formName FROM forms WHERE formID='$ID'";
               $r = $this->conn->query($q);

               $form =  $r->fetch_assoc();
               foreach ($form as $key => $item) {
                    $formItem = $item;
                }
               // Create query
               $value = explode(" ",$formItem);
               $val = join("_",$value);
               $tableName = "Responses_" . $val;
               $query = 'SELECT * FROM ' . $tableName .'';                                 
               // echo $query;
               $stmt = $this->conn->query($query);   
               return $stmt;
               }

          public function readFields($id,$formname) {
               $value = explode("_",$formname);
               $val = join(" ",$value);
               // echo $id;
               $query = "SELECT f.* FROM fields f WHERE f.formID='$id'"; 
               // echo $query;
               $stmt = $this->conn->query($query); 
               // echo "statement".$stmt;  
               // echo $query;
               return $stmt;
               
          }

          public function countFields($id,$formname) {
               $query = "SELECT COUNT(*) FROM fields WHERE formID='$id'"; 
               $stmt = $this->conn->query($query); 
               // echo "statement".$stmt;  
               // echo $query;
               return $stmt->fetch_assoc();
          }

          public function fieldsQuery($Id) {
               // Create query
               $query = "SELECT * FROM fields WHERE formID='$Id'";
               $stmt = $this->conn->query($query);
               return $stmt;
             }

          public function latestID(){
               $query = 'SELECT formID FROM forms ORDER BY id DESC LIMIT 1';
               $stmt = $this->conn->query($query);
               $countID =  $stmt->fetch_assoc();
               foreach ($countID as $key => $item) {
                    $count = $item;
                }
               echo $count;
               return $count;
          }

          public function saveDataResponsesInTable($name,$txtTitle) {
               $tableName = "Responses_" . $name;
               $one = "INSERT INTO " . $tableName . "(";
               $two = "";
               $three = "";

               // print_r($txtTitle);
                  
               for($i=1; $i<count($txtTitle)-1; $i++){
                    $value = explode(" ",$txtTitle[$i][0]);
                    $val = join("_",$value);
                    $two = $two . $val . ",";
                    $three = $three . '"' . $txtTitle[$i][1] . '"'  . ",";
               }

               $countw = count($txtTitle)-1;
               $value = explode(" ",$txtTitle[$countw][0]);
               $val = join("_",$value);
               $two = $two . $val . ") VALUES(";
               $three = $three . '"' . $txtTitle[$countw][1] . '"' . ')';

               $query = $one . $two . $three . ";";
               $this->conn->query($query);
          }
     }

