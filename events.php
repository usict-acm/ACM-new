<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('./head.php');
  ?>
  <title>GGSIP University USS ACM Student Chapter</title>

  <link href="assets/CSS/header.css" rel="stylesheet" />

  <link href="assets/CSS/footer.css" rel="stylesheet" />

  <link rel="stylesheet" href="./assets/CSS/newStyle.css" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script>

  <link rel='stylesheet' href='https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css'>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="./assets/CSS/events.css" rel="stylesheet" />

</head>

<body>
  <!-- ************************************************Navbar******************************************************************************-->
  <?php
  // $currentPage = 'blogs';
  include('./header.php');
  ?>

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

  <!-------------------------------------------------- START OF CURRENT EVENTS ------------------------------------------------- -->
  <div class="blu d-flex flex-row p-0 w-100 justify-content-center">
    <h1 class="fw-bold display-3 p-0 m-0 mx-2 text-primary">Current</h1>
    <h1 class="fw-bold display-3 mx-2">Events</h1>
  </div>
<div class="current-event">
  <div class="row">
  <div class="col-6">
    <div class="news">
      <div class="news-card">
        <div class="news-image">
          <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg " class="card-img-top" alt="news">
        </div>
        <div class="news-title">
          <h3>The News of News German Style</h3>
          <span>Lorem ipsum sit dolor amit</span>
        </div>
        <div class="news-meta">
          Online News
        </div>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="news">
      <div class="news-card">
        <div class="news-image">
          <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg " class="card-img-top" alt="news">
        </div>
        <div class="news-title">
          <h3>The News of News German Style</h3>#
          <span>Lorem ipsum sit dolor amit</span>
        </div>
        <div class="news-meta">
          Online News
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <!-------------------------------------------------- END OF CURRENT EVENTS ------------------------------------------------- -->

  <div class="blu d-flex flex-row p-0 w-100 justify-content-center">
    <h1 class="fw-bold display-3 p-0 m-0 mx-2 text-primary">Previous</h1>
    <h1 class="fw-bold display-3 mx-2">Events</h1>
  </div>


  <div id="carouselExampleCaptions" class="carousel container slide my-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.pexels.com/photos/919734/pexels-photo-919734.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="70vw" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="70vw" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/919734/pexels-photo-919734.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="70vw" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <div class="blu d-flex flex-row p-0 w-100 justify-content-center">
    <h1 class="fw-bold display-3 p-0 m-0 mx-2 text-primary">Gallery</h1>
    <!-- <h1 class="fw-bold display-3 mx-2">Events</h1> -->
  </div>

  <section class="Gallery my-5">
    <input type="radio" name="position" checked />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <main id="carousel">
      <div class="item"> <img class="myimg" src="https://usict.acm.org/upload/eventGallery/image4.jpg" alt="" srcset=""></div>
      <div class="item"> <img class="myimg" src="https://usict.acm.org/upload/eventGallery/image3.jpg" alt="" srcset=""></div>
      <div class="item"> <img class="myimg" src="https://usict.acm.org/upload/eventGallery/image2.jpg" alt="" srcset=""></div>
      <div class="item"> <img class="myimg" src="https://usict.acm.org/upload/eventGallery/image1.jpg" alt="" srcset=""></div>
      <div class="item"> <img class="myimg" src="https://usict.acm.org/upload/eventGallery/image3.jpg" alt="" srcset=""></div>
      <main>
  </section>




  <!-- back to top and contact us-->
  <?php
  include("contact.php")
  ?>
  <!-- ***********************************************Footer************************************************************************ -->
  <?php
  include('footer.php');
  ?>


  

<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
  <script src="assets\JS\home_new.js"></script>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>