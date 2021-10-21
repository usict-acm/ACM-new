<!-- //comment -->
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include("head.php")
	?>
	<title>USICT ACM</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
	<link rel="stylesheet" href="./assets/CSS/newStyle.css" />
</head>

<body>
	<!-- nav bar -->
	<nav class="navbar navbar-expand-custom navbar-mainbg">
		<div class="d-flex main-logo">
			<a href="./"><img class="acm-logo-navbar" src="./assets/images/acm1.png" height="60px" alt="acm logo" /></a>
			<div class="text-and-logo">
				<a style="font-size: 16px; color: #000; padding: 0; margin-bottom: -11px" class="navbar-brand mx-auto fw-bolder text-center" href="./">USICT<span class="text-primary"> ACM</span></a>
				<a href="./"><img class="outstanding-logo" src="./assets/images/outstanding-website.png" alt="" /></a>
			</div>
		</div>
		<button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars text-black"></i>
		</button>
		<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto mr-5">
				<li class="nav-item active">
					<a class="nav-link" href="#myCarousel">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./blogs.php">Blogs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./events.php">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./benefits.php">Why Join Us?</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./clubs.php">Clubs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./team.php">Our Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./benefits.php#registration">ACM Registration</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- nav-bar end -->
	<!-- hero Section -->
	<section class="hero-slider hero-style">
		<div class="swiper-container" id="myCarousel">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./assets/images/banner-high-mobile.png" data-background="./assets/images/banner-high.png"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./assets/images/img1-mobile.png" data-background="./assets/images/img1.jpg"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./assets/images/img3-mobile.png" data-background="./assets/images/img3.jpg"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./assets/images/img2-mobile.png" data-background="./assets/images/img2.jpg"></div>
				</div>

				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
			<div id="typewriter">
				<span class="typewriter-box" data-wait="200" data-content='["USICT ACM CHAPTER"]'> </span>
				<!-- end swiper-slide -->
			</div>
			<!-- end swiper-wrapper -->

			<!-- swipper controls -->

			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div id="typewriter">
			<span class="typewriter-box" data-wait="400" data-content='["USICT ACM CHAPTER"]'> </span>
		</div>
	</section>
	<!-- end of hero slider -->

	<!-- begin of about section -->
	<div class="tag d-sm-flex about-us">
		<div class="col-sm-6 align-self-center p-md-5 p-sm-3">
			<div class="image text-center w-75 mx-auto">
				<img src="./assets/images/aboutUs-icon.png" alt="" class="w-100" />
			</div>
		</div>
		<div class="col-sm-6 col-9 mx-auto mt-3 pe-sm-5 align-self-center">
			<div class="text">
				<h2 class="mb-4 display-4 fw-bolder text-center text-md-start">
					About <span class="text-blue">Our Chapter</span>
				</h2>
				<p class="text-secondary fs-5">
					ACM Student Chapter, USICT is an official student body incepted in 2019 under the University
					School USICT, GGSIPU. The chapter will conduct events including programming contests, talks by
					renowned speakers, workshops etc.which give the students an exposure to the competitive
					computing world as well as allow them to understand the advancements going on in the computing
					sphere worldwide.
				</p>
				<div class="py-3 mt-2 d-md-flex justify-content-sm-center">
					<div class="col-md-4 col mb-2">
						<a href="./about.php" class="about-button">Know More</a>
					</div>
					<div class="col-md-4 col">
						<div class="drop-down">
							<p>ACM Newsletter</p>
							<i class="fas fa-chevron-down arrow"></i>
						</div>
						<div class="dropdown">
							<a href="./assets/newsletter2.pdf" id="adobeXd">2021
								<span></span>
							</a>
							<a href="./assets/newsletter.pdf" id="sketch">2020
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of about section -->
	<!-- announcement section begins-->
	<?php 
    require_once "./announcement.php";
  	?>
	
	<!-- announcement section ends-->
	<!--***********************blog section***************************************** -->
	<section class="blogs">
		<div class = "tag">
		<div class="bloghead">
			<h2 class="my-4 display-4 fw-bolder text-center">Recent<span class="text-blue"> Blogs</span></h2>
		</div>
		<div class="b-container" id="threeBlogsRow"></div>
		<div class="py-3 mt-2 d-md-flex justify-content-sm-center">
			<div class="col-md-2 col mb-2">
				<a href="./blogs.php" class="about-button blog-mobile-btn">Read More Blogs</a>
			</div>
		</div>
		</div>
	</section>

	<script>
		function readMoreRedirection(id) {
			console.log(id);
			window.document.location = './singleBlog.php?Id=' + id; //Connecting Second page
		}
		var rwBlogs = document.getElementById('threeBlogsRow');
		rwBlogs.innerHTML = '';

		let url1 = './admin/blogAdmin/api.php/?q=readHome';

		$(document).ready(function() {
			$.ajax({
				url: url1,
				method: 'GET',
				dataType: 'JSON',
				success: function(data) {
					var i;
					for (i = 1; i < 4; i++) {
						myFunc(data[i - 1], i);
					}

					function myFunc(row, index) {
						var desc = row.Content;
						var descSub = desc.substring(0, 70) + '...';

						rwBlogs.innerHTML +=
							'<div class="b-card-container">\
				<div class="b-card">\
				<div class="b-infos">\
					<p class="b-text">' +
							row.Title +
							'</p>\
					<p class="b-text text-center">By ' +
							row.Author +
							'</p>\
					<span class="b-text"><a href="javascript:readMoreRedirection(' +
							row.Sno +
							')" style="text-decoration:none; cursor:pointer; color:#0a58ca;">Read Blog</a></span>\
				</div>\
				<img src="./' +
							row.Image +
							'" class="blog-img"/>\
			</div>\
			<div>';
					}
				},
			});
		});
	</script>
	<!-- ******************************blog section end***************************************** -->
	<!-- *******************************************our team************* -->
	<section class="tag team">
		<div class="teamhead">
			<h2 class="my-4 display-4 fw-bolder text-center">Our<span class="text-blue"> Team</span></h2>
		</div>
		<div class="our-team-area">
			<div class="container">
				<div class="row margin-media">
					<div class="col-md-4">
						<div class="row">
							<div class=" col-lg-9">
								<div class="our-team-box">
									<img src="./assets/images/team/deanSir.jpeg" alt="">
									<div class="t-overlay">
									<div class="icons">
										<!-- <a href="https://www.linkedin.com/in/gauravj22/" target="_blank"><i class="fab fa-linkedin"></i></a> -->
										<h4 class="text-center">Prof. Pravin Chandra
										<p class="fadddd">Dean, USICT</p>
										</h4>
									</div>				
									</div>
									<!-- <div class="icons fac-icon">
										<i class="fab fa-linkedin"></i>
									</div>
									<div class="text-area1">
										<h4 class="text-center">Prof. Pravin Chandra</h4>
										<p>Dean, USICT</p>
									</div> -->
								</div>
							</div>
							<div class="col-md-6 col-lg-9">
								<div class="our-team-box">
									<img src="./assets/images/team/rahulsir.jpg" alt="">
									<div class="t-overlay">
									<div class="icons">
										<!-- <a href="https://www.linkedin.com/in/gauravj22/" target="_blank"><i class="fab fa-linkedin"></i></a> -->
										<h4 class="text-center">Dr. Rahul Johari
										<p class="fadddd">Branch Head, ACM USICT</p>
										</h4>
									</div>				
									</div>
									<!-- <div class="icons fac-icon">
										<i class="fab fa-linkedin"></i>
									</div>
									<div class="text-area1">
										<h4 class="text-center">Dr. Rahul Johari</h4>
										<p>Branch Head, ACM USICT</p>
									</div> -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-8">
						<div class="row">

							<div class="col-md-6 col-lg-4">
								<div class="our-team-box">
									<img src="./assets/images/team/Gaurav.png" alt="">
									<div class="t-overlay">
									<div class="icons">
										<a href="https://www.linkedin.com/in/gauravj22/" target="_blank"><i class="fab fa-linkedin"></i></a>
										<h4 class="text-center">Gaurav Jain
										<p class="fadddd">Chair</p>
										</h4>
									</div>				
									</div>
									<!-- <div class="icons">
										<a href="https://www.linkedin.com/in/gauravj22/" target="_blank"><i class="fab fa-linkedin"></i></a>
									</div>
									<div class="text-area1">
										<h4 class="text-center">Gaurav Jain</h4>
										<p>Chair</p>
									</div> -->
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="our-team-box">
									<img src="./assets/images/team/vardaan.jpg" alt="">
									<div class="t-overlay">
									<div class="icons">
										<a href="https://www.linkedin.com/in/vardaan-grover-8a64141a0/" target="_blank"><i class="fab fa-linkedin"></i></a>
										<h4 class="text-center">Vardaan Grover
										<p class="fadddd">Vice Chair</p>
										</h4>
									</div>				
									</div>
									<!-- <div class="icons">
										<a href="https://www.linkedin.com/in/vardaan-grover-8a64141a0/" target="_blank"><i class="fab fa-linkedin"></i></a>
									</div>
									<div class="text-area1">
										<h4 class="text-center">Vardaan Grover</h4>
										<p>Vice Chair</p>
									</div> -->
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="our-team-box">
									<img src="./assets/images/team/Akshad.jpg" alt="">
									<div class="t-overlay">
									<div class="icons">
										<a href="https://www.linkedin.com/in/akshad-bhandula-073202113/" target="_blank"><i class="fab fa-linkedin"></i></a>
										<h4 class="text-center">Akshad Bhandula
										<p class="fadddd">Secretary</p>
										</h4>
									</div>				
									</div>
									<!-- <div class="icons">
										<a href="https://www.linkedin.com/in/akshad-bhandula-073202113/" target="_blank"><i class="fab fa-linkedin"></i></a>
									</div>
									<div class="text-area1">
										<h4 class="text-center">Akshad Bhandula</h4>
										<p>Secretary</p>
									</div> -->
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="our-team-box">
									<img src="./assets/images/team/Divyansh.jpg" alt="">
									<div class="t-overlay">
									<div class="icons">
										<a href="https://www.linkedin.com/in/divyansh-rastogi-08a44a171/" target="_blank"><i class="fab fa-linkedin"></i></a>
										<h4 class="text-center">Divyansh Rastogi
										<p class="fadddd">Joint Secretary</p>
										</h4>
									</div>				
									</div>
									<!-- <div class="icons">
										<a href="https://www.linkedin.com/in/divyansh-rastogi-08a44a171/" target="_blank"><i class="fab fa-linkedin"></i></a>
									</div>
									<div class="text-area1">
										<h4 class="text-center">Divyansh Rastogi</h4>
										<p>Joint Secretary</p>
									</div> -->
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="our-team-box">
									<img src="./assets/images/team/chaitanDev.jpg" alt="">
									<div class="t-overlay">
									<div class="icons">
										<a href="https://www.linkedin.com/in/chaitan-dev/" target="_blank"><i class="fab fa-linkedin"></i></a>
										<h4 class="text-center">Chaitan Dev
										<p class="fadddd">Treasurer</p>
										</h4>
									</div>				
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="our-team-box">
									<img src="./assets/images/team/anmol.jpeg" alt="">
									<div class="t-overlay">
									<div class="icons">
										<a href="https://www.linkedin.com/in/chaitan-dev/" target="_blank"><i class="fab fa-linkedin"></i></a>
										<h4 class="text-center">Anmol Jain
										<p class="fadddd">Web Chair</p>
										</h4>
									</div>
									</div>
									<!-- <div class="text-area1">
										<h4 class="text-center">Chaitan Dev</h4>
										<p>Treasurer</p>
									</div> -->
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="py-3 mt-2 d-md-flex justify-content-sm-center">
			<div class="col-md-2 col mb-2">
				<a href="./team.php" class="about-button team-mobile-btn">Meet the Team</a>
			</div>
		</div>
		</div>
	</section>
	<!-- *****************************our team end************************************************** -->

	<!-- ****************************************************contact us ***************************** -->
	<div class="dsph" id="contact">
		<div class="d-flex justify-content-center mt-md-5">

			<img src="./assets/images/contact_us_img.webp" class="svg-media" alt="" />

			<div class="contactUs">
				<div class="closebtn">
					<button class="btn btn-primary s-form-group contact-btn" onclick="closecontact()"><i class="fas fa-times"></i></button>
				</div>
				<form class="s-form" name="contact" method="post" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeW8dszRK5ynb6HS51X7fGrfW7su1_8JFL0Tm3hWfbfdpZiCQ/formResponse" onsubmit="return validateform();" >
					<h2 class="my-4 display-4 fw-bolder text-center">Contact<span class="text-blue"> Us</span></h2>
					<div class="row">
						<div class="form-group s-form-group col-md-6">
							<input type="text" name="name" class="form-control" placeholder="Name *" />
						</div>
						<div class="form-group s-form-group col-md-6">
							<input type="text" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email *" />
						</div>
					</div>
					<div class="row">
					<div class="form-group s-form-group col-md-6">
							<input type="text" name="phone" class="form-control" placeholder="Phone No." />
						</div>
						<div class="form-group s-form-group col-md-6">
							<input type="text" name="college" class="form-control" placeholder="College/ Organization" />
						</div>
					</div>
					<textarea type="text" name="message" rows="5" placeholder="Message *" class="form-control col-md-12 contact-message"></textarea>
					<div class="row">
						<button type="submit" class="btn btn-primary s-form-group contact-btn col-md-3 col-sm-2">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- ********************************contact_us end**************************************************** -->

	<!--  footer -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-cta pt-4 pb-3">
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-4 col-md-4 mb-30">
						<div class="single-cta justify-content-md-center">
							<i class="fas fa-map-marker-alt"></i>
							<div class="cta-text">
								<h4>Find us</h4>
								<span>Dean Office, USICT, GGSIPU Sector 16C, Dwarka, Delhi</span>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-4 mb-30">
						<div class="single-cta justify-content-md-center">
							<i class="fas fa-phone"></i>
							<div class="cta-text">
								<h4>Call us</h4>
								<span><a href="tel:011-25302702">011-25302702</a></span>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-4 mb-30">
						<div class="single-cta justify-content-md-center">
							<i class="far fa-envelope-open"></i>
							<div class="cta-text">
								<h4>Mail us</h4>
								<span><a href="mailto:info@usict.acm.org" target="_blank">info@usict.acm.org</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-content pt-4 pb-2">
				<div class="row">
					<div class="col-xl-5 col-lg-5 mb-50">
						<div class="footer-widget">
							<div class="footer-logo text-center">
								<a href="./">
									<img src="./assets/images/acm1.png" class="img-primary" alt="logo" />
									<img src="./assets/images/outstanding-website.png" class="img-secondary" alt="" />
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-30">
						<div class="footer-widget">
							<div class="footer-widget-heading">
								<h3>Quick Links</h3>
							</div>
							<ul>
								<li>
									<a href="http://www.ipu.ac.in/" target="_blank"><i class="fa fa-angle-right"></i> IPU-Home</a>
								</li>
								<li>
									<a href="https://india.acm.org/" target="_blank"><i class="fa fa-angle-right"></i> ACM-India</a>
								</li>
								<li>
									<a href="https://www.acm.org/about-acm/acm-india-council" target="_blank"><i class="fa fa-angle-right"></i> ACM-India Office Bearers</a>
								</li>
								<li>
									<a href="https://amturing.acm.org/award_winners/reddy_9634208.cfm" target="_blank"><i class="fa fa-angle-right"></i> ACM Turing Award</a>
								</li>
								<li>
									<a href="https://usict.acm.org/clubs.html" target="_blank"><i class="fa fa-angle-right"></i> Our Clubs</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 mb-50">
						<div class="footer-widget">
							<div class="footer-widget-heading">
								<h3>Social Links</h3>
								<div class="social-menu">
									<ul>
										<li>
											<a href="https://www.facebook.com/acmusict" target="_blank"><i class="fab fa-facebook"></i></a>
										</li>
										<li>
											<a href="https://www.youtube.com/channel/UCI7her-mYrb7QM0t9S_nA_Q" target="_blank">
												<i class="fab fa-youtube"></i>
											</a>
										</li>
										<li>
											<a href="https://www.instagram.com/acmusict/" target="_blank"><i class="fab fa-instagram"></i></a>
										</li>
										<li>
											<a href="https://github.com/usict-acm/ACM-new" target="_blank"><i class="fab fa-github"></i></a>
										</li>
										<li>
											<a href="#" target="_blank">
												<i class="fab fa-discord"></i>
											</a>
										</li>
										<li>
											<a href="mailto:acmusit@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="footer-text">
								<p>
									The USICT ACM Student Chapter is an official student body incepted in 2019 under
									the University School USICT, GGSIPU.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="copyright-text">
							<p>
								&copy; Conceptualized, Designed and Developed by Office Bearers of ACM USICT chapter
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--  footer ends -->
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

	

	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="assets\JS\home_new.js"></script>
</body>

</html>