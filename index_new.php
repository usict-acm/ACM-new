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
				<span class="typewriter-box" data-wait="200" data-content='["ACM CHAPTER USICT"]'> </span>
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
				console.log(id)
				window.document.location = './singleBlog.php?Id=' + id //Connecting Second page
			}
			var rwBlogs = document.getElementById('threeBlogsRow')
			rwBlogs.innerHTML = ''

			let url1 = './admin/blogAdmin/api.php/?q=readHome'

			$(document).ready(function () {
				$.ajax({
					url: url1,
					method: 'GET',
					dataType: 'JSON',
					success: function (data) {
						var i
						for (i = 1; i < 4; i++) {
							myFunc(data[i - 1], i)
						}

						function myFunc(row, index) {
							var desc = row.Content
							var descSub = desc.substring(0, 70) + '...'

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
								')" style="text-decoration:none cursor:pointer color:#0a58ca">Read Blog</a></span>\
				</div>\
				<img src="./' +
								row.Image +
								'" class="blog-img"/>\
			</div>\
			<div>'
						}
					},
				})
			})
		</script>
		<!-- ******************************blog section end***************************************** -->
		<!-- *******************************************our team************* -->
		
		<div class="bloghead">
				<h2 class="my-4 display-4 fw-bolder text-center">Our<span class="text-blue"> Team</span></h2>
			</div><div class="t-wrapper">

<section class="t-module-team">

	<div class="t-team">

		<div class="t-team-cards">

			<!-- Slider main container -->
			<div class="t-swiper-container">
				<!-- Additional required wrapper -->
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\Gaurav.png"></figure>
							<article class="t-text">
								<p class="t-name">Gaurav Jain</p>
								<p class="t-role">Chair</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="#" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/gauravj22/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/gauravj22/" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\vardaan.jpg"></figure>
							<article class="t-text">
								<p class="t-name">Vardaan Grover</p>
								<p class="t-role">Vice Chair</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/vardaan-grover-8a64141a0/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/_vg_03/" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\Akshad.jpg"></figure>
							<article class="t-text">
								<p class="t-name">Akshad Bhandula</p>
								<p class="t-role">Secretory</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="#" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/akshad-bhandula-073202113/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/musicalsoul107/" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\Divyansh.jpg"></figure>
							<article class="t-text">
								<p class="t-name">Divyansh Rastogi</p>
								<p class="t-role">Joint Secretary</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="#" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/divyansh-rastogi-08a44a171/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/divyansh.rastogi.3000/" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\chaitanDev.jpg"></figure>
							<article class="t-text">
								<p class="t-name">Chaitan Dev</p>
								<p class="t-role">Treasurer</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="#" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/chaitan-dev/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/devchaitan01/" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\profile_pic_anmol.png"></figure>
							<article class="t-text">
								<p class="t-name">Anmol Goel</p>
								<p class="t-role">Web Chair</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="https://github.com/anmolgoel12" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/anmol-goel-13b447178/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="#" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\sushantHaluwai.jpg"></figure>
							<article class="t-text">
								<p class="t-name">Sushant Haluwai</p>
								<p class="t-role">Executive Member</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="#" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/sushant-haluwai-8997171b5/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="#" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\harshGoyal.png"></figure>
							<article class="t-text">
								<p class="t-name">Harsh Goyal</p>
								<p class="t-role">Executive Member</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="https://github.com/harshgoyal7065" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/harsh-goyal-195255b9/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/harsh.student99/" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\Manoj.jpg"></figure>
							<article class="t-text">
								<p class="t-name">Manoj Kumar</p>
								<p class="t-role">Executive Member</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="https://github.com/manoj-kuma" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/manoj-kumar-a4a215195/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/manoj_kr_maurya/" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\Anuj.jpg"></figure>
							<article class="t-text">
								<p class="t-name">Anuj Talwar</p>
								<p class="t-role">Executive Member</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="https://github.com/alooperalta" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/anuj-talwar/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/aloo_peralta_/" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\Tarun.jpg"></figure>
							<article class="t-text">
								<p class="t-name">Tarun</p>
								<p class="t-role">Executive Member</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="https://github.com/tarawat" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/tarun-shekhawat-037091194/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/tarawat15/" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				 <div class="t-swiper-wrapper">
					<div class="t-swiper-slide">
						<div class="t-card">
							<span class="t-bg"></span>
							<span class="t-more"></span>
							<figure class="t-photo"><img src="assets\images\team\vishesh.jpeg"></figure>
							<article class="t-text">
								<p class="t-name">Vishesh Gupta</p>
								<p class="t-role">Executive Member</p>
								<p class="t-desc">${desc}</p>
							</article>

							<div class="t-social">
								<span class="t-pointer"></span>
								<div class="t-icons">
									<a class="t-icon" href="#" target="_blank" data-index="0"><img
											src="https://rafaelalucas.com/dailyui/6/assets/link.svg"></a>
									<a class="t-icon" href="https://github.com/Vishesh02" target="_blank" data-index="1"><img
											src="assets\images\icons8-github.svg"></a>
									<a class="t-icon" href="https://www.linkedin.com/in/vishesh-gupta-404955206/" target="_blank" data-index="2"><img
											src="https://rafaelalucas.com/dailyui/6/assets/linkedin.svg"></a>
									<a class="t-icon" href="https://www.instagram.com/visheshh02" target="_blank" data-index="3"><img
											src="assets\images\icons8-instagram.svg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="t-swiper-pagination"></div>
			<!-- If we need navigation buttons -->
		</div>

	</div>
</div>

</section>

</div>
		<!-- *****************************our team end************************************************** -->

		<!-- ****************************************************contact us ***************************** -->
		<div class="dsph" id="contact">
			<div class="d-flex justify-content-center mt-md-5 s-backg">
				<img src="./assets/images/contact-us-form.png" class="svg-media" alt="" />

				<div>
					<div class="closebtn">
						<button class="btn btn-primary s-form-group" onclick="closecontact()">close</button>
					</div>
					<form class="s-form">
						<div class="form-group s-form-group ">
							
							<div class="form-input form-margin-top">
								<input type="text" class="form-control" placeholder="Name" style="color: grey; margin-right: 5px"/>
								<input
								type="email"
								class="form-control"
								aria-describedby="emailHelp"
								placeholder="Enter email"
								style="color: grey"
							/>
							</div>
						</div>
						<div class="form-group s-form-group ">
						<div class="form-input">	
							<input type="text" name="entry.1199769641" class="form-input-boxes-manual form-control" placeholder="Phone Number" style="color: grey; margin-right: 5px" spellcheck="false" data-ms-editor="true">
							<input type="text" name="entry.154355220" class="form-input-boxes-manual form-control" placeholder="Organization / College" style="color: grey" spellcheck="false" data-ms-editor="true">
						</div>
						</div>
						<div class="form-group s-form-group ">
						<textarea type="text" name="entry.1544463438" rows="5" class="form-control form-input-boxes-manual required" placeholder="Message" style="color: grey; margin-top: 0px; margin-bottom: 0px; height: 124px" aria-required="true" spellcheck="false" data-ms-editor="true"></textarea>
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
									&copy Conceptualized, Designed and Developed by Office Bearers of ACM USICT chapter
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
