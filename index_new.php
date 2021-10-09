<!-- //comment -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	include("head.php")
	?>
		<title>USICT ACM</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="./assets/CSS/newStyle.css" />
	</head>

	<body>
		<!-- nav bar -->
		<nav class="navbar navbar-expand-custom navbar-mainbg">
			<div class="d-flex main-logo">
				<a href="./"
					><img class="acm-logo-navbar" src="./assets/images/acm1.png" height="60px" alt="acm logo"
				/></a>
				<div class="text-and-logo">
					<a
						style="font-size: 16px; color: #000; padding: 0; margin-bottom: -11px"
						class="navbar-brand mx-auto fw-bolder text-center"
						href="./"
						>ACM<span class="text-primary"> USICT</span></a
					>
					<a href="./"
						><img class="outstanding-logo" src="./assets/images/outstanding-website.png" alt=""
					/></a>
				</div>
			</div>
			<button
				class="navbar-toggler"
				type="button"
				aria-controls="navbarSupportedContent"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<i class="fas fa-bars text-white"></i>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mr-5">
					<div class="hori-selector">
						<div class="left"></div>
						<div class="right"></div>
					</div>
					<li class="nav-item active">
						<a class="nav-link" href="#myCarousel">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./blogs.php">Blogs</a>
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
					<li class="nav-item">
						<a class="nav-link" id="contactus" href="javascript:showcontact()">Contact Us</a>
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
						<div
							class="slide-inner slide-bg-image"
							data-swiper-parallax="0"
							data-background-small="./assets/images/banner-high-mobile.png"
							data-background="./assets/images/banner-high.png"
						></div>
					</div>
					<div class="swiper-slide">
						<div
							class="slide-inner slide-bg-image"
							data-swiper-parallax="0"
							data-background-small="./assets/images/img1-mobile.png"
							data-background="./assets/images/img1.jpg"
						></div>
					</div>
					<div class="swiper-slide">
						<div
							class="slide-inner slide-bg-image"
							data-swiper-parallax="0"
							data-background-small="./assets/images/img3-mobile.png"
							data-background="./assets/images/img3.jpg"
						></div>
					</div>

					<div class="swiper-slide">
						<div
							class="slide-inner slide-bg-image"
							data-swiper-parallax="0"
							data-background-small="./assets/images/img2-mobile.png"
							data-background="./assets/images/img2.jpg"
						></div>
					</div>

					<!-- end swiper-slide -->
				</div>
				<!-- end swiper-wrapper -->

				<!-- swipper controls -->

				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
			<div id="typewriter">
				<span class="typewriter-box" data-wait="400" data-content='["ACM CHAPTER USICT"]'> </span>
			</div>
		</section>
		<!-- end of hero slider -->

		<!-- begin of about section -->
		<div class="d-sm-flex about-us">
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
								<a href="./assets/newsletter2.pdf" id="adobeXd"
									>2021
									<span></span>
								</a>
								<a href="./assets/newsletter.pdf" id="sketch"
									>2020
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
		<section class="announcement">
			<h2 class="mb-4 display-4 fw-bolder text-center">Announcements</h2>
			<div class="container-fluid text" style="overflow: hidden">
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="det">
								<div class="heading">
									<h1>ACM USICT Summer Internship</h1>
								</div>

								<div class="row det-row">
									<div class="col-md-7 divide">
										<div class="detai">
											<p>
												Greetings everyone!!!<br />
												USICT ACM Student Chapter has come up with a summer internship
												opportunity for all students of 2022, '23 and '24 batches. The
												internship involves various projects under the Supervision of Mentors.
												This internship will give you in-depth knowledge and will provide
												exposure to work in advanced technology areas.
												<br />To be a part of the SUMMER INTERNSHIP, register by Monday,<br />
												2 August 2021, 3 PM
												<br />Please note that the form is open for all courses of USICT
											</p>
											<div class="announcement-button-group">
												<a
													target="_blank"
													href="./summerinternship/index.php"
													class="about-button"
													>Register Now
												</a>
											</div>
										</div>
									</div>
									<div class="col-md-5 list">
										<img
											class="imag imag_trell"
											src="./assets/images/Summer Internship 2021.jpeg"
											alt=""
										/>
									</div>
								</div>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="det swiper-inner">
								<div class="heading">
									<h1>Session On React Native</h1>
								</div>
								<div class="row det-row">
									<div class="col-md-7 divide">
										<div class="detai">
											<p>
												Greetings everyone!!!<br />
												We hope you all are healthy and doing fine. If you want to do have a go
												at the App Development, we are here with something tailor-made for you.
												We, at USICT ACM Student Chapter are conducting a week-long session on
												React Native by Shlok Garg (Youtube Channel - S.G. Codes) . The event
												will be a complete journey to your first react app from the scratch. So,
												what are you thinking? Register now for what promises to be a great
												journey.
												<br />Date - 12-17 May, 2021 <br />Time - 2-3 PM
											</p>
											<div class="announcement-button-group">
												<a
													target="_blank"
													href="http://bit.do/ReactNativeWorkshop"
													class="about-button"
													>Register Now
												</a>
												<a
													target="_blank"
													href="https://youtube.com/playlist?list=PLgPSSnf8lP5CubPwhgIk9n4FUhFN5nc3L"
													class="about-button"
												>
													View Playlist
												</a>
											</div>
										</div>
									</div>
									<div class="col-md-5 list">
										<img class="imag imag_trell" src="./assets/images/ReactNative.png" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="events-swiper-button-prev"></div>
					<div class="events-swiper-button-next"></div>
				</div>
			</div>
		</section>

		<!-- announcement section ends-->
		<!--***********************blog section***************************************** -->
		<section class="blogs">
			<div class="bloghead">
				<h2 class="my-4 display-4 fw-bolder text-center">Recent<span class="text-blue"> Blogs</span></h2>
			</div>
			<div class="b-container" id="threeBlogsRow"></div>
			<div class="py-3 mt-2 d-md-flex justify-content-sm-center">
				<div class="col-md-2 col mb-2">
					<a href="./blogs.php" class="about-button">Read More Blogs</a>
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

			$(document).ready(function () {
				$.ajax({
					url: url1,
					method: 'GET',
					dataType: 'JSON',
					success: function (data) {
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
		<section class="team">
			<div class="teamhead">
				<h2 class="my-4 display-4 fw-bolder text-center">Our<span class="text-blue"> Team</span></h2>
			</div>
			<div class="container">
				<div class="row s-row">
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\Gaurav.png" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Gaurav Jain</h5>
											<p class="tm-d">Chair</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\vardaan.jpg" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Vardaan Grover</h5>
											<p class="tm-d">Vice-Chair</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\Akshad.jpg" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Akshad Bhandula</h5>
											<p class="tm-d">Secretary</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\Divyansh.jpg" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Divyansh Rastogi</h5>
											<p class="tm-d">Joint Secretary</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\chaitanDev.jpg" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Chaitan Dev</h5>
											<p class="tm-d">Treasurer</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\profile_pic_anmol.png" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Anmol Goel</h5>
											<p class="tm-d">Web Chair</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\sushantHaluwai.jpg" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Sushant Haluwai</h5>
											<p class="tm-d">Executive Members</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\harshGoyal.png" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Harsh Goyal</h5>
											<p class="tm-d">Executive Members</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\Manoj.jpg" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Manoj Kumar</h5>
											<p class="tm-d">Executive Members</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\Anuj.jpg" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Anuj</h5>
											<p class="tm-d">Executive Members</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>

					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\Tarun.jpg" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Tarun</h5>
											<p class="tm-d">Executive Members</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>

					<div class="speaker-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<img src="assets\images\team\vishesh.jpeg" alt="" />
									<div class="social-links">
										<div class="tm-description">
											<h5 class="tm-name">Vishesh Gupta</h5>
											<p class="tm-d">Executive Members</p>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="py-3 mt-2 d-md-flex justify-content-sm-center">
					<div class="col-md-3 col mb-2">
						<a href="./team.php" class="about-button">Meet the Team</a>
					</div>
				</div>
			</div>
		</section>
		<!-- *****************************our team end************************************************** -->

		<!-- ****************************************************contact us ***************************** -->
		<div class="dsph" id="contact">
			<div class="d-flex justify-content-center mr-5 mt-md-5">
				<img src="./assets/images/contact-us-form.png" class="svg-media" alt="" />

				<div>
					<div class="closebtn">
						<button class="btn btn-primary s-form-group" onclick="closecontact()">close</button>
					</div>
					<form class="s-form">
						<div class="form-group s-form-group">
							<input type="text" class="form-control" placeholder="Name" />
						</div>
						<div class="form-group s-form-group">
							<input
								type="email"
								class="form-control"
								aria-describedby="emailHelp"
								placeholder="Enter email"
							/>
						</div>
						<div class="form-group s-form-group">
							<input type="text" class="form-control" placeholder="Phone No" />
						</div>

						<button type="submit" class="btn btn-primary s-form-group">Submit</button>
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
									<span
										><a href="mailto:info@usict.acm.org" target="_blank"
											>info@usict.acm.org</a
										></span
									>
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
									<img src="./assets/images/acm1.png" class="img-primary" alt="logo" />
									<img src="./assets/images/outstanding-website.png" class="img-secondary" alt="" />
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
										<a href="http://www.ipu.ac.in/" target="_blank"
											><i class="fa fa-angle-right"></i> IPU-Home</a
										>
									</li>
									<li>
										<a href="https://india.acm.org/" target="_blank"
											><i class="fa fa-angle-right"></i> ACM-India</a
										>
									</li>
									<li>
										<a href="https://www.acm.org/about-acm/acm-india-council" target="_blank"
											><i class="fa fa-angle-right"></i> ACM-India Office Bearers</a
										>
									</li>
									<li>
										<a
											href="https://amturing.acm.org/award_winners/reddy_9634208.cfm"
											target="_blank"
											><i class="fa fa-angle-right"></i> ACM Turing Award</a
										>
									</li>
									<li>
										<a href="https://usict.acm.org/clubs.html" target="_blank"
											><i class="fa fa-angle-right"></i> Our Clubs</a
										>
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
												<a href="https://www.facebook.com/acmusict" target="_blank"
													><i class="fab fa-facebook"></i
												></a>
											</li>
											<li>
												<a
													href="https://www.youtube.com/channel/UCI7her-mYrb7QM0t9S_nA_Q"
													target="_blank"
												>
													<i class="fab fa-youtube"></i>
												</a>
											</li>
											<li>
												<a href="https://www.instagram.com/acmusict/" target="_blank"
													><i class="fab fa-instagram"></i
												></a>
											</li>
											<li>
												<a href="https://github.com/usict-acm/ACM-new" target="_blank"
													><i class="fab fa-github"></i
												></a>
											</li>
											<li>
												<a href="#" target="_blank">
													<i class="fab fa-discord"></i>
												</a>
											</li>
											<li>
												<a href="mailto:acmusit@gmail.com" target="_blank"
													><i class="fas fa-envelope"></i
												></a>
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

		<!-- Swiper JS -->
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="assets\JS\home_new.js"></script>
	</body>
</html>
