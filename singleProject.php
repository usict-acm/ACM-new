<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include("head.php")
    ?>
    <title>GGSIP University USS ACM Student Chapter</title>
    <link href="./assets/CSS/singleProj.css" rel="stylesheet" />
    <link href="./assets/CSS/new.css" rel="stylesheet" />
    <link href="./assets/CSS/glider.css" rel="stylesheet" />
    <link href="./assets/CSS/header.css" rel="stylesheet" />
    <link href="./assets/CSS/footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/CSS/homeTeam.css">
    <link rel="stylesheet" href="./assets/CSS/newStyle.css">
    <link rel="stylesheet" href="./assets/CSS/singleProject.css">

  </head>

<body class="blue-bg">
  <section id="testing">
  <?php
  $currentPage = 'projects';
  include('header.php');
  ?>
  </section>

  <!-- ===============================================Project======================================= -->
  <section class="container" style="margin-top: 7%; margin-bottom:60px;">
  <div class="row" id="row1">
    Loading...
  </div>
  </section>

  <!-- ===============================================Team======================================= -->
  <div class="team_heading" style="display: flex;justify-content: center;">
			<h2 class="font-weight-bold text-center mb-5 h1 w-50"><span>Contributors</span></h2>
		</div>
  <div class="row justify-content-center ml-5 mr-5" id="members">
      <!-- <div class="profile-card col-md-auto">
        <div class="img">
          <img
            src="./assets/images/team/anuragParashar.jpg"
          />
        </div>
        <div class="caption">
          <h3>Anurag Parashar</h3>
          <p>Chair</p>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/anurag-parashar/" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-card col-md-auto">
        <div class="img">
          <img
            src="./assets/images/team/rajnikantRoy.jpg"
          />
        </div>
        <div class="caption">
          <h3>Rajnikant Roy</h3>
          <p>Vice Chair</p>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/rajnnikantroy/" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-card col-md-auto">
        <div class="img">
          <img
            src="./assets/images/team/nidhiRathore.png"
          />
        </div>
        <div class="caption">
          <h3>Nidhi Rathore</h3>
          <p>Secretary</p>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/nidhi-rathore-431317213/" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      
      <div class="profile-card col-md-auto">
        <div class="img">
          <img
            src="./assets/images/team/akashMohan.jpg"
          />
        </div>
        <div class="caption">
          <h3>Akash Mohan </h3>
          <p>Treasurer</p>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/akash-mohan-697513227" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-card col-md-auto">
        <div class="img">
          <img
            src="./assets/images/team/apoorvAron.jpg"
          />
        </div>
        <div class="caption">
          <h3>Apoorv Aron</h3>
          <p>Web Chair</p>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/apoorv-aron-742882212" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-card col-md-auto">
        <div class="img">
          <img
            src="./assets/images/team/apoorvAron.jpg"
          />
        </div>
        <div class="caption">
          <h3>Apoorv Aron</h3>
          <p>Web Chair</p>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/apoorv-aron-742882212" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-card col-md-auto">
        <div class="img">
          <img
            src="./assets/images/team/apoorvAron.jpg"
          />
        </div>
        <div class="caption">
          <h3>Apoorv Aron</h3>
          <p>Web Chair</p>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/apoorv-aron-742882212" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-card col-md-auto">
        <div class="img">
          <img
            src="./assets/images/team/aryanGarg.jpg"
          />
        </div>
        <div class="caption">
          <h3>Aryan Garg</h3>
          <p>Membership Chair</p>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/aryan-garg" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div> -->
      <!-- </div> -->
	</div>

  
  <!-- ===================================================Footer======================================= -->
  <?php
  include('footer.php');
  ?>



  <script> window.addEventListener('load', function() {
  var navbarHeight = document.querySelector('.navbar').offsetHeight;
  document.body.style.paddingTop = navbarHeight + 'px';
});
</script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="./../../assets/JS/benefits.js"></script>
  <script>
    var posts = document.getElementById("row1");
    var members = document.getElementById("members");
    document.addEventListener('DOMContentLoaded', function() {
      // var projectId = localStorage.getItem('projectId');
      var projectId = <?php echo $_GET['Id'] ?>;
      console.log("projectIDDD", projectId);
      let url = './admin/projectAdmin/api.php/?q=readOne&id=' + projectId;
      console.log("ok");

      $(document).ready(function() {
        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(data) {
            console.log("data herrrr", data);
            if (data.length == 0 || data.message == "No Posts Found") {
              // window.document.location = "./blogs.php";
              posts.innerHTML = "<h1 class='heading'> Project Not Found </h1>"
            } else {
              posts.innerHTML = "<div class='post' style='width:100%'>\
              <!-- <div class='linker'><a href='/home'> Home </a> / <a href='/projects'> Projects </a></div> -->\
              <div class='post-content'> <div class='post-text'>\
              <h1 class='heading'>" + data[0].Title + "</h1>\
              <div class='middleBtn'><a href='"+data[0].Link+"' class='about-button'>"+data[0].BtnText+"</a></div>\
              </div>\
              <img src='" + data[0].Image + "'>\
              </div></div>\
              <div>" + data[0].Content + "</div>";
              const userIdsString = data[0].Users;
              console.log(userIdsString);
              const userIds = userIdsString.split(',');
              console.log(userIds[0]);
              console.log("------");
              console.log(data[0]);

              /*$.each(userIds, (index, userId) => {
                $.ajax({
                  url: './admin/adminPanel/faqadmin/teams/api.php?q=readUserById&id=' + userId,
                  method: 'GET',
                  async: false,
                  dataType: 'JSON',
                  success: function(user) {
                    console.log(user);
                    members.innerHTML += "<div> hi </div>";
                  },
                  error: function(error) {
                    console.log("Error:", error);
                  }
                });
              });*/
              
              

// Iterate over each userId in the userIds array
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

      console.log("Name:", name);
      console.log("Image URL:", imageUrl);
      console.log("Designation:", designation);
      console.log("LinkedIn:", linkedin);

      members.innerHTML += "<div class='profile-card col-md-auto'>\
        <div class='img'>\
          <img src='" + imageUrl + "'/>\
        </div>\
        <div class='caption'>\
          <h3>"+ name +"</h3>\
          <p>" + designation + "</p>\
          <div class='social-links'>\
            <a href='" + linkedin + "' target='_blank'><i class='fab fa-linkedin'></i></a>\
          </div>\
        </div>\
      </div>"
    },
    error: function(error) {
      console.log("Error:", error);
    }
  });
});










            //   const promises = userIds.map(userId => {
            //   return $.ajax({
            //     url: './admin/adminPanel/faqadmin/teams/api.php?q=readUserById&id=' + userId,
            //     method: 'GET',
            //     dataType: 'JSON'
            //   });
            // });

            // Promise.all(promises)
            //   .then(users => {
            //     const members = document.getElementById('members');
            //     users.forEach(user => {
            //       members.innerHTML += "<div> hi </div>";
            //     });
            //   })
            //   .catch(error => {
            //     console.log("Error:", error);
            //   });
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