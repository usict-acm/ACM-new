<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>ACM USICT</title>
    <link rel="icon" href="./assets/images/acm1.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc"
    />

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="ACM@USICT Chapter, GGSIPU" />
    <meta
      itemprop="description"
      content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc"
    />
    <meta itemprop="image" content="./assets/images/acm1.png" />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://usict.acm.org/ACM_New" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ACM@USICT Chapter, GGSIPU" />
    <meta
      property="og:description"
      content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc"
    />
    <meta property="og:image" content="./assets/images/acm1.png" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="ACM@USICT Chapter, GGSIPU" />
    <meta
      name="twitter:description"
      content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc"
    />
    <meta name="twitter:image" content="./assets/images/acm1.png" />

    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="./assets/CSS/benefits.css" rel="stylesheet" />
    <link href="./assets/CSS/blogs.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="./assets/CSS/glider.css" />
    <script
      src="https://kit.fontawesome.com/d459eda8d9.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <nav
      id="togglerButton"
      class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps-abv"
    >
      <div class="container">
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          onclick="myFunction()"
          data-toggle="collapse"
          data-target="#navbarCollapse1"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"
            ><i style="color: black; margin-top: 5px" class="fas fa-bars"></i
          ></span>
        </button>
        <div class="d-flex">
          <img
            class="acm-logo-navbar"
            src="./assets/images/acm1.png"
            height="60px"
            alt="acm logo"
          />
          <div class="text-and-logo">
            <a
              style="font-size: 16px; padding: 0; margin-bottom: -11px"
              class="navbar-brand mx-auto"
              href="#"
              >ACM<span> USICT</span></a
            >
            <img
              class="outstanding-logo"
              src="./assets/images/outstanding-website.png"
              alt=""
            />
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./index.html"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./collab.html">Sponsors</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./benefits.html">Why Join Us?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./clubs.html">Clubs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Team.html">Our Team</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="https://services.acm.org/public/qj/proflevel/proflevel_control.cfm?level=3&country=India&form_type=Student&promo=LEVEL&pay=DD"
                >ACM Registration</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section>
      <script>
        let urlThree = './admin/blogAdmin/api.php/?q=readHome';

        $(document).ready(function () {
          $.ajax({
            url: urlThree,
            method: 'GET',
            dataType: 'JSON',
            success: function (data) {
              console.log(data);
              data.forEach(myfunc);

              function myfunc(row, index) {
                var image = `admin/blogAdmin/${row.Image}`;
                $(`#blogHeader${index}_image`).css(
                  'background-image',
                  `url(${image})`
                );
                $(`#blogHeader${index}_category`).text(row.Category);
                $(`#blogHeader${index}_title`).text(row.Title);
                $(`#blogHeader${index}_author`).text(row.Author);
                var desc = row.Content;
                var descSub = desc.substring(0, 70) + '...';
                $(`#blogHeader${index}_content`).text(descSub);
                $(`#blogHeader${index}_date`).text(row.Date);
              }
            },
          });
        });
      </script>
      <div class="container" style="margin-top: 3%">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a
              id="blogHeader0_image"
              href="blog-single.html"
              class="a-block d-flex align-items-center height-md"
              style="background-repeat: no-repeat; background-size: cover"
            >
              <div class="text">
                <div class="post-meta">
                  <span id="blogHeader0_category" class="category"></span>
                  <span id="blogHeader0_date" class="mr-2"> </span>
                </div>
                <h3 id="blogHeader0_title"></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a
              id="blogHeader1_image"
              href="blog-single.html"
              class="a-block d-flex align-items-center height-md"
              style="background-repeat: no-repeat; background-size: cover"
            >
              <div class="text">
                <div class="post-meta">
                  <span id="blogHeader1_category" class="category"></span>
                  <span id="blogHeader1_date" class="mr-2"> </span>
                </div>
                <h3 id="blogHeader1_title"></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a
              id="blogHeader2_image"
              href="blog-single.html"
              class="a-block d-flex align-items-center height-md"
              style="background-repeat: no-repeat; background-size: cover"
            >
              <div class="text">
                <div class="post-meta">
                  <span id="blogHeader2_category" class="category"></span>
                  <span id="blogHeader2_date" class="mr-2"> </span>
                </div>
                <h3 id="blogHeader2_title"></h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="container">
      
      <h1 class="category-heading">Lorem ipsum dolor</h1>
      <div class="lower">
        <div class="left-side">
           <div class="row" id="row1">
          <!--  <div class="col-md-6 col-lg-6 col-12">
              <a href="blogs.html" style="text-decoration: none; color: #000">
                <div class="card">
                  <img
                    id="blog0_image"
                    class="card-img-top"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <div class="post-meta">
                      <span id="blog0_category" class="category"></span>
                      <span id="blog0_date" class="mx-2 card-span"> </span>
                      <span class="mx-2 card-span card-span-dot"
                        ><i class="fas fa-circle"></i>
                      </span>
                      <span class="mx-2 card-span"
                        ><i class="fas fa-comments"></i
                      ></span>
                    </div>
                    <p id="blog0_content" class="card-text"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
              <a href="blogs.html" style="text-decoration: none; color: #000">
                <div class="card">
                  <img
                    id="blog1_image"
                    class="card-img-top"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <div class="post-meta">
                      <span id="blog1_category" class="category"></span>
                      <span id="blog1_date" class="mx-2 card-span"> </span>
                      <span class="mx-2 card-span card-span-dot"
                        ><i class="fas fa-circle"></i>
                      </span>
                      <span class="mx-2 card-span"
                        ><i class="fas fa-comments"></i
                      ></span>
                    </div>
                    <p id="blog1_content" class="card-text"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
              <a href="blogs.html" style="text-decoration: none; color: #000">
                <div class="card">
                  <img
                    id="blog2_image"
                    class="card-img-top"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <div class="post-meta">
                      <span id="blog2_category" class="category"></span>
                      <span id="blog2_date" class="mx-2 card-span"> </span>
                      <span class="mx-2 card-span card-span-dot"
                        ><i class="fas fa-circle"></i>
                      </span>
                      <span class="mx-2 card-span"
                        ><i class="fas fa-comments"></i
                      ></span>
                    </div>
                    <p id="blog2_content" class="card-text"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
              <a href="blogs.html" style="text-decoration: none; color: #000">
                <div class="card">
                  <img
                    id="blog3_image"
                    class="card-img-top"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <div class="post-meta">
                      <span id="blog3_category" class="category"></span>
                      <span id="blog3_date" class="mx-2 card-span"> </span>
                      <span class="mx-2 card-span card-span-dot"
                        ><i class="fas fa-circle"></i>
                      </span>
                      <span class="mx-2 card-span"
                        ><i class="fas fa-comments"></i
                      ></span>
                    </div>
                    <p id="blog3_content" class="card-text"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
              <a href="blogs.html" style="text-decoration: none; color: #000">
                <div class="card">
                  <img
                    id="blog4_image"
                    class="card-img-top"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <div class="post-meta">
                      <span id="blog4_category" class="category"></span>
                      <span id="blog4_date" class="mx-2 card-span"> </span>
                      <span class="mx-2 card-span card-span-dot"
                        ><i class="fas fa-circle"></i>
                      </span>
                      <span class="mx-2 card-span"
                        ><i class="fas fa-comments"></i
                      ></span>
                    </div>
                    <p id="blog4_content" class="card-text"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
              <a href="blogs.html" style="text-decoration: none; color: #000">
                <div class="card">
                  <img
                    id="blog5_image"
                    class="card-img-top"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <div class="post-meta">
                      <span id="blog5_category" class="category"></span>
                      <span id="blog5_date" class="mx-2 card-span"> </span>
                      <span class="mx-2 card-span card-span-dot"
                        ><i class="fas fa-circle"></i>
                      </span>
                      <span class="mx-2 card-span"
                        ><i class="fas fa-comments"></i
                      ></span>
                    </div>
                    <p id="blog5_content" class="card-text"></p>
                  </div>
                </div>
              </a>
            </div>-->
          </div> 
        </div>
        <div class="right-side">
          <a href="#">
            <div class="row rightCard">
              <div class="col-5">
                <div class="rightImage">
                  <img src="./assets/images/blog-img.jpg" alt="" />
                </div>
              </div>
              <div class="col-7 rightText">
                <h5>
                  There’s a Cool New Way for Men to Wear Socks and Sandals
                </h5>
                <span class="card-span cardDown">March 15, 2018 </span>
                <span class="card-span card-span-dot"
                  ><i class="fas fa-circle"></i>
                </span>
                <span class="card-span cardDown"
                  ><i class="fas fa-comments"></i
                ></span>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="row rightCard">
              <div class="col-5">
                <div class="rightImage">
                  <img src="./assets/images/blog-img.jpg" alt="" />
                </div>
              </div>
              <div class="col-7 rightText">
                <h5>
                  There’s a Cool New Way for Men to Wear Socks and Sandals
                </h5>
                <span class="card-span cardDown">March 15, 2018 </span>
                <span class="card-span card-span-dot"
                  ><i class="fas fa-circle"></i>
                </span>
                <span class="card-span cardDown"
                  ><i class="fas fa-comments"></i
                ></span>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="row rightCard">
              <div class="col-5">
                <div class="rightImage">
                  <img src="./assets/images/blog-img.jpg" alt="" />
                </div>
              </div>
              <div class="col-7 rightText">
                <h5>
                  There’s a Cool New Way for Men to Wear Socks and Sandals
                </h5>
                <span class="card-span cardDown">March 15, 2018 </span>
                <span class="card-span card-span-dot"
                  ><i class="fas fa-circle"></i>
                </span>
                <span class="card-span cardDown"
                  ><i class="fas fa-comments"></i
                ></span>
              </div>
            </div>
          </a>
          <div class="row categoryCards">
            <div class="col">
              <h4>Categories</h4>
            </div>
          </div>
          <hr style="width: 100%; text-align: centre" />
          <div class="row categories">
            <div class="col-6 categoryLeft"><a href="#">React</a></div>
            <div class="col-6 categoryRight">(12)</div>
          </div>
          <hr style="width: 100%; text-align: centre" />
          <div class="row categories">
            <div class="col-6 categoryLeft"><a href="#">Competitive</a></div>
            <div class="col-6 categoryRight">(12)</div>
          </div>
          <hr style="width: 100%; text-align: centre" />
          <div class="row categories">
            <div class="col-6 categoryLeft"><a href="#">App Dev</a></div>
            <div class="col-6 categoryRight">(12)</div>
          </div>
          <hr style="width: 100%; text-align: centre" />
          <div class="row tags">
            <div class="col">
              <h4>Tags</h4>
            </div>
          </div>
          <hr style="width: 100%; text-align: centre" />
          <a href="#"><p class="tag">React</p></a>
          <a href="#"><p class="tag">Competitive</p></a>
          <a href="#"><p class="tag">App</p></a>
          <a href="#"><p class="tag">Web</p></a>
          <a href="#"><p class="tag">React</p></a>
          <a href="#"><p class="tag">Competitive</p></a>
          <a href="#"><p class="tag">App</p></a>
          <a href="#"><p class="tag">Web</p></a>
          <!-- <div class="card-body">
          <div class="post-meta">
            <span class="category">FOOD</span>
            <span class="mx-2 card-span">March 15, 2018 </span>
            <span class="mx-2 card-span card-span-dot"
              ><i class="fas fa-circle"></i>
            </span>
            <span class="mx-2 card-span"
              ><i class="fas fa-comments"></i
            ></span>
          </div>
          <p class="card-text">
            There’s a Cool New Way for Men to Wear Socks and Sandals
          </p>
        </div> -->
        </div>
      </div>

      <script>
        let url = './admin/blogAdmin/api.php/?q=readAll';
        var posts = document.getElementById("row1");
        posts.innerHTML = "";
        $(document).ready(function () {
          $.ajax({
            url: url,
            method: 'GET',
            dataType: 'JSON',
            success: function (data) {
              console.log(data);
              data.forEach(myfunc);

              function myfunc(row, index) {
              console.log(row);
               

               posts.innerHTML+= "<div class=col-md-6 col-lg-6 col-12>\
              <a href=blogs.html style=text-decoration: none; color: #000>\
                <div class=card id="+index+">\
                  <img\
                  src = ./admin/blogAdmin/"+row.Image+"\
                    id=blog"+index+"_image\
                    class=card-img-top\
                    alt=Card image cap\
                  />\
                  <div class=card-body>\
                    <div class=post-meta>\
                      <span id=blog"+index+"_category class=category>"+row.Category+"</span>\
                      <span id=blog"+index+"_date class=mx-2 card-span>"+row.Date+"</span>\
                      <span class=mx-2 card-span card-span-dot\
                        ><i class=fas fa-circle></i>\
                      </span>\
                      <span class=mx-2 card-span\
                        ><i class=fas fa-comments></i\
                      ></span>\
                    </div>\
                    <p id=blog"+index+"_content class=card-text>"+row.Content+"</p>\
                  </div>\
                </div>\
              </a>\
            </div>"
               
               
                // console.log(index);
                // $(`#blog${index}_image`).attr(
                //   'src',
                //   'admin/blogAdmin/' + row.Image
                // );
                // $(`#blog${index}_category`).text(row.Category);
                // $(`#blog${index}_title`).text(row.Title);
                // $(`#blog${index}_author`).text(row.Author);
                // var desc = row.Content;
                // var descSub = desc.substring(0, 70) + '...';
                // $(`#blog${index}_content`).text(descSub);
                // $(`#blog${index}_date`).text(row.Date);
                // //     var card = `<div class="col-md-6 col-lg-6 col-12">
                //   <a href="blogs.html" style="text-decoration: none; color: #000">
                //     <div class="card">
                //       <img
                //         src="admin/blogAdmin/${row.Image}"
                //         class="card-img-top"
                //         alt="Card image cap"
                //       />
                //       <div class="card-body">
                //         <div class="post-meta">
                //           <span class="category">${row.Category}</span>
                //           <span class="mx-2 card-span">${row.Date} </span>
                //           <span class="mx-2 card-span card-span-dot"
                //             ><i class="fas fa-circle"></i>
                //           </span>
                //           <span class="mx-2 card-span"
                //             ><i class="fas fa-comments"></i
                //           ></span>
                //         </div>
                //         <p class="card-text">${row.descSub}</p>
                //       </div>
                //     </div>
                //   </a>
                // </div>`;
                //     const ele = document.getElementById('row1');
                // document.body.appendChild(ele.card);
                // document.body.appendChild(ele.firstChild);
              }

              // }
            },
          });
        });
      </script>
    </section>

    <!-- ***********************************************Footer************************************************************************ -->

    <footer style="background-color: #f7f9fb" id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <div class="footer-info row">
                <div class="col-lg-4 col-12 d-flex justify-content-center">
                  <a href="#about" class="scrollto"
                    ><img
                      src="assets/images/acm1.png"
                      alt="logo"
                      title=""
                      style="
                        width: 160px;
                        padding-top: 10px;
                        padding-left: 25px;
                        padding-right: 25px;
                      "
                  /></a>
                </div>
                <div
                  class="
                    col-lg-8 col-12
                    d-flex
                    justify-content-center
                    align-items-center
                  "
                >
                  <a href="#about" class="scrollto"
                    ><img
                      src="assets/images/outstanding-website.png"
                      alt="logo"
                      title=""
                      style="
                        width: 320px;
                        padding-top: 10px;
                        padding-left: 25px;
                        padding-right: 25px;
                      "
                  /></a>
                </div>
              </div>
              <br />
              <p>The USICT ACM Student Chapter is an official student body</p>
              <p>incepted in 2019 under the University School USICT, GGSIPU.</p>
            </div>

            <div class="col-lg-4 col-md-6 footer-links" style="padding: 0 4%">
              <br />
              <h4 style="padding: 2px" id="quick">Quick Links</h4>
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
                    ACM-India Office Bearers</a
                  >
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a
                    href="https://amturing.acm.org/award_winners/reddy_9634208.cfm"
                  >
                    ACM Turing Award</a
                  >
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="./clubs.html">Our Clubs</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
              <br />
              <h4 style="padding: 2px">Contact Us</h4>
              <p>
                Dean Office, <br />
                USICT, GGSIPU<br />
                Sector 16C, Dwarka, Delhi<br />
                <strong>Phone:</strong> 011-25302702<br />
                <strong>Email:</strong> info@usict.acm.org<br />
              </p>

              <div
                class="social-links"
                style="text-align-last: justify; font-size: x-large"
              >
                <a href="https://www.facebook.com/acmusict" class="facebook"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a
                  href="https://www.youtube.com/channel/UCI7her-mYrb7QM0t9S_nA_Q"
                  class="youtube"
                  ><i class="fa fa-youtube"></i
                ></a>
                <a href="https://www.instagram.com/acmusict/" class="instagram"
                  ><i class="fa fa-instagram"></i
                ></a>
                <a href="mailto:acmusit@gmail.com" class="envelope"
                  ><i class="fa fa-envelope-o"></i
                ></a>
                <a href="https://github.com/usict-acm/ACM-new" class="github"
                  ><i class="fab fa-github"></i
                ></a>
                <a href="https://discord.gg/74d2u7rv" class="discord"
                  ><i class="fab fa-discord"></i
                ></a>
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

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>