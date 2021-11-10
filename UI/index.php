<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form</title>
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

</script>

    <script>

      // $(document).ready(function () {
        let url = '../admin/blogAdmin/api.php/?q=fields&Id=' + '<?php echo $Id ?>';
        let divTag = document.getElementById("formPage");

        $.ajax({
          url: url,
          method: "GET",
          dataType: "JSON",
          success: function (data) {
            console.log("check data ", data);
            divTag.innerHTML += `<span id="formTitle" class="contact100-form-title">
                    ${data[0].formName}
                </span>`;

            // data.forEach(allForms);
            for(let i=0; i<data.length; i++){
              divTag.innerHTML += `<div class="wrap-input100 validate-input bold">
                    <input id="field${i}" class="input100" type="text" placeholder="${data[i].fieldName}">
                </div>`;
            }
            divTag.innerHTML += `<div class="container-contact100-form-btn bold height">
                    <input type="button" id="buttonSubmit" name="submit" value="submit">                    
                </div>`;

    document.getElementById("buttonSubmit").addEventListener("click", function() {
    // function submit_form(){
      console.log("data inside",data);
      var formData = new FormData();
      formData.append('formTitle', data[0].formName);
      for(let i=0; i<data.length; i++){
        var field = "field"+i;
        formData.append(`${data[i].fieldName}`,$(`#${field}`).val());
      }
    //   for (var key of formData.keys()) {
    //    console.log("key formData",key);
    // }
    //   for (var value of formData.values()) {
    //    console.log("value formData",value);
    // }


      // $.ajax({
      //     type: "POST",
      //     url: "../admin/blogadmin/api.php?q=postForm",
      //     data : formData,
      //     cache: false,
      //     processData: false,
      //     contentType: false,
      //     success: function(data){
      //         alert(data.message);
      //         window.location.reload();
      //     },
      //     error: function(xhr, status, error){
      //         alert("Fill in the details");
      //     },
      // });
    // }
  });

          },
        });
      // });

    </script>


  </body>
</html>