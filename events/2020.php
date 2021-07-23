<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Events 2021</title>
    <link rel="icon" href="../assets/images/acm1.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="ACM@USICT Chapter, GGSIPU" />
    <meta itemprop="description"
        content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />
    <meta itemprop="image" content="../assets/images/acm1.png" />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://usict.acm.org/ACM_New" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ACM@USICT Chapter, GGSIPU" />
    <meta property="og:description"
        content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />
    <meta property="og:image" content="../assets/images/acm1.png" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="ACM@USICT Chapter, GGSIPU" />
    <meta name="twitter:description"
        content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />
    <meta name="twitter:image" content="../assets/images/acm1.png" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/CSS/eventsyearpage.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" type="text/css" href="../assets/CSS/glider.css" />
    <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav id="togglerButton" class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps-abv">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" onclick="myFunction()"
                data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i style="color: black; margin-top: 5px"
                        class="fas fa-bars"></i></span>
            </button>
            <div class="d-flex">
                <a href="../index.html"><img class="acm-logo-navbar" src="../assets/images/acm1.png" height="60px" alt="acm logo" />
                <div class="text-and-logo"></a>
                    <a style="font-size: 16px; padding: 0; margin-bottom: -11px" class="navbar-brand mx-auto"
                        href="../index.html">ACM<span> USICT</span></a>
                    <a href="../index.html"><img class="outstanding-logo" src="../assets/images/outstanding-website.png" alt="" /></a>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarCollapse1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../collab.html">Sponsors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../benefits.html">Why Join Us?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../clubs.html">Clubs</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../Team.html">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://services.acm.org/public/qj/proflevel/proflevel_control.cfm?level=3&country=India&form_type=Student&promo=LEVEL&pay=DD">ACM
                            Registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ==============================================Content========================================== -->
    <section id="content">
        <div class="event-container">
            <div id="eventPage">
            <!-- <h1>hello</h1> -->
            </div>
        </div>
    </section>

    
<script>
        let urlEvent = '../admin/blogAdmin/api.php/?q=readAllEvent&year=2020';
        
        console.log(urlEvent);
        console.log("hello");
        
        let allEvents=document.getElementById("eventPage");
        
        allEvents.innerHTML="";
        
        $(document).ready(function() {
            $.ajax({
                url: urlEvent,
                method: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    
                    console.log("check data ",data);
                    data.forEach(allEvent);
                    
                    function allEvent(event) {
                        // console.log(allEvents);
                        // console.log("check");
                        // console.log(event.poster);
                        // console.log(event.startTime);
                        // console.log(event.endTime);
                        // console.log(event.name);
                        // console.log(event.description);
                        // console.log(event.speakers);
                        
                        allEvents.innerHTML +=" <div class='event-post'>\
                                                    <div class='event-post_img'>\
                                                        <img src="+event.poster+" alt=''>\
                                                    </div>\
                                                    <div class='event-post_info'>\
                                                        <div class='event-post_date'>\
                                                            <span>"+event.startTime+"-"+event.endTime+"</span>\
                                                        </div>\
                                                        <h1 class='event-post_title'>"+event.name+"</h1>\
                                                        <p class='event-post_text'>"+event.description+"</p>\
                                                        <p class='dateTime-para'>"+event.speakers+"</p>\
                                                        <a href="+event.btn1Link+" style='float: right; font-size: 16px;' target='_blank'><button class='dateTime-para btn form-input-boxes-manual btn-watch' style='font-size: 16px;'>"+event.btn+"</button></a>\
                                                        <a href="+event.btn2Link+" style='float: right;' target='_blank'><button class='dateTime-para btn form-input-boxes-manual event-button-two btn-watch' style='font-size: 16px;'>"+event.btn+"</button></a>\
                                                    </div>\
                                                </div>";
                    }
                    // window.location.replace('../events/event.php');
                },
            });
        });
</script>


  

 <!-- ==============================================Footer========================================== -->

    <footer style="background-color: #f7f9fb; margin-top: 0%" id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-info row">
                            <div class="col-lg-4 col-12 d-flex justify-content-center">
                                <a href="#about" class="scrollto"><img src="../assets/images/acm1.png" alt="logo" title=""
                                        style="
                          width: 160px;
                          padding-top: 10px;
                          padding-left: 25px;
                          padding-right: 25px;
                        " /></a>
                            </div>
                            <div class="col-lg-8 col-12 d-flex justify-content-center align-items-center">
                                <a href="#about" class="scrollto"><img src="../assets/images/outstanding-website.png"
                                        alt="logo" title="" style="
                          width: 320px;
                          padding-top: 10px;
                          padding-left: 25px;
                          padding-right: 25px;
                        " /></a>
                            </div>
                        </div>
                        <br />
                        <p>The USICT ACM Student Chapter is an official student body</p>
                        <p>incepted in 2019 under the University School USICT, GGSIPU.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links" style="padding: 0 4%">
                        <br />
                        <h2 style="padding: 2px" id="quick">Quick Links</h2>
                        <ul style="padding-left: 0">
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="https://www.ipu.ac.in/"> IPU-Home</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="https://india.acm.org/"> ACM-India</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="https://www.acm.org/governance/acm-india-council">
                                    ACM-India Office Bearers</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="https://amturing.acm.org/award_winners/reddy_9634208.cfm">
                                    ACM Turing Award</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="../clubs.html">Our Clubs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <br />
                        <h2 style="padding: 2px">Contact Us</h2>
                        <p>
                            Dean Office, <br />
                            USICT, GGSIPU<br />
                            Sector 16C, Dwarka, Delhi<br />
                            <strong>Phone:</strong> 011-25302702<br />
                            <strong>Email:</strong> info@usict.acm.org<br />
                        </p>

                        <div class="social-links" style="text-align-last: justify; font-size: x-large">
                            <a href="https://www.facebook.com/acmusict" class="facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCI7her-mYrb7QM0t9S_nA_Q" class="youtube"><i
                                    class="fa fa-youtube"></i></a>
                            <a href="https://www.instagram.com/acmusict/" class="instagram"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="mailto:acmusit@gmail.com" class="envelope"><i class="fa fa-envelope-o"></i></a>
                            <a href="https://github.com/usict-acm/ACM-new" class="github"><i
                                    class="fa fa-github"></i></a>
                            <a href="https://discord.gg/74d2u7rv" class="discord"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <footer style="background-color: #eff1f4" id="footer">
        <div class="copyright-content">
            <div class="container">
                <br />
                <div class="copyright-text text-center">
                    © Conceptualized,Designed and Developed by Office Bearers of ACM
                    USICT chapter.
                </div>
            </div>
            <br />
        </div>
    </footer>
    <script src="../assets/JS/glider.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../assets/JS/benefits.js"></script>
    
</body>

</html>