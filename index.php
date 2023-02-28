<!-- //comment -->
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include("head.php");
	?>
	
	<title>GGSIP University USS ACM Student Chapter</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
	<link rel="stylesheet" href="./assets/CSS/newStyle.css" />
	<link rel="stylesheet" href="./assets/CSS/header.css">
	<link rel="stylesheet" href="./assets/CSS/footer.css">
	<link rel="stylesheet" href="./assets/CSS/homeTeam.css">
</head>

<body>
	<!-- nav bar -->
	<?php
	include("header.php");
	?>
	<!-- nav-bar end -->
	<!-- hero Section -->
	<section class="hero-slider hero-style">
		<div class="swiper-container" id="myCarousel">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./upload/hmpg-img/carousel-img-1-mobile.jpg" data-background="./upload/hmpg-img/carousel-img-1.png"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./upload/hmpg-img/carousel-img-2-mobile.png" data-background="./upload/hmpg-img/carousel-img-2.jpeg"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./upload/hmpg-img/carousel-img-3-mobile.jpg" data-background="./upload/hmpg-img/carousel-img-3.png"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./upload/hmpg-img/carousel-img-4-mobile.png" data-background="./upload/hmpg-img/carousel-img-4.png"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./upload/hmpg-img/carousel-img-5-mobile.png" data-background="./upload/hmpg-img/carousel-img-5.png"></div>
				</div>
				<div class="swiper-slide">
					<div class="slide-inner slide-bg-image" data-swiper-parallax="0" data-background-small="./upload/hmpg-img/carousel-img-6-mobile.png" data-background="./upload/hmpg-img/carousel-img-6.png"></div>
				</div>

				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
			<div id="typewriter">
				<span class="typewriter-box" data-wait="200" data-content='["GGSIP University USS ACM Student Chapter"]'> </span>
				<!-- end swiper-slide -->
			</div>
			<!-- end swiper-wrapper -->

			<!-- swipper controls -->

			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
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
		<div class="col-sm-6 col-9 mx-auto px-0 mt-3 pe-sm-5 align-self-center">
			<div class="text">
				<h2 class="mb-4 display-4 fw-bolder text-center text-md-start">
					About <span class="text-head">Our Chapter</span>
				</h2>
				<p class="text-secondary about-text">
					GGSIP University USS ACM Student Chapter is an official student body incepted in 2019 under the University
					School USICT, GGSIPU. The chapter will conduct events including programming contests, talks by
					renowned speakers, workshops etc.which give the students an exposure to the competitive
					computing world as well as allow them to understand the advancements going on in the computing
					sphere worldwide.
				</p>
				<div class="py-3 mt-2 d-lg-flex justify-content-sm-center">
					<div class="col mb-2">
						<a href="./about.php" class="about-button">Know More</a>
					</div>
					<div class="col">
						<div class="drop-down about-button">
							<p>ACM Newsletter</p>
							<i class="fas fa-chevron-down arrow"></i>
						</div>
						<div class="dropdown">
							<a href="./assets/newsletter3.pdf" target="_blank" id="adobeXd">2022
								<span></span>
							</a>
							<a href="./assets/newsletter2.pdf" target="_blank" id="adobeXd">2021
								<span></span>
							</a>
							<a href="./assets/newsletter.pdf" target="_blank" id="sketch">2020
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
		<div class="blogs-sticker-holder">
			<span class="fas fa-book  sticker"></span>
			<span class="fas fa-pencil-alt sticker"></span>
			<span class="fas fa-file-alt  sticker"></span>
			<span class="far fa-bookmark sticker"></span>
		</div>
		<div class="tag">
			<div class="bloghead">
				<h2 class="my-4 display-4 fw-bolder text-center">Recent<span class="text-head"> Blogs</span></h2>
			</div>
			<div class="b-container" id="threeBlogsRow"></div>
			<div class="py-3 mt-2 d-sm-flex justify-content-sm-center">
				<div class="col-lg-3 col-md-6 col-9 mb-2 mx-auto">
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
					<p class="b-text text-center">' +
							row.Title +
							'</p>\
					<p class="b-text text-center">By ' +
							row.Author +
							'</p>\
					<span class="b-text" style="display:flex; align-items:center; justify-content:center;"><a href="javascript:readMoreRedirection(' +
							row.Sno +
							')" class="b-button" style="text-decoration:none; cursor:pointer; font-size: 14px;padding: 12px; margin-top:5px">Read Blog <i class="fas fa-long-arrow-alt-right"></i></a></span>\
				</div>\
				<img src="' +
							row.Image +
							'" class="blog-img" />\
			</div>\
			<div>';
					}
				},
			});
		});
        function displayFaculty(facultyMembers) {
            let div = document.getElementById("officeList");
            let html = '';
            for(let i = 0 ; i < facultyMembers.length; i++) {
                html += `
                      <div class="profile-card col-md-4 col-sm-6">
                        <div class="img">
                          <img
                            src="/${facultyMembers[i].image}"
                          />
                        </div>
                        <div class="caption">
                          <h3>${facultyMembers[i].name}</h3>
                          <p>${facultyMembers[i].designation}</p>
                        </div>
                      </div>`;
            }
            // div.innerHTML = html;
        }
        function displayTeam(teamMembers) {
            let div = document.getElementById("teamList");
            let html = ''
            for(let i = 0 ; i < teamMembers.length; i++) {
                html +=`
                      <div class="profile-card col-md-4 col-sm-6">
                        <div class="img">
                          <img
                            src="./${teamMembers[i].image}"
                          />
                        </div>
                        <div class="caption">
                          <h3>${teamMembers[i].name}</h3>
                          <p>${teamMembers[i].designation}</p>
                          <div class="social-links"> `
                if(teamMembers[i].linkendin) {
                    html += `<a href="${teamMembers[i].linkedin}" target="_blank"><i class="fab fa-linkedin"></i></a>`;
                } 
                if(teamMembers[i].github) {
                    html += `<a href="${teamMembers[i].github}" target="_blank"><i class="fab fa-github"></i></a>`;
                } 
                if(teamMembers[i].instagram) {
                    html += `<a href="${teamMembers[i].instagram}" target="_blank"><i class="fab fa-instagram"></i></a>`;
                } 
                html += "</div> </div> </div>";
            }
            // div.innerHTML = html;
        }
        async function getTeamData(year) {
            let url = `./admin/adminPanel/faqadmin/teams/api.php/?q=readMember&year=${year}`
            const response = await fetch(url);
            let array = await response.json();
            let teamMember = [];
            let facultyMember = [];
            for(let i = 0 ; i < array.length; i++) {
                if(array[i].category === 'Office-Bearers') {
                    teamMember.push(array[i]);
                }
                if(array[i].category === 'Faculty') {
                    facultyMember.push(array[i]);
                }
            }
            return [facultyMember, teamMember];
        }
        getTeamData(2023).then(([facultyMembers, teamMembers]) => { 
            displayFaculty(facultyMembers);
            displayTeam(teamMembers);
        });
	</script>
	<!-- ******************************blog section end***************************************** -->
	<!-- *******************************************our team************* -->
    <?php 
    include_once 'officebearer.php';
    ?>

	<!-- *****************************our team end************************************************** -->
	<!-- socail bar******************************* -->
	<div class="social-btns tag">
		<div class="try1">
			<a class="btn facebook" href="https://usict.acm.org/facebook" target="_blank"><i class="fa fa-facebook"></i></a>
			<div class="write" id="wrete">
				<h1 class="sob-heading">700+</h1>
				<p class="gratext">Facebook Followers</p>
			</div>
		</div>
		<div class="try1">
			<a class="btn linkedin" href="https://usict.acm.org/linkedin" target="_blank"><i class="fab fa fa-linkedin"></i></a>
			<div class="write" id="wrete">
				<h1 class="sob-heading">6000+</h1>
				<p class="gratext">LinkedIn Reach</p>
			</div>
		</div>
		<div class="try1">
			<a class="btn instagram" href="https://usict.acm.org/instagram" target="_blank"><i class=" fa fa fa-instagram"></i></a>
			<div class="write" id="wrete">
				<h1 class="sob-heading">550+</h1>
				<p class="gratext">Instagram Followers</p>
			</div>
		</div>
		<div class="try1">
			<a class="btn discord" href="https://usict.acm.org/discord" target="_blank"><i class=" fab fa-discord"></i></a>
			<div class="write" id="wrete">
				<h1 class="sob-heading">600+</h1>
				<p class="gratext">Discord Members</p>
			</div>
		</div>
		<div class="try1">
			<a class="btn skype"><i class="fa fa fa-child"></i></a>
			<div class="write" id="wrete">
			<?php include './visitorCounter.php'?>
				<h1 class="sob-heading"><?php echo  $visitor_count?>+</h1>
				<p class="gratext">Monthly Visitors</p>
			</div>
		</div>

	</div>
	<!-- back to top and contact us-->
	<?php
	include("contact.php")
	?>
	<!--  footer -->
	<?php
	include("footer.php")
	?>
	<!--  footer ends -->

	<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets\JS\home_new.js"></script>
    </body>

    </html>
