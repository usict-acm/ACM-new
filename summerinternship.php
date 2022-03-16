<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('head.php');
  ?>
  <title>GGSIP University USS ACM Student Chapter</title>
  <link href="assets/CSS/summerInternship.css" rel="stylesheet" />
  <link href="assets/CSS/header.css" rel="stylesheet" />
  <link href="assets/CSS/footer.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/CSS/newStyle.css" />
</head>

</head>

<body>

<?php
  $currentPage = 'internship';
  include('header.php');
  ?>

  <div style="margin-left:10%; margin-right:10%;">
    <section id='header'>
      <div class="pt-card row" style="background-image: url('./assets/images/internship-banner.jpeg'); margin-top:5%">
        <div class="heading col-xl-9 col-lg-9 col-md-9 col-sm-6">
          <h3 style="color:transparent"><span class="uheading">Why Join</span><br>
            <span class="lheading">GGSIP University USS ACM Student Chapter?</span></h3>
        </div>
      </div>
    </section>
  </div>

  <!-- <div style="margin-left:10%; margin-right:10%; margin-top:3%; margin-bottom: 0%;">
    <section id='header'>
      <div class="pt-card" style="padding: 0;">
        <img style="width: 100%;border-radius:18px;" src="./../assets/images/internship-banner.jpeg" alt="">
      </div>
    </section>
  </div> -->

  <div class="alert alert-info new2 p-4" style="margin-left: 9%;margin-right: 9%;">
    <span class="alert-body">
      <div class="row">
        <div class="col-md-1 d-flex justify-content-center align-items-center">
          <i class="fa fa-info-circle" aria-hidden="true"></i>
        </div>
        <div class="col-md-8 my-2 text-center-md">
          <h6 class="alert-header md-text-custom">Registration</h6>
          <p class="mb-0 mx-auto">We will be back soon with an another phase of the internship.</p>
        </div>
        <!-- <div class="col-md-3 d-flex justify-content-center align-items-center">
          <a class="sm-text-custom btn btn-outline-info" style="text-decoration: none;" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSccJURrpgR_SKgxatV0NlAnQOKHY-oVGRrmW1wSV-doopOXtg/viewform">Register Now</a>
        </div> -->
      </div>
    </span>
  </div>
  </div>

  <!--*****************************************************PPT*********************************************** -->
  <div class="container" style="margin: 10% auto auto auto">
      <div
        style="
          position: relative;
          width: 100%;
          height: 0;
          padding-top: 56.25%;
          padding-bottom: 48px;
          box-shadow: 0 2px 8px 0 rgba(63, 69, 81, 0.16);
          margin-top: 1.6em;
          margin-bottom: 0.9em;
          overflow: hidden;
          border-radius: 8px;
          will-change: transform;
        "
      >
        <iframe
          loading="lazy"
          style="
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: none;
            padding: 0;
            margin: 0;
          "
          src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAEiOfwdDVQ&#x2F;view?embed"
        >
        </iframe>
      </div>
    </div>

    <!-- <section id="register" class="container d-flex justify-content-center">
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSccJURrpgR_SKgxatV0NlAnQOKHY-oVGRrmW1wSV-doopOXtg/viewform" target="_blank">
        <button z-index="999" class="btn btnForNewsletter400px"
          style="background-color:#2250fc;margin-bottom: 20px;">
          <span style="color:#fff; font-size:0.9rem">Register Now</span>
        </button>
      </a>
    </section> -->
 
<!-- =====================================Contact us============================ -->

<section style="margin: 7% auto;">
  <div class="container">
  <div class="registration-form-div" style="padding:0% !important">
    <!-- <hr class="blue-hr"> -->
    <div class="row no-gutters">
    <div class="col-lg-6 col-md-12 col-sm-12">
        <img class="registration-img" style="height: 100%;margin:0;border-radius:8px;" src="./assets/images/internshp-contact.png" alt="">
    </div>
      <div class="col-lg-6">
        <div class="registration-inner-div d-flex flex-column justify-content-center">
          <div>
          <p class="text section-heading">Get in touch</p>
          <p class="text-small" style="color: #373f41; font-weight: normal;">Feel free to contact us if you need some help. Consultations or you have some other questions.</p>
          </div>
          <div class="registration-form-div" style="padding: 1rem;margin:1rem auto;">
            <h3>Dr. Rahul Johari</h3>
            <p>Faculty Sponsor, ACM USICT</p>
            <h5>rahul@ipu.ac.in</h5>
            <h5>9910185349</h5>
          </div>
          <div class="registration-form-div" style="padding: 1rem;margin:1rem auto;">
            <h3>Gaurav Jain</h3>
            <p>Chair, ACM USICT</p>
            <h5>gaurav@usict.acm.org</h5>
            <h5>7065105167</h5>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
</section>

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
  <style>
    .i-RrUw{
      display: none !important;
    }
    .dkWypw>svg{
      display: none !important;
    }
    @media (max-width :760px){
      .text-center-md{
        text-align: center;
      }
    }
    @media (min-width: 300px) and (max-width: 992px){
      .registration-img{
      display: none;
    }
    a:hover{
      text-decoration: none;
      color: #fff;
    }
  }
  </style>
</body>

</html>
