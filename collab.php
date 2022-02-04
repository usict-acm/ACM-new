<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include("head.php")
    ?>
    <title>USICT ACM</title> 
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
    <div style="margin-left:10%; margin-right:10%; padding-top:3%; margin-bottom:0%;">
      <section id='header'>
        <div class="pt-card row" style="background-image: url('assets/images/collab-banner.png');">
          <div class="heading col-xl-9 col-lg-9 col-md-9">
            <h3><span class="uheading">Let's Collaborate</span></h3>
          </div>
        </div>
      </section>
    </div>
  <!-- ****************************************************Collaborators******************************************************************** -->
    <section id="collab" style="margin-top:0%">
      <div class="container">
        <h1 class="collab-main-heading">Collaborations and<span class="highlight"> Sponsors</span>:</h1>
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
        <h1 class="collab-main-heading">Renowned <span class="highlight"> Researchers/ Professionals</span> from:</h1>
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
        <h1 class="collab-main-heading">Industry  <span class="highlight"> Professionals</span> from:</h1>
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
    <!-- ****************************************************contact us ***************************** -->
	<div class="dsph" id="contact">
		<div class="d-flex justify-content-center mt-md-5">

			<img src="./assets/images/contact_us_img.webp" class="svg-media" alt="" />

			<div class="contactUs">
				<div class="closebtn">
					<button class="btn btn-primary s-form-group contact-btn" onclick="closecontact()"><i class="fas fa-times"></i></button>
				</div>
				<form class="s-form" name="contact" method="post" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeW8dszRK5ynb6HS51X7fGrfW7su1_8JFL0Tm3hWfbfdpZiCQ/formResponse" onsubmit="return validateform();" >
					<h2 class="my-4 display-4 fw-bolder text-center" style="font-weight:bolder;">Contact<span class="text-blue"> Us</span></h2>
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
            <style>
                       input::-webkit-outer-spin-button,
                       input::-webkit-inner-spin-button {
                        -webkit-appearance: none;
                       margin: 0;
                      }
  
                        input[type=number] {
                         -moz-appearance: textfield;
                         }
                  </style>
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

  <!-- ***********************************************Footer************************************************************************ -->
    <?php
      include('footer.php');
    ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets\JS\home_new.js"></script>
  </body>

</html>
