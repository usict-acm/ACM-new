<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }

        .hh_button {
            display: inline-block;
            text-decoration: none;
            background: linear-gradient(to right, #ff8a00, #da1b60);
            border: none;
            color: white;
            padding: 10px 25px;
            font-size: 1rem;
            border-radius: 3px;
            cursor: pointer;
            font-family: 'Roboto', sans-serif;
            position: relative;
            margin-top: 30px;
            margin: 0px;
            position: absolute;
            right: 20px;
            top: 1.5%;
        }

        header {
            color: white;
            padding: 20px;
            margin-bottom: 20px;
        }

        header a,
        header a:hover {
            text-decoration: none;
            color: white;
        }


    </style>
</head>

<?php
// Process delete operation after confirmation
if(isset($_GET["Sno"]) ){

    include_once '../../blogAdmin/database.php';
    $database = new Database();
    $link = $database->connect();
    $connection = $link;

    // $conn=mysqli_connect('localhost','root','root','db');
    $Sno = mysqli_real_escape_string($connection,$_GET['Sno']);
    $sql = "SELECT * from certificate where uniqueNo = '".$Sno."'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $uniqueNo = $row['uniqueNo'];
                $name = $row['nameParticipant'];
                $email = $row['email'];
                $role = $row['role'];
                $startdate = $row['startDate'];
                $enddate = $row['endDate'];
                $signedby = $row['signedBy'];
            }
    }
}
}

if(isset($_POST['submit'])){
    include_once '../../blogAdmin/database.php';
    $database = new Database();
    $link = $database->connect();
    $connection = $link;
    $query = "UPDATE certificate SET nameParticipant = '" . $_POST['txtName'] . "', email = '" . $_POST['txtemail'] . "', role = '" . $_POST['txtRole'] . "', startDate = '" . $_POST['txtStartdate'] . "',endDate = '" . $_POST['txtEnddate'] . "', signedBy = '" . $_POST['txtsignedby'] . "'WHERE uniqueNo='". $_POST['txtunique'] ."' ";
   $results = mysqli_query($link, $query);
   echo $results;
   header('Location: http://localhost/ACM-new/admin/adminPanel/index.php?table=Certificate');
}


    ?>
    <body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Certificate</h2>
                    </div>

                    <form method="POST" enctype="multipart/form-data" action= "certificate_edit.php">
                    <div class="form-group">
                            <label>Certificate Number</label>
                        </div>
                    <div class="form-group">
                            <input type="text" name="txtunique" id="unique" class='form-control' value = <?php echo $uniqueNo; ?>  readonly />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtName" id="name" class='form-control' placeholder="Enter the Name of certificate holder" value = "<?php echo $name; ?> " required />
                        </div>

                        <div class="form-group">
                            <input type="text" name="txtRole" id="role" class='form-control' placeholder="Enter the Role of certificate holder" value = "<?php echo $role; ?> " required />
                        </div>

                        <div class="form-group">
                            <input type="email" name="txtemail" id="email" class='form-control' placeholder="Enter the Email of certificate holder" value = "<?php echo $email; ?> " required />
                        </div>
                       
                        <div class="form-group">
                            <label>Starting date for Program</label>
                        </div>
                        <div class="form-group">
                            <input type="date" name="txtStartdate" id="startDate" class='form-control' value = <?php echo $startdate; ?> required/>
                        </div>
                        <div class="form-group">
                            <label>End date for Program</label>
                        </div>
                        <div class="form-group">
                            <input type="date" name="txtEnddate" id="endDate" class='form-control' value = <?php echo $enddate; ?> required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtsignedby" id="signedby" class='form-control' placeholder="Signed By" value = "<?php echo $signedby; ?> " required/>
                        </div>

                        <input type="submit" name="submit" id ="submit" class="btn btn-primary btn-md pull-right" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>