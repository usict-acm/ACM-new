<?php
// Include config file
// require_once "../blogAdmin/database.php";
?>
<?php
// Include config file
require_once "config.php";
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
        #addBtn{
            margin-left:165px; 
        }
        #dropDown{
            /* margin-left:20px;  */
            /* float:left; */
        }
        #required{
            position: relative;
            top: -54px;
            left: 550px;
        }
        .alignment123{
            position:relative;
            right:300px;
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

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"></div>
                <p>Please fill this form and submit to create the FORM.</p>
                    <form id="googleForm"  method="POST" enctype="multipart/form-data">
                        <div class="">
                            <input type="text" name="formNameMain" id="formNameMain"  class='form-control' placeholder="Enter the Name of Form" />
                        </div>
                        <br>
                        <div >
                            <div id="container">
                            <div class="form-group">
                                <input type="text" id="fieldName" class='form-control alignment123 titleField' name="fieldName[]" placeholder="Enter Field Name" />
                                <div class="alignment2">
                                    <label>Choose Answer Type:</label>
                                    <select  id="dropDown" name="dropDown[]" name="cars" id="cars">
                                        <option value="">Select an Option</option>
                                        <option value="checkbox">Checkbox</option>
                                        <option value="textarea">Textarea</option>
                                    </select>
                                </div>
                                <div id="required">
                                    <label > Required?</label>
                                    <input type="checkbox" id="required1" name="required1[]"  />
                                </div>
                            </div>
                            </div>
                            <a  id="addBtn" class=" repeatBtn btn btn-primary" >Add More Field?</a>

                        </div>
                        <hr>
                        <button id="submitForm" class="btn btn-primary" type="submit"  name="submit" value="submit">Submit</button>
                        <a href="../index.php" class="btn btn-default">Cancel</a>

                    </form>
                    <p id="pText"></p>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">

        var html=`          <div>
                            <div class="form-group">
                                <input type="text" name="fieldName[]" id="childFieldName" class='form-control alignment123 titleField' placeholder="Enter Field Name" />
                                <div class="alignment2">
                                    <label>Choose Answer Type:</label>
                                    <select   id="dropDown"  name="dropDown[]" name="cars" id="cars">
                                        <option value="">Select an Option</option>
                                        <option value="checkbox">Checkbox</option>
                                        <option value="textarea">Textarea</option>
                                    </select>
                                </div>
                                <div id="required">
                                <label > Required?</label>
                                <input type="checkbox" id="required1" name="required1[]" value="true" />
                                </div>
                            </div>
                            </div>`;

                    $(document).ready(function(e){
                        $("#addBtn").click(function(e){
                            $("#container").append(html);
                        })
                    });

</script>

<?php
    include_once '../blogAdmin/database.php';
    include_once '../blogAdmin/forms.php';

    if(isset($_POST['submit'])){
        $result=array();
        array_push($result,$_POST["formNameMain"]);
        $fieldName= $_POST['fieldName'];
        $dropDown= $_POST['dropDown'];
        $required1=$_POST['required1'];

        for($i=0;$i<sizeof($fieldName);$i++){
            $subArr=array();
            array_push($subArr,$fieldName[$i]);
            array_push($subArr,$dropDown[$i]);
            array_push($subArr,$required1[$i]);
            array_push($result,$subArr);
        }

        $database = new Database();
        $db = $database->connect();

        $form = new Form($db);
        $name = $result[0];

        $value = explode(" ",$name);
        $val = join("_",$value);

        $request = array();
        array_push($request,$val);

        for($i = 1; $i < sizeof($result); $i++){
            $field_array = array();
            array_push($field_array,$result[$i][0]);
            array_push($field_array,$result[$i][1]);
            array_push($request,$field_array);
        }

        $form->saveFormInFormsTable($name);
        $form->saveFormFields($name,$request);
        $result = $form->createResponseTable($request);
        echo "<script>window.location.replace('http://localhost/ACM-new/admin/adminPanel/index.php?table=formCreation')</script>";

        
    }
?>
</body>
</html>