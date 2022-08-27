<?php

    
    // echo $formID;
    $filename = "joinus";
    include_once '../../blogAdmin/database.php';
    $database = new Database();
    $conn = $database->connect();

   // $sql = "select formName from forms where formID='".$formID."'";

    //$res = mysqli_query($conn,$sql);


    $sql2 = "SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = 'join_us'";

    $res2 = mysqli_query($conn,$sql2);

    $arr=array();


    while($row = mysqli_fetch_assoc($res2)){
        array_push($arr, $row['COLUMN_NAME']);
        
    }

    header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename='.$filename.'.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, $arr);  
      $query = "SELECT * from join_us ORDER BY id";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);

?>