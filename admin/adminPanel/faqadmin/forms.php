<?php
// Include config file
require_once "../blogAdmin/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://cdn.tiny.cloud/1/mksotb5qwcfqike273vpegiuc1l37f1gkd7eansyq3mve8kz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
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
        #btn-addField{
            margin-left:165px; 
        }
        #dropDown{
            /* margin-left:20px;  */
            /* float:left; */
        }
        .alignment123{
            position:relative;
            right:80px;
        }
        .alignment2{
            position:relative;
            left:220px;
            top:-27px;
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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                <p>Please fill this form and submit to create the FORM.</p>
                <!-- <hr> -->
                    <form action="../../blogAdmin/api.php?q=postblog" method="POST" enctype="multipart/form-data">
                        <div class="">
                            <input type="text" name="title"  class='form-control' placeholder="Enter the Name of Form" />
                        </div>
                    </div>
                        
                   <br>






                    <div >
                        <table>
                            <td>
                                <div class="form-group">
                                    <input type="text"  class='form-control alignment123 titleField' placeholder="Enter Field Name" />
                                    <div class="alignment2">
                                        <label  id="dropDown" for="cars">Choose Answer Type:</label>
                                        <select name="cars" id="cars">
                                            <option value="">Select an Option</option>
                                            <option value="checkbox">Checkbox</option>
                                            <option value="textarea">Textarea</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </table>
                        <!-- <button  id="btn-addField" class=" repeatBtn btn btn-primary" onclick="document.getElementById('title').value = ''">Add More Field?</button> -->
                        <button  id="btn-addField" class=" repeatBtn btn btn-primary" >Add More Field?</button>

                    </div>
                    
                    <hr>
                       

                        <input class="btn btn-primary" type="submit" name="submit" value="submit" />
                        <a href="../index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>

    $(function () {
        $(".repeatBtn").on('click', function (e) {
            
            e.preventDefault();
            
            var $self = $(this);
            $self.before($self.prev('table').clone());
           
            // document.querySelector('.titleField').value = "";
            // $self.remove();

        });
    });
    // document.getElementById("btn-addField").addEventListener("click", function(e) {
    //     e.preventDefault();
    //     var $self = $(this);
    // document.getElementById("titleField").value = "";
    // });

</script>
</body>


</html>