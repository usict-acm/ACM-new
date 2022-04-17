<?php

use Shuchkin\SimpleXLSX;

?>

<!DOCTYPE html>
<html>
    <body>
        <form action = "#" method = "POST" enctype="multipart/form-data">
            <input type = "file" name = "excel">
            <input type = "submit" name = "submit">

        </form>
<?php
if(isset($_FILES['excel']['name'])){
    require('../blogAdmin/database.php');
    $database = new Database();
    $link = $database->connect();
    $connection = $link;
    include "xlsx.php";
    if($connection){
        $excel = SimpleXLSX::parse($_FILES['excel']['tmp_name']);
       // print_r($excel->rows());
       $i=0;
       $query="";
       foreach ($excel->rows() as $key => $row) {
        //print_r($row);
        $q="";
        foreach ($row as $key => $cell) {
            //print_r($cell);echo "<br>";
            
            if($i>0){
                $q.="'".$cell. "',";
            }
        }
        
           
        if($i>0){
            $query="INSERT INTO test values (".rtrim($q,",").");";
        }
        echo $query;
        if($i>0){
        if(mysqli_query($connection,$query))
			{
				echo "true";
			}
        }
        $i++;
    }
    }

}
?>
    </body>
</html>