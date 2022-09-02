<?php

    if (isset($_GET['formID'])){
        $formID = $_GET['formID'];
    }
    // echo $formID;
    
    include_once '../../blogAdmin/database.php';
    $database = new Database();
    $conn = $database->connect();

    $sql = "select formName from forms where formID='".$formID."'";

    $res = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($res)){
        // $html.='<tr><td>'.$row['code'].'</td></tr>';
        $formName = $row['formName'];
    }

    $value = explode(" ", $formName);
    $formName = join("_", $value);
    $formName = "Responses_".$formName;

    $sql2 = "SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = N'$formName'";

    $res2 = mysqli_query($conn,$sql2);

    $arr=array();


    while($row = mysqli_fetch_assoc($res2)){
        array_push($arr, $row['COLUMN_NAME']);
        // $html.='<tr><td>'.$row['code'].'</td></tr>';
        // $formName = $row['formName'];
        // echo $row['COLUMN_NAME'];
    }

    header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename='.$formName.'.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, $arr);  
      $query = "SELECT * from ".$formName." ORDER BY id";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);

?>