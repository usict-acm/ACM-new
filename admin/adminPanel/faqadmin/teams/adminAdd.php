<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>Team Admin</title>

    <style>
      * {
        box-sizing: border-box;
      }
/* 
      body {
        background-color: rgba(0, 255, 255, 0.144);
      } */

      h1 {
        text-align: center;
      }

      .container {
        margin: 0% 10%;
        background-color: rgba(27, 100, 235, 0.192);
        padding: 20px;
        text-align: center;
        color: rgb(0, 0, 0);
        font-size: large;
        font-family: "Times New Roman", Times, serif;
      }

      .col-25 {
        width: 25%;
        float: left;
        margin-top: 6px;
        padding-left: 250px;
        text-align: left;
      }

      .col-75 {
        width: 75%;
        float: left;
        margin-top: 6px;
      }

      input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin: auto;
      }

      input[type="file"] {
        /* background-color:#4CAF50 ; */
        /* color: white; */
        border-radius: 5px;
        padding: 6px;
      }

      select {
        /* background-color:#4CAF50 ; */
        /* color: white; */
        border-radius: 5px;
        padding: 6px;
      }

      .table {
        display: none;
      }

      @media screen and (max-width: 600px) {
        .col-25,
        .col-75,
        input[type="submit"],
        input[type="file"],
        select {
          width: 100%;
          margin-top: 0;
        }
      }
    </style>
  </head>

  <body>
    <h3 style="margin-left: 10%;">Add New Member</h3>
    <div class="container">
      <form method="POST" enctype="multipart/form-data" action="javascript:submit_member()">
        <div class="row">
          <div class="col-25">
            <label for="name"><b> Name:</b></label>
          </div>
          <div class="col-75">
            <input type="text" id="name" name="name" required />
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="designation"><b> Designation:</b></label>
          </div>
          <div class="col-75">
            <input type="text" name="designation" id="designation" required />
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="linkdin"><b> Linkedin:</b></label>
          </div>
          <div class="col-75">
            <input type="url" name="linkedin" id="linkedin" />
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="github"><b> Github:</b></label>
          </div>
          <div class="col-75">
            <input type="url" name="github" id="github" /><br />
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="instagram"><b>Instagram:</b></label>
          </div>
          <div class="col-75">
            <input type="url" name="instagram" id="instagram" /><br />
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for=" year"> <b>Year:</b></label>
          </div>
          <div class="col-75">
            <input type="number" min="2019" max="2099" name="year" id="year" required />
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for=" category"> <b>Category:</b></label>
          </div>
          <div class="col-75">
            <select id="category" name="category" required>
              <option value="Faculty" name="faculty">Faculty</option>
              <option value="Office-Bearers" name="office-bearers">
                Office Bearer
              </option>
              <option value="Executive-Members" name="executive-members">
                Executive Member
              </option>
              <option value="Operations-Team" name="operations-team">
                Operations Team
              </option>
              <option value="Web-Team" name="web-team">Web Team</option></select
            ><br /><br />
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="image"><b>Image</b></label>
          </div>
          <div class="col-75">
            <input type="file" name="image" id="image" />
            <br /><br /><br />
          </div>
        </div>

        <div class="row">
          <input
            type="submit"
            name="submit"
            value="Submit"            
          />
        </div>
      </form>
    </div>

    <!--<h1 style="margin-top: 5%">Delete a Member</h1>
    <div class="container">
       <form
        id="delForm"
        enctype="multipart/form-data"
      
      <div class="row" style="padding-bottom: 5%">
        <div class="col-25">
          <label for="year"> <b>Year:</b></label>
        </div>
        <div class="col-75">
          <select id="findYear" name="year" required>
          </select>
        </div>
      </div>
      <div class="row">
        <input
          id="del_submit"
          type="submit"
          name="submit"
          value="Submit"
          onclick="view_member()"
        />
      </div>
       </form> 
    </div>
    <div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
            <th scope="col">Category</th>
            <th scope="col">Year</th>
            <th scope="col">Remove</th>
          </tr>
        </thead>
        <tbody id="members"></tbody>
      </table>
    </div>-->
    <script type="text/javascript">
      function submit_member() {
        var formData = new FormData();
        formData.append("name", $("#name").val());
        formData.append("designation", $("#designation").val());
        formData.append("linkedin", $("#linkedin").val());
        formData.append("github", $("#github").val());
        formData.append("instagram", $("#instagram").val());
        formData.append("category", $("#category").val());
        formData.append("year", $("#year").val());
        formData.append("image", $("#image")[0].files[0]);

        $.ajax({
          type: "POST",
          url: "./faqadmin/teams/api.php/?q=postMember",
          data: formData,
          cache: false,
          processData: false,
          contentType: false,
          success: function (data) {
            alert(data);
           window.location.reload();
          },
          error: function(xhr, status, error){
                    //window.location.reload();
                    // alert("Fill in the details");
                    console.log(error);
                },
        });
      }
    </script>
    <!-- <script type="text/javascript">
      // $(document).ready(function () {
        function view_member() {
          var year = document.getElementById("findYear").value;
          var member = document.getElementById("members");
          member.innerHTML = "";
          $.ajax({
            url: "./faqadmin/teams/api.php/?q=readMember&year=" + year,
            method: "GET",
            async: false,
            dataType: "JSON",
            success: function (data) {
              // console.log("member data", data);
              data.forEach(displayFunc);
              $(".table").show();
              function displayFunc(row) {
                member.innerHTML +=
                  "<tr>\
                                      <td>" +
                  row.name +
                  "</td>\
                                      <td>" +
                  row.designation +
                  "</td>\
                                      <td>" +
                  row.category +
                  "</td>\
                                      <td>" +
                  row.year +
                  '</td>\
                                      <td><a href="javascript:void(0);" onclick="del_member(' +
                  row.id +
                  ')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">\
                                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>\
                                      <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>\
                                      </svg></td>\
                                      </tr>';
              }
            },
          });
        }
      // });
      //  });
    //   function del_member(member_id) {
    //     $.ajax({
    //       type: "POST",
    //       url: "./faqadmin/teams/api.php/?q=delMember",
    //       data: { id: member_id },
    //       success: function (data) {
    //         alert(data);
    //         $("#del_submit").click();
    //         // window.location.reload();
    //       },
    //     });
    //   }
    //   $(document).ready(function () {
    //       var year = document.getElementById("findYear");
    //       year.innerHTML = "";
    //       $.ajax({
    //         url: "./faqadmin/teams/api.php/?q=getYear",
    //         method: "GET",
    //         dataType: "JSON",
    //         success: function (data) {
    //           // console.log("year data", data);
    //           data.forEach(displayFunc);
    //           function displayFunc(row) {
    //             year.innerHTML += '<option value="' + row.year + '" name="'+ row.year + '">' + row.year + '</option>';
    //       }
    //     }
    //   });
    // });
    </script> -->
  </body>
</html>
