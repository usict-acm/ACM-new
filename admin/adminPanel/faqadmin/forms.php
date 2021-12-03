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
        #lastThree{
            position:relative;
            top:-40px;
        }
        #required{
            position: relative;
            top: -54px;
            left: 550px;
        }
        #container{
            position: relative;
            top: 5px;
        }
        .alignment123{
            position:relative;
            right:300px;
            top:-10px;
        }
        .alignment2{
            position:relative;
            left:220px;
            top:-27px;
        }
        .topCheck{
            position: relative;
            top:-55px;
            right:290px;
        }
        .topCheck2{
            position: relative;
            top:-55px;
            right:290px;
        }
        .topPlus{
            position: relative;
            top:-60px;
            right:290px;
        }
        .plus{
            position: relative;
            top:-55px;
            right:300px;
        }

        header a,
        header a:hover {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<script>

   function check(){
        console.log($('#required1').is(':checked'))

    }
</script>

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
                                
                                    <input type="text" id="fieldName" class='form-control alignment123 titleField' name="fieldName[]" placeholder="Enter Field Name" />
                                    <div class="alignment2">
                                        <label>Choose Answer Type:</label>
                                        <select  id="dropDown" class="classDD0"  name="dropDown[]" onchange="changeDD(0)" name="cars" >
                                            <option value="">Select an Option</option>
                                            <option value="checkbox" >Checkbox</option>
                                            <option value="shortAns">Short answer</option>
                                            <option value="paraAns">Paragraph</option>
                                        </select>
                                    </div>
                                    <div id="required">
                                        <label > Required?</label>
                                        <input onChange="check();" type="checkbox" id="required1" name="required1[]" />                                    
                                    </div>
                                <div id="field0" class="form-group">
                                </div>
                            </div>
                            <div id="lastThree">
                                <a  id="addBtn" class=" repeatBtn btn btn-primary" >Add More Field?</a>
                            </div>
                            <hr>
                            <button id="submitForm" class="btn btn-primary" type="submit"  name="submit" value="submit">Submit</button>
                            <a href="../index.php" class="btn btn-default">Cancel</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
let count=0;

function changeDD(count){
    // console.log(count);
    let prevCheckbox=`  <div class="col-xs-7">
                        <input type="text" id="checkboxInput`+count+`" name="checkboxInput`+count+`[]" class="form-control topCheck topCheck1 checkClass" name="" placeholder="Fill only if checkbox is selected" />
                        </div>
                        <a id="plusBtn`+count+`" class=" btn btn-primary plus topPlus prevplus" onclick="myFunc(`+count+`)">+</a>`;
        // var eva = document.getElementById("dropDown");
        var eva = document.querySelector(".classDD"+count);

        var strUser = eva.value;
        console.log(strUser);
        if(strUser==="checkbox"){
            // console.log(`${#container}`);
            // console.log(document.getElementById('container'));
            $("#field"+count).append(prevCheckbox);
        }
        if(strUser==="shortAns"){
            // var elem = document.getElementById('field'+count);
            // elem.parentNode.removeChild(elem);
            jQuery('#field'+count).html('');
    
        }
        if(strUser==="paraAns"){
            // var elem = document.getElementById('field'+count);
            // elem.parentNode.removeChild(elem);
            jQuery('#field'+count).html('');


        }
}
        
                                
                            
                function myFunc(count){
                    let checkboxHTML=` 
                                            <div class="form-group">
                                                <div class="col-xs-7">
                                                    <input type="text" id="checkboxInput`+count+`" name="checkboxInput`+count+`[]" class='form-control topCheck topCheck2 checkClass'name="" placeholder="Fill only if checkbox is selected" />
                                                </div>
                                        `;
                    $("#field"+count).append(checkboxHTML);
                }
                             

                    $(document).ready(function(e){
                        $("#addBtn").click(function(e){
                            count = count + 1;
                            var html=`<div>
                                       
                                            <input type="text" name="fieldName[]" id="childFieldName" class='form-control alignment123 titleField' placeholder="Enter Field Name" />
                                            <div class="alignment2">
                                                <label>Choose Answer Type:</label>
                                                <select   id="dropDown"  name="dropDown[]" class="classDD`+count+`" name="cars"  onchange="changeDD(`+count+`)" >
                                                    <option value="">Select an Option</option>
                                                    <option value="checkbox">checkbox</option>
                                                    <option value="shortAns">Short answer</option>
                                                    <option value="paraAns">Paragraph</option>
                                                </select>
                                            </div>
                                            <div id="required">
                                            <label > Required?</label>
                                            <input type="checkbox" id="required1" name="required1[]"/>
                                            </div>
                                            <div id="field`+ count +`" class="form-group">
                                        </div>
                                        </div>`;
                            // console.log(count);
                            $("#container").append(html);
                        });
                    });

</script>

<?php
    // require_once "./config.php";
    include_once '../blogAdmin/forms.php';
    include_once "../blogAdmin/database.php";

    if(isset($_POST['submit'])){
        $result=array();
        array_push($result,$_POST["formNameMain"]);
        $fieldName= $_POST['fieldName'];
        $dropDown= $_POST['dropDown'];
        $required=$_POST['required1'];
        // if(isset($_POST["required1"])){
        //     $required1 = true;
        // } else {
        //     $required1 = false;
        // }
        // print_r($required);
        for($i=0;$i<sizeof($fieldName);$i++){
            $val="checkboxInput".$i;
            $subArr=array();
            array_push($subArr,$fieldName[$i]);
            array_push($subArr,$dropDown[$i]);
            // array_push($subArr,$required1[$i]);
            if($required[$i] && $required[$i] == "on"){
                array_push($subArr,1);
            }else{
                array_push($subArr,0);
            }

            if(isset($_POST[$val])){
                $checkboxInput=$_POST[$val];
                array_push($subArr,$checkboxInput);
            }

            array_push($result,$subArr);
        }
        // print_r($result);
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
            array_push($field_array,$result[$i][2]);
            if($result[$i][3]){
                array_push($field_array,$result[$i][3]);
            }
            array_push($request,$field_array);
        }
        // print_r($request);
        $form->saveFormInFormsTable($name,$request);
        $result = $form->createResponseTable($request);
        echo "<script>window.location.replace('./index.php?table=formCreation')</script>";
    }
?>
</body>
</html>
