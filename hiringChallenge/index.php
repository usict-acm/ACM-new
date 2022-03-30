<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="../assets/images/acm1.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,600,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hackathon</title>
</head>

<body>
    <!-- Header -->
    <section id="home">
        <div class="header">
            <a class="logo-navbar" href="">Hackathon</a>
            <img src="../assets/images/acm1.png" alt="" class="logo-acm">
            <ul id="nav-items-nonres" class="menu">
                <li><a href="#about" class="link link-theme link-arrow">About</a></li>
                <li><a href="#timeline" class="link link-theme link-arrow">Timeline</a></li>
                <li><a href="#partner" class="link link-theme link-arrow">Partner</a></li>
                <li><a href="#team-section" class="link link-theme link-arrow">Team</a></li>
                <li><a href="#faq" class="link link-theme link-arrow">FAQ</a></li>
                <li><a href="#contact" class="link link-theme link-arrow">Contact us</a></li>
            </ul>
        </div>

        <canvas></canvas>
        <canvas></canvas>
        <div class="home-text">
            <h1 class="vibrate-1" id="mainhead">TRELLATHON</h1>
            <div class="home-text vibrate-1">
                <h1>TRELLATHON</h1>
                <h2>4-HOUR HACKATHON</h2>
                <h2>9TH MARCH 2021</h2>
            </div>


    </section>

    <!-- End of Header -->
    <!-- Start of Responsive Nav -->

    <nav id="nav-items-res" class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>





    <!-- End of Responsive Nav -->

    <!--****************************************************** ABOUT *******************************************************-->
    <section class="about-section">
        <div id="about">
            <div id="about_heading">
                <a class="about-a" id="about_heading_a" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    for('Everyone'){<br>
                    Char Event = "Trellathon";}
                </a>
            </div>

            <div id="about_cards">
                <div class="container-about">

                    <div class="box" id="about_info_box">
                        <span></span>
                        <div class="content">
                            <h2>Trellathon</h2>
                            <p>Trellathon is the largest, one of its kind, hackathon for GGSIPU students. While most of
                                the
                                hackathons focus on code, we at Trellathon consider the uniqueness and potential of the
                                idea
                                as well. Trellathon provides a platform for all the innovators out there to come out and
                                test their creation on the market parameters. We aim to separate “a good idea” from a
                                “market product” and fill the gap in that journey. </p>

                        </div>
                    </div>

                    <div class="about_info_image">
                        <img src="https://usict.acm.org/assets/images/trellposter.jpeg" height="500vh" width="300vw" alt="error">
                    </div>


                </div>
            </div>
        </div>

        <div id="about-res">

            <div id="about_heading">
                <a class="about-a" id="about_heading_a" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    for('Everyone'){<br>
                    Char Event = "Trellathon";}
                </a>
            </div>

            <div id="about-res-text" class="neon-box">
                <div>

                    <h1 id="about-head-res" class="neon-text">Trellathon</h1>
                    <p id="about-res-p">Trellathon is the largest, one of its kind, hackathon for GGSIPU students. While most of
                        the
                        hackathons focus on code, we at Trellathon consider the uniqueness and potential of the
                        idea
                        as well. Trellathon provides a platform for all the innovators out there to come out and
                        test their creation on the market parameters. We aim to separate “a good idea” from a
                        “market product” and fill the gap in that journey.
                    </p>
                </div>
            </div>

            <div img id="about-img-div" class="about_info_image">
                <img id="about-img" src="https://usict.acm.org/assets/images/trellposter.jpeg" alt="error">
            </div>



        </div>


    </section>



    <!--**************************************************** END OF ABOUT *****************************************************-->

    <!--****************************************************** TIMELINE *******************************************************-->

    <!-- <div class="container-timeline">
    <h1 class = "timeline-heading mb-sm text-center heading-partner">Timeline</h1>
    <div class="timeline">
		<div class="timeline-row">
			<div class="timeline-time">
				7:45 PM<small>Dec 21</small>
			</div>
			<div class="timeline-content">
				<i class="icon-attachment"></i>
				<h4>Admin theme!</h4>
				<p>Maxwell Admin Dashboard contains C3 graphs, flot graphs, data tables, calendar, drag &amp; drop and ion slider.</p>

			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				8:00 AM<small>Dec 18</small>
			</div>
			<div class="timeline-content">
				<i class="icon-code"></i>
				<h4>Admin Dashboard!</h4>
				<p>
					Maxwell Admin Dashboard contains C3 graphs, flot graphs, data tables, calendar.
				</p>

			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				7:25 PM<small>Dec 6</small>
			</div>
			<div class="timeline-content">
				<i class="icon-turned_in_not"></i>
				<h4>Best Admin Template!</h4>
				<p>Custom C3 graphs, Custom flot graphs, flot graphs, small graphs, Sass, profile and timeline.</p>

			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				3:55 PM<small>Dec 26</small>
			</div>
			<div class="timeline-content">
				<i class="icon-directions"></i>
				<h4>Maxwell Admin</h4>
				<p>Maxwell Admin Dashboard contains C3 graphs, flot graphs, data tables, calendar, drag &amp; drop and ion slider.</p>

			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				5:24 PM<small>Dec 12</small>
			</div>
			<div class="timeline-content">
				<i class="icon-change_history"></i>
				<h4>Maxwell Dashboard</h4>
				<p class="no-margin">Maxwell Admin dashboard includes invoice, profile, tasks, gallery, projects, maintanence.</p>

			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				8:00 AM<small>Dec 18</small>
			</div>
			<div class="timeline-content">
				<i class="icon-code"></i>
				<h4>Admin Dashboard!</h4>
				<p>
					Maxwell Admin Dashboard contains C3 graphs, flot graphs, data tables, calendar.
				</p>

			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				7:45 PM<small>Dec 21</small>
			</div>
			<div class="timeline-content">
				<i class="icon-attachment"></i>
				<h4>Admin Template!</h4>
				<p>Maxwell Admin Dashboard contains C3 graphs, flot graphs, data tables, calendar, drag &amp; drop and ion slider.</p>

			</div>
		</div>

	</div>
</div> -->

    <div class="timeline" id="timeline">
        <h1 class="neon-text">Timeline</h1>
        <h1 class="timeline-trellathon neon-text">TRELLATHON</h1>
        <div>
            <ul>
                <li>
                    <div class="timeline-li">
                        <time>9th - 20th March 2021
                            REGISTRATION</time>
                        <p> <a href="#">Register Now</a>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="timeline-li">
                        <time>16th March 2021
                            PROBLEM STATEMENT RELEASE</time>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
      </p> -->
                    </div>
                </li>
                <li>
                    <div class="timeline-li">
                        <time>16th - 20th March 2021
                            IDEATION ROUND</time>
                        <p>Draft your solution for the problem statement of Trell.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-li">
                        <time>22nd March 2021
                            RESULTS OF IDEATION ROUND</time>
                        <p>Shortlisted teams will move forward to the next round.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-li">
                        <time>23rd March 2021
                            PROTOTYPING ROUND</time>
                        <p>Develop a prototype for the solution of the ideation round.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-li">
                        <time>24th March 2021
                            PITCH DAY</time>
                        <p>Pitch your prototype to Trell and Judges.</p>
                    </div>
                </li>
            </ul>

        </div>
    </div>












    <!--****************************************************** END OF TIMELINE *******************************************************-->

    <!--****************************************************** PRIZE SECTION *******************************************************-->

    <section id="prize" class="fluid-container pt-5 pb-5">
        <h1 class="mb-sm text-center prize_heading"><code>#include"prizes"</code></h1>
        <div class="prize_parent">
            <div class="prize_item">
                <img src="https://www.wbwn.com/wp-content/uploads/sites/380/2015/03/ACM-1427305270_stretch.png" alt="">
            </div>
            <div class="prize_item">
                <img src="https://www.wbwn.com/wp-content/uploads/sites/380/2015/03/ACM-1427305270_stretch.png" alt="">
            </div>
            <div class="prize_item">
                <img src="https://www.wbwn.com/wp-content/uploads/sites/380/2015/03/ACM-1427305270_stretch.png" alt="">
            </div>
            <div class="prize_item">
                <img src="https://www.wbwn.com/wp-content/uploads/sites/380/2015/03/ACM-1427305270_stretch.png" alt="">
            </div>
        </div>
        <script src="vanilla-tilt.min.js"></script>
    </section>

    <!--****************************************************** PRIZE SECTION *******************************************************-->

    <!-- ************************************************* Start of Partner ************************************************* -->
    <section id="partner">

        <div class="container-partner">
            <h2 class="mb-sm text-center heading-partner">Our <strong>Partners</strong></h2>
            <strong>
                <div class="row d-flex justify-content-center">
                    <div class=" d-flex justify-content-center col-sm-6 col-md-4 col-lg-3">
                        <div class="square-holder">
                            <img alt="" src="trell_logo.png" />
                            <h2 class="pat-heading text-center">TRELL</h2>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-center col-sm-6 col-md-4 col-lg-3">
                        <div class="square-holder">
                            <img alt="" src="ensvee-logo.png" />
                            <h2 class="pat-heading text-center">ENSVEE</h2>
                        </div>
                    </div>
                </div>
            </strong>
        </div>
    </section>

    <!-- ************************************************* END of Partner ************************************************* -->

    <!--***************************************************** TEAM **********************************************************-->
    <section id="team-section">
        <div class="container-team">
            <h1 class="heading-team">Web Team</h1>
            <!-- <div class="hr">
            <hr>
        </div> -->

            <div class="row">
                <div class="col-md-2 col-sm-6 box-1">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="image4-modified.png" alt=""></div>
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-2 col-sm-6 box-1">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="image4-modified.png" alt=""></div>
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="our-team">
                        <div class="pic"><img class="image" src="https://image.shutterstock.com/image-vector/cute-kid-teen-boy-show-260nw-1509139481.jpg" alt=""></div>
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!--**************************************************** End of TEAM ****************************************************-->


    <!--************************************************* FAQS Section ****************************************************-->

    <section class="main-section" id="faq">
        <div id="faqs" class="container">
            <h2 class="line-heading">Frequently Asked Questions</h2>
            <div id="faqSection" class="fullwidth-container">
                <div>
                    <button class="collapsible">Do you work full time as a developer?</button>
                    <div class="faq-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisu oat rhoncus. Curabitur vulputate porttitor lectus, vitae tincidunt dolor eleifend vitae. osuere.m odio, sit amet tincidunt est tincidundisse vingilla in eu justo.</p>
                    </div>
                    <button class="collapsible">Do you require a deposit before working?</button>
                    <div class="faq-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis, porta consequat erat rhoncus. Curabitur vulputate porttitor lectus, vitae tincidunt dolor eleifend vitae.unt est tincidunt at.olutpat. Nulla sit amet sem non elit posuere fringilla in eu justo.</p>
                    </div>
                    <button class="collapsible">Will I own the website?</button>
                    <div class="faq-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisciat r r eleifend vitae. Praespis arcu. Sed condimentum elit ac elit rhoncus, volutpionsecmet sem non elit posuere fringilla in eu justo.</p>
                    </div>
                    <button class="collapsible">Are there other costs involved?</button>
                    <div class="faq-content">
                        <p>Lorem ipsum dolor sit amet, consectetur urna. Suspendis elit posuere fringilla in eu justo.</p>

                        <p>Lorem ipsum dos, volutpaiat orci accumsan.Contact me via <a href="mailto:#" target="_blank">EMAIL</a> and I will be more than happy to answer your queries.</p>
                    </div>
                </div>
                <div>
                    <button class="collapsible">What is hosting? Will I need it?</button>
                    <div class="faq-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscintate po condimentum elit ac elit rhoncus, volutpat feugiat orci accumsan.</p>
                        <p>Maecenas tinciabitur viverra bibendum fringilla in eu justo.</p>
                    </div>
                    <button class="collapsible">Will you work for equity on a new idea I have?</button>
                    <div class="faq-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consrat rhoncus. Curabitur vulputate porttitor lectus, vitae tincidunt dolor eleifend vitae. Praesent sollicitudin eros in finibus posuere. Quisqu elit ac elit rhoncus, volutpat feugiat orci accumsan.</p>
                        <p>Maecenas tincidunt diaali Curabitur viverrafringilla in eu justo.</p>
                    </div>
                    <button class="collapsible">How much experience do you have?</button>
                    <div class="faq-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elialibuimentum elit ac elit rhoncus, volutpat feugiat orci accumsan.</p>
                    </div>
                    <button class="collapsible">What if I need changes. Can I edit it myself?</button>
                    <div class="faq-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing fit ac us, volutpat feugiat orci accumsan.</p>
                        <p>Maecenas tincidit coravida vel diam ngilla in eu justo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--************************************************* End of FAQ Section ****************************************************-->


    <!--************************************************* Contact us ****************************************************-->
    <section id="contact-us">
        <div class="container-contact" id="contact">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Usict Delhi Sector-14</div>

                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+0098 9893 5647</div>
                        <div class="text-two">+0096 3434 5678</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-two">info@usict.acm.org</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Leave a Message</div>
                    <form action="#">
                        <div class="row">
                            <div class="input-box col">
                                <input type="text" placeholder="Enter your name">
                            </div>
                            <div class="input-box col">
                                <input type="text" placeholder="Phone no.">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-box col">
                                <input type="email" placeholder="Enter your email">
                            </div>
                            <div class="input-box col">
                                <input type="text" placeholder="Company">
                            </div>
                        </div>
                        <textarea name="text" class="feedback-input" placeholder="Message"></textarea>
                        <div class="button">
                            <input type="button" value="Send Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--*****************************************************End of Contact us ***********************************************-->



    <!--****************************************************** FOOTER *******************************************************-->
    <section id="container-footer" class="fluid-container bg-black">
        <div class="card bg-black mx-5">
            <div class="row mb-4">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="footer-text pull-left">
                        <div class="d-flex">
                            <img src="../assets/images/acm1.png" alt="" class="footer-acm">
                        </div>
                        <h1 class="footerh1">USICT ACM Student Chapter</h1>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi non
                            pariatur numquam animi nam at impedit odit nisi.</p>
                        <div class="social-buttons">
                            <!-- facebook  Button -->
                            <a href="http://www.facebook.com" target="blank" class="social-margin">
                                <div class="social-icon facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </div>
                            </a>
                            <!-- pinterest Button -->
                            <a href="https://pinterest.com/" target="blank" class="social-margin">
                                <div class="social-icon instagram">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </a>
                            <!-- LinkedIn Button -->
                            <a href="http://linkedin.com/" class="social-margin" target="blank">
                                <div class="social-icon linkedin">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </div>
                            </a>
                            <!-- Github Button -->
                            <a href="https://github.com/" target="blank" class="social-margin">
                                <div class="social-icon github">
                                    <i class="fa fa-github-alt" aria-hidden="true"></i>
                                </div>
                            </a>
                            <!-- Youtube Button -->
                            <a href="http://youtube.com/" target="blank" class="social-margin">
                                <div class="social-icon youtube">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </div>
                            </a>

                            <!-- TwitterButton -->
                            <a href="http://twitter.com/" target="blank" class="social-margin">
                                <div class="social-icon twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="empty-box col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <h5 class="heading_footer">Quick Links</h5>
                    <ul>
                        <li class='footli'>Home</li>
                        <li class='footli'>About</li>
                        <li class='footli'>Team</li>
                        <li class='footli'>FAQ</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <h5 class="heading_footer">Industries</h5>
                    <ul class="card-text">
                        <li class='footli'>Finance</li>
                        <li class='footli'>Public Sector</li>
                        <li class='footli'>Smart Office</li>
                        <li class='footli'>Retail</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <h5 class="heading_footer">Company</h5>
                    <ul class="card-text">
                        <li class='footli'>About Us</li>
                        <li class='footli'>Blog</li>
                        <li class='footli'>Contact</li>
                        <li class='footli'>Join Us</li>
                    </ul>
                </div>
            </div>
            <div class="divider-f mb-4"> </div>

            <div class="copyright-footer">
                <p id="copyright" class="">© Conceptualized,Designed and Developed by Office Bearers
                    of ACM USICT chapter.
                </p>
            </div>
            <a href="#home" class="scroll-up-btn">
                <i class="fa fa-hand-pointer-o"></i>
            </a>
        </div>
    </section>
    <!--************************************************* End of FOOTER **************************************************-->


    <script src="https://kit.fontawesome.com/833875f75e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="home.js"></script>
</body>

</html>