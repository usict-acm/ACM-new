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
              divTag.innerHTML += `<div class="wrap-input100 validate-input bold">
                    <input id="field${i}" class="input100" type="text" placeholder="${data[i].fieldName}">
                </div>`;
            }
            divTag.innerHTML += `<div class="container-contact100-form-btn bold height">
                    <input type="button" id="buttonSubmit" name="submit" value="submit">                    
                </div>`;

    document.getElementById("buttonSubmit").addEventListener("click", function() {
      var res = [];
      res.push(data[0].formName);
      for(let i=0; i<data.length; i++){
        var tableData = [];
        tableData.push(data[i].fieldName);
        var field = "field"+i;
        tableData.push($(`#${field}`).val());
        res.push(tableData);

      }

      $.ajax({
          type: "POST",
          url: "../admin/blogAdmin/api.php/?q=dataForm",
          data: {text1: JSON.stringify(res)},
          success: function(data){
              alert(data);
              // window.location.reload();
          },
          error: function(xhr, status, error){  
              // alert("Fill in the details");
              window.location.replace('./thankYou/index.php')
          },
      });
  });

          },
        });
      // });

    </script>


  </body>
</html>
