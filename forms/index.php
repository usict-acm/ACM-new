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
  <style>
    textarea::placeholder {
      font-size: 18px;
      padding-top: 20px;
      padding-left: 5px;
    }
  </style>
</head>

<body>
  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form">
        <div id="formPage"></div>
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