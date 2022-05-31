<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('./head.php');
  ?>
  <title>GGSIP University USS ACM Student Chapter</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link href="./assets/CSS/events.css" rel="stylesheet" />
  <link href="assets/CSS/header.css" rel="stylesheet" />
  <link href="assets/CSS/footer.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/CSS/newStyle.css" />
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" /> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet" /> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
  <!-- <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Quicksand:400,500,700&subset=latin-ext");

    html {
      position: relative;
      overflow-x: hidden !important;
    }

    body {
      font-family: "Quicksand", sans-serif;
    }

    a,
    a:hover {
      text-decoration: none;
    }

    .icon {
      display: inline-block;
      width: 1em;
      height: 1em;
      stroke-width: 0;
      stroke: currentColor;
      fill: currentColor;
    }

    .background {
      position: fixed;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
    }

    .background:after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: linear-gradient(45deg, rgba(209, 0, 42, 0.6) 0%, #0E5DC4 100%);
      opacity: 0.9;
    }

    .background img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      pointer-events: none;
      user-select: none;
    }

    .item-bg {
      width: 300px;
      height: 500px;
      position: absolute;
      top: 30px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 6px 26px 6px rgba(0, 0, 0, 0.25);
      opacity: 0;
      transition: all 0.3s;
      left: -30px;
    }

    .item-bg.active {
      left: 0;
      top: 0;
      opacity: 1;
    }

    .news-slider {
      z-index: 2;
      max-width: 1300px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 60px;
    }

    @media screen and (max-width: 1300px) {
      .news-slider {
        max-width: 1000px;
      }
    }

    @media screen and (max-width: 576px) {
      .news-slider {
        margin-top: 45px;
      }
    }

    .news-slider__wrp {
      display: flex;
      align-items: flex-start;
      position: relative;
      z-index: 2;
    }

    .news-slider__item {
      width: 400px !important;
      flex-shrink: 0;

    }

    @media screen and (max-width: 992px) {
      .news-slider__item {
        width: 340px;
      }
    }

    .news-slider__item.swiper-slide {
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s;
    }

    .news-slider__item.swiper-slide-active,
    .news-slider__item.swiper-slide-prev,
    .news-slider__item.swiper-slide-next {
      opacity: 1;
      pointer-events: auto;
    }

    .news-slider__ctr {
      position: relative;
      z-index: 12;
    }

    .news-slider__arrow {
      background: #fff;
      border: none;
      display: inline-flex;
      width: 50px;
      height: 50px;
      justify-content: center;
      align-items: center;
      box-shadow: 0 6px 26px 6px rgba(0, 0, 0, 0.25);
      border-radius: 50%;
      position: absolute;
      top: 50%;
      z-index: 12;
      cursor: pointer;
      outline: none !important;
    }

    .news-slider__arrow:focus {
      outline: none !important;
    }

    .news-slider__arrow .icon-font {
      display: inline-flex;
    }

    .news-slider__arrow.news-slider-prev {
      left: 15px;
      transform: translateY(-50%);
    }

    .news-slider__arrow.news-slider-next {
      right: 15px;
      transform: translateY(-50%);
    }

    .news-slider__pagination {
      text-align: center;
      margin-top: 50px;
    }

    .news-slider__pagination .swiper-pagination-bullet {
      width: 13px;
      height: 10px;
      display: inline-block;
      background: #fff;
      opacity: 0.2;
      margin: 0 5px;
      border-radius: 20px;
      transition: opacity 0.5s, background-color 0.5s, width 0.5s;
      transition-delay: 0.5s, 0.5s, 0s;
    }

    .news-slider__pagination .swiper-pagination-bullet-active {
      opacity: 1;
      background: #ffffff;
      width: 100px;
      transition-delay: 0s;
    }

    @media screen and (max-width: 576px) {
      .news-slider__pagination .swiper-pagination-bullet-active {
        width: 70px;
      }
    }

    .news__item {
      padding: 40px;
      color: #fff;
      border-radius: 10px;
      display: block;
      transition: all 0.3s;
    }

    @media screen and (min-width: 800px) {
      .news__item:hover {
        color: #222222;
        transition-delay: 0.1s;
      }

      .news__item:hover .news-date,
      .news__item:hover .news__title,
      .news__item:hover .news__txt {
        opacity: 1;
        transition-delay: 0.1s;
      }

      .news__item:hover .news__img {
        box-shadow: none;
      }
    }

    .news__item.active {
      color: #222222;
    }

    .news__item.active .news-date,
    .news__item.active .news__title,
    .news__item.active .news__txt {
      opacity: 1;
    }

    .news__item.active .news__img {
      box-shadow: none;
    }

    @media screen and (max-width: 992px) {
      .news__item {
        padding: 30px;
      }
    }

    @media screen and (max-width: 576px) {
      .news__item {
        padding: 20px;
      }
    }

    .news-date {
      padding-bottom: 20px;
      margin-bottom: 20px;
      border-bottom: 2px solid;
      display: inline-block;
      opacity: 0.7;
      transition: opacity 0.3s;
    }

    @media screen and (max-width: 576px) {
      .news-date {
        margin-bottom: 10px;
        display: inline-flex;
        align-items: center;
        padding-bottom: 0;
      }
    }

    .news-date__title {
      display: block;
      font-size: 32px;
      margin-bottom: 10px;
      font-weight: 500;
    }

    @media screen and (max-width: 576px) {
      .news-date__title {
        margin-right: 10px;
      }
    }

    .news-date__txt {
      font-size: 16px;
    }

    .news__title {
      font-size: 25px;
      font-weight: 500;
      opacity: 0.7;
      margin-top: 10px;
      margin-bottom: 15px;
      transition: opacity 0.3s;
    }

    @media screen and (max-width: 576px) {
      .news__title {
        font-size: 22px;
        margin-bottom: 10px;
      }
    }

    .news__txt {
      margin: 10px 0;
      line-height: 1.6em;
      font-size: 15px;
      opacity: 0.7;
      transition: opacity 0.3s;
    }

    .news__img {
      border-radius: 10px;
      box-shadow: 0 6px 26px 6px rgba(0, 0, 0, 0.25);
      height: 200px;
      margin-top: 30px;
      width: 100%;
      transition: all 0.3s;
      transform-origin: 0% 0%;
    }

    @media screen and (max-width: 576px) {
      .news__img {
        height: 180px;
        margin-top: 20px;
      }
    }

    .news__img img {
      max-width: 100%;
      border-radius: 10px;
      height: 100%;
      width: 100%;
    }

    .background {
      width: 100vw !important;
    }

    .foot {
      /* position: relative; */
      /* z-index: 1000; */
      height: 40vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      /* margin-left: -284px !important; */
      /* width: 100vw; */
      /* background-color: #fff !important;
      background-image: none !important; */
    }

    .options {
      position: relative;
      z-index: 1;
      height: 40vh;
    }

    .optionhandle {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .myH1 {
      height: 6rem !important;
      margin-bottom: 4vh !important;
      position: relative;
      z-index: 1;
    }
    .subh{
      width: 60%;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
  </style>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
  <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
  <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>

</head>

<body>
  <!-- ************************************************Navbar******************************************************************************-->
  <?php
  // $currentPage = 'blogs';
  include('./header.php');
  ?>




  <!-- <section>
    <div class="leftBox">
      <div class="content">
        <h1>Events</h1>
        <p>“Words can do only much without actions”</p>
        <p>We organize various events and workshops every year to make sure that you learn with the competition. Let’s go through the highlights of this enthralling journey that promises to get better with time.</p>
      </div>

      <div class="content live-event">
        <span class="badge">
                          <span class="badge-wrap">
                            <span class="badge-icon"><svg height="14" viewBox="0 0 14 14" width="14" xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7 2.333c2.577 0 4.667 2.09 4.667 4.667S9.577 11.667 7 11.667 2.333 9.577 2.333 7 4.423 2.333 7 2.333zm0 1.05c-1.997 0-3.617 1.62-3.617 3.617 0 1.997 1.62 3.617 3.617 3.617 1.997 0 3.617-1.62 3.617-3.617 0-1.997-1.62-3.617-3.617-3.617z">
                                </path>
                              </svg><span class="badge-icon-inner"><svg aria-hidden="true" focusable="false" viewbox="0 0 14 14">
                                  <path
                                    d="M7 9.567c1.418 0 2.567-1.15 2.567-2.567 0-1.418-1.15-2.567-2.567-2.567-1.418 0-2.567 1.15-2.567 2.567 0 1.418 1.15 2.567 2.567 2.567z">
                                  </path>
                                </svg></span></span><span class="badge-text">LIVE</span>
                          </span>
                        </span>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval=3000>

          <div class="carousel-inner" id="carousel" style="height: 100%;"></div>

          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>

        </div>
      </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      let urlcarousel = './admin/blogAdmin/api.php/?q=carousel';
      let carouselDIV = document.getElementById("carousel");

      $(document).ready(function() {
        $.ajax({
          url: urlcarousel,
          method: 'GET',
          dataType: 'JSON',
          success: function(data) {
            console.log("check data 123 ", data);
            carouselDIV.innerHTML += " <div class='carousel-item active'>\
                                                    <img src=" + data[0].poster + "  class='live-carousel-img'>\
                                                  </div>";
            console.log(data[0].poster);
            console.log(carouselDIV);

            function carouselfunction() {

              for (i = 1; i < data.length; i++) {
                carouselDIV.innerHTML += " <div class='carousel-item'>\
                                                      <img src=" + data[i].poster + "  class='live-carousel-img'>\
                                                    </div>";
              }
            }
            carouselfunction();
            console.log(carouselDIV);
          },
        });
      });
    </script>


    <div class="events">
      <ul id="eventIndex">

      </ul>
    </div>
  </section>

  <div class="quotes" id="galleryImage">
  </div>

  <script>
    let url = './admin/blogAdmin/api.php/?q=getImage';
    var galleryImage = document.getElementById("galleryImage");
    galleryImage.innerHTML = "";

    $(document).ready(function() {
      $.ajax({
        url: url,
        method: 'GET',
        dataType: 'JSON',
        success: function(data) {
          console.log("gallery data", data);
          data.forEach(myFunc);

          function myFunc(row, index) {
            galleryImage.innerHTML += " <img class='quote-img' style='transition: 2s;' src=" + row.Image + " alt=' ' />";
          }
        }
      })
    })
  </script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script>
    let urlEventIndex = './admin/blogAdmin/api.php/?q=getYearEvent';
    let yearWiseEvent = document.getElementById("eventIndex");
    let numberOfEvents = 0;
    
    $(document).ready(function() {
      $.ajax({
        url: urlEventIndex,
        method: 'GET',
        dataType: 'JSON',
        success: function(data) {
          console.log("check data ", data);
          data.forEach(allEventmore);
          
          function allEventmore(event) {
            let urlYear = './admin/blogAdmin/api.php/?q=readAllEvent&year=' + event.year;
            $.ajax({
              url: urlYear,
              method: 'GET',
              async: false,
              dataType: 'JSON',
              success: function(dataNumber) {
                console.log(urlYear);
                console.log("dataNumber", dataNumber);
                numberOfEvents = dataNumber[1];
                console.log("numberrrr", numberOfEvents);
                yearWiseEvent.innerHTML += " <li style='height:150px;'>\
                  <div class='time'>\
                    <h2>" + event.year + " <br><span></span></h2>\
                  </div>\
                  <div class='details'>\
                    <h3 style='color: black;font-weight: bolder;'>" + numberOfEvents + " " + event.numberOfEvents + " </h3>\
                                                    <p style='font-size:large; color: #e91e63;font-weight: bolder;'>" + event.heading + "</p>\
                                                    <p style='text-align: end; margin-right: 2px; font-size: smaller; color:#0297ff;'>" + event.more + "</p>\
                                                    <a  href='./eventYear.php?year=" + event.year + "'>View details</a>\
                                                  </div>\
                                                  <div style='clear: both;'></div>\
                                                </li>";
                                              }
                                            })
                                          }
                                        },
                                        error: function(error) {
                                          console.log(error);
                                        },
                                      });
                                    });
                                  </script>
                                  back to top and contact us -->
  <section>


    <div class="wrapper">
      <h1 class="display-1 my-3 text-center myH1">Events</h1>

      <div class="subh"><h4 class="myH1 h4 text-center myh4">“Words can do only much without actions”
                                    <br>
        We organize various events and workshops every year to make sure that you learn with the competition. Let’s go through the highlights of this enthralling journey that promises to get better with time.</h4></div>
      

      <div class="optionhandle my-3">


        <div class="options">
          <div class="option active" style="--optionBackground:url(https://66.media.tumblr.com/6fb397d822f4f9f4596dff2085b18f2e/tumblr_nzsvb4p6xS1qho82wo1_1280.jpg);">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-walking"></i>
              </div>
              <div class="info">
                <div class="main">Blonkisoaz</div>
                <div class="sub">Omuke trughte a otufta</div>
              </div>
            </div>
          </div>
          <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/8b69cdde47aa952e4176b4200052abf4/tumblr_o51p7mFFF21qho82wo1_1280.jpg);">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-snowflake"></i>
              </div>
              <div class="info">
                <div class="main">Oretemauw</div>
                <div class="sub">Omuke trughte a otufta</div>
              </div>
            </div>
          </div>
          <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/5af3f8303456e376ceda1517553ba786/tumblr_o4986gakjh1qho82wo1_1280.jpg);">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-tree"></i>
              </div>
              <div class="info">
                <div class="main">Iteresuselle</div>
                <div class="sub">Omuke trughte a otufta</div>
              </div>
            </div>
          </div>
          <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/5516a22e0cdacaa85311ec3f8fd1e9ef/tumblr_o45jwvdsL11qho82wo1_1280.jpg);">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-tint"></i>
              </div>
              <div class="info">
                <div class="main">Idiefe</div>
                <div class="sub">Omuke trughte a otufta</div>
              </div>
            </div>
          </div>
          <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/f19901f50b79604839ca761cd6d74748/tumblr_o65rohhkQL1qho82wo1_1280.jpg);">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-sun"></i>
              </div>
              <div class="info">
                <div class="main">Inatethi</div>
                <div class="sub">Omuke trughte a otufta</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="background">
        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132206/news-slider/background.webp" alt="">
      </div>
      <div class="item-bg"></div>

      <div class="news-slider">
        <div class="news-slider__wrp swiper-wrapper">
          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">2019</span>
              </div>
              <div class="news__title">
                Lorem Ipsum Dolor Sit Amed
              </div>

              <p class="news__txt">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                <button class="btn btn-primary my-3">See All Events</button>
              </p>

              <div class="news__img">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-2.webp" alt="news">
              </div>
            </a>
          </div>

          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">2020</span>
              </div>
              <div class="news__title">
                Lorem Ipsum Dolor Sit Amed
              </div>

              <p class="news__txt">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                <button class="btn btn-primary my-3">See All Events</button>
              </p>

              <div class="news__img">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-3.webp" alt="news">
              </div>
            </a>
          </div>

          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">2021</span>
              </div>
              <div class="news__title">
                Lorem Ipsum Dolor Sit Amed
              </div>

              <p class="news__txt">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                <button class="btn btn-primary my-3">See All Events</button>
              </p>

              <div class="news__img">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-4.webp" alt="news">
              </div>
            </a>
          </div>

          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">2022</span>
              </div>
              <div class="news__title">
                Lorem Ipsum Dolor Sit Amed
              </div>

              <p class="news__txt">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                <button class="btn btn-primary my-3">See All Events</button>
              </p>

              <div class="news__img">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-2.webp" alt="news">
              </div>
            </a>
          </div>

          <!-- <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">28</span>
                <span class="news-date__txt">May</span>
              </div>
              <div class="news__title">
                Lorem Ipsum Dolor Sit Amed
              </div>
              
              <p class="news__txt">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
              </p>
              
              <div class="news__img">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-5.webp" alt="news">
              </div>
            </a>
          </div> -->

          <!-- <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">29</span>
                <span class="news-date__txt">May</span>
              </div>
              <div class="news__title">
                Lorem Ipsum Dolor Sit Amed
              </div>
              
              <p class="news__txt">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
              </p>
              
              <div class="news__img">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-4.webp" alt="news">
              </div>
            </a>
          </div> -->
        </div>

        <div class="news-slider__ctr">

          <div class="news-slider__arrows">
            <button class="news-slider__arrow news-slider-prev">
              <span class="icon-font">
                <svg class="icon icon-arrow-left">
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </span>
            </button>
            <button class="news-slider__arrow news-slider-next">
              <span class="icon-font">
                <svg class="icon icon-arrow-right">
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </span>
            </button>
          </div>

          <div class="news-slider__pagination"></div>

        </div>

        <div class="foot">
          <div class="quotes">
            <img class="quote-img" src="./assets/images/About us/image1.jpg" alt="" />
            <img class="quote-img" src="./assets/images/About us/image2.jpg" alt="" />
            <img class="quote-img" src="./assets/images/About us/image31.jpg" alt="" />
            <img class="quote-img" src="./assets/images/About us/image4.jpg" alt="" />
            <img class="quote-img" src="./assets/images/trell-4.jpeg" alt="" />
          </div>

        </div>
      </div>

    </div>

    <svg hidden="hidden">
      <defs>
        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
          <title>arrow-left</title>
          <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
        </symbol>
        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
          <title>arrow-right</title>
          <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
        </symbol>
      </defs>
    </svg>

  </section>



















  <?php
  include("contact.php")
  ?>
  <!-- ***********************************************Footer************************************************************************ -->
  <?php
  include('footer.php');
  ?>
  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
  <script src="assets\JS\home_new.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
  <script src="./script.js"></script>
  <script>
    var bg = document.querySelector('.item-bg');
    var items = document.querySelectorAll('.news__item');
    var item = document.querySelector('.news__item');

    function cLog(content) {
      console.log(content)
    }

    if ($(window).width() > 800) {
      $(document).on("mouseover", ".news__item", function(_event, _element) {

        var newsItem = document.querySelectorAll('.news__item');
        newsItem.forEach(function(element, index) {
          element.addEventListener('mouseover', function() {
            var x = this.getBoundingClientRect().left;
            var y = this.getBoundingClientRect().top;
            var width = this.getBoundingClientRect().width;
            var height = this.getBoundingClientRect().height;

            $('.item-bg').addClass('active');
            $('.news__item').removeClass('active');
            // $('.news__item').removeClass('active');


            bg.style.width = width + 'px';
            bg.style.height = height + 'px';
            bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
          });

          element.addEventListener('mouseleave', function() {
            $('.item-bg').removeClass('active');
            $('.news__item').removeClass('active');
          });

        });

      });
    }


    var swiper = new Swiper('.news-slider', {
      effect: 'coverflow',
      grabCursor: true,
      loop: true,
      centeredSlides: true,
      keyboard: true,
      spaceBetween: 0,
      slidesPerView: 'auto',
      speed: 300,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 3,
        slideShadows: false
      },
      breakpoints: {
        480: {
          spaceBetween: 0,
          centeredSlides: true
        }
      },
      simulateTouch: true,
      navigation: {
        nextEl: '.news-slider-next',
        prevEl: '.news-slider-prev'
      },
      pagination: {
        el: '.news-slider__pagination',
        clickable: true
      },
      on: {
        init: function() {
          var activeItem = document.querySelector('.swiper-slide-active');

          var sliderItem = activeItem.querySelector('.news__item');

          $('.swiper-slide-active .news__item').addClass('active');

          var x = sliderItem.getBoundingClientRect().left;
          var y = sliderItem.getBoundingClientRect().top;
          var width = sliderItem.getBoundingClientRect().width;
          var height = sliderItem.getBoundingClientRect().height;


          $('.item-bg').addClass('active');

          bg.style.width = width + 'px';
          bg.style.height = height + 'px';
          bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
        }
      }
    });

    swiper.on('touchEnd', function() {
      $('.news__item').removeClass('active');
      $('.swiper-slide-active .news__item').addClass('active');
    });

    swiper.on('slideChange', function() {
      $('.news__item').removeClass('active');
    });

    swiper.on('slideChangeTransitionEnd', function() {
      $('.news__item').removeClass('active');
      var activeItem = document.querySelector('.swiper-slide-active');

      var sliderItem = activeItem.querySelector('.news__item');

      $('.swiper-slide-active .news__item').addClass('active');

      var x = sliderItem.getBoundingClientRect().left;
      var y = sliderItem.getBoundingClientRect().top;
      var width = sliderItem.getBoundingClientRect().width;
      var height = sliderItem.getBoundingClientRect().height;


      $('.item-bg').addClass('active');

      bg.style.width = width + 'px';
      bg.style.height = height + 'px';
      bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
    });

    $(".option").click(function() {
      $(".option").removeClass("active");
      $(this).addClass("active");

    });
  </script>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<!-- <script src='https://codepen.io/z-/pen/jvReOb/a8e37caf2a04602ea5815e5acedab458.js'></script> -->

</html>