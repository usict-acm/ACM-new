<!DOCTYPE html>
<html lang="en">

<head>
    <?php
      include("head.php")
    ?>
    <title>GGSIP University USS ACM Student Chapter</title>
    <link href="assets/CSS/team.css" rel="stylesheet" />
    <link href="assets/CSS/glider.css" rel="stylesheet" />
    <link href="assets/CSS/header.css" rel="stylesheet" />
    <link href="assets/CSS/footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/CSS/newStyle.css" />

  </head>

<body>
  <!-- ************************************************Navbar******************************************************************************-->
 <?php
      $currentPage = 'team';
      include('header.php');
    ?>

  <!-- ****************************************************Header Image****************************************** -->

  <div style="
        margin-left: 10%;
        margin-right: 10%;
        padding-top: 3%;
        margin-bottom: 0%;
      ">
    <section id="header">
      <div class="pt-card row" style="background-image: url('assets/images/team-banner.png')">
        <div class="heading col-xl-9 col-lg-9 col-md-9">
          <h3><span class="uheading">Our Team</span></h3>
        </div>
      </section>
    </div>
     <!--***************************************member according to years nav ****************************-->
    
      <div class="main-year">
      <div class="topnav-myear" id="year-nav">
      </div> 
        <select class="mobile-dropdown" id="year-nav-mobile" onchange="openTab(this.value)">
        </select>
        
     </div>
    <!--  ******************************************Faculty************************************************************* -->

  <section id="collab">
    <div class="container" id="fac">
      <h1 class="highlight collab-main-heading" id="fac">Faculty:</h1>

      <div class="row d-flex justify-content-center" id="Faculty">
      </div>
    </div>

    <!-- *********************************** Office Bearers *******************************************************-->
    <div class="container" id="office">
      <h1 class="collab-main-heading">
        Office<span class="highlight"> Bearers</span>:
      </h1>
      <div class="row d-flex justify-content-center" id="Office-Bearers">

      </div>
    </div>

    <!--***************************************** Executive Members **********************************************-->
    <div class="container" id="executive">
      <h1 class="collab-main-heading" >
        Executive<span class="highlight"> Members</span>:
      </h1>
      <div class="row d-flex justify-content-center" id="Executive-Members">

      </div>
    </div>

    <!--***************************************** Executive Members **********************************************-->
  <div class="container" id="operations">
      <h1 class="collab-main-heading" >
        Operations<span class="highlight"> Team</span>:
      </h1>
      <div class="row d-flex justify-content-center" id="Operations-Team">

      </div>
    </div>

    <!--***************************************** Web Team **********************************************-->
    <div class="container" id="web">
      <h1 class="collab-main-heading">
        Web<span class="highlight"> Team</span>:
      </h1>

      <div class="row d-flex justify-content-center" id="Web-Team">

      </div>
    </div>

    <script>
      $(document).ready(function () {
          var yearNav = document.getElementById("year-nav");
          var yearNavMobile = document.getElementById("year-nav-mobile");
          yearNav.innerHTML = "";
          yearNavMobile.innerHTML = "";
          $.ajax({
            url: "./admin/adminPanel/faqadmin/teams/api.php/?q=getYear",
            method: "GET",
            dataType: "JSON",
            success: function (data) {
              // console.log("year data", data);s
              data.forEach(displayFunc);
              openTab(data[0].year); //Default call
              function displayFunc(row) {
                yearNav.innerHTML += '<a href="javascript:openTab(\'' + row.year + '\')" id="' + row.year + '" class="nav-year">' + row.year + '</a>';
                yearNavMobile.innerHTML += '<option value="' + row.year + '">' + row.year + '</option>';
          }
        }
      });
    });
      function openTab(navYear) {
        $("#fac").hide();
        $("#office").hide();
        $("#executive").hide();
        $("#operations").hide();
        $("#web").hide();
        $(".nav-year").removeClass("active");
        $('#' + navYear).addClass("active");
        var category = ['Faculty', 'Office-Bearers', 'Executive-Members', 'Operations-Team', 'Web-Team'];
        category.forEach(e => document.getElementById(e).innerHTML = "");
        let url = './admin/adminPanel/faqadmin/teams/api.php?q=readMember&year=' + navYear;
        $(document).ready(function() {
          $.ajax({
            url: url,
            method: 'GET',
            async: false,
            dataType: 'JSON',
            success: function(data) {
              // console.log("member data", data);
              data.forEach(displayFunc);
              function displayFunc(row) {
                var member = document.getElementById(row.category);
                if (row.category == 'Faculty') {
                  $("#fac").show();
                  member.innerHTML += '<div class="flip-card-without-hover">\
                                      <div class="flip-card-inner"> \
                                      <hr class="blue-hr" />\
                                      <div class="flip-card-front">\
                                      <img src= "' + row.image + '" class="flip-img" alt="profile-pic" />\
                                      <h4 class="card-name" id="' + row.id + '">' + row.name + '</h4>\
                                      <p class="card-name">' + row.designation + '</p>\
                                      </div>\
                                      </div>\
                                      </div>'
                  } else {
                    if(row.category == category[1])
                      $("#office").show();
                    else if (row.category == category[2])
                      $("#executive").show();
                    else if (row.category == category[3])
                      $("#operations").show();
                    else if (row.category == category[4])
                      $("#web").show();
                    member.innerHTML += '<div class="flip-card">\
                                      <div class="flip-card-inner">\
                                      <hr class="blue-hr" />\
                                      <div class="flip-card-front">\
                                      <img src= "' + row.image + '" class="flip-img" alt="profile-pic" />\
                                      <h4 class="card-name" id="' + row.id + '">' + row.name + '</h4>\
                                      <p class="card-name">' + row.designation + '</p>\
                                      </div>\
                                      <div class="flip-card-back">\
                                      <br>\
                                      <h2 class="card-name-back">' + row.name + '</h2>\
                                      <p>' + row.designation + '</p>\
                                      <br />\
                                      <a href= "' + row.linkedin + '" target="_blank">\
                                      <i class="' + row.id + '-linkedin team-social-icon fab fa-linkedin"></i></a>\
                                      <a href= "' + row.github + '" target="_blank">\
                                      <i class="' + row.id + '-github team-social-icon fab fa-github"></i></a>\
                                      <a href= "' + row.instagram + '" target="_blank">\
                                      <i class="' + row.id + '-instagram team-social-icon fab fa-instagram-square"></i></a>\
                                      </div>\
                                      </div>\
                                      </div>'
                                      if(row.linkedin == '')
                                        $('.'+ row.id + '-linkedin').hide();
                                      if(row.github == '')
                                        $('.' + row.id + '-github').hide();
                                      if(row.instagram == '')
                                        $('.' + row.id + '-instagram').hide();
                  }
                  if(row.name.length > 16) {
                    $("#" + row.id).css("font-size", "1.2rem");
                  }
                }
              }
            });
          });
      }
    </script>

  </section>
  <!-- back to top and contact us-->
	<?php
	include("contact.php")
	?>

	<!-- ********************************contact_us end**************************************************** -->
  <!-- ***********************************************Footer************************************************************************ -->

  <?php
      include('footer.php');
    ?>
  <script src="assets/JS/glider.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="assets\JS\home_new.js"></script>
</body>

</html>