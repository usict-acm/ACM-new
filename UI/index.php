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
      function submit_form(){
    var formData = new FormData();
    formData.append('name',  $("#name").val());


    $.ajax({
        type: "POST",
        url: "../../blogAdmin/api.php/?q=postAnnouncement",
        data : formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function(data){
            alert(data.message);
            window.location.reload();
        },
        error: function(xhr, status, error){
            alert("Fill in the details");
        },
    });
    }
</script>

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

            function allForms(form) {
              divTag.innerHTML += `<span class="contact100-form-title">
                    ${form.formName}
                </span>

                <div class="wrap-input100 validate-input bold" data-validate = "Please enter your email: e@a.x">
                    <input id="fieldID" class="input100" type="text" name="email" placeholder="${form.fieldName}">
                    <span class="focus-input100"></span>
                </div>

`;
            }
            divTag.innerHTML += `<div class="container-contact100-form-btn bold height" >
                    <button class="contact100-form-btn" onclick="submit_form()">
                        <span>
                            <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                            Submit
                        </span>
                    </button>
                </div>`;

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

            
// 				<!-- Email -->
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