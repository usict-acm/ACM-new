<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('./head.php');
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GGSIP University USS ACM Student Chapter</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Labrada:wght@500&family=Libre+Baskerville:wght@700&family=Playfair+Display:wght@500&family=Tilt+Prism&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets\CSS\events.css">
  <link rel="stylesheet" href="./assets/CSS/newStyle.css">
</head>

<body>
  <?php
  include('./header.php');
  ?>
  <section class="title">
    <div class="head">
      <img id="hero-img" src="assets\CSS\bgtitle.jpeg" alt="">
      <h1 id="hover-underline-animation">EVENTS</h1>
    </div>
    <div class="title-area">
      <div class="title-text">
        <h3>"The starting point of all achievements is desire"</h3>
        <h4>Register for our upcoming event</h4>
        <button>Register Now</button>
      </div>
      <div class="title-img">
        <img src="assets\images\Events\aagaz.jpeg" alt="">
      </div>
    </div>
  </section>
  <section class="yearly-events">
    <div class="events-head">
      <h1 id="hover-underline-a">YEARLY
        <b> EVENTS</b>

      </h1>
    </div>
    <div class="cards">
      <div class="card">
        <div id="year">
          <h4>2023</h4>
        </div>
        <div class="card-text">
          <div class="no-of-events">
            <h1 id="event-no">01</h1>
            <h2 class="event-text">Event </h2>
          </div>
          <p id="tagline">"We grow stronger and the journey is still ongoing"</p>
          <button>view details</button>
        </div>
      </div>

      <div class="card">
        <div id="year">
          <h4>2022</h4>
        </div>
        <div class="card-text">
          <div class="no-of-events">
            <h1 id="event-no">22</h1>
            <h2 class="event-text">events</h2>
          </div>
          <p id="tagline">"We grow stronger and the journey is still ongoing"</p>
          <button>view details</button>
        </div>
      </div>

      <div class="card">
        <div id="year">
          <h4>2021</h4>
        </div>
        <div class="card-text">
          <div class="no-of-events">
            <h1 id="event-no">27</h1>
            <h2 class="event-text">events</h2>
          </div>
          <p id="tagline">"We grow stronger and the journey is still ongoing"</p>
          <button>view details</button>
        </div>
      </div>

      <div class="card">
        <div id="year">
          <h4>2020</h4>
        </div>
        <div class="card-text">
          <div class="no-of-events">
            <h1 id="event-no">08</h1>
            <h2 class="event-text">events</h2>
          </div>
          <p id="tagline">"We grow stronger and the journey is still ongoing"</p>
          <button>view details</button>
        </div>
      </div>

      <div class="card">
        <div id="year">
          <h4>2019</h4>
        </div>
        <div class="card-text">
          <div class="no-of-events">
            <h1 id="event-no">08</h1>
            <h2 class="event-text">events</h2>
          </div>
          <p id="tagline">"We grow stronger and the journey is still ongoing"</p>
          <button>view details</button>
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

  </section>
  <section class="gallary">
    <div class="gallary-head">
      <h1 id="hover-underline-a">GALLERY</h1>
    </div>
    <div class="slideshow">
      <div class="content">
        <div class="slider-content">
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image1.png"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image2.png"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image3.png"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image4.png"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image5.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image6.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image7.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image8.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image9.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image10.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image11.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image12.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image13.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\image14.jpg"></figure>
          <figure class="shadow"><img src="assets\CSS\eventGallery\eventGallery\trellathon.jpeg"></figure>


        </div>
      </div>
    </div>
  </section>

  
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
	include("./contact.php")
	?>
  <!-- ***********************************************Footer************************************************************************ -->
  <?php
  include('./footer.php');
  ?>
  <script>
      function redirec(id) {
        window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
      }
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets\JS\home_new.js"></script>


</body>

</html>
