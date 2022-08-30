<?php
// header('location: ../../blogAdmin/blogAdmin.html')
?>

<?php
// Include config file
require_once "./faqadmin/config1.php";
// include './faqadmin/phpqrcode/qrlib.php';
// $uni = "ayushi";
// $path = './faqadmin/images/';
// $file = $path.uniqid().".png";
// $ecc = 'L';
// $pixel_Size = 10;
// $frame_Size = 10;
// QRcode::png($uni, $file, $ecc, $pixel_Size, $frame_Size);
include_once '../blogAdmin/database.php';
$database = new Database();
$link = $database->connect();
$connection = $link;

$sql = "SELECT * FROM certificate ORDER BY id DESC LIMIT 1";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $u = $row['uniqueNo'];
    $id = substr($u, -4);
    ord($id);
    echo $id;
    $id = $id+1;
}
else{
    $id = 1;
}
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

        #cno{
        text-align: center;
        font-weight: bold;
        font-size: 25px;
        }
        /* {
            text-align: center; 
        } */

        /* {
            text-align: center; 
        } */

    </style>
</head>

<body >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Certificate</h2>
                    </div>
                    <!-- <p id="cno">Certificate Number #</p> -->

                    <form method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="text" name="uniqueno" id="cno" class='form-control' value = 'ACM/DC/000<?php echo $id ?>' readonly/>
                        </div>

                        <div class="form-group">
                            <input type="text" name="name" id="name" class='form-control' placeholder="Enter the Name of certificate holder" required/>
                        </div>

                        <div class="form-group">
                            <input type="text" name="college" id="college" class='form-control' placeholder="Enter the college" required/>
                        </div>
                       
                        <div class="form-group">
                            <label>Starting date for Program</label>
                        </div>
                        <div class="form-group">
                            <input type="date" name="startDate" id="startDate" class='form-control' required/>
                        </div>
                        <div class="form-group">
                            <label>End date for Program</label>
                        </div>
                        <div class="form-group">
                            <input type="date" name="endDate" id="endDate" class='form-control' required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="event" id="event" class='form-control' placeholder="Event" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class='form-control' placeholder="Enter the Email of certificate holder" required/>
                        </div>

                        <div class="form-group">
                            <input type="text" name="rank" id="rank" class='form-control' placeholder="Rank" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="enroll" id="enroll" class='form-control' placeholder="Enrollment Number" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="course" id="course" class='form-control' placeholder="course" required/>
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary btn-md pull-right" onclick="submit_certificate()" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
    
    <script>

    function submit_certificate(){
        let val = document.querySelector("#cno").value;
        let email_value = document.querySelector("#email").value;
        let name_value = document.querySelector("#name").value;
        let college_value = document.querySelector("#college").value;
        let startDate_value = document.querySelector("#startDate").value;
        let endDate_value = document.querySelector("#endDate").value;
        let rank_value = document.querySelector("#rank").value;
        let course_value = document.querySelector("#course").value;
        let enroll_value = document.querySelector("#enroll").value;
        let event_value = document.querySelector("#event").value;

        // console.log(email_value);
        // var val = $("#cno").value;
            const arr = val.split("#");
            // console.log(arr);
        if(!email_value || !name_value || !college_value || !startDate_value || !endDate_value ||  !event_value || !enroll_value || !course_value){
            alert("Please fill all the details");
        }
        else{
                // console.log("xyz");

            var formData = new FormData();
            formData.append('uniqueno',  arr[0]);
            formData.append('name', $("#name").val());
            formData.append('college', $("#college").val());
            formData.append('endDate', $("#endDate").val());
            formData.append('startDate',$("#startDate").val());
            formData.append('email',$('#email').val());
            formData.append('event', $('#event').val());
            formData.append('rank', $('#rank').val());
            formData.append('enroll', $('#enroll').val());
            formData.append('course', $('#course').val());
            
            $.ajax({
                type: "POST",
                url: "../blogAdmin/api.php/?q=certificateForm",
                data : formData,
                cache: false,
                processData: false,
                contentType: false,
                dataType: "JSON",
                encode: true,
                success: function(data){
                    var download = '../adminPanel/faqadmin/certi_download.php?Sno=' + arr[0];
                    window.location.replace(download);
                    if (confirm("Do you want to mail this certificate to the student?") == true) {
                        var mail = '../adminPanel/faqadmin/certificate_mail.php?Sno=' + arr[0] + '&email=' + $("#email").val();
                        window.location.replace(mail);
                    } else {
                        alert("Thank you!");
                    }                    
                },
                error: function(xhr, status, error){
                    alert("Fill in the details");
                    console.log(error);
                },
            });

        }
    }
    </script>    
    <script>
        function generate() {
        // console.log("called");
        var length = 10;
        var cno = document.getElementById("cno");
        const characters = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9,'a','b','c','d','e','f'];
	    const generated = Array.from({ length }, () => {
        const randomIndex = Math.floor(Math.random() * characters.length);
		    return characters[randomIndex];
	    });
        cno.value += new Date().getFullYear()+'/'+generated.join('');
        // console.log(generated.join(''));
    }
    </script>

</body>

</html>