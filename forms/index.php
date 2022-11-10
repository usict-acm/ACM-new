<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GGSIP University USS ACM Student Chapter</title>
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

    <style>
      ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #4388F0;
        opacity: 1; /* Firefox */
      }
      .checkboxDiv{
        background-color: #ffffff;
        padding: 20px 20px 30px 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        font: inherit;
        color: #212529;
      }
      input[type="checkbox"] {
        width: 12px;
  height: 12px;
  background: rgb(67, 136, 240, 0.1);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border: 1px solid #4388F0;
  }

  input[type="checkbox"]:checked {
    background: #4388F0;
    border: 1px solid #005daa;
  }

    input[type="radio"] {
          width: 12px;
    height: 12px;
    background: rgb(67, 136, 240, 0.1);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: 1px solid #4388F0;
    border-radius: 1em;
    }  
    input[type="radio"]:checked {
      background: #4388F0;
      border: 1px solid #005daa;
    }

      .fileButton{
        font-size: 1rem;
        font-family: inherit;
      }
    ::-webkit-file-upload-button {
        /* margin-top: 5px; */
    /* margin-bottom: 5px; */
    /* display: block; */
    /* box-sizing: border-box; */
    appearance: none;
    background-color: rgb(3 151 254);
    border: 2px solid rgb(3 151 254);
    border-radius: 0.6em;
    cursor: pointer;
    font-size: 1rem;
    line-height: 1;
    padding: 0.5rem;
    text-decoration: none;
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
    color: #fff;
    transition: all 150ms ease-in-out;
}
    </style>
    <meta name="robots" content="noindex, follow" />
  </head>

  <body>
    <div class="container-contact100">
      <div style="background-color: rgb(213 255 253);" class="wrap-contact100">
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
  <?php $Id = $_GET["id"]; ?>

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
        divTag.innerHTML += `<span id="formTitle" 
        style="   
          background-image: url('../assets/images/form-bg.png');
          background-size: cover;
          padding: 30px;
          border-radius: 8px;
          margin-bottom: 20px;
          color: white;"
          class="contact100-form-title"> ${data[0].formName} </span>`;
        for (let i = 0; i < data.length; i++) {
          // console.log(data[i].fieldType);
          if (data[i].fieldType == "shortAns") {
          //  Short ans type *******************************************************************************          
            if (data[i].required == 1) {
              divTag.innerHTML += ` <div class='wrap-input100 validate-input' style="background-color: #ffffff;padding: 20px 20px 30px 20px;border-radius: 8px;margin-bottom: 20px;">
              <div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                      <p style="color:red;">This field is required</p>
                                      </div>                        
              <span class='label-input100' style="color: #212529;font: inherit; font-weight: 500;">${data[i].fieldName} <span style="color: red";>*</span> :</span>
                                      <input
                                        id="field${i}"
                                        class='input100 bottom-line'
                                        type='text'
                                        name='name'
                                        style = "border-bottom: 1px solid #4388F0; margin-top:10px;"
                                        placeholder="Type your answer here"
                                        required
                                      />
                                    </div>`;
            } else {
              divTag.innerHTML += ` <div class='wrap-input100 validate-input' style="background-color: #ffffff;padding: 20px 20px 30px 20px;border-radius: 8px;margin-bottom: 20px;">
                                      <span class='label-input100' style="color: #212529;font: inherit; font-weight: 500;">${data[i].fieldName}:</span>
                                      <input
                                        id="field${i}"
                                        style="color: #212529;font: inherit;"
                                        class='input100 bottom-line'
                                        type='text'
                                        name='name'
                                        style = "border-bottom: 1px solid #4388F0; margin-top:10px;"
                                        placeholder="Type your answer here"
                                      />
                                    </div>`;
            }
          }


          //  Long ans type *******************************************************************************
          else if (data[i].fieldType == "paraAns") {
            if (data[i].required == 1) {
              divTag.innerHTML += `   <div class="wrap-input100 validate-input" style="background-color: #ffffff;padding: 20px 20px 30px 20px;border-radius: 8px;margin-bottom: 20px;">
              <div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                    <p style="color:red;">This field is required</pThis>
                                    </div>
                                              <span style="font: inherit;color: #000000; font-weight: 500;" class="label-input100">${data[i].fieldName} <span style="color: red";>*</span> :</span>
                                              <textarea
                                                class="input100 bottom-line"
                                                style = "border-bottom: 1px solid #4388F0; margin-top:10px;"
                                                name="message"
                                                placeholder="Type your answer here"
                                                id="field${i}"
                                                rows="3"
                                                required
                                              ></textarea>
                                            </div>`;


            } else {
            divTag.innerHTML += `          <div class="wrap-input100 validate-input" style="background-color: #ffffff;padding: 20px 20px 30px 20px;border-radius: 8px;margin-bottom: 20px;">
                                              <span style="font: inherit;color: #000000; font-weight: 500;" class="label-input100">${data[i].fieldName}:</span>
                                              <textarea
                                                class="input100 bottom-line"
                                                style = "border-bottom: 1px solid #4388F0; margin-top:10px;"
                                                name="message"
                                                placeholder="Type your answer here"
                                                id="field${i}"
                                                rows="3"
                                              ></textarea>
                                            </div>`;
            }
          } 


          
          //  File ans type *******************************************************************************
          else if (data[i].fieldType == "fileAns") {
            if (data[i].required == 1) {
              divTag.innerHTML += `<div class="wrap-input100 validate-input" style="background-color:#ffffff;padding: 20px 20px 30px 20px;border-radius: 8px;margin-bottom: 20px;">
              <div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                                    <p style="color:red;">This field is required</pThis>
                                    </div>
              <label style="font: inherit;color: #212529; font-weight:500;" class="label-input100" for="myfile">${data[i].fieldName} <span style="color: red";>*</span> :</label>
              <input
                                                  class="input100 fileButton"
                                                  type="file"
                                                  style="margin-top: 10px;"
                                                  id="field${i}"
                                                  name="myfile"
                                                  required
                                                />
                                              </div>`;
            } else {
              divTag.innerHTML += `           <div class="wrap-input100 validate-input" style="background-color:#ffffff;padding: 20px 20px 30px 20px;border-radius: 8px;margin-bottom: 20px;">
                                                <span style="font: inherit;color: #212529; font-weight:500;" class="label-input100" for="myfile">${data[i].fieldName} : </span>
                                                <input
                                                  class="input100 fileButton"
                                                  type="file"
                                                  style="margin-top: 10px;"
                                                  id="field${i}"
                                                  name="myfile"
                                                />
                                              </div>`;
            }
          }

          //Checkbox ans type *******************************************************************************
          else if (data[i].fieldType == "checkbox") {
            var nameArr = (data[i].ifCheckbox).split(',');  
            let newDiv = document.createElement("div") ;
            let newDiv2 = document.createElement("div") ;
            newDiv2.classList.add("wrap-input100");
            newDiv2.classList.add("checkboxDiv");
            newDiv2.id= `field${i}`;
            if (data[i].required == 1) {
              newDiv2.innerHTML += ` <div class="fieldCheckCheckbox" id="fieldRequiredCheck${i}" style=display:none;>
                                    <p style="color:red;">This field is required</p>
                                    </div><span style="font-weight:500;">${data[i].fieldName} <span style="color: red";>*</span> : </span>&nbsp;&nbsp;&nbsp;`;
            } else {
              newDiv2.innerHTML += `<span style="font-weight:500;"> ${data[i].fieldName}  : </span>&nbsp;&nbsp;&nbsp;`;

            }
            // console.log(nameArr[0]);
            console.log(nameArr); 
            for (let j = 0; j < nameArr.length; j++) {
              if(j==0)
                newDiv2.innerHTML += `<div style="margin-left: 20px;margin-top: 20px;"> <input type="checkbox" id="field${i}${j}" value="${nameArr[j]}"  name="Checkbox1"  class="checkbox checkboxDesign" /> ${nameArr[j]}</div> `;
              else
                newDiv2.innerHTML += `<div style="margin-left: 20px"> <input type="checkbox" id="field${i}${j}" value="${nameArr[j]}"  name="Checkbox1"  class="checkbox checkboxDesign" /> ${nameArr[j]} </div> `;
            }
            newDiv.appendChild(newDiv2);
            divTag.appendChild(newDiv);
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
            if (data[i].required == 1) {
              newDiv.innerHTML += `<span style="font-weight:500;"> ${data[i].fieldName} <span style="color: red";>*</span> : </span>&nbsp;&nbsp;&nbsp;`;
            }
            else
              newDiv.innerHTML += `<span style="font-weight:500;"> ${data[i].fieldName} : </span>&nbsp;&nbsp;&nbsp;`;
            

            for (let j = 0; j < nameArr.length; j++) {
              if(j==0)
                {
                  newDiv.innerHTML += `<div style="margin-left: 20px;margin-top: 20px;">
                                   <input type="radio" id="field${i}${j}" name="radioButton${i1}" value="${nameArr[j]}" class="checkbox checkboxDesign">
                                   <label class="radioName" for="field${i}${j}">${nameArr[j]} </label>
                                   </div>`;
                }
                else{
                  newDiv.innerHTML += `<div style="margin-left: 20px">
                                   <input type="radio" id="field${i}${j}" name="radioButton${i1}" value="${nameArr[j]}" class="checkbox checkboxDesign">
                                   <label class="radioName" for="field${i}${j}">${nameArr[j]} </label>
                                   </div>`;
                }
            }
            i1++;
            divTag.appendChild(newDiv);
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
              // var filerequired = $(`#${fieldRequired}`).get(0).files;
              // var file = $(`#${field}`).get(0).files;
              // console.log(file[0]);
              var input = document.getElementById(field);
              console.log(field, input);
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
              tableData.push((`https://usict.acm.org/forms/responsesfile/${data[i].formID}_${file.name}`));

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