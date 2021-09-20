<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Events</title>
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
        <div id="eventPage"></div>
    </div>
    <div class="row pagination_row">
        <div style="margin:auto;" id="pagination_row_2021"></div>
    </div>
</section>

<?php
    $page = isset($_GET["page"]) ? $_GET["page"] : 1;
    $year = $_GET["year"];
    $previous = $page == 1 ? 1 : $page - 1;
?>
        
<script>
        let urlEvent = '../admin/blogAdmin/api.php/?q=readAllEvent&year='+<?php echo $year ?>+'&page='+<?php echo $page ?>;

        let allEvents=document.getElementById("eventPage");
        let pagination = document.getElementById("pagination_row_2021");
        allEvents.innerHTML="";
        
        $(document).ready(function() {
            $.ajax({
                url: urlEvent,
                method: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    console.log("check data ywar",data);
                    data[0].forEach(allEvent);                    
                    function allEvent(event) {
                        

                            allEvents.innerHTML +=
                                                        `<div class="event-post">
                                                            <div class="event-post_img">
                                                                <img src=${event.poster}  alt="">
                                                            </div>
                                                            <div class="event-post_info">
                                                                <div class="event-post_date">`;
                                    if(event.startDate===event.endDate){
                                        allEvents.append=` <span>${event.startDate}</span>`;

                                    }
                                    else{
                                        allEvents.append=`        <span>${event.startDate} - ${event.endDate}</span>`;
                                    }

                                                        
                    } 
		    pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
                                               <ul class=pagination>\
                                                  <li class=page-item >\
                                                    <a id='previous-pagination' class='page-link pagination-option-next-prev' href=./eventYear.php?q=readAllEvent&year="+<?php echo $year ?>+"&page=<?php echo $previous ?> disabled>\
                                                      < Prev\
                                                    </a>\
                                                  </li>\
                                               </ul>\
                                             </nav>";
                   if (<?php echo $page ?> === 1) {
                      document.getElementById("previous-pagination").className += " disabled-pagination";
                   }
 		   for (var i = 1; i <= data[2]; i++) {
                      var id = "link_pagination" + i;
                      pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
                                                  <ul class=pagination>\
                                                     <li class=page-item>\
                                                        <a id=" + id + " class='page-link pagination-numbers pagination-option-next-prev '" + "href=./eventYear.php?q=readAllEvent&year="+<?php echo $year ?>+"&page=" + i + ">\
                                                           " + i + "\
                                                        </a>\
                                                     </li>\
                                                  </ul>\
                                               </nav></div>"
                     if (<?php echo $page ?> === i) {
                        console.log(<?php echo $page ?>);
                        document.getElementById("link_pagination" + i).className += "active_pagination";
                     }
                  }
		  var next = <?php echo $page ?> === data[2] ? data[2] : <?php echo $page + 1 ?>;
                  pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
                                              <ul class=pagination>\
                                                 <li class=page-item>\
                                                    <a id='next-pagination' class='page-link pagination-option-next-prev' href=./eventYear.php?q=readAllEvent&year="+<?php echo $year ?>+"&page=" + next + ">\
                                                        Next >\
                                                    </a>\
                                                 </li>\
                                              </ul>\
                                          </nav>";
		 if (<?php echo $page ?> === data[2]) {
                    document.getElementById("next-pagination").className += " disabled-pagination";
                }
              },
            });
        });
</script>  

<style>
    .pagination_row{
        margin-right: 0;
        margin-left:0;
    }

    .pagination-option-next-prev {
      border: 0.5px solid gray;
      color: black;
      box-shadow: rgb(0 0 0 / 17%) 2px 2px 10px;
      font-size: 23px;
      margin: 40px 10px 20px 10px !important;
    }

    .pagination-numbers {
      border: 2px solid #0297ff;
      box-shadow: none;
      padding-left: 15px !important;
      padding-right: 15px !important;
      border-radius: 50% !important;
    }

    .active_pagination {
      border: 2px solid #0297ff;
      background-color: #0297ff;
      color: white;
      padding-left: 15px !important;
      padding-right: 15px !important;
      border-radius: 50% !important;
    }

    .disabled-pagination {
      color: lightgray;
      pointer-events: none;
      cursor: default;
      border: none;
      box-shadow: none;
      font-size: 23px;
      margin: 40px 10px 20px 10px !important;
    }
</style>


  

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