<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Forms</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="./css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  <link rel="icon" type="image/png" href="images/icons/favicon.png" />


    <meta name="robots" content="noindex, follow" />
  </head>

  <body>
    <div class="container-contact100">
      <div class="wrap-contact100">
        <form class="contact100-form validate-form" id="formPage">



        </form>
      </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/select2.min.js"></script>
    <script>
      $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $("#dropDownSelect1"),
      });
    </script>
  

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

        // divTag.innerHTML += ` <span> <h5 id="formTitle" class = "contact100-form-title">${data[0].formName}<h5></span>`;
        divTag.innerHTML += `<span id="formTitle" class="contact100-form-title"> ${data[0].formName} </span>`;
        for (let i = 0; i < data.length; i++) {
          // console.log(data[i].fieldType);
          if (data[i].fieldType == "shortAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>`;

          //  Short ans type *******************************************************************************          
            if (data[i].required == 1) {
              divTag.innerHTML += ` <div class='wrap-input100 validate-input'>
                                      <span class='label-input100'>Your Name</span>
                                      <input
                                        id="field${i}"
                                        class='input100'
                                        type='text'
                                        name='name'
                                        placeholder="${data[i].fieldName} *"
                                        required
                                      />
                                      <span class='focus-input100'></span>
                                    </div>`;
            } else {
              divTag.innerHTML += ` <div class='wrap-input100 validate-input'>
                                      <span class='label-input100'>Your Name</span>
                                      <input
                                        id="field${i}"
                                        class='input100'
                                        type='text'
                                        name='name'
                                        placeholder="${data[i].fieldName} "
                                      />
                                      <span class='focus-input100'></span>
                                    </div>`;
            }
          }


          //  Long ans type *******************************************************************************
          else if (data[i].fieldType == "paraAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                    <p style="color:red;">This field is required</pThis>
                                    </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `          <div class="wrap-input100 validate-input" >
                                              <span class="label-input100">Message</span>
                                              <textarea
                                                class="input100"
                                                name="message"
                                                placeholder="${data[i].fieldName} *"
                                                id="field${i}"
                                                rows="3"
                                                required
                                              ></textarea>
                                              <span class="focus-input100"></span>
                                            </div>`;


            } else {
            divTag.innerHTML += `          <div class="wrap-input100 validate-input" >
                                              <span class="label-input100">Message</span>
                                              <textarea
                                                class="input100"
                                                name="message"
                                                placeholder="${data[i].fieldName} "
                                                id="field${i}"
                                                rows="3"
                                              ></textarea>
                                              <span class="focus-input100"></span>
                                            </div>`;
            }
          } 


          
          //  File ans type *******************************************************************************
          else if (data[i].fieldType == "fileAns") {
            divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>`;
            if (data[i].required == 1) {
              divTag.innerHTML += `           <div class="wrap-input100 validate-input">
                                                <span class="label-input100" for="myfile">Select a file: *</span>
                                                <input
                                                  class="input100"
                                                  type="file"
                                                  id="field${i}"
                                                  name="myfile"
                                                  required
                                                />
                                                <span class="focus-input100"></span>
                                              </div>`;
            } else {
              divTag.innerHTML += `           <div class="wrap-input100 validate-input">
                                                <span class="label-input100" for="myfile">Select a file: </span>
                                                <input
                                                  class="input100"
                                                  type="file"
                                                  id="field${i}"
                                                  name="myfile"
                                                />
                                                <span class="focus-input100"></span>
                                              </div>`;
            }
          }






          //Checkbox ans type *******************************************************************************
          else if (data[i].fieldType == "checkbox") {
            var nameArr = (data[i].ifCheckbox).split(',');
            divTag.innerHTML += `<div class="fieldCheckCheckbox" id="fieldRequiredCheck${i}" style=display:none;>
                                    <p style="color:red;">This field is required</p>
                                    </div>`;  
            let newDiv = document.createElement("div") ;
            let newDiv2 = document.createElement("div") ;
            newDiv2.classList.add("wrap-input100");
            newDiv2.classList.add("checkboxDiv");
            newDiv2.id= `field${i}`;
            if (data[i].required == 1) {
              // divTag.innerHTML += `<div class = "form-group checkboxDiv" id="field${i}"  style="margin-bottom:0px;"><p class="checkboxLabel" style="margin-bottom:0px;">${data[i].fieldName} *</p>`;
              newDiv2.innerHTML += ` ${data[i].fieldName} * : &nbsp;&nbsp;&nbsp;`;
            } else {
              newDiv2.innerHTML += ` ${data[i].fieldName}  : &nbsp;&nbsp;&nbsp;`;

            }
            // console.log(nameArr[0]);
            console.log(nameArr); 
            for (let j = 0; j < nameArr.length; j++) {
              // divTag.innerHTML += `<input type="checkbox" id="field${i}${j}"  name="Checkbox1" value="${nameArr[j]}" class="checkbox checkboxDesign">
              //     <label for="vehicle1" class="checkboxName">${nameArr[j]} </label><br> `;
              newDiv2.innerHTML += `<div style="margin-left: 20px"> <input type="checkbox" id="field${i}${j}" value="${nameArr[j]}"  name="Checkbox1"  class="checkbox checkboxDesign" /> ${nameArr[j]} </div> `;

                  // if(j==nameArr.length - 1){
                  //     newDiv2.innerHTML += `<br><br>`;
                    
                  // }
            }
            // divTag.innerHTML += newDiv;
            newDiv.appendChild(newDiv2);
            divTag.appendChild(newDiv);
            // divTag.innerHTML += `</div><br><br>`;

          } 
          
          
          
          
          
          //Radio ans type *******************************************************************************
          
          else if (data[i].fieldType == "radioAns") {
            var nameArr = (data[i].ifRadio).split(',');
            let newDiv = document.createElement("div") ;
            newDiv.classList.add("wrap-input100");
            newDiv.classList.add("checkboxDiv");
            newDiv.id= `field${i}`;
            newDiv.innerHTML =  `<div class="fieldCheckRadio" id="fieldRequiredRadio${i}" style=display:none;>
                                    <p style="color:red;">This field is required</p>
                                    </div>`;
            // console.log(nameArr);
            if (data[i].required == 1) {
              newDiv.innerHTML += ` ${data[i].fieldName} * : &nbsp;&nbsp;&nbsp;`;
              //divTag.innerHTML += `<div id="field${i}" class= "form-group  checkboxDiv" style="margin-bottom:0px;"><p style="margin-bottom:0px;" class="checkboxLabel">${data[i].fieldName} *</p> `
            } else {
              //divTag.innerHTML += `<div id="field${i}" class= "form-group  checkboxDiv" style="margin-bottom:0px;"><p style="margin-bottom:0px;" class="checkboxLabel">${data[i].fieldName} </p> `;
              newDiv.innerHTML += ` ${data[i].fieldName} : &nbsp;&nbsp;&nbsp;`;
            }

            for (let j = 0; j < nameArr.length; j++) {

              // if (j === 0) {
              // divTag.innerHTML += `<form>`;
              // }
              newDiv.innerHTML += `<div style="margin-left: 20px">
                                   <input type="radio" id="field${i}${j}" name="radioButton${i1}" value="${nameArr[j]}" class="checkbox checkboxDesign">
                                   <label class="radioName" for="field${i}${j}">${nameArr[j]} </label>
                                   </div>`;
              // if (j === nameArr.length - 1) {
              //   divTag.innerHTML += `<br></form>`;
              // }
              // if(j==nameArr.length - 1){
              //         newDiv.innerHTML += `<br/><br/>`;
                    
              //     }
            }
            i1++;
            divTag.appendChild(newDiv);
            //divTag.innerHTML += `</div>`;
          }






          //Dropdown ans type *******************************************************************************
          // else if (data[i].fieldType == "radioAns") {
              //   <div class="wrap-input100 input100-select">
              //   <span class="label-input100">Needed Services</span>
              //   <div>
              //     <select class="selection-2" name="service">
              //       <option class="hidden" selected disabled>Select</option>
              //       <option>Online Store</option>
              //       <option>eCommerce Bussiness</option>
              //       <option>UI/UX Design</option>
              //       <option>Online Services</option>
              //     </select>
              //   </div>
              //   <span class="focus-input100"></span>
              // </div>
          // }
        }
        divTag.innerHTML += `             <div class="container-contact100-form-btn">
                                            <div class="wrap-contact100-form-btn">
                                              <div class="contact100-form-bgbtn"></div>
                                     
                                              <input type="button" class="btn btn-block create-account contact100-form-btn" style="color:white" id="buttonSubmit" name="submit" value="Submit"/>
                                            </div>
                                          </div>
                                `;

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
              // console.log(arr)
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

              let done =1;

              tableData.push(data[i].fieldName)
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
              console.log($(`#${field}`).val() );
              if($(`#${field}`).val()!= ""){
              tableData.push((`/forms/responsesfile/${data[i].formID}_${file.name}`));

              var extensions = ["jpg", "jpeg", "png" , "pdf"];  

              console.log("fileeeeee",file.name);

              // let extension = (file.name).split('.').pop();
              var extension = file.name.replace(/.*\./, '').toLowerCase();
              console.log("ext",extension);

              if (extensions.indexOf(extension) < 0) {  // Wasn't found
                  done =0;
                  alert("Insert only .jpg , .jpeg , .png ");
              }

              $.ajax({
                type: "POST",
                url: "../admin/blogAdmin/api.php/?q=fileupload",
                data: formData,
                processData: false,
                cache: false,
                contentType: false,
              })
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