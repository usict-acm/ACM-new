<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include("head.php");
  ?>
  <title>GGSIP University USS ACM Student Chapter</title>
  <link href="./assets/CSS/glider.css" rel="stylesheet" />
  <link href="./assets/CSS/header.css" rel="stylesheet" />
  <link href="./assets/CSS/footer.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/CSS/singleProjectNew.css">
</head>

<body class="blue-bg">
  <section id="testing">
    <?php
      $currentPage = 'projects';
      include('header.php');
    ?>
  </section>

  <!-- ===============================================Project======================================= -->
  <section class="container" style="margin-top: 1%; margin-bottom:60px;">
    <div class="row" id="projNav"></div>
    <div class="row" id="row-p">
      Loading...
    </div>
  </section>

  <!-- ===============================================Team======================================= -->
  <div class="team_heading" style="display: flex;justify-content: center;">
    <h2 class="font-weight-bold text-center mb-5 h1 w-50" id="contributors"></h2>
  </div>
  <div class="row justify-content-center ml-5 mr-5" id="members"></div>

  <!-- ===================================================Footer======================================= -->
  <?php
    include('footer.php');
  ?>

  <script>
    window.addEventListener('load', function() {
      var navbarHeight = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbarHeight + 'px';
    });
  </script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="./../../assets/JS/benefits.js"></script>
  <script>
    var posts = document.getElementById("row-p");
    var members = document.getElementById("members");
    var projNav = document.getElementById("projNav");
    var contributors = document.getElementById("contributors");
    document.addEventListener('DOMContentLoaded', function() {
      var projectId = <?php
      $projectId = isset($_GET['Id']) ? $_GET['Id'] : null;
      if (!is_numeric($projectId)) {
        echo "null;";
      } else {
        echo intval($projectId) . ";";
      }
      ?>;
      console.log(projectId);
      if (projectId === null) {
        posts.innerHTML = "<div class='d-flex flex-column m-auto align-items-center'><h1 class='heading'> Project ID should be a number </h1><br><h3>Go back to <a href='./projects.php'>Projects</a></h3></div>";
        return;
      }
      let url = './admin/projectAdmin/api.php/?q=readOne&id=' + projectId;

      $(document).ready(function() {
        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(data) {
            if (data.length == 0 || data.message == "No Posts Found") {
              posts.innerHTML = "<div class='d-flex flex-column m-auto align-items-center'><h1 class='heading'> Project Not Found</h1><br><h3>Go back to <a href='./projects.php'>Projects</a></h3></div>";
              // contributors.innerHTML = "";
            } else {
              contributors.innerHTML = "Contributors";
              projNav.innerHTML = "<div class='linker p-1'><a href='./'> Home </a> / <a href='./projects.php'> Projects </a> / "+ data[0].Title +"</div>";
              

              if(data[0].BtnText){
              posts.innerHTML = "<div class='row' id='row1'><div class='post' style='width:100%'>\
              <div class='post-content'> <div class='post-text'>\
              <h1 class='heading'>" + data[0].Title + "</h1>\
              <div class='middleBtn'><a href='"+data[0].Link+"' class='about-button'>"+data[0].BtnText+"</a></div>\
              </div>\
              <img src='" + data[0].Image + "'>\
              </div></div>\
              <div style='padding: 2%'><h1 class='heading'>About this project:</h1> <br><p>" + data[0].Content + "</p></div></div>";
              }
              else{
              posts.innerHTML = "<div class='row' id='row1'><div class='post' style='width:100%'>\
              <div class='post-content'> <div class='post-text'>\
              <h1 class='heading'>" + data[0].Title + "</h1>\
              </div>\
              <img src='" + data[0].Image + "'>\
              </div></div>\
              <div style='padding: 2%'><h1 class='heading'>About this project:</h1> <br><p>" + data[0].Content + "</p></div></div>";
              }



              const userIdsString = data[0].Users;
              const userIds = userIdsString.split(',');
              
              userIds.forEach(function(userId) {
                $.ajax({
                  url: './admin/adminPanel/faqadmin/teams/api.php?q=readUserById&id=' + userId,
                  method: 'GET',
                  dataType: 'text',
                  success: function(responseText) {
                    var jsonStartIndex = responseText.indexOf('[');
                    var jsonSubstring = responseText.substring(jsonStartIndex);
                    var jsonResponse = JSON.parse(jsonSubstring);
                    var user = jsonResponse[0];
                    var name = user.name;
                    var imageUrl = user.image;
                    var designation = user.designation;
                    var linkedin = user.linkedin;
                    var github = user.github;
                    var instagram = user.instagram;
                    let socialLinksContent = ""; // Initialize empty string for social links

                    if (linkedin) {
                      socialLinksContent += "<a href='" + linkedin + "' target='_blank'><i class='fab fa-linkedin'></i></a>";
                    }
                    if (github) {
                      socialLinksContent += "<a href='" + github + "' target='_blank'><i class='fab fa-github'></i></a>";
                    }
                    if (instagram) {
                      socialLinksContent += "<a href='" + instagram + "' target='_blank'><i class='fab fa-instagram'></i></a>";
                    }

                    members.innerHTML += "<div class='profile-card col-md-auto'>\
                      <div class='img'>\
                        <img src='" + imageUrl + "'/>\
                      </div>\
                      <div class='caption'>\
                        <h3>"+ name +"</h3>\
                        <p>" + designation + "</p>\
                        <div class='social-links'>" + socialLinksContent +"</div>\
                      </div>\
                    </div>";
                  },
                  error: function(error) {
                    console.log("Error:", error);
                  }
                });
              });
            }
          },
        });
      });
    });

    function redirec(id) {
      window.document.location = "./singleProject.php?Id=" + id; //Connecting Second page
    }
  </script>
</body>
</html>
