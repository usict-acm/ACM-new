<nav id="togglerButton" class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--blw">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" onclick="myFunction()" data-toggle="collapse"
            data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i style="color:black; margin-top:5px" class="fas fa-bars"></i></span>
        </button>
        <div class="d-flex">
            <a href="./index.html"><img class="acm-logo-navbar" src="./assets/images/acm1.png" height="60px" alt="acm logo" />
            <div class="text-and-logo"></a>
                <a style="font-size: 16px; padding: 0; margin-bottom: -11px" class="navbar-brand mx-auto"
                    href="./index.html">ACM<span> USICT</span></a>
                <a href="./index.html"><img class="outstanding-logo" src="./assets/images/outstanding-website.png" alt="" /></a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($currentPage =='home'){echo 'active';}?>"> <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item <?php if($currentPage =='collab'){echo 'active';}?>"> <a class="nav-link" href="./collab.php">Sponsors</a> </li>
            <li class="nav-item <?php if($currentPage =='benefits'){echo 'active';}?>"> <a class="nav-link" href="./benefits.php">Why Join Us?</a> </li>
            <li class="nav-item <?php if($currentPage =='clubs'){echo 'active';}?>"> <a class="nav-link" href="./clubs.php">Clubs</a> </li>
            <li class="nav-item <?php if($currentPage =='team'){echo 'active';}?>"> <a class="nav-link" href="./Team.html">Our Team</a> </li>
            <li class="nav-item <?php if($currentPage =='contact'){echo 'active';}?>"> <a class="nav-link" href="./index.html#contact">Contact Us</a> </li>
            <li class="nav-item <?php if($currentPage =='register'){echo 'active';}?>"> <a class="nav-link"
                href="https://services.acm.org/public/qj/proflevel/proflevel_control.cfm?level=3&country=India&form_type=Student&promo=LEVEL&pay=DD">ACM
                Registration</a> </li>
            </ul>
        </div>
    </div>
</nav>
  