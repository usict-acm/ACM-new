<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('head.php');
  ?>
  <title>GGSIP University USS ACM Student Chapter</title>
  <link href="./assets/CSS/decodisaster3.css" rel="stylesheet" />
  <link href="./assets/CSS/header.css" rel="stylesheet" />
  <link href="./assets/CSS/footer.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/CSS/newStyle.css" />
</head>

<body>
<!-- ************************************************Navbar******************************************************************************-->
<?php
  $currentPage = 'decodisaster';
  include('header.php');
  ?>
<!-- ****************************************************Header Image**************************************************************** -->

  <div class="decodisasterimg-head">
    <section id='header'>
      <div class="pt-card row">
      </div>
    </section>
  </div>

<!-- ****************************************************Collaborators******************************************************************** -->

  <section id="collab">
    <div class="container">
      <h1 class="collab-main-heading">Deco<span class="highlight">Disaster 3.0</span>:</h1>
      <div class="row d-flex justify-content-center">
        <a class="collab-card" target="_blank" href="./assets/images/DecoDisaster/hp2.pdf">
            <div>
          <hr class="blue-hr">
          <div class="card-1"></div>
            <h1 class="collab-heading">Clue 2</h1>
          </div>
        </a>
          <a class="collab-card" target="_blank" href="./assets/images/DecoDisaster/hp3.pdf">
            <div>
            <hr class="blue-hr">
            <div class="card-2"></div>
            <h1 class="collab-heading">Clue 3</h1>
          </div>
        </a>
          <a class="collab-card" target="_blank" href="./assets/images/DecoDisaster/hp4.pdf">
            <div>
            <hr class="blue-hr">
            <div class="card-3"></div>
            <h1 class="collab-heading">Clue 4</h1>
          </div>
        </a>
          <a class="collab-card" target="_blank" href="./assets/images/DecoDisaster/hp5.pdf">
            <div>
            <hr class="blue-hr">
            <div class="card-4"></div>
            <h1 class="collab-heading">Clue 5</h1>
          </div>
        </a>
          <a href="./assets/images/DecoDisaster/hp6.pdf" target="_blank" class="collab-card">
          <div>
            <hr class="blue-hr">
            <div class="card-5"></div>
            <h1 class="collab-heading">Clue 6</h1>
          </div>
        </a>
          <a href="./assets/images/DecoDisaster/hp7.pdf" target="_blank" class="collab-card">
          <div>
            <hr class="blue-hr">
            <div class="card-6"></div>
            <h1 class="collab-heading">Clue 7</h1>
          </div>
          </a>
          <a href="./assets/images/DecoDisaster/hp8.pdf" target="_blank" class="collab-card">
          <div>
            <hr class="blue-hr">
            <div class="card-6"></div>
            <h1 class="collab-heading">Clue 8</h1>
          </div>
          </a>
          <!-- <a href="./assets/images/DecoDisaster/Clue 7.pdf" target="_blank" class="collab-card">
            <div>
              <hr class="blue-hr">
              <div class="card-6"></div>
              <h1 class="collab-heading">Clue 7</h1>
            </div>
            </a> -->
          <!-- <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-7"></div>
            <h1 class="collab-heading">Clue 7</h1>
          </div> -->
        </div>
      </div>
    </div>
<!-- ****************************************************contact us ***************************** -->
<div class="dsph" id="contact">
    <div class="d-flex justify-content-center mt-md-5">

      <img src="./assets/images/contact_us_img.webp" class="svg-media" alt="" />

      <div class="contactUs">
        <div class="closebtn">
          <button class="btn btn-primary s-form-group contact-btn" onclick="closecontact()"><i class="fas fa-times"></i></button>
        </div>
        <form class="s-form" name="contact" method="post" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeW8dszRK5ynb6HS51X7fGrfW7su1_8JFL0Tm3hWfbfdpZiCQ/formResponse" onsubmit="return validateform();">
          <h2 class="my-4 display-4 fw-bolder text-center">Contact<span class="text-blue"> Us</span></h2>
          <div class="row form-row">
            <div class="form-group s-form-group col-md-5">
              <input type="text" name="name" class="form-control" placeholder="Name *" />
            </div>
            <div class="form-group s-form-group col-md-5">
              <input type="text" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email *" />
            </div>
          </div>
          <div class="row form-row">
            <div class="form-group s-form-group col-md-5">
              <input type="number" name="phone" class="form-control" placeholder="Phone No." />
            </div>
            <div class="form-group s-form-group col-md-5">
              <input type="text" name="college" class="form-control" placeholder="College/ Organization" />
            </div>
          </div>
          <div class="contact-msg">
            <textarea type="text" name="message" rows="5" placeholder="Message *" class="form-control col-md-11 contact-message"></textarea>
          </div>
          <div class="row contact-msg">
            <button type="submit" class="btn btn-primary s-form-group contact-btn col-md-3 col-sm-2">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- back to top -->
<div class="scrolltop">
    <div class="scroll icon"><i class="fa fa-rocket" aria-hidden="true"></i></div>
  </div>
  <!-- contact us -->
  <div class="contact-bottom-btn">
    <a href="javascript:showcontact()">
      <div class="contact-icon"><i class="fas fa-comments" aria-hidden="true"></i></div>
    </a>
  </div>
  <!-- ************************************************Footer******************************************************************************-->
  <?php
  include('footer.php');
  ?>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/JS/home_new.js"></script>
</body>

</html>
