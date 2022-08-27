<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include("head.php")
    ?>
    <title>GGSIP University USS ACM Student Chapter</title> 
    <link href='assets/CSS/collab.css' rel="stylesheet" />
    <link href='assets/CSS/glider.css' rel="stylesheet" />
    <link href="./assets/CSS/header.css" rel="stylesheet" />
    <link href="./assets/CSS/footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/CSS/newStyle.css" />
  </head>
  <body>
  <!-- ************************************************Navbar******************************************************************************-->
    <?php
      $currentPage = 'collab';
      include('header.php');
    ?>
  <!-- ****************************************************Header Image**************************************************************** -->
    <div class="img-header">
      <section id='header'>
        <div class="pt-card row">
          <div class="heading col-xl-9 col-lg-9 col-md-9">
            <h3><span class="uheading">Let's Collaborate</span></h3>
          </div>
</div>
      </section>
    </div>
  <!-- ****************************************************Collaborators******************************************************************** -->
    <section id="collab">
      <div class="container">
        <h1 class="collab-main-heading mobile-view">Collaborations and<span class="text-head"> Sponsors</span>:</h1>
        <div class="row d-flex justify-content-center">
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-1"></div>
              <h1 class="collab-heading">Coursera</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-2"></div>
              <h1 class="collab-heading">Docker<br> Delhi</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-3"></div>
              <h1 class="collab-heading">Lenskart</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-4"></div>
              <h1 class="collab-heading">Coding<br>Ninjas</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-5"></div>
              <h1 class="collab-heading">CAD DESK <br>India</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h1 class="collab-main-heading">Renowned <span class="text-head">Researchers/ Professionals</span> from:</h1>
        <div class="row d-flex justify-content-center">
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-6"></div>
              <h1 class="collab-heading">University of<br>Cincinnati, USA</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-7"></div>
              <h1 class="collab-heading">University of<br>Szeged, Hungary</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-8"></div>
              <h1 class="collab-heading">IIIT Delhi</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-9"></div>
              <h1 class="collab-heading">Delhi<br>University</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-10"></div>
              <h1 class="collab-heading">JNU Delhi</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-11"></div>
              <h1 class="collab-heading">IISc<br> Banglore</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h1 class="collab-main-heading">Industry <span class="text-head">Professionals</span> from:</h1>
        <div class="row d-flex justify-content-center">
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-12"></div>
            <h1 class="collab-heading">Amazon</h1>
          </div>
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-13"></div>
            <h1 class="collab-heading">TCS</h1>
          </div>
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-14"></div>
            <h1 class="collab-heading">Zenon</h1>
          </div>
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-15"></div>
            <h1 class="collab-heading">Stage3.co</h1>
          </div>
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-16"></div>
            <h1 class="collab-heading">Societe<br>Generale</h1>
          </div>
        </div>
      </div>
    </section>	
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
