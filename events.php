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
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
  <style>
    .minheight{
      min-height:100vh !important;
    }
  </style>
</head>

<body>
  <!-- ************************************************Navbar******************************************************************************-->
  <?php
  // $currentPage = 'blogs';
  include('./header.php');
  ?>

  <section class="minheight">

  
    <!--------------------------------------------------------------------- Start of Section -1 ---------------------------------------------------------------->
    <section id="section-1">
        <div class="hero">

            <h1>Events</h1>
            <p>“Words can do only much without actions”
            </p>
            <br>
            <p>We organize various events and workshops every year to make sure that you learn with the competition.
                <br>
                Let’s go through the highlights of this enthralling journey that promises to get better with time.
            </p>
            <span class="curve"></span>

        </div>



    </section>
    <!--------------------------------------------------------------------- End of Section -1 ---------------------------------------------------------------->

    
    <!--------------------------------------------------------------------- Start of Section -2 ---------------------------------------------------------------->

    <Section id="section-2">
        <div class="section-2-heading">
            <h1>Previous Events</h1>
        </div>
        <div class="carousel-wrapper">
            <div class="carousel" data-flickity>
                <div class="carousel-cell">
                    <h3>2019</h3>
                    <h5 class="more">"The year in which it all started."</h5>
                    <h4 class="more">8 events</h4>
                    <img
                        src="https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" />
                    <div class="line"></div>
                    <div class="button-2">
                        <span><button type="button" class="btn btn-primary">See all Events</button></span>
                    </div>
                </div>
                <div class="carousel-cell">
                    <h3>2020</h3>
                    <h5 class="more">"Pandemic cannot stop us!"</h5>
                    <h4 class="more">8 events</h4>
                    <img
                        src="https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" />
                    <div class="line"></div>
                    <div class="button-2">
                        <span><button type="button" class="btn btn-primary">See all Events</button></span>
                    </div>
                </div>
                <div class="carousel-cell">
                    <h3>2021</h3>
                    <h5 class="more">"We grow stronger and the journey is still ongoing."</h5>
                    <h4 class="more">27 events</h4>
                    <img
                        src="https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" />
                    <div class="line"></div>
                    <div class="button-2">
                        <span><button type="button" class="btn btn-primary">See all Events</button></span>
                    </div>
                </div>
                <div class="carousel-cell">
                    <h3>2022</h3>
                    <h5 class="more">"Mile by mile we hit a milestone!"</h5>
                    <h4 class="more">12 events</h4>
                    <img
                        src="https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" />
                    <div class="line"></div>
                    <div class="button-2">
                        <span><button type="button" class="btn btn-primary">See all Events</button></span>
                    </div>
                </div>
            </div>
        </div>

    </Section>

    <!--------------------------------------------------------------------- End of Section -2 ---------------------------------------------------------------->
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    </script> -->


    <!-- <div class="events">
      <ul id="eventIndex">

      </ul>
    </div> -->
  </section>

  <!-- <div class="quotes" id="galleryImage">
  </div> -->

  <!-- <script>
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
  </script> -->

  <!-- <div class="quotes">
    <img class="quote-img" src="./assets/images/About us/image1.jpg" alt="" />
    <img class="quote-img" src="./assets/images/About us/image2.jpg" alt="" />
    <img class="quote-img" src="./assets/images/About us/image31.jpg" alt="" />
    <img class="quote-img" src="./assets/images/About us/image4.jpg" alt="" />
    <img class="quote-img" src="./assets/images/trell-4.jpeg" alt="" />
  </div> -->

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
          console.log(error, "error in Ajax");
        },
      });
    });
  </script>
  <!-- back to top and contact us-->
	<?php
	include("contact.php")
	?>
  <!-- ***********************************************Footer************************************************************************ -->
  <?php
  include('footer.php');
  ?>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="assets\JS\home_new.js"></script>
</body>

</html>