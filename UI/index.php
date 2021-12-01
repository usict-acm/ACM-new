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
              if (data[i].required == 1) {
                divTag.innerHTML += `<div class="fieldCheck" id="fieldRequired${i}" style=display:none;>
                  <p>This field is required</p>
              </div>`;
              divTag.innerHTML += `<div class="wrap-input100 validate-input bold">
                  <input id="field${i}" class="input100" type="text" placeholder="${data[i].fieldName} *" required />
              </div>`;
              }else {
              divTag.innerHTML += `<div class="wrap-input100 validate-input bold">
                  <input id="field${i}" class="input100" type="text" placeholder="${data[i].fieldName}">
              </div>`;
              }             
            }
            // divTag.innerHTML += `<div class="container-contact100-form-btn bold height">
            // <button type = "submit"  class="contact100-form-btn btn-1" id="buttonSubmit">Submit</a>                                      
            //     </div>`;
            divTag.innerHTML += `<div class="container-contact100-form-btn bold height">
                    <input type="button" id="buttonSubmit" name="submit" value="submit">                    
                </div>`;

    document.getElementById("buttonSubmit").addEventListener("click", function() {
      var res = [];
      res.push(data[0].formName);
      var temp = 1;
      for(let i=0; i<data.length; i++){
        var tableData = [];
        tableData.push(data[i].fieldName);
        var field = "field"+i;
        var fieldRequired = "fieldRequired"+i;
        if($(`#${field}`).val() == "" && data[i].required == 1){
          $(`#${fieldRequired}`).css('display','block');
          setTimeout(function(){$(".fieldCheck").css('display','none'); }, 3000);
          temp = 0;
        }    
        tableData.push($(`#${field}`).val());
        res.push(tableData);
      }

      console.log("temp",temp);
      if(temp == 1){
        $.ajax({
          type: "POST",
          url: "../admin/blogAdmin/api.php/?q=dataForm",
          data: {text1: JSON.stringify(res)},
          success: function(data){
            window.location.replace('./thankYou/index.php')
          },
          error: function(xhr, status, error){  
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
