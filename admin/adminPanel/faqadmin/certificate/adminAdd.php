<?php
// header('location: ../../blogAdmin/blogAdmin.html')
?>

<?php
// Include config file
require_once "./faqadmin/config1.php";
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

    </style>
</head>

<body onload="generate()">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    function submit_certificate(){
        console.log("xyz");
    var value = $("#cno").text();
    const arr = value.split("#");
    console.log(arr[1]);
    var formData = new FormData();
    formData.append('uniqueno',  arr[1]);
    formData.append('name', $("#name").val());
    formData.append('role', $("#role").val());
    formData.append('endDate', $("#endDate").val());
    formData.append('startDate',$("#startDate").val());
    formData.append('email',$('#email').val() );
    formData.append('signedby', $('#signedby').val());
    
    $.ajax({
        type: "POST",
        url: "../blogAdmin/api.php/?q=certificateForm",
        data : formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function(data){
            alert(data.message);
            window.location.reload();
        },
        error: function(xhr, status, error){
            window.location.reload();
            // alert("Fill in the details");
            //console.log(error);
        },
    });
    }
    </script>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Certificate</h2>
                    </div>
                    <p id="cno">Certificate Number #</p>

                    <form method="POST" enctype="multipart/form-data"  onsubmit="submit_certificate()">
                        <div class="form-group">
                            <input type="text" name="txtName" id="name" class='form-control' placeholder="Enter the Name of certificate holder" required />
                        </div>

                        <div class="form-group">
                            <input type="text" name="txtRole" id="role" class='form-control' placeholder="Enter the Role of certificate holder" required />
                        </div>

                        <div class="form-group">
                            <input type="email" name="txtemail" id="email" class='form-control' placeholder="Enter the Email of certificate holder" required />
                        </div>
                       
                        <div class="form-group">
                            <label>Starting date for Program</label>
                        </div>
                        <div class="form-group">
                            <input type="date" name="txtStartdate" id="startDate" class='form-control' required/>
                        </div>
                        <div class="form-group">
                            <label>End date for Program</label>
                        </div>
                        <div class="form-group">
                            <input type="date" name="txtEnddate" id="endDate" class='form-control' required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtsignedby" id="signedby" class='form-control' placeholder="Signed By" required/>
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary btn-md pull-right" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        function generate() {
        console.log("called");
        var length = 10;
        var cno = document.getElementById("cno");
        const characters = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9,'a','b','c','d','e','f'];
	    const generated = Array.from({ length }, () => {
        const randomIndex = Math.floor(Math.random() * characters.length);
		    return characters[randomIndex];
	    });
        cno.textContent += generated.join('');
    }
    </script>

</body>

</html>