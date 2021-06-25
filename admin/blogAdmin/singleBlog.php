<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>ACM BLOG</title>
    <link rel="icon" href="./../../assets/images/acm1.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc"
    />

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="ACM@USICT Chapter, GGSIPU" />
    <meta
      itemprop="description"
      content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc"
    />
    <meta itemprop="image" content="./assets/images/acm1.png" />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://usict.acm.org/ACM_New" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ACM@USICT Chapter, GGSIPU" />
    <meta
      property="og:description"
      content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc"
    />
    <meta property="og:image" content="./assets/images/acm1.png" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="ACM@USICT Chapter, GGSIPU" />
    <meta
      name="twitter:description"
      content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc"
    />
    <meta name="twitter:image" content="./assets/images/acm1.png" />

    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="../../assets/CSS/benefits.css" rel="stylesheet" />
    <link href="../../assets/CSS/singleBlog.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/glider.css" />
    <script
      src="https://kit.fontawesome.com/d459eda8d9.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav
      id="togglerButton"
      class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps-abv"
    >
      <div class="container">
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          onclick="myFunction()"
          data-toggle="collapse"
          data-target="#navbarCollapse1"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"
            ><i style="color: black; margin-top: 5px" class="fas fa-bars"></i
          ></span>
        </button>
        <div class="d-flex">
          <img
            class="acm-logo-navbar"
            src="../../assets/images/acm1.png"
            height="60px"
            alt="acm logo"
          />
          <div class="text-and-logo">
            <a
              style="font-size: 16px; padding: 0; margin-bottom: -11px"
              class="navbar-brand mx-auto"
              href="#"
              >ACM<span> USICT</span></a
            >
            <img
              class="outstanding-logo"
              src="../../assets/images/outstanding-website.png"
              alt=""
            />
          </div>
      </div>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./singleBlog.html"
                >Home <span class="sr-only">(current)</span></a
              >
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
              <a
                class="nav-link"
                href="https://services.acm.org/public/qj/proflevel/proflevel_control.cfm?level=3&country=India&form_type=Student&promo=LEVEL&pay=DD"
                >ACM Registration</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section>
      <div class="container" style="margin-top: 3%">
        <div class="row" id="row2">

      </div>
    </section>
    <?php
include('../../blogHeader.php');
?>
    
    <section class="container">
      <div class="lower">
        <div class="left-side">
          <div class="singleBlog">
            <img
              id="blog_image"
              class="card-img-top"
              src="../../assets/images/banner-high.png"
              alt="Card image cap"
            />
            <div class="content">
              <div style="display: flex; justify-content: space-between">
                <h1 id="blog_title" class="singleBlog-title"></h1>
                <h5 id="blog_date" class=""></h5>
              </div>

              <p id="blog_content" class="singleBlog-content"></p>
            </div>
          </div>
        </div>
        <div class="right-side">
        <div id="row4"></div>
          <!-- <a href="#">
            <div class="row rightCard">
              <div class="col-5">
                <div class="rightImage">
                  <img src="../../assets/images/blog-img.jpg" alt="" />
                </div>
              </div>
              <div class="col-7 rightText">
                <h5>
                  There’s a Cool New Way for Men to Wear Socks and Sandals
                </h5>
                <span class="card-span cardDown">March 15, 2018 </span>
                <span class="card-span card-span-dot"
                  ><i class="fas fa-circle"></i>
                </span>
                <span class="card-span cardDown"
                  ><i class="fas fa-comments"></i
                ></span>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="row rightCard">
              <div class="col-5">
                <div class="rightImage">
                  <img src="../../assets/images/blog-img.jpg" alt="" />
                </div>
              </div>
              <div class="col-7 rightText">
                <h5>
                  There’s a Cool New Way for Men to Wear Socks and Sandals
                </h5>
                <span class="card-span cardDown">March 15, 2018 </span>
                <span class="card-span card-span-dot"
                  ><i class="fas fa-circle"></i>
                </span>
                <span class="card-span cardDown"
                  ><i class="fas fa-comments"></i
                ></span>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="row rightCard">
              <div class="col-5">
                <div class="rightImage">
                  <img src="../../assets/images/blog-img.jpg" alt="" />
                </div>
              </div>
              <div class="col-7 rightText">
                <h5>
                  There’s a Cool New Way for Men to Wear Socks and Sandals
                </h5>
                <span class="card-span cardDown">March 15, 2018 </span>
                <span class="card-span card-span-dot"
                  ><i class="fas fa-circle"></i>
                </span>
                <span class="card-span cardDown"
                  ><i class="fas fa-comments"></i
                ></span>
              </div>
            </div>
          </a> -->
          <div class="row categoryCards">
            <div class="col">
              <h4>Categories</h4>
            </div>
          </div>
          <hr style="width: 100%; text-align: centre" />
  
          <div id="row5"></div>
  
          <script>
            // let categoryUrl = './api.php/?q=readAll';
            // var categories = document.getElementById("row3");
            // categories.innerHTML = "";
            // $(document).ready(function() {
            //   $.ajax({
            //     url: categoryUrl,
            //     method: 'GET',
            //     dataType: 'JSON',
            //     success: function(data) {
            //       console.log(data);
            //       var categoryArray = [];
            //       data.forEach((result) => {
            //         var cat = result.Category;
            //         categoryArray.push(cat);
            //       })
            //       console.log(categoryArray);
  
            //       function foo(arr) {
            //         var distinctCategory = [],
            //           categoryCount = [],
            //           prev;
  
            //         categoryArray.sort();
            //         for (var i = 0; i < categoryArray.length; i++) {
            //           if (categoryArray[i] !== prev) {
            //             distinctCategory.push(categoryArray[i]);
            //             categoryCount.push(1);
            //           } else {
            //             categoryCount[categoryCount.length - 1]++;
            //           }
            //           prev = categoryArray[i];
            //         }
  
            //         return [distinctCategory, categoryCount];
            //       }
  
            //       var result = foo(categoryArray);
            //       var finalcategoryArray = result[0];
            //       console.log(finalcategoryArray);
            //       var finalCountArray = result[1];
            //       console.log(finalCountArray);
            //       console.log('[' + result[0] + ']', '[' + result[1] + ']');
  
            //       finalcategoryArray.forEach((c, index) => {
            //         const n = finalCountArray[index];
            //         console.log(c, n);
            //         categories.innerHTML += "<div class= row categories>\
            //      <div class= col-6 categoryLeft ><a href= # >" + c + "</a></div>\
            //      <div class= col-6 categoryRight >(" + n + ")</div>\
            //      </div> \
            //      <hr style= width: 100%; text-align: centre />"
            //       });
            //     },
            //   });
  
            // });
          </script>
  
          <!-- <div class="row tags">
            <div class="col">
              <h4>Tags</h4>
            </div>
          </div>
          <hr style="width: 100%; text-align: centre" />
          <a href="#"><p class="tag">React</p></a>
          <a href="#"><p class="tag">Competitive</p></a>
          <a href="#"><p class="tag">App</p></a>
          <a href="#"><p class="tag">Web</p></a>
          <a href="#"><p class="tag">React</p></a>
          <a href="#"><p class="tag">Competitive</p></a>
          <a href="#"><p class="tag">App</p></a>
          <a href="#"><p class="tag">Web</p></a>
          <div class="card-body">
          <div class="post-meta">
            <span class="category">FOOD</span>
            <span class="mx-2 card-span">March 15, 2018 </span>
            <span class="mx-2 card-span card-span-dot"
              ><i class="fas fa-circle"></i>
            </span>
            <span class="mx-2 card-span"
              ><i class="fas fa-comments"></i
            ></span>
          </div>
          <p class="card-text">
            There’s a Cool New Way for Men to Wear Socks and Sandals
          </p>
        </div> --> 
        </div>
      </div>
    </section>

    <script>
      // let urlThree = './api.php/?q=readHome';
      // var threePosts = document.getElementById("row2");
      // threePosts.innerHTML = "";
      // $(document).ready(function() {
      //   $.ajax({
      //     url: urlThree,
      //     method: 'GET',
      //     dataType: 'JSON',
      //     success: function(data) {
      //       console.log(data);
      //       data.forEach(myThreeBlogs);
  
      //       function myThreeBlogs(row, index) {
  
      //         threePosts.innerHTML += "<div class=col-md-4 col-lg-4>\
      //             <div id=" + row.Sno + "_image onClick = redirectThree(" + row.Sno + ") class=a-block d-flex align-items-center height-md" + " style= background-repeat: no-repeat; background-size: cover;>\
      //               <div class=text>\
      //                 <div class=post-meta>\
      //                   <span id=blogHeader" + index + "_category class=category>" + row.Category + "</span>\
      //                   <span id=blogHeader" + index + "_date class=mr-2>" + row.Date + " </span>\
      //                 </div>\
      //                 <h3 id=blogHeader" + index + "_title>" + row.Title + "</h3>\
      //               </div>\
      //             </div>\
      //           </div>";
  
  
      //         document.getElementById(row.Sno + "_image").style.backgroundImage = "url(./" + row.Image + ")"
      //       }

      //     }
      //   });
      // });
    </script>


    <!-- ***********************************************Footer************************************************************************ -->

    <footer style="background-color: #f7f9fb" id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <div class="footer-info row">
                <div class="col-lg-4 col-12 d-flex justify-content-center">
                  <a href="#about" class="scrollto"
                    ><img
                      src="../../assets/images/acm1.png"
                      alt="logo"
                      title=""
                      style="
                        width: 160px;
                        padding-top: 10px;
                        padding-left: 25px;
                        padding-right: 25px;
                      "
                  /></a>
                </div>
                <div
                  class="
                    col-lg-8 col-12
                    d-flex
                    justify-content-center
                    align-items-center
                  "
                >
                  <a href="#about" class="scrollto"
                    ><img
                      src="../../assets/images/outstanding-website.png"
                      alt="logo"
                      title=""
                      style="
                        width: 320px;
                        padding-top: 10px;
                        padding-left: 25px;
                        padding-right: 25px;
                      "
                  /></a>
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
                    ACM-India Office Bearers</a
                  >
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a
                    href="https://amturing.acm.org/award_winners/reddy_9634208.cfm"
                  >
                    ACM Turing Award</a
                  >
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

              <div
                class="social-links"
                style="text-align-last: justify; font-size: x-large"
              >
                <a href="https://www.facebook.com/acmusict" class="facebook"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a
                  href="https://www.youtube.com/channel/UCI7her-mYrb7QM0t9S_nA_Q"
                  class="youtube"
                  ><i class="fa fa-youtube"></i
                ></a>
                <a href="https://www.instagram.com/acmusict/" class="instagram"
                  ><i class="fa fa-instagram"></i
                ></a>
                <a href="mailto:acmusit@gmail.com" class="envelope"
                  ><i class="fa fa-envelope-o"></i
                ></a>
                <a href="https://github.com/usict-acm/ACM-new" class="github"
                  ><i class="fab fa-github"></i
                ></a>
                <a href="https://discord.gg/74d2u7rv" class="discord"
                  ><i class="fab fa-discord"></i
                ></a>
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
      document.addEventListener('DOMContentLoaded', function () {
        // var blogId = localStorage.getItem('blogId');
        var blogId = <?php echo $_GET['Id'] ?>;
        console.log(blogId);
        let url = './api.php/?q=readOne&id=' + blogId;

        $(document).ready(function () {
          $.ajax({
            url: url,
            method: 'GET',
            dataType: 'JSON',
            success: function (data) {
              console.log(data);
              $('#blog_image').attr('src', data[0].Image);
              $('#blog_category').text(data[0].Category);
              $('#blog_title').text(data[0].Title);
              $('#blog_author').text(data[0].Author);
              $('#blog_content').text(data[0].Content);
              $('#blog_date').text(data[0].Date);
            },
          });
        });
      });
    </script>
  </body>
</html>
