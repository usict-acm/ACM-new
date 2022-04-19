<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="../assets/images/acm1.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,600,700,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./footer/bootstrap-footer-17//css//style.css">
    <!-- <link href="style.css" rel="stylesheet"> -->



    <style>
        .fa-solid, .fas {
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    color: aliceblue;
        }   
        #res-icon-ham{
            height:"2px";
        }
        

        body {
            font-family: 'Montserrat', sans-serif;

        }

        #team {
            padding: 30px 0;
            overflow-y: hidden;
        }

        .row {
            overflow-y: hidden;
        }

        .sec-heading h6 {
            font-family: 'Allura', cursive;
            font-size: 65px;
        }

        #team-head {
            color: #fff;
            text-shadow: 0 0 22px #36ed29;
            z-index: -2;
            opacity: 2;
            font-family: "Rokkitt", serif;
            font-size: 3.3vw;
            font-weight: 450;
        }
        }

        .single-box {
            border: 1px solid #ddd;
            border-radius: 20px;
            overflow: hidden;
            background-color: #fff
        }

        .info-area {
            padding: 0 20px 45px;
        }

        .img-area {
            overflow: hidden;
            padding: 15px 0 15px;
        }

        .img-area img {
            margin: 0 auto;
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
            max-width: 230px
        }

        .single-box:hover img {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .info-area i {
            display: inline-block;
            color: #ffb400;
            margin: 0 4px;
        }

        .info-area h4 {
            font-weight: 600
        }

        .info-area h5 {
            color: #3b04db;
            margin: 10px 0 0;
            font-weight: 600
        }

        .info-area a {
            display: inline-block;
            margin: 25px 0 0;
            background-color: darkorange;
            color: #fff;
            padding: 10px 35px;
            border-radius: 4px;
        }

        .team-slider .owl-dots {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -60px;
            text-align: center;
            width: 100%;
        }

        .team-slider button.owl-dot {
            width: 16px;
            height: 16px;
            display: inline-block;
            margin: 0 6px;
            text-align: center;
            border-radius: 50%;
            background-color: #262626;
        }

        .team-slider .owl-dot.active {
            background-color: coral;
        }

        .move-animation {
            position: relative;
            -webkit-animation: move-animation 1s ease-in-out infinite;
            animation: move-animation 1s ease-in-out infinite;
        }

        @-webkit-keyframes move-animation {
            0% {
                top: 3px;
            }

            50% {
                top: -3px;
            }

            100% {
                top: 3px;
            }
        }

        #team {
            padding: 30px 0;
            /* height: 120vh; */
        }

        .sec-heading h6 {
            font-family: 'Allura', cursive;
            font-size: 65px;
            height: 14vh;
        }

        .info-area h4 {
            font-weight: 600;
            color: azure;
        }

        .sec-heading h6 {
            font-family: 'Allura', cursive;
            font-size: 65px;
            height: 14vh;
            color: azure;
        }

        .img-area {
            overflow: hidden;
            padding: 15px 0 15px;
            background: black;
        }

        .info-area {
            padding: 0 20px 45px;
            background-color: black;
        }

        .single-box {
            /* border: 1px solid black; */
            /* border-radius: 20px; */
            overflow: hidden;
            background-color: #fff;
        }

        .single-box {
            border: 0px solid black !important;
            border-radius: 0px !important;
            overflow: hidden;
            background-color: #fff;
        }

        .sec-heading h6 {
            font-family: 'Allura', cursive;
            font-size: 65px;
            height: 14vh;
            color: azure;
            overflow-y: hidden;

        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;

        }

        .no-js .owl-carousel,
        .owl-carousel.owl-loaded {
            display: block;
            height: -8vh;
            overflow-y: hidden !important;
        }

        #trying-team {
            overflow-y: hidden;
            height: 90vh;
        }

        #team {
            padding: 30px 0;
            height: 60vh;
            background-color: black;
        }
        .header{
            overflow:hidden;
        }
        #scr-remove{
            overflow:hidden;
        }
        .header .logo-navbar {
    color: #ffd300;
    display: block;
    float: left;
    font-size: 2.3em;
    /* padding: 2px 0px; */
    margin-left: 85px;
    font-family: Montserrat;
    text-decoration: none;
    font-weight: bold;
    position: absolute;
    left: 80px;
    top: 8px;
    /* right: 10px; */
    /* bottom: 9px; */
}
.navbar-light .navbar-toggler {
    position: relative;
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1);
    right: -3vh;
    top: .3vh;
}

    </style>


    <title>Hackathon</title>
</head>

<body>
    <!-- Header -->
    <section id="home">
        <div class="header" id="scr-remove" >
        
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
            <div class="home-text">
                <h2 class="hero-text">4-HOUR HACKATHON</h2>
                <h2 class="hero-text">9TH MARCH 2021</h2>
            </div>


    </section>

    <!-- End of Header -->
    <!-- Start of Responsive Nav -->

    <nav id="nav-items-res" class="navbar navbar-light  fixed-top">
        <div class="container-fluid">
            <img src="../assets/images/acm1.png" alt="" class="logo-acm">
            

            <a class="logo-navbar" id="res-hack" href="">Hackathon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="color: green;">
                <!-- <span class="navbar-toggler-icon"> <i class="fa-solid fa-bars custom-icon"></i></span> -->
                 <i class="fa-solid fa-bars custom-icon" id="res-icon-ham"></i> </button>
                 
                
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Take a Look</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item"><a href="#about" target="_parent" class="link link-theme link-arrow">About</a></li>
                        <li class="nav-item"><a href="#timeline" class="link link-theme link-arrow">Timeline</a></li>
                        <li class="nav-item"><a href="#partner" class="link link-theme link-arrow">Partner</a></li>
                        <li class="nav-item"><a href="#team-section" class="link link-theme link-arrow">Team</a></li>
                        <li class="nav-item"><a href="#faq" class="link link-theme link-arrow">FAQ</a></li>
                        <li class="nav-item"><a href="#contact" class="link link-theme link-arrow">Contact us</a></li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown"> -->
                        <!-- <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li> -->
                        <!-- <li>
                                    <hr class="dropdown-divider">
                                </li> -->
                        <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        <!-- </ul>
                        </li> -->
                    </ul>
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button> -->
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
                            <center style="font-size:4rem">Trellathon</center>
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

    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <section class="timeline_area section_padding_130">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Timeline Area-->
                    <div class="apland-timeline-area">
                         <!-- Single Timeline Content-->
                         <div class="single-timeline-area">
                            <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                <p>2019</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Single Timeline Content-->
                         <div class="single-timeline-area">
                            <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                <p>2019</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Single Timeline Content-->
                         <div class="single-timeline-area">
                            <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                <p>2019</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Single Timeline Content-->
                         <div class="single-timeline-area">
                            <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                <p>2019</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Single Timeline Content-->
                         <div class="single-timeline-area">
                            <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                <p>2019</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Single Timeline Content-->
                        <div class="single-timeline-area">
                            <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                <p>2019</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                        <div class="timeline-icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                                        <div class="timeline-text">
                                            <h6>Updated 4.0</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <style type="text/css">
    body {
        /* margin-top: 20px; */
        background-color:black;
        
    }

    .timeline_area {
        position: relative;
        z-index: 1;
        
    }
    .single-timeline-area {
        position: relative;
        z-index: 1;
        padding-left: 180px;
    }
    @media only screen and (max-width: 575px) {
        .single-timeline-area {
            padding-left: 100px;
        }
    }
    .single-timeline-area .timeline-date {
        position: absolute;
        width: 180px;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-grid-row-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        padding-right: 60px;
    }
    @media only screen and (max-width: 575px) {
        .single-timeline-area .timeline-date {
            width: 100px;
        }
    }
    .single-timeline-area .timeline-date::after {
        position: absolute;
        width: 3px;
        height: 100%;
        content: "";
        background-color: #ffd300;
        top: 0;
        right: 30px;
        z-index: 1;
    }
    .single-timeline-area .timeline-date::before {
        position: absolute;
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background-color: white;
        content: "";
        top: 50%;
        right: 26px;
        z-index: 5;
        margin-top: -5.5px;
    }
    .single-timeline-area .timeline-date p {
        margin-bottom: 0;
        color: white;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 500;
    }
    .single-timeline-area .single-timeline-content {
        position: relative;
        z-index: 1;
        padding: 30px 30px 25px;
        border-radius: 6px;
        margin-bottom: 15px;
        margin-top: 15px;
        -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
        box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
        border: 3px solid #ffd300;
    }
    @media only screen and (max-width: 575px) {
        .single-timeline-area .single-timeline-content {
            padding: 20px;
        }
    }
    .single-timeline-area .single-timeline-content .timeline-icon {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        width: 30px;
        height: 30px;
        background-color: black;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 30px;
        flex: 0 0 30px;
        text-align: center;
        max-width: 30px;
        border-radius: 50%;
        margin-right: 15px;
    }
    .single-timeline-area .single-timeline-content .timeline-icon i {
        color: #ffd300;
        line-height: 30px;
    }
    .single-timeline-area .single-timeline-content .timeline-text h6 {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
    }
    .single-timeline-area .single-timeline-content .timeline-text p {
        font-size: 18px;
        margin-bottom: 0;
        color:white;
    }
    .single-timeline-area .single-timeline-content:hover .timeline-icon,
    .single-timeline-area .single-timeline-content:focus .timeline-icon {
        background-color: white;
    }
    .single-timeline-area .single-timeline-content:hover .timeline-text h6,
    .single-timeline-area .single-timeline-content:focus .timeline-text h6 {
        color: white;
    }
    
    </style>
    
    <script type="text/javascript">
    
    </script>
 


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
    <!-- <script>
        let height = document.querySelector(".liTimeline").offsetHeight;
        console.log(height);
    </script>

    <div class="timeline-section">
        <div class="timeline" id="timeline">
            <h1 class="mb-sm text-center heading-partner fonts">#include < Timeline>
            </h1>
    
            <div>
                <ul>
                    <li class="timeline-li">
                        <div>
                            <time>9th - 20th March 2021
                                REGISTRATION</time>
                            <p> <a href="#">Register Now</a>
                            </p>
                        </div>
                    </li>
                    <li class="timeline-li">
                        <div>
                            <time>16th March 2021
                                PROBLEM STATEMENT RELEASE</time>
                            
                        </div>
                    </li>
                    <li class="timeline-li">
                        <div>
                            <time>16th - 20th March 2021
                                IDEATION ROUND</time>
                            <p>Draft your solution for the problem statement of Trell.</p>
                        </div>
                    </li>
                    <li class="timeline-li">
                        <div>
                            <time>22nd March 2021
                                RESULTS OF IDEATION ROUND</time>
                            <p>Shortlisted teams will move forward to the next round.</p>
                        </div>
                    </li>
                    <li class="timeline-li">
                        <div>
                            <time>23rd March 2021
                                PROTOTYPING ROUND</time>
                            <p>Develop a prototype for the solution of the ideation round.</p>
                        </div>
                    </li>
                    <li class="timeline-li">
                        <div>
                            <time>24th March 2021
                                PITCH DAY</time>
                            <p>Pitch your prototype to Trell and Judges.</p>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div> -->












    <!--****************************************************** END OF TIMELINE *******************************************************-->

    <!--****************************************************** PRIZE SECTION *******************************************************-->

    <section id="prize" class="fluid-container pt-5 pb-5">
        <h1 class="mb-sm text-center prize_heading fonts"> #require_once "Prizes" </h1>
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
            <h2 class="mb-sm text-center heading-partner fonts "> #include < Our Partners>
            </h2>
            <strong>
                <div class="row d-flex justify-content-center">
                    <div class=" d-flex justify-content-center col-sm-6 col-md-4 col-lg-3">
                        <div class="square-holder">
                            <img alt="" src="trell_logo.png" />
                            <h1 class="pat-heading text-center">TRELL</h1>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-center col-sm-6 col-md-4 col-lg-3">
                        <div class="square-holder">
                            <img alt="" src="ensvee-logo.png" />
                            <h1 class="pat-heading text-center">ENSVEE</h1>
                        </div>
                    </div>
                </div>
            </strong>
        </div>
    </section>

    <!-- ************************************************* END of Partner ************************************************* -->

    <!--***************************************************** TEAM **********************************************************-->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="sec-heading text-center">

                        <h6 id="team-head">#define < Team Members>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="testimonial-box" id="trying-team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="team-slider owl-carousel">
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/65VQDfjs/1.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/vmCM14qL/2.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/TYTxWM9S/3.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/593GTHB7/4.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/tJCrp53r/5.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/65VQDfjs/1.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/vmCM14qL/2.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/TYTxWM9S/3.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/593GTHB7/4.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/tJCrp53r/5.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/65VQDfjs/1.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/vmCM14qL/2.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/TYTxWM9S/3.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/593GTHB7/4.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/tJCrp53r/5.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/65VQDfjs/1.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/vmCM14qL/2.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/TYTxWM9S/3.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/593GTHB7/4.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/tJCrp53r/5.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in "></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/65VQDfjs/1.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/vmCM14qL/2.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/TYTxWM9S/3.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/593GTHB7/4.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/tJCrp53r/5.png"></div>
                                    <div class="info-area">
                                        <h4>Person's Name</h4>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--**************************************************** End of TEAM ****************************************************-->




    </div>
    </div>
    </section>

    <!--************************************************* End of FAQ Section ****************************************************-->
    <section class="main-section" id="faq">
        <div id="faqs" class="container">
            <h1 class="mb-sm text-center fonts">Frequently Asked Questions</h1>
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



    <!--************************************************* Contact us ****************************************************-->
    <section id="contact-us">

        <div class="container-contact" id="contact">
            <div class="content">
                <div class="left-side">
                    <div class="address details" style="width: 100vw ;height:40vh;">
                        <iframe id="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.203073386905!2d77.01843216508175!3d28.59368408243313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1aafdb891567%3A0x10d270731c930a87!2sGuru%20Gobind%20Singh%20Indraprastha%20University!5e0!3m2!1sen!2sin!4v1648644072880!5m2!1sen!2sin" style="width: 50vw ;height:35vh; border-radius:1rem; object-fit:contain;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="phone-email" style="display: flex">
                        <div class="address details">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="topic">Address</div>
                            <div class="text-one">Usict Delhi Sector-14</div>
                        </div>
                        <div class="phone details">
                            <i class="fas fa-phone-alt"></i>
                            <div class="topic">Phone</div>
                            <div class="text-one">+0098 9893 5647</div>
                        </div>
                        <div class="email details">
                            <i class="fas fa-envelope"></i>
                            <div class="topic">Email</div>
                            <div class="text-two">info@usict.acm.org</div>
                        </div>
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
    <!-- <section id="container-footer" class="fluid-container bg-black">
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
                <div class="social-buttons">
                    facebook  Button -->

                    <!-- <a href="http://www.facebook.com" target="blank" class="social-margin">
                        <div class="social-icon facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </a> -->
                    <!-- pinterest Button -->
                    <!-- <a href="https://pinterest.com/" target="blank" class="social-margin">
                        <div class="social-icon instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                    </a> -->
                    <!-- LinkedIn Button -->
                    <!-- <a href="http://linkedin.com/" class="social-margin" target="blank">
                        <div class="social-icon linkedin">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </div>
                    </a> -->
                    <!-- Github Button -->
                    <!-- <a href="https://github.com/" target="blank" class="social-margin">
                        <div class="social-icon github">
                            <i class="fa fa-github-alt" aria-hidden="true"></i>
                        </div>
                    </a> -->
                    <!-- Youtube Button -->
                    <!-- <a href="http://youtube.com/" target="blank" class="social-margin">
                        <div class="social-icon youtube">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </div>
                    </a> -->

                    <!-- TwitterButton -->
                    <!-- <a href="http://twitter.com/" target="blank" class="social-margin">
                        <div class="social-icon twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </div> -->
            <!-- <div class="divider-f mb-4"> </div> -->

            <!-- <div class="copyright-footer"> -->
                <!-- <p id="copyright" class="">© Conceptualized, Designed and Developed by Office Bearers -->
                    <!-- of ACM USICT chapter. -->
                <!-- </p> -->
            <!-- </div> -->
            <!-- <a href="#home" class="scroll-up-btn"> -->
                <!-- <i class="fa fa-hand-pointer-o"></i> -->
            <!-- </a> -->
        <!-- </div> -->
    <!-- </section> -->

    <?php include './footer/bootstrap-footer-17/index.html' ?>
    <!--************************************************* End of FOOTER **************************************************-->


    <script src="https://kit.fontawesome.com/833875f75e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="home.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
    </script>
    <script>
        $('.team-slider').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 450,
            margin: 20,
            responsive: {
                0: {
                    items: 3
                },
                768: {
                    items: 3
                },
                991: {
                    items: 4
                },
                1200: {
                    items: 6
                },
                1920: {
                    items: 6
                }
            }
        });
    </script>
</body>

</html>