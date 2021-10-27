
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
    </style>
</head>



<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    function submit_announcements(){
    var formData = new FormData();
    formData.append('name',  $("#name").val());
    formData.append('description', $("#description").val());
    formData.append('startDate', $("#startDate").val());
    formData.append('endDate', $("#endDate").val());
    formData.append('button1Text',$("#button1Text").val());
    formData.append('button1Link',$("#button1Link").val());
    formData.append('button2Text',$("#button2Text").val());
    formData.append('button2Link',$("#button2Link").val());
    formData.append('viewResource', $("#viewResource").val());
    formData.append('partners', $("#partners").val());
    formData.append('speakers', $("#speakers").val());
    formData.append('poster', $("#poster").prop("files")[0]);
    formData.append('year', $("#year").val());
    formData.append('time', $('#time').val());

    $.ajax({
        type: "POST",
        url: "../../blogAdmin/api.php/?q=postAnnouncement",
        data : formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function(data){
            alert(data.message);
            window.location.reload();
        },
        error: function(xhr, status, error){
            alert("Fill in the details");
        },
    });
    }

    </script>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Announcements</h2>
                    </div>
                    <p>Please fill in the form to add announcement.</p>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="txtTitle" id="name" class='form-control' placeholder="Enter the title of the announcement" />
                        </div>
                        <div class="form-group">
                            <textarea name="txtDescription" id="description" rows="10" class='form-control mceEditor' placeholder="Description of the announcement"></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <input type="text" name="txtReglink" id="regLink" class='form-control' placeholder="RegLink" />
                        </div> -->
                        <div class="form-group">
                            <label>Date for commencement of the event</label>
                        </div>
                        <div class="form-group">
                            <input type="date" name="txtStartdate" id="startDate" class='form-control' placeholder="Date for commencement of the event" />
                        </div>
                        <div class="form-group">
                            <label>Date for end of the event</label>
                        </div>
                        <div class="form-group">
                            <input type="date" name="txtEnddate" id="endDate" class='form-control' placeholder="Date for end of the event" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtButton1Text" id="button1Text" class='form-control' placeholder="Button1 Text" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtButton1Link" id="button1Link" class='form-control' placeholder="Button1 Link" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtButton2Text" id="button2Text" class='form-control' placeholder="Button2 Text" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtButton2Link" id="button2Link" class='form-control' placeholder="Button2 Link" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPartners" id="partners" class='form-control' placeholder="Partners" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtSpeakers" id="speakers" class='form-control' placeholder="Speakers of the event" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtYear" id="year" class='form-control' placeholder="Year" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtTime" id="time" class='form-control' placeholder="Time" />
                        </div>
                        <div class="form-group">
                            <label>Upload the Poster</label>
                        </div>
                        <input class="form-group" type="file" name="file" id="poster" />

                        <input type="button" name="submit" value="submit" onclick="submit_announcements()">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>