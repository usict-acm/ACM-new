<nav id="togglerButton" class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--blw">
    <div class="container">
        <div class="d-flex">
            <a href="./"><img class="acm-logo-navbar" src="./assets/images/acm1.png" height="60px" alt="acm logo" />
            <div class="text-and-logo"></a>
                <a style="font-size: 16px; padding: 0; margin-bottom: -11px" class="navbar-brand mx-auto"
                    href="./">USICT<span> ACM</span></a>
                <a href="./"><img class="outstanding-logo" src="./assets/images/outstanding-website.png" alt="" /></a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i style="color:black; margin-top:5px" class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($currentPage =='home'){echo 'active';}?>"> <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item <?php if($currentPage =='blogs'){echo 'active';}?>"> <a class="nav-link" href="./blogs.php">Blogs</a> </li>
            <li class="nav-item <?php if($currentPage =='benefits'){echo 'active';}?>"> <a class="nav-link" href="./benefits.php">Why Join Us?</a> </li>
            <li class="nav-item <?php if($currentPage =='clubs'){echo 'active';}?>"> <a class="nav-link" href="./clubs.php">Clubs</a> </li>
            <li class="nav-item <?php if($currentPage =='team'){echo 'active';}?>"> <a class="nav-link" href="./team.php">Our Team</a> </li>
            <li class="nav-item <?php if($currentPage =='contact'){echo 'active';}?>"> <a class="nav-link" href="./#contact">Contact Us</a> </li>
            <li class="nav-item <?php if($currentPage =='register'){echo 'active';}?>"> <a class="nav-link"
                href="./benefits.php#registration">ACM
                Registration</a> </li>
            </ul>
        </div>
    </div>
</nav>
  