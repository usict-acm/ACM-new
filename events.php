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
      <img id="hero-img" src="assets\images\bgtitle.jpeg" alt="">
      <h1 id="hover-underline-animation">EVENTS</h1>
    </div>
    <div class="title-area" id="carousel">
      
    </div>
  </section>

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
           
            carouselDIV.innerHTML += " <div class='title-text'>\
                                          <h3>'The starting point of all achievements is desire'</h3>\
                                          <h4>Register for our upcoming event</h4>\
                                          <a href ="+ data[0].button1Link +" target='_blank' > <button>"+ data[0].button1Text +"</button></a>\
                                        </div>\
                                        <div class='title-img'>\
                                          <img src="+ data[0].poster +" alt=''>\
                                        </div> ";
                                                  
            //console.log(data[0].poster);
            //console.log(carouselDIV);

            // function carouselfunction() {

            //   for (i = 1; i < data.length; i++) {
            //     carouselDIV.innerHTML += " <div class='carousel-item'>\
            //                                           <img src=" + data[i].poster + "  class='live-carousel-img'>\
            //                                         </div>";
            //   }
            // }
            // carouselfunction();
            //console.log(carouselDIV);
          },
        });
      });
    </script>

  <section class="yearly-events">
    <div class="events-head">
      <h1 id="hover-underline-a">YEARLY
        <b> EVENTS</b>

      </h1>
    </div>
    <div class="cards" id="eventIndex">
      

    </div>
 

  </section>
  <section class="gallary" >
    <!-- <div class="gallary-head">
      <h1 id="hover-underline-a">GALLERY</h1>
    </div> -->
    <div class="slideshow">
      <div class="content">
        <div class="slider-content" id="galleryImage">
        
        </div>
      </div>
    </div>
  </section>

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            
            galleryImage.innerHTML += " <figure class='shadow'><img src="+ row.Image +"></figure>";
          }
        }
      })
    })
  </script>

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
                yearWiseEvent.innerHTML +=  "<div class='card'>\
                                              <div id='year'>\
                                                <h4>" + event.year + " </h4>\
                                              </div>\
                                              <div class='card-text'>\
                                                <div class='no-of-events'>\
                                                  <h1 id='event-no'>" + numberOfEvents + " </h1>\
                                                  <h2 class='event-text'>&nbspEvents</h2>\
                                                </div>\
                                                <p id='tagline'>" + event.heading + "</p>\
                                                <a  href='./eventYear.php?year=" + event.year + "'><button >view details</button></a>\
                                              </div>\
                                            </div>";
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
  <!-- **Footer*** -->
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