<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('./head.php');
  ?>
  <title>GGSIP University USS ACM Student Chapter</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
  <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
  <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700'><link rel="stylesheet" href="./style.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link href="./assets/CSS/events.css" rel="stylesheet" />
  <link href="assets/CSS/header.css" rel="stylesheet" />
  <link href="assets/CSS/footer.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/CSS/newStyle.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
  <!-- <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script> -->
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'> -->
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
  <style>
    .minheight{
      min-height: 100vh;
    }
    
  </style>

</head>

<body>
  <!-- ************************************************Navbar******************************************************************************-->
  <?php

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

</section>






















  <?php
  include("contact.php")
  ?>
  <!-- ***********************************************Footer************************************************************************ -->
  <?php
  include('footer.php');
  ?>
  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="assets\JS\home_new.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script> -->
  <script src="./script.js"></script>
  
</body>

</html>