<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
  <title>ACM BLOG</title>
  <link rel="icon" href="./assets/images/acm1.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />

  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="ACM@USICT Chapter, GGSIPU" />
  <meta itemprop="description" content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />
  <meta itemprop="image" content="./assets/images/acm1.png" />

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="http://usict.acm.org/ACM_New" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="ACM@USICT Chapter, GGSIPU" />
  <meta property="og:description" content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />
  <meta property="og:image" content="./assets/images/acm1.png" />

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="ACM@USICT Chapter, GGSIPU" />
  <meta name="twitter:description" content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />
  <meta name="twitter:image" content="./assets/images/acm1.png" />

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/CSS/benefits.css" rel="stylesheet" />
  <link href="./assets/CSS/singleBlog.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="./assets/CSS/glider.css" />
  <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav id="togglerButton" class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps-abv">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" onclick="myFunction()" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i style="color: black; margin-top: 5px" class="fas fa-bars"></i></span>
      </button>
      <div class="d-flex">
        <a href="./index.html"><img class="acm-logo-navbar" src="./assets/images/acm1.png" height="60px" alt="acm logo" />
          <div class="text-and-logo">
        </a>
        <a style="font-size: 16px; padding: 0; margin-bottom: -11px" class="navbar-brand mx-auto" href="./index.html">ACM<span> USICT</span></a>
        <a href="./index.html"><img class="outstanding-logo" src="./assets/images/outstanding-website.png" alt="" /></a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse1">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./collab.html">Sponsors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./benefits.html">Why Join Us?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./clubs.html">Clubs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Team.html">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://services.acm.org/public/qj/proflevel/proflevel_control.cfm?level=3&country=India&form_type=Student&promo=LEVEL&pay=DD">ACM Registration</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <!-- =====================================Header Three Blogs============================================ -->
  <section style="padding-top:80px;">
    <div class="container topRow" style="margin-top: 3%;">
      <div class="row justify-content-center" id="row2"></div>
    </div>
  </section>

  <section class="container" style="margin-top: 60px; margin-bottom:60px">
    <div class="lower">
      <div class="left-side">
        <!-- =======================================================Single Blog========================= -->
        <div class="row" id="row1"></div>
      </div>
      <div class="right-side">
        <div class="row categoryCards mt-0">
          <div class="col">
            <h4>Recent Blogs</h4>
          </div>
        </div>
        <!-- =======================================Show right three blogs======================================= -->
        <div id="row4"></div>
        <div class="row categoryCards">
          <div class="col">
            <h4>Categories</h4>
          </div>
        </div>
        <hr style="width: 100%; text-align: centre" />
        <!-- ==================================================Show Ctgories =================================================-->
        <div id="row3"></div>
        <?php
        include('blogHeader.php');
        ?>



      </div>
    </div>
  </section>

  <!-- ***********************************************Footer************************************************************************ -->

  <footer style="background-color: #f7f9fb" id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="footer-info row">
              <div class="col-lg-4 col-12 d-flex justify-content-center">
                <a href="#about" class="scrollto"><img src="./assets/images/acm1.png" alt="logo" title="" style="
                        width: 160px;
                        padding-top: 10px;
                        padding-left: 25px;
                        padding-right: 25px;
                      " /></a>
              </div>
              <div class="
                    col-lg-8 col-12
                    d-flex
                    justify-content-center
                    align-items-center
                  ">
                <a href="#about" class="scrollto"><img src="./assets/images/outstanding-website.png" alt="logo" title="" style="
                        width: 320px;
                        padding-top: 10px;
                        padding-left: 25px;
                        padding-right: 25px;
                      " /></a>
              </div>
            </div>
            <br />
            <p>The USICT ACM Student Chapter is an official student body</p>
            <p>incepted in 2019 under the University School USICT, GGSIPU.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links" style="padding: 0 4%">
            <br />
            <h4 style="padding: 2px" id="quick">Quick Links</h4>
            <ul style="padding-left: 0">
              <li>
                <i class="fa fa-angle-right"></i>
                <a href="https://www.ipu.ac.in/"> IPU-Home</a>
              </li>
              <li>
                <i class="fa fa-angle-right"></i>
                <a href="https://india.acm.org/"> ACM-India</a>
              </li>
              <li>
                <i class="fa fa-angle-right"></i>
                <a href="https://www.acm.org/governance/acm-india-council">
                  ACM-India Office Bearers</a>
              </li>
              <li>
                <i class="fa fa-angle-right"></i>
                <a href="https://amturing.acm.org/award_winners/reddy_9634208.cfm">
                  ACM Turing Award</a>
              </li>
              <li>
                <i class="fa fa-angle-right"></i>
                <a href="./clubs.html">Our Clubs</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <br />
            <h4 style="padding: 2px">Contact Us</h4>
            <p>
              Dean Office, <br />
              USICT, GGSIPU<br />
              Sector 16C, Dwarka, Delhi<br />
              <strong>Phone:</strong> 011-25302702<br />
              <strong>Email:</strong> info@usict.acm.org<br />
            </p>

            <div class="social-links" style="text-align-last: justify; font-size: x-large">
              <a href="https://www.facebook.com/acmusict" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.youtube.com/channel/UCI7her-mYrb7QM0t9S_nA_Q" class="youtube"><i class="fa fa-youtube"></i></a>
              <a href="https://www.instagram.com/acmusict/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="mailto:acmusit@gmail.com" class="envelope"><i class="fa fa-envelope-o"></i></a>
              <a href="https://github.com/usict-acm/ACM-new" class="github"><i class="fab fa-github"></i></a>
              <a href="https://discord.gg/74d2u7rv" class="discord"><i class="fab fa-discord"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <footer style="background-color: #eff1f4" id="footer">
    <div class="copyright-content">
      <div class="container">
        <br />
        <div class="copyright-text text-center">
          © Conceptualized,Designed and Developed by Office Bearers of ACM
          USICT chapter.
        </div>
      </div>
      <br />
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="./../../assets/JS/benefits.js"></script>
  <script>
    var posts = document.getElementById("row1");
    document.addEventListener('DOMContentLoaded', function() {
      // var blogId = localStorage.getItem('blogId');
      var blogId = <?php echo $_GET['Id'] ?>;
      console.log(blogId);
      let url = './admin/blogAdmin/api.php/?q=readOne&id=' + blogId;

      $(document).ready(function() {
        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(data) {
            console.log(data);
            if(data.length == 0 || data.message == "No Posts Found"){
              window.document.location = "./blogs.php";
            } else {
            posts.innerHTML = "<div class='w-100'>\
            <h1 id='blog_title' class='singleBlog-title'>" + data[0].Title + "</h1>\
            <div class='singleBlog'>\
            <img\
            src='./" + data[0].Image + "'\
              id='blog_image'\
              class='card-img-top'\
              alt='Card image cap'\
            />\
            <div class='singleContent'>\
              <div style='display: flex; justify-content: flex-end'>\
                <h5 id='blog_date'>" + data[0].Date + "</h5>\
              </div>\
              <p id='blog_content' class='singleBlog-content'>" + data[0].Content + "</p>\
            </div>\
          </div>\
          </div>";
          }
          },
        });
      });
    });

    function redirec(id) {
      window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
    }
  </script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="./assets/JS/benefits.js"></script>
</body>

</html>