<!DOCTYPE html>
<html lang="en">

<head>
    <?php
      include("head.php")
    ?>
    <title>USICT ACM</title>
    <link href="assets/CSS/team.css" rel="stylesheet" />
    <link href="assets/CSS/glider.css" rel="stylesheet" />
    <link href="assets/CSS/header.css" rel="stylesheet" />
    <link href="assets/CSS/footer.css" rel="stylesheet" />

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
        margin-top: 3%;
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
      <div class="topnav-myear">
        <a href="javascript:openTab('2019')" id="2019" class="nav-year">2019</a> 
        <a href="javascript:openTab('2020')" id="2020" class="nav-year">2020</a>
        <a href="javascript:openTab('2021')" id="2021" class="nav-year">2021</a>
      </div> 
        <select class="mobile-dropdown" onchange="openTab(this.value)">
          <option value="2021" selected="selected">2021</option>
          <option value="2020">2020</option>
          <option value="2019">2019</option> 
        </select>
        
     </div>
    <!--  ******************************************Faculty************************************************************* -->

  <section id="collab">
    <div class="container">
      <h1 class="highlight collab-main-heading">Faculty:</h1>

      <div class="row d-flex justify-content-center" id="Faculty">
      </div>
    </div>

    <!-- *********************************** Office Bearers *******************************************************-->
    <div class="container">
      <h1 class="collab-main-heading">
        Office<span class="highlight"> Bearers</span>:
      </h1>
      <div class="row d-flex justify-content-center" id="Office-Bearers">

      </div>
    </div>

    <!--***************************************** Executive Members **********************************************-->
    <div class="container">
      <h1 class="collab-main-heading">
        Executive<span class="highlight"> Members</span>:
      </h1>
      <div class="row d-flex justify-content-center" id="Executive-Members">

      </div>
    </div>

    <!--***************************************** Web Team **********************************************-->
    <div class="container">
      <h1 class="collab-main-heading">
        Web<span class="highlight"> Team</span>:
      </h1>

      <div class="row d-flex justify-content-center" id="Web-Team">

      </div>
    </div>

    <script>
      openTab(2021); //Default call
      function openTab(navYear) {
        $(".nav-year").removeClass("active");
        $('#' + navYear).addClass("active");
        var category = ['Faculty', 'Office-Bearers', 'Executive-Members', 'Web-Team'];
        category.forEach(e => document.getElementById(e).innerHTML = "");
        let url = './admin/teams/api.php/?q=readMember&year=' + navYear;
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
                  member.innerHTML += '<div class="flip-card-without-hover">\
                                      <div class="flip-card-inner"> \
                                      <hr class="blue-hr" />\
                                      <div class="flip-card-front">\
                                      <img src= "' + row.image + '" class="flip-img" alt="Avatar" />\
                                      <h4 class="card-name">' + row.name + '</h4>\
                                      <p class="card-name">' + row.designation + '</p>\
                                      </div>\
                                      </div>\
                                      </div>'
                  } else {
                    member.innerHTML += '<div class="flip-card">\
                                      <div class="flip-card-inner">\
                                      <hr class="blue-hr" />\
                                      <div class="flip-card-front">\
                                      <img src= "' + row.image + '" class="flip-img" alt="Avatar" />\
                                      <h4 class="card-name">' + row.name + '</h4>\
                                      <p class="card-name">' + row.designation + '</p>\
                                      </div>\
                                      <div class="flip-card-back">\
                                      <br>\
                                      <h2>' + row.name + '</h2>\
                                      <p>' + row.designation + '</p>\
                                      <br />\
                                      <a href= "' + row.linkedin + '">\
                                      <i class="' + row.id + '-linkedin team-social-icon fab fa-linkedin"></i></a>\
                                      <a href= "' + row.github + '">\
                                      <i class="' + row.id + '-github team-social-icon fab fa-github"></i></a>\
                                      <a href= "' + row.instagram + '">\
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
                }
              }
            });
          });
      }
    </script>

  </section>
  <!-- ***********************************************Footer************************************************************************ -->

  <?php
      include('footer.php');
    ?>
  <script src="assets/JS/glider.js"></script>
</body>

</html>