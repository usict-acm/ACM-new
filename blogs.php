<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
  <title>ACM USICT</title>
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
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="./assets/CSS/glider.css" />
  <link href="./assets/CSS/benefits.css" rel="stylesheet" />
  <link href="./assets/CSS/blogs.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav id="togglerButton" class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps-abv sps--abv" style="background-color:white;">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" onclick="myFunction()" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i style="color: black; margin-top: 5px" class="fas fa-bars"></i></span>
      </button>
      <div class="d-flex">
        <a href="./"><img class="acm-logo-navbar" src="./assets/images/acm1.png" height="60px" alt="acm logo" />
          <div class="text-and-logo">
        </a>
        <a style="font-size: 16px; padding: 0; margin-bottom: -11px" class="navbar-brand mx-auto" href="./">ACM<span> USICT</span></a>
        <a href="./"><img class="outstanding-logo" src="./assets/images/outstanding-website.png" alt="" /></a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse1">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
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
  <!-- ==============================================header Three Blogs========================================== -->
  <section style="padding-top: 80px;">
    <div class="container" style="margin-top: 3%;">
      <div class="row" id="row2"></div>
    </div>
  </section>

  <section class="container" style="margin-top: 4%;">

    <h1 class="category-heading">Let The Words Speak</h1>
    <div class="lower">
      <!-- ====================================================Show All Blogs========================================= -->
      <div class="left-side">
        <div class="row" id="row1"></div>
        <div class="row">
          <div style="margin:auto;" id="pagination_row"></div>
        </div>
      </div>
      <div class="right-side">
        <!-- ==============================================Show rightside three blogs================================== -->
        <div class="row categoryCards mt-0">
          <div class="col">
            <h4>Recent Blogs</h4>
          </div>
        </div>
        <div id="row4"></div>

        <div class="row categoryCards">
          <div class="col">
            <h4>Categories</h4>
          </div>
        </div>
        <hr style="width: 100%; text-align: centre" />
        <!-- ===========================================================Show Ctegories=================================== -->
        <div id="row3">

        </div>
        <?php
        include('./blogHeader.php');
        ?>

        <?php
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $previous = $page == 1 ? 1 : $page - 1;
        ?>
        <script>
          let url = "./admin/blogAdmin/api.php/?q=readAll&page=<?php echo $page ?>";
          var posts = document.getElementById("row1");
          var pagination = document.getElementById("pagination_row");
          posts.innerHTML = "";
          $(document).ready(function() {
            $.ajax({
              url: url,
              method: 'GET',
              dataType: 'JSON',
              success: function(data) {
                console.log("data blogs", data);
                data[0].forEach(myfunc);

                function myfunc(row, index) {
                  var desc = row.Content;
                  var descSub = desc.substring(0, 70) + "...";
                  posts.innerHTML += "<div class=col-md-6 col-lg-6 col-12>\
                <div class=card id=" + row.Sno + " onClick = redirec(" + row.Sno + ") >\
                  <img\
                  src = ./" + row.Image + "\
                    id=blog" + index + "_image\
                    class=card-img-top\
                    alt=Card image cap\
                    style='height: 13rem;'\
                  />\
                  <div class=card-body>\
                    <div class=post-meta>\
                      <span id=blog" + index + "_category class=category>" + row.Category + "</span>\
                      <span id=blog" + index + "_date class=mx-2 card-span>" + row.Date + "</span>\
                      <span class=mx-2 card-span card-span-dot\
                        ><i class=fas fa-circle></i>\
                      </span>\
                      <span class=mx-2 card-span\
                        ><i class=fas fa-comments></i\
                      ></span>\
                    </div>\
                    <p id=blog" + index + "_content class=card-text>" + descSub + "</p>\
                  </div>\
                </div>\
            </div>"
                }
                pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
          <ul class=pagination>\
          <li class=page-item >\
            <a id='previous-pagination' class='page-link pagination-option-next-prev' href=./blogs.php?q=readAll&page=<?php echo $previous ?> disabled>\
            < Prev\
            </a>\
          </li>\
          </ul>\
        </nav>"
                if (<?php echo $page ?> === 1) {
                  document.getElementById("previous-pagination").className += " disabled-pagination";
                }
                for (var i = 1; i <= data[1]; i++) {
                  var id = "link_pagination" + i;
                  pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
          <ul class=pagination>\
          <li class=page-item>\
            <a id=" + id + " class='page-link pagination-numbers pagination-option-next-prev '" + "href=./blogs.php?q=readAll&page=" + i + ">\
            " + i + "\
            </a>\
          </li>\
          </ul>\
        </nav></div>"
                  if (<?php echo $page ?> === i) {
                    console.log(<?php echo $page ?>);
                    document.getElementById("link_pagination" + i).className += "active_pagination";
                  }
                }
                var next = <?php echo $page ?> === data[1] ? data[1] : <?php echo $page + 1 ?>;
                pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
          <ul class=pagination>\
          <li class=page-item>\
            <a id='next-pagination' class='page-link pagination-option-next-prev' href=./blogs.php?q=readAll&page=" + next + ">\
            Next >\
            </a>\
          </li>\
          </ul>\
        </nav>"
                if (<?php echo $page ?> === data[1]) {
                  document.getElementById("next-pagination").className += " disabled-pagination";
                }
              },
            });
          });
        </script>
  </section>


  <style>
    .pagination-option-next-prev {
      border: 0.5px solid gray;
      color: black;
      box-shadow: rgb(0 0 0 / 17%) 2px 2px 10px;
      font-size: 23px;
      margin: 40px 10px 20px 10px !important;
    }

    .pagination-numbers {
      border: 2px solid #0297ff;
      box-shadow: none;
      padding-left: 15px !important;
      padding-right: 15px !important;
      border-radius: 50% !important;
    }

    .active_pagination {
      border: 2px solid #0297ff;
      background-color: #0297ff;
      color: white;
      padding-left: 15px !important;
      padding-right: 15px !important;
      border-radius: 50% !important;
    }

    .disabled-pagination {
      color: lightgray;
      pointer-events: none;
      cursor: default;
      border: none;
      box-shadow: none;
      font-size: 23px;
      margin: 40px 10px 20px 10px !important;
    }
  </style>
  <!-- ***********************************************Footer************************************************************************ -->

  <footer style="background-color: #f7f9fb" id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="footer-info row">
              <div class="col-lg-4 col-12 d-flex justify-content-center">
                <a href="#about" class="scrollto"><img src="assets/images/acm1.png" alt="logo" title="" style="
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
                <a href="#about" class="scrollto"><img src="assets/images/outstanding-website.png" alt="logo" title="" style="
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
  <script src="./assets/JS/benefits.js"></script>

  <script>
    function redirec(id) {
      // localStorage.setItem("blogId", id); //Transferring data
      window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
    }
  </script>

</body>

</html>