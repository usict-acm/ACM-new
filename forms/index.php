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

  <div class="registration-form">
    <div></div>
    <form id="formPage"></form>

  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <?php $Id = $_GET["Id"]; ?>



  <script>
    let i1 = 0;
    // $(document).ready(function () {
    let url = '../admin/blogAdmin/api.php/?q=fields&Id=' + '<?php echo $Id ?>';
    let divTag = document.getElementById("formPage");

    $.ajax({
      url: url,
      method: "GET",
      dataType: "JSON",
      success: function(data) {
        console.log("check data ", data);
        // divTag.innerHTML += `    `;

        divTag.innerHTML += ` <span> <h5 id="formTitle" class = "contact100-form-title">${data[0].formName}<h5></span>`;
        for (let i = 0; i < data.length; i++) {
          console.log(data[i].fieldType);
          if (data[i].fieldType == "shortAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class="form-group">
                <input type="text" class="form-control item" id="field${i}" placeholder="${data[i].fieldName} *" required>
            </div>`;
            } else {
              divTag.innerHTML += `<div class="form-group">
                <input type="text" class="form-control item" id="field${i}" placeholder="${data[i].fieldName}" >
            </div>`;
            }
          } else if (data[i].fieldType == "paraAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                    <p style="color:red;">This field is required</pThis>
                                    </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class="form-group">
                <textarea type="text" class="form-control item" id="field${i}"  placeholder="${data[i].fieldName} *" rows="3" required></textarea>
            </div>`;
            } else {
              divTag.innerHTML += `<div class="form-group">
                <textarea type="text" class="form-control item" id="field${i}"  placeholder="${data[i].fieldName} " rows="3"></textarea>
            </div>`;
            }
          } else if (data[i].fieldType == "fileAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class = "form-group">
                                      <label for="myfile">Select a file:</label><br/>
                                      <input type="file" id="field${i}" name="myfile" class="button" required><br>
                                    </div>`;
            } else {
              divTag.innerHTML += `<div class = "form-group">
                                      <label for="myfile">Select a file:</label><br/>
                                      <input type="file" id="field${i}" name="myfile" class="button"><br>
                                    </div>`;
            }
          } else if (data[i].fieldType == "passAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class="form-group">
                <input type="password" class="form-control item" id="field${i}" placeholder="Password" required>
            </div>`;
            } else {
              divTag.innerHTML += `<div class="form-group">
                <input type="password" class="form-control item" id="field${i}" placeholder="Password" required>
            </div>`;
            }
          } else if (data[i].fieldType == "emailAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class="form-group">
                                          <input type="text" class="form-control item" id="field${i}"placeholder="Email">
                                      </div>`;
            } else {
              divTag.innerHTML += `<div class="form-group">
                                          <input type="text" class="form-control item" id="field${i}"placeholder="Email">
                                      </div>`;
            }
          } else if (data[i].fieldType == "onlyNumAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class="form-group">
                                      <input type="text" class="form-control item" id="field${i}" placeholder="Phone Number">
                                  </div>`;
            } else {
              divTag.innerHTML += `<div class="form-group">
                                      <input type="text" class="form-control item" id="field${i}" placeholder="Phone Number">
                                  </div>`;
            }
          } else if (data[i].fieldType == "DOBAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class="form-group">
                                      <input type="text" class="form-control item" id="field${i}" placeholder="Birth Date">
                                  </div>`;
            } else {
              divTag.innerHTML += `<div class="form-group">
                                      <input type="text" class="form-control item" id="field${i}" placeholder="Birth Date">
                                  </div>`;
            }
          } else if (data[i].fieldType == "checkbox") {
            var nameArr = (data[i].ifCheckbox).split(',');
            divTag.innerHTML += `<div class="fieldCheckCheckbox" id="fieldRequiredCheck${i}" style=display:none;>
                                    <p style="color:red;">This field is required</p>
                                    </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class = "form-group checkboxDiv" id="field${i}"  style="margin-bottom:0px;"><p class="checkboxLabel" style="margin-bottom:0px;">${data[i].fieldName} *</p>`;
            } else {
              divTag.innerHTML += `<div class = "form-group checkboxDiv" id="field${i}"  style="margin-bottom:0px;"><p class="checkboxLabel"  style="margin-bottom:0px;">${data[i].fieldName} </p>`;
            }
            for (let j = 0; j < nameArr.length - 1; j++) {
              divTag.innerHTML += `<input type="checkbox" id="field${i}${j}"  name="Checkbox1" value="${nameArr[j]}" class="checkbox checkboxDesign">
                  <label for="vehicle1" class="checkboxName">${nameArr[j]} </label><br> `;
            }

            divTag.innerHTML += `<input type="checkbox" id="field${i}${nameArr.length-1}"  name="Checkbox1" value="${nameArr[nameArr.length-1]}" class="checkbox">
                  <label for="vehicle1" class="checkboxName">${nameArr[nameArr.length-1]} </label><br><br> `;

            divTag.innerHTML += `</div>`;
          } else if (data[i].fieldType == "radioAns") {
            var nameArr = (data[i].ifRadio).split(',');

            console.log(nameArr);
            divTag.innerHTML += `<div class="fieldCheckRadio" id="fieldRequiredRadio${i}" style=display:none;>
                                    <p style="color:red;">This field is required</p>
                                    </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `<div id="field${i}" class= "form-group  checkboxDiv" style="margin-bottom:0px;"><p style="margin-bottom:0px;" class="checkboxLabel">${data[i].fieldName} *</p> `;

            } else {
              divTag.innerHTML += `<div id="field${i}" class= "form-group  checkboxDiv" style="margin-bottom:0px;"><p style="margin-bottom:0px;" class="checkboxLabel">${data[i].fieldName} </p> `;

            }

            for (let j = 0; j < nameArr.length; j++) {

              if (j === 0) {
                divTag.innerHTML += `<form>`;
              }
              divTag.innerHTML += ` 
              <input type="radio" id="field${i}${j}" name="radioButton${i1}" value="${nameArr[j]}">
                    <label for="field${i}${j}">${nameArr[j]} </label><br>`;
              if (j === nameArr.length - 1) {
                divTag.innerHTML += `</form>`;
              }
            }
            i1++;
            divTag.innerHTML += `</div>`;
          }
        }
        divTag.innerHTML += `<div class="form-group">
                <input type="button" class="btn btn-block create-account" id="buttonSubmit" name="submit" value="Submit"/>
            </div>`;


        // divTag.innerHTML += ` </form>`;

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
            } else if (data[i].fieldType == "radioAns") {
              var checkboxArray = [];
              var count = 0;
              tableData.push(data[i].fieldName);
              var temp1 = [];
              var arr = (data[i].ifRadio).split(',');
              console.log(arr.length)
              console.log(arr)
              for (j = 0; j < arr.length; j++) {
                var field = "field" + i + j;
                if ($(`#${field}`).is(':checked')) {
                  temp1.push($(`#${field}`).val())
                } else {
                  count++;
                }
              }
              var fieldRequired = "fieldRequiredRadio" + i;
              if (count == arr.length && data[i].required == 1) {
                $(`#${fieldRequired}`).css('display', 'block');
                setTimeout(function() {
                  $(".fieldCheckRadio").css('display', 'none');
                }, 4000);
                temp = 0;
              } else {
                let text = temp1.join(",");
                // checkboxArray.push(text);
                tableData.push(text);
              }
            } else if (data[i].fieldType == "fileAns") {
              tableData.push(data[i].fieldName)
              console.log(data[i])
              var formData = new FormData();
              var field = "field" + i;
              var fieldRequired = "fieldRequired" + i;
              var filerequired = $(`#${fieldRequired}`).get(0).files;
              // var file = $(`#${field}`).get(0).files;
              // console.log(file[0]);
              var input = document.getElementById("field"+i);
              file = input.files[0];
              formData.append("file", file);
              formData.append("id", data[i].formID);
              if ($(`#${field}`).val() == "" && data[i].required == 1) {
                $(`#${fieldRequired}`).css('display', 'block');
                setTimeout(function() {
                  $(".fieldCheck").css('display', 'none');
                }, 4000);
                temp = 0;
              }
              if($(`#${field}`).val() != ""){
              tableData.push((`./forms/responsesfile/${data[i].formID}_${file.name}`));
              $.ajax({
                type: "POST",
                url: "../admin/blogAdmin/api.php/?q=fileupload",
                data: formData,
                processData: false,
                cache: false,
                contentType: false,
              })
              }

              // $file = isset($_FILES["fieldRequired"+$i]) ? $_FILES[`#${fieldRequired}`] : false;
              //   if ($file) {
              //     $filename = $file['name'];
              //     $filetemppath = $file['tmp_name'];
              //     $destinationfile = './responsesfile/' . $filename;
              //     $uploadLocation = '../resonsesfile/' . $filename;
              //     move_uploaded_file($filetemppath, $uploadLocation);
              //   }
              // var checkboxArray = [];
              // var count = 0;
              // tableData.push(data[i].fieldName);
              // var temp1 = [];
              // var arr = (data[i].ifRadio).split(',');
              // console.log(arr.length)
              // for (j = 0; j < arr.length; j++) {
              //   var field = "field" + i + j;
              //   if ($(`#${field}`).is(':checked')) {
              //     temp1.push($(`#${field}`).val())
              //   } else {
              //     count++;
              //   }
              // }
              // var fieldRequired = "fieldRequiredRadio" + i;
              // if (count == arr.length && data[i].required == 1) {
              //   $(`#${fieldRequired}`).css('display', 'block');
              //   setTimeout(function() {
              //     $(".fieldCheckRadio").css('display', 'none');
              //   }, 4000);
              //   temp = 0;
              // } else {
              //   let text = temp1.join(",");
              //   // checkboxArray.push(text);
              //   tableData.push(text);
              // }
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

          console.log(res);
          console.log("temp", temp);
          if (temp == 1) {
            console.log(res);
            console.log("temp", temp);
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