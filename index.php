<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
      include("head.php")
    ?>
    <title>USICT ACM</title>
    <link href='./assets/CSS/styles.css' rel="stylesheet" />
    <link href='./assets/CSS/glider.css' rel="stylesheet" />
    <link href='./assets/CSS/footer.css' rel="stylesheet" />
    <style>
      @media (min-width: 0px) and (max-width: 500px) {
        section {
          background-image: none !important;
        }

        .button-center {
          text-align: center;
        }
      }
    </style>
  </head>

<body>

  <nav id="togglerButton" class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" onclick="myFunction()" data-toggle="collapse"
        data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i style="color:black; margin-top:5px" class="fas fa-bars"></i></span>
      </button>
      <div class="d-flex">
        <a href="./"><img class="acm-logo-navbar" src="./assets/images/acm1.png" height="60px" alt="acm logo" />
        <div class="text-and-logo"></a>
            <a style="font-size: 16px; padding: 0; margin-bottom: -11px" class="navbar-brand mx-auto"
                href="./">USICT<span> ACM</span></a>
            <a href="./"><img class="outstanding-logo" src="./assets/images/outstanding-website.png" alt="" /></a>
        </div>
    </div>
      <div class="collapse navbar-collapse" id="navbarCollapse1">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"> <a class="nav-link" href="#myCarousel">Home <span
                class="sr-only">(current)</span></a> </li>
          <li class="nav-item"> <a class="nav-link" href="./blogs.php">Blogs</a> </li>
          <li class="nav-item"> <a class="nav-link" href="./benefits.php">Why Join Us?</a> </li>
          <li class="nav-item"> <a class="nav-link" href="./clubs.php">Clubs</a> </li>
          <li class="nav-item"> <a class="nav-link" href="./team.php">Our Team</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#contact">Contact Us</a> </li>
          <li class="nav-item"> <a class="nav-link"
              href="./benefits.php#registration">ACM
              Registration</a> </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Swiper Silder
    ================================================== -->
  <!-- Slider main container -->
  <div class="top-header">
    <div class="swiper-container main-slider" id="myCarousel">
      <div class="swiper-wrapper">
        <div class="swiper-slide slider-bg-position image1" data-hash="slide1">
          <!--<h2>ACM Chapter USICT</h2>-->
        </div>
        <div class="swiper-slide slider-bg-position image2 d-block w-100" data-hash="slide2">
          <h2 class="slider-text">ACM Chapter USICT</h2>
        </div>
        <div class="swiper-slide slider-bg-position image3 d-block w-100" data-hash="slide3">
          <h2 class="slider-text">ACM Chapter USICT</h2>
        </div>
        <div class="swiper-slide slider-bg-position image4 d-block w-100" data-hash="slide4">
          <h2 class="slider-text">ACM Chapter USICT</h2>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Navigation -->
      <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
      <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
    </div>
  </div>

  <section id="about" class="p-t-80"
    style="background-color:#fff;background-image: url('./assets/images/right_up.png');">
    <div class="text-center" style="font-size:16px;font-weight: bold; margin-bottom: 5vh;">
      <img style="width: 90px; margin-bottom: 5vh; " class="text-center" src="./assets/images/chapter_icon.png" alt="">
      <h1 class="section-heading"><b>About Our Chapter</b></h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 m-b-30 animated fadeInLeft visible" data-animate="fadeInLeft">
          <div id="main-slider" class="swiper-container main-slider" style="height:45vh">
            <div class="swiper-wrapper">
              <div class="swiper-slide slider-bg-position" style="background:url('assets/images/About us/image1.jpg')"
                data-hash="slide1">
              </div>
              <div class="swiper-slide slider-bg-position" style="background:url('assets/images/About us/image2.jpg')"
                data-hash="slide2">
              </div>
              <div class="swiper-slide slider-bg-position" style="background:url('assets/images/About us/image31.jpg')"
                data-hash="slide2">
              </div>
              <div class="swiper-slide slider-bg-position" style="background:url('assets/images/About us/image4.jpg')"
                data-hash="slide2">
              </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
            <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
          </div>
        </div>
        <div class="col-lg-5 p-l-40 p-r-40 animated fadeInRight visible" data-animate="fadeInRight">
          <div class="m-b-40">
            <h2 style="text-align:center;"><b>ACM CHAPTER USICT</b></h2><br />
            <p style="text-align:center;font-size:15px; line-height: 200%;font-weight:200%;color:black;">ACM Student
              Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.
              The chapter will conduct events including programming contests, talks by renowned speakers, workshops
              etc.which give the students an exposure to the competitive computing world as well as allow them to
              understand the advancements going
              on in the computing sphere worldwide.</p>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <a href="./assets/newsletter2.pdf">
                <button z-index="999" class="btn btnForNewsletter400px"
                  style="background-color:#2250fc;margin-bottom: 20px;">
                  <span style="color:#fff; font-size:0.9rem">ACM NEWSLETTER 2021</span>
                </button>
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <a href="./assets/newsletter.pdf">
                <button z-index="999" class="btn btnForNewsletter400px"
                  style="background-color:#2250fc;margin-bottom: 20px">
                  <span style="color:#fff; font-size:0.9rem">ACM NEWS LETTER 2020</span>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =================================Vision and mission================================================== -->

  <section id="what_we_do" class="box-fancy background-overlay-one"
    style="background-color: white;background-image: url('./assets/images/left_bg.png');">
    <div class="text-center" style="font-size:16px;font-weight: bold; margin-bottom: 5vh;">
      <img style="width: 90px; margin-bottom: 5vh; " class="text-center" src="./assets/images/vision&mision/icon.png"
        alt="">
      <h1 class="section-heading"><b>Chapter Goals</b></h1>
    </div>
    <div class="container container-fluid">
      <div class="row m-b-30" style="padding:3vh;margin-bottom: 5vh;">
        <div class="col-lg-4 text-center animated fadeInLeft visible" data-animate="fadeInLeft"
          data-animate-delay="400">
          <img src="./assets/images/vision&mision/vission.png" style="height: 20vh;" alt="">
        </div>
        <div class="col-lg-8 text-center animated fadeInLeft visible" data-animate="fadeInLeft"
          data-animate-delay="400">
          <h3 style="font-size: xx-large;"><b>VISION</b></h1>
            <h5 style="line-height: 150%;font-size:14px;text-align: justify;"><b>We see a world where computing helps
                solve tomorrow’s problems – where we use our knowledge and skills to advance the profession and make a
                positive impact. Our team
                help college students develop their technical as well as non-technical skills through regularly
                organising Seminars, workshops and competitions of various domains.</b></h5>
        </div>
      </div>
      <div class="row m-b-30" style="padding:3vh;margin-bottom: 5vh;">
        <div class="col-lg-8 text-center animated fadeInRight visible" data-animate="fadeInRight"
          data-animate-delay="400">
          <h3 style="font-size:xx-large;"><b>MISSION</b></h1>
            <h5 style=" line-height: 150%; font-size:14px;text-align: justify;"><b>We, at The ACM Chapter USICT, are
                missioned with a common goal to inculcate the spirit of technology among young minds and become a
                pathway towards ACM India's
                development, for India to emerge as the supernation in the coming years. With an aim to make students
                updated with advancements in computing sphere, the chapter in its glorious one and half years of
                existence, has now created its
                unique. </b></h5>
        </div>
        <div class="col-lg-4 text-center animated fadeInRight visible" data-animate="fadeInRight"
          data-animate-delay="400">
          <img src="./assets/images/vision&mision/mission.png" style="height: 20vh;" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================Announcement============================================= -->

  <!-- <section class="announcement">
    <h1 class="section-heading announce">Announcements</h1>
    <div class="container-fluid text"> -->
      <!-- <div class="swiper-container"> -->
        <!-- <div class="swiper-wrapper"> -->

<!-- ==================================Swiper slide 1============================================= -->
          

          <!-- <div class="swiper-slide"> -->
            <!-- <div class="det">
              <div class="heading">
                <h1>
                   ACM USICT Summer Internship
                </h1>
              </div>

              <div class="row det-row">
                <div class="col-md-7 divide">
                  <div class="detai">
                    <p>Greetings everyone!!!<br>

                      USICT ACM Student Chapter has come up with a summer internship opportunity 
                      for all students of 2022, '23 and '24 batches. The internship involves 
                      various projects under the Supervision of Mentors. This internship will give 
                      you in-depth knowledge and will provide exposure to work in advanced 
                      technology areas.

                      <br>
                      <br>To be a part of the SUMMER INTERNSHIP, register by Monday,<br> 2 August 2021, 
                      3 PM 

                      <br>Please note that the form is open for all courses of USICT
                    </p>
                    <div style="display: flex;justify-content: space-evenly;"> -->
                      <!-- <a target="_blank" href="http://bit.do/ReactNativeWorkshop"><button
                          class="btn announce-button-one" style="background-color:#2250fc">
                          <span style="color:#fff; font-size:0.9rem">REGISTER NOW</span>
                        </button>
                      </a> -->
                      <!-- <a target="_blank"
                        href="./summerinternship/index.php"><button class="btn"
                          style="background-color:#2250fc">
                          <span style="color:#fff; font-size:0.9rem">View Details</span>
                        </button>
                      </a>
                    </div>

                  </div>

                </div>
                <div class="col-md-5 list">

                  <img class="imag imag_trell" src="./assets/images/Summer Internship 2021.jpeg" alt=""> -->

                <!-- </div> -->

              <!-- </div> -->



            <!-- </div> -->

          <!-- </div> -->

           <!-- <div class="swiper-slide">
            <div class="det">
              <div class="heading">
                <h1>
                   Session On React Native
                </h1>
              </div>
              <div class="row det-row">
                <div class="col-md-7 divide">
                  <div class="detai">
                    <p>Greetings everyone!!!<br>
                      We hope you all are healthy and doing fine. If you want to do have a go at the App Development, we
                      are here with something tailor-made for you. We, at USICT ACM Student Chapter are conducting a
                      week-long session on React Native by Shlok Garg (Youtube Channel - S.G. Codes) . The event will be
                      a complete journey to your first react app from the scratch. So, what are you thinking? Register
                      now for what promises to be a great journey.
                      <br>Date - 12-17 May, 2021
                      <br>Time - 2-3 PM
                    </p>
                    <div style="display: flex;justify-content: space-evenly;"> -->
                      <!-- <a target="_blank" href="http://bit.do/ReactNativeWorkshop"><button
                          class="btn announce-button-one" style="background-color:#2250fc">
                          <span style="color:#fff; font-size:0.9rem">REGISTER NOW</span>
                        </button>
                      </a> -->
                      <!-- <a target="_blank"
                        href="https://youtube.com/playlist?list=PLgPSSnf8lP5CubPwhgIk9n4FUhFN5nc3L"><button class="btn"
                          style="background-color:#2250fc">
                          <span style="color:#fff; font-size:0.9rem">VIEW PLAYLIST</span>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 list">
                  <img class="imag imag_trell" src="./assets/images/ReactNative.png" alt="">
                </div>
              </div>
            </div>

          </div>

          <!-- <div class="swiper-slide">
            <div class="det">
              <div class="heading">
                <h1>Workshop on "Basics Of Arduino"</h1>
              </div>
              <div class="row det-row">
                <div class="col-md-7 divide">
                  <div class="detai">
                    <p>"You don't need anyone's permission to create something great".
                      As you are on a journey to create a better you, we are there to help you out. RobIoTics Club,
                      USICT ACM Student Chapter is organizing a workshop on "Basics of Arduino" to give wings to your
                      robotics journey. Join us for a fun and interactive experience. Details are as follows:-
                      <br>Date - 9 May, 2021
                      <br>Day - Sunday
                      <br>Time - 7PM onwards
                    </p>
                    <div style="display: flex;justify-content: space-evenly;">
                      <a target="_blank" href="https://www.youtube.com/watch?v=HxYksottHIs&feature=youtu.be"><button class="btn announce-button-one"
                          style="background-color:#2250fc">
                          <span style="color:#fff; font-size:0.9rem">WATCH RECORDING</span>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 list">
                  <img class="imag imag_trell" src="./assets/images/arduino-workshop.jpeg" alt="">
                </div>
              </div>
            </div>

          </div> -->

          <!-- <div class="swiper-slide">
            <div class="det">
              <div class="heading">
                <h1>Blog Writing Competition</h1>
              </div>
              <div class="row det-row">
                <div class="col-md-7 divide">
                  <div class="detai">
                    <p>USICT ACM Student Chapter is organizing an online blog writing competition "Write It Loud".
                    </p>
                    <div style="display: flex;justify-content: space-evenly;">
                      <a target="_blank" href="http://bit.do/WriteItLoud"><button class="btn announce-button-one"
                          style="background-color:#2250fc">
                          <span style="color:#fff; font-size:0.9rem">REGISTER NOW</span>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 list">
                  <img class="imag imag_trell" src="./assets/images/blog.jpeg" alt="">
                </div>
              </div>
            </div>
          </div> -->


          <!-- <div class="swiper-slide">
            <div class="det">
              <div class="heading">
                <h1> -->
                  <!-- <span class="badge">
                    <span class="badge-wrap">
                      <span class="badge-icon"><svg height="14" viewBox="0 0 14 14" width="14"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M7 2.333c2.577 0 4.667 2.09 4.667 4.667S9.577 11.667 7 11.667 2.333 9.577 2.333 7 4.423 2.333 7 2.333zm0 1.05c-1.997 0-3.617 1.62-3.617 3.617 0 1.997 1.62 3.617 3.617 3.617 1.997 0 3.617-1.62 3.617-3.617 0-1.997-1.62-3.617-3.617-3.617z">
                          </path>
                        </svg><span class="badge-icon-inner"><svg aria-hidden="true" focusable="false"
                            viewbox="0 0 14 28">
                            <path
                              d="M7 9.567c1.418 0 2.567-1.15 2.567-2.567 0-1.418-1.15-2.567-2.567-2.567-1.418 0-2.567 1.15-2.567 2.567 0 1.418 1.15 2.567 2.567 2.567z">
                            </path>
                          </svg></span></span><span class="badge-text">LIVE</span>
                    </span>
                  </span> -->
                  <!-- Research Cell Daily sessions on Algorithms</h1>
              </div>
              <div class="row det-row">
                <div class="col-md-7 divide">
                  <div class="detai">
                    <p>Language and Algorithms are the most important part of a coder’s journey. ACM Research Cell, club
                      of USICT ACM Student Chapter have started with two one hour-long sessions for the development of
                      algorithms and language for the students. The sessions are taken by Prateek Thakur, ACM Research
                      Cell lead.
                    </p>
                    <div style="display: flex;justify-content: space-evenly;">
                      <a target="_blank"
                        href="https://youtube.com/playlist?list=PLgPSSnf8lP5DccQMtvI06gKEcImGW_xXs"><button class="btn"
                          style="background-color:#2250fc">
                          <span style="color:#fff; font-size:0.9rem">PREVIOUS SESSIONS</span>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 list">
                  <img class="imag" src="./assets/images/algorithm-sessions.jpg" alt="" width="100%">
                </div>
              </div> -->

<!-- 
            </div>
          </div>
        </div>
        <!-- <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
      </div>
    </div> -->
  <!-- </section> -->

<!-- ******************************************Blogs******************************************* -->

  <script>
    function readMoreRedirection(id) {
      console.log(id)
      window.document.location = "./singleBlog.php?Id="+id; //Connecting Second page
    }
  </script>

  <!-- <section class="announcement">
    <h1 class="section-heading announce">Announcements</h1>
    <div class="container-fluid text">
      <div class="swiper-container swiper-container-horizontal">
        <div class="swiper-wrapper" id="allAnnouncements"></div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section> -->

  <?php 
    require_once "./announcement.php";
  ?>

  <section class="text-center">
    <div class="container">
      <h2 class="display-4 font-weight-bold my-3">Recent Blogs</h2>
      <div class="row justify-content-center" id="threeBlogsRow"></div>
      <a href="./blogs.php">
        <button class="btn meet-us" style="background-color:#2250fc; margin-top: 20px;">
          <span style="color:#fff; font-size:1rem">SEE MORE BLOGS</span>
        </button>
      </a>
    </div>    
  </section>

  <script>
    var rwBlogs = document.getElementById("threeBlogsRow");
    rwBlogs.innerHTML = "";

    let url1 = "./admin/blogAdmin/api.php/?q=readHome"

    $(document).ready(function(){
      $.ajax({
        url: url1,
        method: "GET",
        dataType: "JSON",
        success: function(data){
            var i;
            for(i=1;i<4;i++){
              myFunc(data[i-1],i)
            }

            function myFunc(row,index){
              var desc = row.Content;
              var descSub = desc.substring(0, 70) + '...';
              rwBlogs.innerHTML += 
              "<div class=col-lg-4 col-md-6 col-12 my-3>\
                <div class=mb-4>\
                <img src=./" + row.Image + " id=blog1_image class=img-fluid alt=Sample image style='height: 12rem'>\
                </div>\
                <a href=#! class=pink-text>\
                  <h6 class=font-weight-bold mb-3>\
                    <i id=blog1_category class=fas fa-map pr-2>"+ row.Category +"</i>\
                  </h6>\
                </a>\
                <h4 id=blog1_title class=font-weight-bold mb-3 style=color: black;>"+ row.Title +"<strong></strong></h4>\
                <p >by <a id=blog1_author class=font-weight-bold style=color: black;>"+ row.Author +"</a>, <p id=blog1_date></p></p>\
                <p class=d-inline id=blog1_content>"+ descSub +"</p>\
                <a style=color:blue;cursor:pointer onclick=readMoreRedirection("+ row.Sno +") id=readMore_blog1 class=d-inline style=color: #2250fc;>Read More</a>\
              </div>"   
            }
        }
      });
    });
  </script>

  <script>
    var allAnn = document.getElementById("allAnnouncements");
    allAnn.innerHTML = "";

    let url = "./admin/blogAdmin/api.php/?q=readAllAnnouncements";

    $(document).ready(function(){
      $.ajax({
        url: url,
        method: "GET",
        dataType: "JSON",
        success: function(data){
          console.log("all announcements",data);
            data.forEach(myfunc1);
            function myfunc1(row, index) {
              allAnn.innerHTML += "<div class='swiper-slide'>\
            <div class=det>\
              <div class=heading>\
                <h1>\
                  <span class=badge>\
                    <span class=badge-wrap>\
                      <span class=badge-icon><svg height=14 viewBox=0 0 14 14 width=14 xmlns=http://www.w3.org/2000/svg>\
                          <path d=M7 2.333c2.577 0 4.667 2.09 4.667 4.667S9.577 11.667 7 11.667 2.333 9.577 2.333 7 4.423 2.333 7 2.333zm0 1.05c-1.997 0-3.617 1.62-3.617 3.617 0 1.997 1.62 3.617 3.617 3.617 1.997 0 3.617-1.62 3.617-3.617 0-1.997-1.62-3.617-3.617-3.617z>\
                          </path>\
                        </svg><span class=badge-icon-inner><svg aria-hidden=true focusable=false viewbox=0 0 14 28>\
                            <path d=M7 9.567c1.418 0 2.567-1.15 2.567-2.567 0-1.418-1.15-2.567-2.567-2.567-1.418 0-2.567 1.15-2.567 2.567 0 1.418 1.15 2.567 2.567 2.567z>\
                            </path>\
                          </svg></span></span><span class=badge-text>LIVE</span>\
                    </span>\
                  </span>Session On React Native</h1>\
              </div>\
              <div class='row det-row'>\
                <div class='col-md-7 divide'>\
                  <div class=detai>\
                    <p>Greetings everyone!!!<br>\
                    </p>\
                    <div style=display: flex;justify-content: space-evenly;>\
                      <a target=_blank href=http://bit.do/ReactNativeWorkshop>\
                        <button class='btn announce-button-one' style=background-color:#2250fc>\
                          <span style=color:#fff; font-size:0.9rem>REGISTER NOW</span>\
                        </button>\
                      </a>\
                      <a target=_blank href=https://youtube.com/playlist?list=PLgPSSnf8lP5CubPwhgIk9n4FUhFN5nc3L><button class=btn style=background-color:#2250fc>\
                          <span style=color:#fff; font-size:0.9rem>VIEW RESOURCES</span>\
                        </button>\
                      </a>\
                    </div>\
                  </div>\
                </div>\
                <div class='col-md-5 list'>\
                  <img class='imag imag_trell' src=./assets/images/ReactNative.png alt=Nothing>\
                </div>\
              </div>\
            </div>\
          </div>"
            }
          }
        });
      });

 
  </script>

  <!--  *******************************************************************EVENTS*********************************************-->


  <section class="event-sec">
    <div class="container events">
      <img src="./assets/images/events.png" style="width: 90px;margin-bottom: 5vh;" alt="">
      <h1 class="section-heading announce">Events & Announcements</h1>
      <!-- ********************************************EVENT ARD***************************************************  -->
      <div class="wrapper">
        <div class="link_wrapper">
          <a href="./events.php">Know More!</a>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
              <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--*******************************************************************TEAM******************************************-->
  <section>
    <div class="container-fluid teams" id="team">
      <img src="./assets/images/31-317832_our-team-old-oak-housing-apartment-clip-art.png" style="width:80px;" alt="">
      <h1 class="section-heading">Meet Our Team</h1>
      <br><br>
      <div class="row">
        <div class="col-md-4">
          <div class="row team-sir">
            <div class="col head-office">
              <div class="team-lead">
                <img class="dean-sir" src="./assets/images/team/deanSir.jpeg" alt="">
              </div>
              <p class="team-memberName">Prof. Pravin Chandra</p>
              <p>Dean, USICT</p>
            </div>

            <!-- <div class="row"> -->
            <div class="col head-office">
              <div class="team-lead">
                <img class="dean-sir" src="./assets/images/team/rahulsir.jpg" alt="">
              </div>

              <p class="team-memberName">Dr. Rahul Johari</p>
              <p>Branch Head, ACM USICT</p>
            </div>
            <!-- </div> -->
          </div>

        </div>
        <div class="col-md-8 team-member">
          <div class="row">
            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/Gaurav.png" alt="">
                <div class="content">
                  <a href="https://linkedin.com/in/gauravj22" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>

              <p class="team-memberName">Gaurav Jain</p>
              <p>Chair</p>
            </div>

            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/vardaan.jpg" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/vardaan-grover-8a64141a0/" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Vardaan Grover</p>
              <p>Vice-Chair</p>
            </div>

            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/Akshad.jpg" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/akshad-bhandula-073202113/" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Akshad Bhandula</p>
              <p>Secretory</p>
            </div>

            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/Divyansh.jpg" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/divyansh-rastogi-08a44a171/" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Divyansh Rastogi</p>
              <p>Joint Secretary</p>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/chaitanDev.jpg" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/chaitan-dev" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Chaitan Dev</p>
              <p>Treasurer</p>
            </div>

            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/profile_pic_anmol.webp" alt="">
                <div class="content">
                  <a href="https://linkedin.com/in/anmol-goel-13b447178" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Anmol Goel</p>
              <p>Web Chair</p>
            </div>

            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/sushantHaluwai.jpg" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/sushant-haluwai-8997171b5" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Sushant Haluwai</p>
              <p>Executive Member</p>
            </div>

            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/harshGoyal.png" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/harsh-goyal-195255b9" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Harsh Goyal</p>
              <p>Executive Member</p>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/Manoj.jpg" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/manoj-kumar-a4a215195/" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Manoj Kumar</p>
              <p>Executive Member</p>
            </div>

            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/Anuj.jpg" height="inherit" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/anuj-talwar-1281121b4/" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Anuj Talwar</p>
              <p>Executive Member</p>
            </div>

            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/Tarun.jpg" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/tarun-shekhawat-037091194/" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Tarun</p>
              <p>Executive Member</p>
            </div>

            <div class="col-md-3 col-6">
              <div class="team-mem">
                <img class="dean" src="./assets/images/team/vishesh.jpeg" alt="">
                <div class="content">
                  <a href="https://www.linkedin.com/in/vishesh-gupta-404955206/" target="_blank"><i
                      class="fab fa-linkedin team-profile"></i></a>
                </div>
              </div>
              <p class="team-memberName">Vishesh Gupta</p>
              <p>Executive Member</p>
            </div>
          </div>
        </div>
      </div>

      <a href="./team.php">
        <button class="btn meet-us" style="background-color:#2250fc">
          <span style="color:#fff; font-size:1rem">MEET US</span>
        </button>
      </a>

  </section>

  <!--************************************************************Get In touch******************************************-->
  <section id="contact" class="background-grey"
    style="background-color: white;background-image: url('./assets/images/left_bg.png')">
    <div class="container">
      <div class="m-b-50" style="text-align: center;">
        <img style="width: 90px; margin-bottom: 5vh; " class="text-center" src="./assets/images/contact_us_icon.png"
          alt="">
        <p class="text section-heading">Get in touch</p>
        <p class="text-small" style="color: #373f41; font-weight: normal;">Feel free to contact us if you need some help, consultations or you have some other questions.</p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img class=" contact-us-img m-t-20" style="    width: 100%;" src="./assets/images/contact_us.png"
            alt="contact us image">
        </div>
        <div class="col-lg-6">
          <form class="widget-contact-form"
            action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeW8dszRK5ynb6HS51X7fGrfW7su1_8JFL0Tm3hWfbfdpZiCQ/formResponse"
            role="form" method="post" target="_self" novalidate="novalidate">
            <div class="row" style="margin-top:2rem">
              <div class="form-group col-md-6">
                <input type="text" aria-required="true" name="entry.360262149"
                  class="form-input-boxes-manual form-control" placeholder="Name" style="color: grey;" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" aria-required="true" name="entry.1979735424"
                  class="form-input-boxes-manual form-control required email" placeholder="Email" style="color: grey;">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="entry.1199769641" class="form-input-boxes-manual form-control"
                  placeholder="Phone Number" style="color: grey;">
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="entry.154355220" class="form-input-boxes-manual form-control"
                  placeholder="Organization / College" style="color: grey;">
              </div>
            </div>
            <div class="form-group">
              <textarea type="text" name="entry.1544463438" rows="5"
                class="form-control form-input-boxes-manual required" placeholder="Message" style="color: grey;"
                aria-required="true"></textarea>
            </div>
            <div class="d-flex justify-content-end">
              <div class="justify-content-center align-items-center">
                <button class="btn" type="submit" style="background-color: #4169E1; color:#fff; margin-right:10px"
                  onclick="setColor(event)"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

<!-- =================================Follwer count========================================= -->

  <section style="background-color: #fff; background-image: url('./assets/images/right_up.png'); height:20%; ">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="text-center">
            <div class="f-icon"><a href="https://facebook.com/acmusict" target="_blank"><i
                  class="fa fa-4x fa-facebook-square"></i></a>
            </div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="700"
                data-from="0" data-target="700" data-seperator="true">700</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count">Facebook Likes</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="text-center">
            <div class="l-icon"><a href="https://linkedin.com/company/acmusict" target="_blank"><i
                  class="fab fa-4x fa-linkedin"></i></a></div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="200"
                data-from="0" data-target="200" data-seperator="true">1000</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count"> LinkedIn Reach</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="text-center">
            <div class="i-icon"><a href="https://instagram.com/acmusict" target="_blank"><i
                  class="fa fa-4x fa-instagram"></i></a></div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="180"
                data-from="0" data-target="205" data-seperator="true">300+</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count">Instagram Followers</p>
          </div>
        </div>

        <!-- <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <div class="c-icon"><a href="https://discord.gg/3Z5mJMCWEa" target="_blank"><i class="fab fa-4x fa-discord"></i></a></div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="100"
                data-from="0" data-target="100" data-seperator="true">300+</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count">Discord</p>
          </div>
        </div> -->

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="text-center">
            <div class="c-icon"><a href="./index.php"><i class="fa fa-4x fa-child"></i></a></div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="100"
                data-from="0" data-target="100" data-seperator="true">1000+</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count">Connected Students</p>
          </div>
        </div>

        <!-- <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <div class="f-icon"><a href="https://facebook.com/acmusict" target="_blank"><i
                  class="fa fa-4x fa-facebook-square"></i></a>
            </div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="700"
                data-from="0" data-target="700" data-seperator="true">700</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count">Facebook Likes</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <div class="l-icon"><a href="https://linkedin.com/company/acmusict" target="_blank"><i
                  class="fab fa-4x fa-linkedin"></i></a></div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="200"
                data-from="0" data-target="200" data-seperator="true">1000</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count"> LinkedIn Reach</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <div class="i-icon"><a href="https://instagram.com/acmusict" target="_blank"><i
                  class="fa fa-4x fa-instagram"></i></a></div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="180"
                data-from="0" data-target="205" data-seperator="true">300+</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count">Instagram Followers</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <div class="c-icon"><a href="https://discord.gg/3Z5mJMCWEa" target="_blank"><i class="fab fa-4x fa-discord"></i></a></div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="100"
                data-from="0" data-target="100" data-seperator="true">300+</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count">Discord</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <div class="c-icon"><a href="./index.php"><i class="fa fa-4x fa-child"></i></a></div>
            <div class="counter"> <span class="count" data-speed="3000" data-refresh-interval="50" data-to="100"
                data-from="0" data-target="100" data-seperator="true">1000+</span> </div>
            <div class="seperator seperator-small"></div>
            <p class="follower-count">Connected Students</p>
          </div>
        </div> -->
      </div>
    </div>
  </section>


 <!-- ==================================Footer==================================== -->
 <?php
      include('footer.php');
    ?>
  <script src="./assets/JS/glider.js"></script>
  <script src="./assets/JS/main.js"></script>
  
  </script>
</body>

</html>