<!DOCTYPE html>
<html lang="en">

<head>

  
  <title>Form</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.png" />
  <!--===============================================================================================-->

  <!--===============================================================================================-->

  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <!--===============================================================================================-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    textarea::placeholder {
      font-size: 18px;
      padding-top: 20px;
      padding-left: 5px;
    }
  </style>
</head>

<body>
        <div id="formPage">
        <div class="registration-form">
        <form>
            <span> <h5 class = "contact100-form-title">ACM FORM<h5></span>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="birth-date" placeholder="Birth Date">
            </div>
            <div class= "form-group">
            <p>Please select your favorite Web language:*</p>
                <input type="radio" id="html" name="fav_language" value="HTML" required>
                 <label for="html">HTML</label><br>
                 <input type="radio" id="css" name="fav_language" value="CSS">
                  <label for="css">CSS</label><br>
                   <input type="radio" id="javascript" name="fav_language" value="JavaScript">
               <label for="javascript">JavaScript</label>
                </div>
                <div class = "form-group">
                  <p>Checkbox:</p>
                  <input type="checkbox" id="Checkbox1" name="Checkbox1" value="Checkbox1" class="checkbox">
                  <label for="vehicle1">Check box 1</label><br>
                  <input type="checkbox" id="Checkbox2" name="Checkbox2" value="Checkbox2" class="checkbox">
                  <label for="vehicle2">Check box 2</label><br>
                  <input type="checkbox" id="Checkbox3" name="Checkbox3" value="Checkbox3" class="checkbox">
                  <label for="vehicle3">Check box 3</label>
                </div>
                <div class = "form-group">
                  <label for="myfile">Select a file:</label><br/>
                  <input type="file" id="myfile" name="myfile" class="button"><br>
                </div>
            <div class="form-group">
                <button type="button" class="btn btn-block create-account">Submit</button>
            </div>
        </form>
  </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <?php $Id = $_GET["Id"]; ?>

  <script>

  </script>

  <script>
    // $(document).ready(function () {
    let url = '../admin/blogAdmin/api.php/?q=fields&Id=' + '<?php echo $Id ?>';
    let divTag = document.getElementById("formPage");

    $.ajax({
      url: url,
      method: "GET",
      dataType: "JSON",
      success: function(data) {
        console.log("check data ", data);
        divTag.innerHTML += `<span id="formTitle" class="contact100-form-title">
                    ${data[0].formName}
                </span>`;
        for (let i = 0; i < data.length; i++) {
          if (data[i].fieldType == "shortAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class="wrap-input100  validate-input">
                                        <input id="field${i}" class="input100 input-group" type="text" required placeholder="${data[i].fieldName} *" /> 
                                        </div>`;
            } else {
              divTag.innerHTML += `<div class="wrap-input100  validate-input">
                                      <input id="field${i}" class="input100 input-group" type="text" required placeholder="${data[i].fieldName}" /> 
                                      </div>`;
            }
          } else if (data[i].fieldType == "paraAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                    <p style="color:red;">This field is required</pThis>
                                    </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class="wrap-input100  validate-input">
                                      <textarea id="field${i}" class="input100 input-group" rows="4" cols="50" type="text" required placeholder="${data[i].fieldName} *" ></textarea> 
                                      </div>`;
            } else {
              divTag.innerHTML += `<div class="wrap-input100  validate-input">
                                        <textarea id="field${i}" class="input100 input-group" rows="4" cols="50" type="text" required placeholder="${data[i].fieldName}" ></textarea> 
                                        </div>`;
            }
          } else if (data[i].fieldType == "checkbox") {
            var nameArr = (data[i].ifCheckbox).split(',');
            divTag.innerHTML += `<div class="fieldCheckCheckbox" id="fieldRequiredCheck${i}" style=display:none;>
                                    <p style="color:red;">This field is required</p>
                                    </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div id="field${i}" class="checkboxDiv"><label class="checkboxLabel">${data[i].fieldName} *</label>`;
            } else {
              divTag.innerHTML += `<div id="field${i}" class="checkboxDiv"><label class="checkboxLabel">${data[i].fieldName}</label>`;
            }
            for (let j = 0; j < nameArr.length; j++) {
              divTag.innerHTML += `<input id="field${i}${j}" type="checkbox" class="checkboxDesign" style="
    margin-top: 5px;" value="${nameArr[j]}">
                                        <label class="checkboxName"> ${nameArr[j]} </label><br>`;
            }
            divTag.innerHTML += `</div>`;
          }
        }
        divTag.innerHTML += `<div class="container-contact100-form-btn bold height">
                    <input type="button"  class="contact100-form-btn btn-1" id="buttonSubmit" name="submit" value="Submit">                    
                </div>`;

        document.getElementById("buttonSubmit").addEventListener("click", function() {
          var res = [];
          res.push(data[0].formName);
          var temp = 1;
          for (let i = 0; i < data.length; i++) {
            var tableData = [];

            if (data[i].fieldType == "checkbox") {
              var checkboxArray = [];
              var count = 0;
              tableData.push(data[i].fieldName);
              var temp1 = [];
              var arr = (data[i].ifCheckbox).split(',');
              console.log(arr.length)
              for (j = 0; j < arr.length; j++) {
                var field = "field" + i + j;
                if ($(`#${field}`).is(':checked')) {
                  temp1.push($(`#${field}`).val())
                } else {
                  count++;
                }
              }
              var fieldRequired = "fieldRequiredCheck" + i;
              if (count == arr.length && data[i].required == 1) {
                $(`#${fieldRequired}`).css('display', 'block');
                setTimeout(function() {
                  $(".fieldCheckCheckbox").css('display', 'none');
                }, 4000);
                temp = 0;
              } else {
                let text = temp1.join(",");
                // checkboxArray.push(text);
                tableData.push(text);
              }
            } else {
              tableData.push(data[i].fieldName);
              var field = "field" + i;
              var fieldRequired = "fieldRequired" + i;
              if ($(`#${field}`).val() == "" && data[i].required == 1) {
                $(`#${fieldRequired}`).css('display', 'block');
                setTimeout(function() {
                  $(".fieldCheck").css('display', 'none');
                }, 4000);
                temp = 0;
              }
              tableData.push($(`#${field}`).val());
            }
            res.push(tableData);
          }

          console.log(res)
          console.log("temp", temp);
          if (temp == 1) {
            $.ajax({
              type: "POST",
              url: "../admin/blogAdmin/api.php/?q=dataForm",
              data: {
                text1: JSON.stringify(res)
              },
              success: function(data) {
                window.location.replace('./thankYou/index.php')
              },
              error: function(xhr, status, error) {
                window.location.replace('./thankYou/index.php')
              },
            });
          }
                 
        });

      },
    });
    // });
  </script>


</body>



</html>