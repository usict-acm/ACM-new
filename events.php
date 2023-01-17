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
</head>

<body>
  <!-- ************************************************Navbar******************************************************************************-->
  <?php
  // $currentPage = 'blogs';
  include('./header.php');
  ?>

  <section>
    <div class="leftBox">
      <div class="content">
        <h1>Events</h1>
        <p>“Words can do only much without actions”</p>
        <p>We organize various events and workshops every year to make sure that you learn with the competition. Let’s go through the highlights of this enthralling journey that promises to get better with time.</p>
      </div>

      <div class="content live-event">
        <!-- <span class="badge">
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
                        </span> -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval=3000>

          <div class="carousel-inner" id="carousel" style="height: 100%;"></div>

          <!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a> -->

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
            //console.log("check data 123 ", data);
            carouselDIV.innerHTML += " <div class='carousel-item active'>\
                                                    <img src=" + data[0].poster + "  class='live-carousel-img'>\
                                                  </div>";
            //console.log(data[0].poster);
            //console.log(carouselDIV);

            function carouselfunction() {

              for (i = 1; i < data.length; i++) {
                carouselDIV.innerHTML += " <div class='carousel-item'>\
                                                      <img src=" + data[i].poster + "  class='live-carousel-img'>\
                                                    </div>";
              }
            }
            carouselfunction();
            //console.log(carouselDIV);
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
          //console.log("gallery data", data);
          data.forEach(myFunc);

          function myFunc(row, index) {
            galleryImage.innerHTML += " <img class='quote-img' style='transition: 2s;' src=" + row.Image + " alt=' ' />";
          }
        }
      })
    })
  </script>

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
          //console.log("check data ", data);
          data.forEach(allEventmore);

          function allEventmore(event) {
            let urlYear = './admin/blogAdmin/api.php/?q=readAllEvent&year=' + event.year;
            $.ajax({
              url: urlYear,
              method: 'GET',
              async: false,
              dataType: 'JSON',
              success: function(dataNumber) {
                //console.log(urlYear);
                //console.log("dataNumber", dataNumber);
                numberOfEvents = dataNumber[1];
                //console.log("numberrrr", numberOfEvents);
                yearWiseEvent.innerHTML += " <li>\
                                                <div class='time'>\
                                                    <h2>" + event.year + " <br><span></span></h2>\
                                                </div>\
                                                <div class='details'>\
                                                    <h3 style='color: black;font-weight: bolder;'>" + numberOfEvents + " events </h3>\
                                                    <p style='font-size:large; color: #e91e63;font-weight: bolder;'>" + event.heading + "</p>\
                                                    <p style='text-align: end; margin-right: 2px; font-size: smaller; color:#0092cf;'>" + event.more + "</p>\
                                                    <a  href='./eventYear.php?year=" + event.year + "'>View details</a>\
                                                </div>\
                                                <div style='clear: both;'></div>\
                                            </li>";
              }
            })
          }
        },
        error: function(error) {
          //console.log(error, "error in Ajax");
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
