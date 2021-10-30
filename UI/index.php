<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact V10</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->

    <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--===============================================================================================-->
    <style>
      textarea::placeholder{
        font-size:18px;
        padding-top:20px;
        padding-left:5px;
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
      
let url = '../admin/blogAdmin/api.php/?q=fields&Id=' + <?php echo $Id ?>;
      let divTag = document.getElementById("formPage");
      
      $(document).ready(function () {

        $.ajax({
          url: url,
          method: "GET",
          dataType: "JSON",
          success: function (data) {
            console.log("check data ", data);
            // console.log("1");
            data.forEach(allForms);

            let formTitle=`<span class="contact100-form-title">
                            ${data[0].formName}
                        </span>`;
          
            $("#formPage").prepend(formTitle);
            function allForms(form) {

              
              let inputTypeLongAns=`  <div class="wrap-input100">
                                          <textarea  style="position:relative; margin-top:3px; left:28px;" rows="4" cols="60" placeholder="${form.fieldName}"></textarea>
                                          <span class="focus-input100"></span>
                                          </div>
                                    `;

              let inputTypeShortAns=`      <textarea class="wrap-input100" style="position:relative; left:9px;" rows="4" cols="65" placeholder="${form.fieldName}"></textarea>
                                          <span class="focus-input100"></span>`;

              let inputFieldNormal=`<div class="wrap-input100 validate-input bold" data-validate = "Please enter your data: e@a.x">
                                        <input class="input100" type="text" name="email" placeholder="${form.fieldName}">
                                        <span class="focus-input100"></span>
                                    </div>`;
                            
              let blank=``;
                            
                        if(form.fieldType=="Short answer"){
                            blank=blank+inputTypeShortAns;
                        }
                        if(form.fieldType=="Paragraph"){
                          blank=blank+inputTypeLongAns;
                        }
                        if(form.fieldType=="Checkbox"){
                            blank=blank+inputTypeShortAns;
                        }
                        if(form.fieldType=="textbox"){
                          blank=blank+inputFieldNormal;
                        }
                        $("#formPage").append(blank);
                     

            }
             let sendBtn=`<div class="container-contact100-form-btn bold height" >
                                <button class="contact100-form-btn">
                                    <span>
                                        <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                                        Send
                                    </span>
                                </button>
                            </div>`; 
                            $("#formPage").append(sendBtn);
      
          },
        });
      });
// let url = "../admin/blogAdmin/api.php/?q=fields";
//       let divTag = document.getElementById("formPage");
// $(document).ready(function() {
//       $.ajax({
//         url: url,
//         method: 'GET',
//         dataType: 'JSON',
//         success: function(data) {
//           console.log("check data 1234", data);
//           data.forEach(formArrItem);

//           function formArrItem(form) {
//             let urlName = '../admin/blogAdmin/api.php/?q=fields&formName=' + form.formName;
//             $.ajax({
//               url: urlName,
//               method: 'GET',
//               async: false,
//               dataType: 'JSON',
//               success: function() {
//                 console.log(urlName);
//                 // console.log("dataNumber", dataNumber);
//                 // numberOfEvents = dataNumber[1];
//                 // console.log("numberrrr", numberOfEvents);
//                 divTag.innerHTML += `<span class="contact100-form-title">
//                     ${form.formName}
//                 </span>

            
//        <!-- Email -->
//                 <div class="wrap-input100 validate-input bold" data-validate = "Please enter your email: e@a.x">
//                     <input class="input100" type="${form.fieldType}" name="email" placeholder="${form.fieldName}">
//                     <span class="focus-input100"></span>
//                 </div>

//                 <div class="container-contact100-form-btn bold height" >
//                     <button class="contact100-form-btn">
//                         <span>
//                             <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
//                             Send
//                         </span>
//                     </button>
//                 </div>
// `;
//               }
//             })
//           }
//         },
//         error: function(error) {
//           console.log(error);
//         },
//       });
//     });
    </script>

    <div id="dropDownSelect1"></div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
  </body>
</html>
