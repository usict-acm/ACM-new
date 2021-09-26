<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include("head.php")
    ?>
    <title>USICT ACM</title> 
    <link href='assets/CSS/collab.css' rel="stylesheet" />
    <link href='assets/CSS/glider.css' rel="stylesheet" />
    <link href="./assets/CSS/header.css" rel="stylesheet" />
    <link href="./assets/CSS/footer.css" rel="stylesheet" />
  </head>
  <style>
    .control {
    font-family: arial;
    display: block;
    position: relative;
    padding-left: 27px;
    margin-bottom: 3px;
    padding-top: 7px;
    cursor: pointer;
    font-size: 16px;
}
    .control input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }
.control_indicator {
    position: absolute;
    top: 9px;
    left: 0;
    height: 18px;
    width: 18px;
    background: #ffff;
    border: 2px solid #2e64cf;
    border-radius: 3px;
}
.control:hover input ~ .control_indicator,
.control input:focus ~ .control_indicator {
    background: #cccccc;
}

.control input:checked ~ .control_indicator {
    background: #0070ff;
}
.control:hover input:not([disabled]):checked ~ .control_indicator,
.control input:checked:focus ~ .control_indicator {
    background: #0e6647d;
}
.control input:disabled ~ .control_indicator {
    background: #e6e6e6;
    opacity: 1;
    pointer-events: none;
}
.control_indicator:after {
    box-sizing: unset;
    content: '';
    position: absolute;
    display: none;
}
.control input:checked ~ .control_indicator:after {
    display: block;
}
.control-checkbox .control_indicator:after {
    left: 5px;
    top: 1px;
    width: 2px;
    height: 8px;
    border: solid #ffffff;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
}
.control-checkbox input:disabled ~ .control_indicator:after {
    border-color: #7b7b7b;
}
.control-checkbox .control_indicator::before {
    content: '';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 3.009rem;
    height: 4.5rem;
    margin-left: -1.3rem;
    margin-top: -1.3rem;
    background: #2aa1c0;
    border-radius: 3rem;
    opacity: 0.6;
    z-index: 99999;
    transform: scale(0);
}

@keyframes s-ripple {
    0% {
        transform: scale(0);
    }
    20% {
        transform: scale(1);
    }
    100% {
        opacity: 0;
        transform: scale(1);
    }
}
@keyframes s-ripple-dup {
   0% {
       transform: scale(0);
    }
   30% {
        transform: scale(1);
    }
    60% {
        transform: scale(1);
    }
    100% {
        opacity: 0;
        transform: scale(1);
    }
}
.control-checkbox input + .control_indicator::before {
    animation: s-ripple 250ms ease-out;
}
.shadow{
  box-shadow:0.5px 0.7px 2.5px #4169e1
}
.control-checkbox input:checked + .control_indicator::before {
    animation-name: s-ripple-dup;
}
  </style>
  <body>
  <!-- Navbar-->
    <?php
      $currentPage = 'collab';
      include('header.php');
    ?>
  <!-- Header Image -->
    <div style="margin-left:10%; margin-right:10%; margin-top:3%; margin-bottom:0%;">
      <section id='header'>
        <div class="pt-card row" style="background-image: url('assets/images/collab-banner.png');">
          <div class="heading col-xl-9 col-lg-9 col-md-9">
            <h3><span class="uheading">Let's Collaborate</span></h3>
          </div>
        </div>
      </section>
    </div>
  <!-- Collaborators -->
    <section id="collab" style="margin-top:0%">
      <div class="container">
        <h1 class="collab-main-heading">Collaborations and<span class="highlight"> Sponsors</span>:</h1>
        <div class="row d-flex justify-content-center">
        <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-new"></div>
              <h1 class="collab-heading">Trell</h1>
            </div>
            <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-new0"></div>
              <h1 class="collab-heading">Ensvee</h1>
            </div>
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-1"></div>
              <h1 class="collab-heading">Coursera</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-2"></div>
              <h1 class="collab-heading">Docker<br> Delhi</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-3"></div>
              <h1 class="collab-heading">Lenskart</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-4"></div>
              <h1 class="collab-heading">Coding<br>Ninjas</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-5"></div>
              <h1 class="collab-heading">CAD DESK <br>India</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h1 class="collab-main-heading">Renowned <span class="highlight"> Researchers/ Professionals</span> from:</h1>
        <div class="row d-flex justify-content-center">
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-6"></div>
              <h1 class="collab-heading">University of<br>Cincinnati, USA</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-7"></div>
              <h1 class="collab-heading">University of<br>Szeged, Hungary</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-8"></div>
              <h1 class="collab-heading">IIIT Delhi</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-9"></div>
              <h1 class="collab-heading">Delhi<br>University</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-10"></div>
              <h1 class="collab-heading">JNU Delhi</h1>
            </div>
            <div class="collab-card">
              <hr class="blue-hr">
              <div class="card-11"></div>
              <h1 class="collab-heading">IISc<br> Banglore</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h1 class="collab-main-heading">Industry  <span class="highlight"> Professionals</span> from:</h1>
        <div class="row d-flex justify-content-center">
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-12"></div>
            <h1 class="collab-heading">Amazon</h1>
          </div>
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-13"></div>
            <h1 class="collab-heading">TCS</h1>
          </div>
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-14"></div>
            <h1 class="collab-heading">Zenon</h1>
          </div>
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-15"></div>
            <h1 class="collab-heading">Stage3.co</h1>
          </div>
          <div class="collab-card">
            <hr class="blue-hr">
            <div class="card-16"></div>
            <h1 class="collab-heading">Societe<br>Generale</h1>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="background-grey"
    >
    <div class="container">
      <div class="m-b-50" style="text-align: center;">
        <!-- <img style="width: 90px; margin-bottom: 5vh; " class="text-center" src="./assets/images/contact_us_icon.png"
          alt=""> -->
        <p class="text section-heading h1" style=" color: #4169E1; font-weight: normal;"> <big> <b>Become Our Partner</b> </big></p>
        <p class="text-small" ></p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img class=" contact-us-img m-t-20" width=100%; src="./assets/images/collab/sponsersContactUs.jpg"
            alt="contact us image">
        </div>
        <div class="col-lg-6">
          <form class="widget-contact-form"
            action=""
            role="form" method="post" target="_self" novalidate="novalidate">
            <div class="row" style="margin-top:2rem">
              <div class="form-group col-md-6">
                <input type="text" aria-required="true" name=""
                  class="sponserforminput form-control shadow" placeholder="First Name" style="color: grey;" required>
              </div>
              <div class="form-group col-md-6">
                <input type="text" aria-required="true" name=""
                  class="sponserforminput form-control shadow" placeholder="Last Name" style="color: grey;" required>
              </div>
            </div>
              <div class="form-group">
                <input type="text" name="" class="sponser form input form-control shadow"
                  placeholder="Company" style="color: grey;width:100%;">
              </div>
            <div class="row">
              <div class="form-group col-md-6">
                <input type="email" aria-required="true" name=""
                  class="sponserforminput form-control shadow" placeholder="Email" style="color: grey;" required>
              </div>

      
                <div class="form-group col-md-6">
                  <input type="text" name="" class="sponserforminput form-control shadow "
                    placeholder="Phone Number" style="color: grey; ">
              
              </div>

          
            </div>


              <label class="form-check-label h4" style="bottom: 150px;margin-bottom:6px; margin-top:10px; color: #4169E1;" > <b>Partnership</b> </label> <br>
        
        
        

        <div class="row" style="position:relative;left: 15px; ">
          <div class="form-check form-check-inline col-md-6">
            <label class="control control-checkbox">Annual Partners<input type="checkbox">
              <div class="control_indicator"></div>
            </label>
          </div>
          <div class="form-check form-check-inline"style="position:relative; left:-10px;">
            <label class="control control-checkbox">Event Partners<input type="checkbox">
              <div class="control_indicator"></div>
            </label>
          </div>
        </div>
        
        <div class="row" style="position:relative; left:15px;margin-bottom:10px;">
          <div class="form-check form-check-inline col-md-6">
            <label class="control control-checkbox">Domain Partners<input type="checkbox">
              <div class="control_indicator"></div>
            </label>
          </div>
          <div class="form-check form-check-inline " style="position:relative; left:-10px;">
            <label class="control control-checkbox">Social Media Partners<input type="checkbox">
              <div class="control_indicator"></div>
            </label>
          </div>
          <div class="form-check form-check-inline col-md-6">
            <label class="control control-checkbox">Miscellaneous<input type="checkbox">
              <div class="control_indicator"></div>
            </label>
          </div>
        </div>

        <!-- <div class="control-group">
    <label class="control control-checkbox">
        Annual Partners
            <input type="checkbox" checked="checked" />
        <div class="control_indicator"></div>
    </label>
    <label class="control control-checkbox">
        Event Partners
            <input type="checkbox" />
        <div class="control_indicator"></div>
    </label> <br/>
    <label class="control control-checkbox">
        Domain Partners
            <input type="checkbox" />
        <div class="control_indicator"></div>
    </label>
    <label class="control control-checkbox">
        Social Media Partners
            <input type="checkbox" />
        <div class="control_indicator"></div>
    </label>
  
</div> -->

        <br>
            <div class="form-group">
              <textarea type="text" name="entry.1544463438" rows="5"
                class="form-control form-input-boxes-manual required shadow" placeholder="What's your offer" style="color: grey;"
                aria-required="true"></textarea>
            </div>
            <div class="row">
              <div class="form-group col-md-6"></div>
              <div class="form-group col-md-2"></div>
              <div class="form-group col-md-2 button-center">
                <div class="form-group">
                  <button class="btn signin" type="submit" style="background-color: #4169E1; color:#fff;position:relative;left:55px;"
                    onclick="setColor(event)"><i class="fa fa-paper-plane"></i>&nbsp;SUBMIT</button>

                </div>
              </div>
            </div>
            <div class="row">
              <!-- <div class="form-group col-md-6"></div> -->
              <!-- <div class="form-group col-md-2"></div>
              <div class="form-group col-md-2 button-center"> -->
                <div class="form-group">
                  <button class="btn signin" type="submit" style="background-color: #4169E1; color:#fff; position:relative; top:-69px;left:15px;"
                    onclick="setColor(event)"><i class="fas fa-book"></i>&nbsp;Download Brochure</button>
             

                
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
  <!-- Footer* -->
    <?php
      include('footer.php');
    ?>
  </body>

</html>