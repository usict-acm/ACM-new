<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include('head.php');
    ?>
    <title>GGSIP University USS ACM Student Chapter</title>
    
    <link href="./assets/CSS/glider.css" rel="stylesheet"/>
	  <link rel="stylesheet" href="./assets/CSS/newStyle.css" />
    <link href="./assets/CSS/blogs.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      $currentPage = 'projects';
      include('header.php');
    ?>

    <!-- ***********************************************Blog-Banner************************************************ -->
    <div class="blog-banner">
      <section id='header-blog'>
        <div class="pt-card-blog row">
          <div class="heading col-xl-9 col-lg-9 col-md-9 col-sm-6">
            <h2><span class="uheading-blog">PROJECTS</span></h2>
          </div>
        </div>
      </section>
    </div>

        <!-- ==============================================header Three Blogs========================================== -->
    <section class="blog-header">
      <div class="container mt-4">
        <div class="row" id="row2"></div>
      </div>
    </section>
    <section>
      
    <section class="container mt-5">
      <h1 class="category-heading">Let The <span class = "text-head"> Words Speak</h1>
      <div class="lower">
        <!-- ====================================================Show All Blogs=========================================   -->
        <div class="left-side">
          <div class="" id="row1">
        
          </div>
          <div class="" id="row1-carousel"></div>
          <div class="row">
            <div class="m-auto" id="pagination_row"></div>
          </div>
        </div>
        <div class="right-side">
        <!-- ==============================================Show rightside three blogs================================== -->
        <!-- <div class="row categoryCards mt-0">
          <div class="col">
            <h4>Recent <span class="text-head">Projects</h4>
          </div>
        </div> -->
        <!-- <div id="row4"></div> -->

        <!-- <div class="row categoryCards">
          <div class="col">
            <h4>Categories</h4>
          </div>
        </div>
        <hr style="width: 100%; text-align: centre" /> -->
        <!-- ===========================================================Show Ctegories=================================== -->
        <!-- <div id="row3">
          <div class= 'row categories'>
            <div id=" + row.Category + " class= 'col-6 categoryLeft'>AI</div>
            <div class= 'col-6 categoryRight' >1</div>
          </div> 
          <hr style= 'width: 100%; text-align: centre' />
          <div class= 'row categories'>
            <div id=" + row.Category + " class= 'col-6 categoryLeft'>MIL</div>
            <div class= 'col-6 categoryRight' >1</div>
          </div> 
        </div> -->
        <?php
        include('./blogHeader.php');
        ?>
        <?php
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $previous = $page == 1 ? 1 : $page - 1;
        ?>
        <script>
          
          let url = "./admin/projectAdmin/api.php?q=readAll&page=<?php echo $page ?>";
          var posts = document.getElementById("row1-carousel");
          var pagination = document.getElementById("pagination_row");
          posts.innerHTML = "";
          console.log("hi");
          $(document).ready(function() {
            $.ajax({
              url: url,
              method: 'GET',
              dataType: 'JSON',
              success: function(data) {
                console.log("hi");
                console.log("data blogs", data);
                console.log("hi");
              
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

               // Clear the posts element before adding new content
                    posts.innerHTML="";
                    
                    function GenerateCard(row, index) {
                      console.log("This Function Generate Project Card Component");
                      var desc = row.Content;
                      var descSub = desc.substring(0, 70) + "...";
                      
                      // Change this to adjust the Card Component HTML structure
                      let CardComponent = `
                                        <div class="col-lg-4">
                                          <div class="card" style="width: 18rem; height: 30rem;"> <!-- Set a fixed height for the card -->
                                            <div style="height: 13rem; overflow: hidden;"> 
                                              <img src="${row.Image}" class="card-img-top" alt="Card image cap" style="object-fit: cover; width: 100%;">
                                            </div>
                                            <div class="card-body">
                                              <h5 class="card-title">${row.Title}</h5>
                                              <p class="card-text">${descSub}</p>
                                              <a href="#" class="btn btn-primary" onClick="redirec(${row.Sno})">View Project</a>
                                            </div>
                                          </div>
                                        </div>
                                      `;

                      return CardComponent;
                    }

                    function GenerateCarousel(data) {
                      let ProjectSlide = "";

                      // Loop through  data and generate carousel items with three cards each
                      for (let i = 0; i < data[0].length; i += 3) {
                        let row = document.createElement("div");
                        row.classList.add("row");

                        for (let j = i; j < Math.min(i + 3, data[0].length); j++) {
                          let cardComponent = GenerateCard(data[0][j], j);

                          let cardWrapper = document.createElement("div");
                          cardWrapper.classList.add("col-lg-4");
                          cardWrapper.innerHTML = cardComponent;

                          row.appendChild(cardWrapper);
                        }

                        let carouselItem = document.createElement("div");
                        carouselItem.classList.add("carousel-item");
                        if (i === 0) {
                          carouselItem.classList.add("active");
                        }
                        carouselItem.appendChild(row);

                        ProjectSlide += carouselItem.outerHTML;
                      }

                      let carouselComponent = `
                        <section class="container mt-4">
                          <div id="carouselExampleIndicators" class="carousel  carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              ${ProjectSlide}
                            </div>
                            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                        </section>
                      `;

                      return carouselComponent;
                    }

                    // Call the function and set the innerHTML of the posts element

                    try {
                            const carouselComponent = GenerateCarousel(data); // Call your carousel generation function
                            // Replace the  HTML with carouselComponent
                            posts.innerHTML = carouselComponent;
                          } catch (error) {
                            posts.innerHTML = `<h1>An error occurred: Carousel Component Not working </h1>`;
                          }

/////////////////////////////////////////////////////////////////////////////////

                // data[0].forEach(GenerateCard);
                // function GenerateCard(row, index) {
                //   console.log("This Function Generate Project Card Component");
                //   var desc = row.Content;
                //   var descSub = desc.substring(0, 70) + "...";
                //   let spanTag = "";
                //   // row.Category.forEach((element) => {
                //   //   spanTag += "<span id=blog" + index + "_category class=category>" + element + "</span>"
                //   // })
                //   // Change this to change Card Component
                //   let CardComponent=`
                //                       <div class="col-md-6 col-lg-6 col-12">
                //                         <div class="card" style="width: 18rem;">
                //                           <img src="${row.Image}" class="card-img-top" alt="Card image cap" style="height: 13rem; object-fit: cover;">
                //                           <div class="card-body">
                //                             <h5 class="card-title">${row.Title}</h5>
                //                             <p class="card-text">${descSub}</p>
                //                             <a href="#" class="btn btn-primary" onClick="redirec(${row.Sno})">Go somewhere</a>
                //                           </div>
                //                         </div>
                //                       </div>
                //                             `;

                //   posts.innerHTML += CardComponent;}

                  // Using String lateral on prev card design
                  // posts.innerHTML += `
                  //                 <div class="col-md-6 col-lg-6 col-12">                   
                  //                   <div class="card" id="${row.Sno}" onClick="redirec(${row.Sno})">
                  //                     <img
                  //                       src="${row.Image}"
                  //                       id="blog${index}_image"
                  //                       class="card-img-top"
                  //                       alt="Card image cap"
                  //                       style="height: 13rem; object-fit: cover;"
                  //                     />
                  //                     <div class="card-body">
                  //                     <h1>HELLOW TESE</h1>
                  //                       <div class="post-meta">
                  //                         ${spanTag}<span id="blog${index}_date" class="mx-2 card-span">${row.Title}</span>
                  //                         <span class="mx-2 card-span card-span-dot">
                  //                           <i class="fas fa-circle"></i>
                  //                         </span>
                  //                         <span class="mx-2 card-span">
                  //                           <i class="fas fa-comments"></i>
                  //                         </span>
                  //                       </div>
                  //                       <p id="blog${index}_content" class="card-text">${descSub}</p>
                  //                     </div>
                  //                   </div>
                  //                 </div>
                  //               `;

              // Not Recommend way to design html string
              //     posts.innerHTML += "<div class=col-md-6 col-lg-6 col-12>\
              //     <div class=card id=" + row.Sno + " onClick = redirec(" + row.Sno + ") >\
              //       <img\
              //       src = '" + row.Image + "'\
              //         id=blog" + index + "_image\
              //         class=card-img-top\
              //         alt=Card image cap\
              //         style='height: 13rem; object-fit: cover;'\
              //       />\
              //       <div class=card-body>\
              //         <div class=post-meta>\
              //         " +
              //       spanTag + "<span id=blog" + index + "_date class=mx-2 card-span>" + row.Title + "</span>\
              //           <span class=mx-2 card-span card-span-dot\
              //             ><i class=fas fa-circle></i>\
              //           </span>\
              //           <span class=mx-2 card-span\
              //             ><i class=fas fa-comments></i\
              //           ></span>\
              //         </div>\
              //         <p id=blog" + index + "_content class=card-text>" + descSub + "</p>\
              //       </div>\
              //     </div>\
              // </div>"
                // }
////////////////////////////////////////////////////////////////////////////////////////////

                pagination.innerHTML += "<nav class='d-inline-block' aria-label=Page navigation example>\
            <ul class=pagination>\
            <li class=page-item >\
              <a id='previous-pagination' class='page-link pagination-option-next-prev' href=./projects.php?q=readAll&page=<?php echo $previous ?> disabled>\
              < Prev\
              </a>\
            </li>\
            </ul>\
          </nav>"
                if (<?php echo $page ?> === 1) {
                  document.getElementById("previous-pagination").className += " disabled-pagination";
                }
                for (var i = 1; i <= data[1]; i++) {
                  var id = "link_pagination" + i;
                  pagination.innerHTML += "<nav class='d-inline-block' aria-label=Page navigation example>\
            <ul class=pagination>\
            <li class=page-item>\
              <a id=" + id + " class='page-link pagination-numbers pagination-option-next-prev '" + "href=./projects.php?q=readAll&page=" + i + ">\
              " + i + "\
              </a>\
            </li>\
            </ul>\
          </nav></div>"
                  if (<?php echo $page ?> === i) {
                   // console.log(<?php echo $page ?>);
                    document.getElementById("link_pagination" + i).className += "active_pagination";
                  }
                }
                var next = <?php echo $page ?> === data[1] ? data[1] : <?php echo $page + 1 ?>;
                pagination.innerHTML += "<nav class='d-inline-block' aria-label=Page navigation example>\
            <ul class=pagination>\
            <li class=page-item>\
              <a id='next-pagination' class='page-link pagination-option-next-prev' href=./projects.php?q=readAll&page=" + next + ">\
              Next >\
              </a>\
            </li>\
            </ul>\
          </nav>"
                if (<?php echo $page ?> === data[1]) {
                  document.getElementById("next-pagination").className += " disabled-pagination";
                }
              },
              error: function(xhr, status, error) {
                  // Error response
                  console.log("Error:", error);
                  // Handle the error here
                }
            });
          });
        </script>
  </section>
  <!-- back to top and contact us-->
	<?php
	include("contact.php")
	?>
    <!-- ***********************************************Footer************************************************************************ -->
    <?php
      include('footer.php');
    ?>
    <script>
      function redirec(id) {
        window.document.location = "./singleProject.php?Id=" + id; //Connecting Second page
      }
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets\JS\home_new.js"></script>
  </body>
</html>