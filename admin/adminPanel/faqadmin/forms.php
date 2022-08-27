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

        #addBtn {
            margin-left: 165px;
        }

        #lastThree {
            position: relative;
            top: -40px;
        }

        #required {
            position: relative;
            top: -54px;
            left: 550px;
        }

        #container {
            position: relative;
            top: 5px;
        }

        .alignment123 {
            position: relative;
            right: 300px;
            top: -10px;
        }

        .alignment2 {
            position: relative;
            left: 220px;
            top: -27px;
        }

        .topCheck {
            position: relative;
            top: -55px;
            right: 290px;
        }

        .topCheck2 {
            position: relative;
            top: -55px;
            right: 290px;
        }

        .topPlus {
            position: relative;
            top: -60px;
            right: 290px;
        }

        .plus {
            position: relative;
            top: -55px;
            right: 300px;
        }

        header a,
        header a:hover {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<script>
    // $("#required1").attr("checked", false);
    // document.getElementById("required1").checked = false;


    function check() {

    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"></div>
                    <p>Please fill this form and submit to create the FORM.</p>
                    <form id="googleForm" method="POST" enctype="multipart/form-data">
                        <div class="">
                            <input type="text" name="formNameMain" id="formNameMain" class='form-control' placeholder="Enter the Name of Form" required />
                        </div>
                        <br>
                        <div>
                            <div id="container">
                                <input type="text" id="fieldName" class='form-control alignment123 titleField reqField0' name="fieldName[]" placeholder="Enter Field Name" required />
                                <div class="alignment2">
                                    <label>Choose Answer Type:</label>
                                    <select id="dropDown" class="classDD0" name="dropDown[]" onchange="changeDD(0)" name="cars" required>
                                        <option value="noVal">Select an Option</option>
                                        <option value="checkbox">Checkbox</option>
                                        <option value="shortAns">Short answer</option>
                                        <option value="paraAns">Paragraph</option>
                                        <option value="radioAns">Radio Btns</option>
                                        <option value="fileAns">File</option>
                                    </select>
                                </div>
                                <div id="required">
                                    <label> Required?</label>
                                    <input onChange="check();" type="radio" name="required0" value="on" required />
                                    <label>NOT Required?</label>
                                    <input onChange="check();" type="radio" name="required0" value="off" />
                                </div>
                                <div id="field0" class="form-group">
                                </div>
                            </div>
                            <div id="lastThree">
                                <div id="f0" class="form-group">
                                </div>
                                <a id="addBtn" class=" repeatBtn btn btn-primary">Add More Field?</a>
                            </div>
                            <hr>
                            <button id="submitForm" class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
                            <a href="../index.php" class="btn btn-default">Cancel</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        let count = 0;
        let ok = 0;
        let checkFilledFieldName = 0;
        let once = 1;
        let flagradio = 0;
        let flagcheck = 0;


        function changeDD(count) {
            ok = 1;
            let prevCheckbox = `  <div class="col-xs-7">
                        <input type="text" id="checkboxInput` + count + `" name="checkboxInput` + count + `[]" class="form-control topCheck topCheck1 " name="" placeholder="Fill only if checkbox is selected" required/>
                        </div>
                        <a id="plusBtn` + count + `" class=" btn btn-primary plus topPlus " onclick="myFunc(` + count +`)">+</a>
                        <a id="minusBtn` + count + `" class=" btn btn-danger plus topPlus " onclick="myFunccheckboxremove(` + count + `)">-</a>`;
                       
                        
            let prevRadioInput = `  <div class="col-xs-7">
                            <input type="text" id="radioBtn` + count + `" name="radioBtn` + count + `[]" class="form-control topCheck topCheck1 " name="" placeholder="radioBtn Value" required/>
                        </div>
                        <a id="plusBtn` + count + `" class=" btn btn-primary plus topPlus " onclick="myFuncRadio(` + count + `)">+</a>
                        <a id="minusBtn` + count + `" class=" btn btn-danger plus topPlus " onclick="myFuncremove(` + count + `)">-</a>`;
                        
            let checkFormNameFilled = document.querySelector('#formNameMain').value.length;
            let temp = document.querySelector(".reqField" + count).value.length;
            // var eva = document.getElementById("dropDown");
            var eva = document.querySelector(".classDD" + count);
            

            var strUser = eva.value;
            if (strUser === "radioAns") {
                jQuery('#field' + count).html('');
                $("#field" + count).append(prevRadioInput);

                if (checkFormNameFilled != 0 && temp != 0) {
                    once = 1;
                    jQuery('#f0').html('');
                }

            }
            if (strUser === "checkbox") {
                jQuery('#field' + count).html('');
                $("#field" + count).append(prevCheckbox);

                if (checkFormNameFilled != 0 && temp != 0) {
                    once = 1;
                    jQuery('#f0').html('');
                }
            }
            if (strUser === "shortAns") {
                jQuery('#field' + count).html('');

                if (checkFormNameFilled != 0 && temp != 0) {
                    once = 1;
                    jQuery('#f0').html('');
                }

            }
            if (strUser === "paraAns") {
                jQuery('#field' + count).html('');

                if (checkFormNameFilled != 0 && temp != 0) {
                    once = 1;
                    jQuery('#f0').html('');
                }

            }
            if (strUser === "fileAns") {
                jQuery('#field' + count).html('');

                if (checkFormNameFilled != 0 && temp != 0) {
                    once = 1;
                    jQuery('#f0').html('');
                }

            }
            if (strUser === "noVal") {
                once == 1;
                ok = 0;
                jQuery('#field' + count).html('');
                checkRequiredFields();
            }


        }

        function checkRequiredFields() {
            let warnHTML = `Please fill ->  &nbsp &nbsp;   Field Name , drop Down , Form Name <br> `;
            if (once === 1) {
                $("#f0").append(warnHTML);
                once++;
            }
        };



        function myFunc(count ) {
            let checkboxHTML = ` 
                                            <div class="form-group">
                                                <div class="col-xs-7">
                                                    <input type="text" id="checkboxInput` + count + `" name="checkboxInput` + count + `[]" class='form-control topCheck topCheck2 'name="" placeholder="Fill only if checkbox is selected" required/>
                                                </div>
                                        `;
            $("#field" + count).append(checkboxHTML);
            flagcheck = flagcheck+1
        }

        function myFuncRadio(count) {
            let RadioBtnHTML = ` 
                                        <div class="col-xs-7">
                                                <input type="text" id="radioBtn` + count + `" name="radioBtn` + count + `[]" class="form-control topCheck topCheck1 " name="" placeholder="radioBtn Value" required/>
                                        </div>
                                        `;

            $("#field" + count).append(RadioBtnHTML);
            flagradio = flagradio+1
        }
        function myFunccheckboxremove(count){
            if(flagcheck>=1){
            $("#field" + count).children().last().remove();
            flagcheck = flagcheck-1;
            }
            else{
                //alert("no value to remove");
                swal("No value to remove");
            }
        }

        function myFuncremove(count) {
            
            // $("#field" + count).pop();
            if(flagradio>=1){
            $("#field" + count).children().last().remove();
            flagradio = flagradio-1;
            }
            else{
                swal("No value to remove");
            }
        }

        $(document).ready(function(e) {
            $("#addBtn").click(function(e) {

                let checkFormNameFilled = document.querySelector('#formNameMain').value.length;
                let temp = document.querySelector(".reqField" + count).value.length;

                if (ok == 1 && temp != 0 && checkFormNameFilled != 0) {
                    once = 1;
                    count = count + 1;
                    var html = `<div>
                                       
                                            <input type="text" name="fieldName[]" id="childFieldName" class='form-control alignment123 titleField reqField` + count + `' placeholder="Enter Field Name" required/>
                                            <div class="alignment2">
                                                <label>Choose Answer Type:</label>
                                                <select   id="dropDown"  name="dropDown[]" class="classDD` + count + `" name="cars"  onchange="changeDD(` + count + `)" required>
                                                    <option value="noVal">Select an Option</option>
                                                    <option value="checkbox">checkbox</option>
                                                    <option value="shortAns">Short answer</option>
                                                    <option value="paraAns">Paragraph</option>
                                                    <option value="radioAns">Radio Btns</option>
                                                    <option value="fileAns">File</option>
                                                </select>
                                            </div>
                                            <div id="required">
                                            <label > Required?</label>
                                            <input onChange="check();" type="radio"  name="required` + count + `" value="on" required/>
                                            <label >NOT Required?</label>
                                            <input onChange="check();" type="radio"  name="required` + count + `" value="off"/>
                                            </div>
                                            <div id="field` + count + `" class="form-group">
                                        </div>
                                        </div>`;
                    $("#container").append(html);
                    ok = 0;
                    jQuery('#f0').html('');
                } else {
                    checkRequiredFields();
                }

            });
        });
    </script>
    <?php
    // require_once "./config.php";
    include_once '../blogAdmin/forms.php';
    include_once '../blogAdmin/database.php';

    if (isset($_POST['submit'])) {
        $result = array();
        array_push($result, $_POST["formNameMain"]);
        $fieldName = $_POST['fieldName'];
        $dropDown = $_POST['dropDown'];


        // print_r( $fieldName); 
        // print_r( $dropDown); 
        // print_r( $required); 
        // echo gettype($required);
        // if(isset($_POST["required1"])){
        //     $required1 = true;
        // } else {
        //     $required1 = false;
        // }
        // print_r($required);
        for ($i = 0; $i < sizeof($fieldName); $i++) {
            $val = "checkboxInput" . $i;
            $valRadio = "radioBtn" . $i;
            $subArr = array();
            array_push($subArr, $fieldName[$i]);
            array_push($subArr, $dropDown[$i]);
            // array_push($subArr,$required1[$i]);
            $requiredName = "required" . $i;
            $required = $_POST[$requiredName];
            if ($required == "on") {
                array_push($subArr, 1);
            } else {
                array_push($subArr, 0);
            }

            if (isset($_POST[$val])) {
                $checkboxInput = $_POST[$val];
                array_push($subArr, $checkboxInput);
            }
            if ($_POST[$valRadio]) {
                $radioBtn = $_POST[$valRadio];
                array_push($subArr, $radioBtn);
            }

            array_push($result, $subArr);
        }
        print_r($result);
        $database = new Database();
        $db = $database->connect();

        $form = new Form($db);
        $name = $result[0];

        $value = explode(" ", $name);
        $val = join("_", $value);

        $request = array();
        array_push($request, $val);

        for ($i = 1; $i < sizeof($result); $i++) {
            $field_array = array();
            array_push($field_array, $result[$i][0]);
            array_push($field_array, $result[$i][1]);
            array_push($field_array, $result[$i][2]);
            if ($result[$i][3]) {
                array_push($field_array, $result[$i][3]);
            }
            array_push($request, $field_array);
        }
        print_r($request);
        $form->saveFormInFormsTable($name, $request);
        $result = $form->createResponseTable($request);
        echo "<script>window.location.replace('./index.php?table=formCreation')</script>";
    }
    ?>
</body>

</html>