<!DOCTYPE html>
<html lang="en">

<head>
     <?php
      include("head.php")
    ?>
     <title>GGSIP University USS ACM Student Chapter</title>
     <link href="assets/CSS/projectPage.css" rel="stylesheet" />
     <link href="assets/CSS/glider.css" rel="stylesheet" />
     <!-- <link href="assets/CSS/header.css" rel="stylesheet" />
     <link href="assets/CSS/footer.css" rel="stylesheet" /> -->
     <link rel="stylesheet" href="./assets/CSS/newStyle.css" />

</head>

<body>
     <!-- ************************************************Navbar******************************************************************************-->
     <?php
      $currentPage = 'projectPage';
      include('header.php');
    ?>
    
    <!-- Header Seaction-->
    <div class="container" style="top: 150px;position: relative;">
        <div class="post-content">
            <div class="post-text">
                <h1 class="heading">Project Nameee</h1>
                <!-- <div class="date">
                    <li>&#x1f4c5; <%= eventFull.date %></li>
                    <li>&#128337; <%= eventFull.time %></li>
                    <li>&#x1F4CD; <%= eventFull.venue %></li>
                </div> -->
                <!-- <form action="/register" method="get"><button type="submit" >REGISTER</button></form> -->
            </div>
            <img src="./assets/images/acm1.png" alt="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus ad veniam ullam maiores dolores odit eveniet perspiciatis, error at.
                    <!-- <img src="<%= eventFull.img %>" alt=""> -->
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
     <script src="assets/JS/glider.js"></script>
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script src="assets\JS\home_new.js"></script>
</body>

</html>