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
  </head>
  <body>
    <?php
      $currentPage = 'blogs';
      include('header.php');
    ?>

    <!-- ***********************************************Blog-Banner************************************************ -->
    <div class="blog-banner">
      <section id='header-blog'>
        <div class="pt-card-blog row">
          <div class="heading col-xl-9 col-lg-9 col-md-9 col-sm-6">
            <h2><span class="uheading-blog">BLOGS</span></h2>
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
    <section class="container mt-5">
      <h1 class="category-heading">Let The Words Speak</h1>
      <div class="lower">
        <!-- ====================================================Show All Blogs========================================= -->
        <div class="left-side">
          <div class="row" id="row1"></div>
          <div class="row">
            <div class="m-auto" id="pagination_row"></div>
          </div>
        </div>
        <div class="right-side">
        <!-- ==============================================Show rightside three blogs================================== -->
        <div class="row categoryCards mt-0">
          <div class="col">
            <h4>Recent Blogs</h4>
          </div>
        </div>
        <div id="row4"></div>

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
          let url = "./admin/blogAdmin/api.php/?q=readAll&page=<?php echo $page ?>";
          var posts = document.getElementById("row1");
          var pagination = document.getElementById("pagination_row");
          posts.innerHTML = "";
          $(document).ready(function() {
            $.ajax({
              url: url,
              method: 'GET',
              dataType: 'JSON',
              success: function(data) {
                console.log("data blogs", data);
                data[0].forEach(myfunc);

                function myfunc(row, index) {
                  var desc = row.Content;
                  var descSub = desc.substring(0, 70) + "...";
                  let spanTag = "";
                  row.Category.forEach((element) => {
                    spanTag += "<span id=blog" + index + "_category class=category>" + element + "</span>"
                  })
                  posts.innerHTML += "<div class=col-md-6 col-lg-6 col-12>\
                  <div class=card id=" + row.Sno + " onClick = redirec(" + row.Sno + ") >\
                    <img\
                    src = '" + row.Image + "'\
                      id=blog" + index + "_image\
                      class=card-img-top\
                      alt=Card image cap\
                      style='height: 13rem; object-fit: contain;'\
                    />\
                    <div class=card-body>\
                      <div class=post-meta>\
                      " +
                    spanTag + "<span id=blog" + index + "_date class=mx-2 card-span>" + row.Date + "</span>\
                        <span class=mx-2 card-span card-span-dot\
                          ><i class=fas fa-circle></i>\
                        </span>\
                        <span class=mx-2 card-span\
                          ><i class=fas fa-comments></i\
                        ></span>\
                      </div>\
                      <p id=blog" + index + "_content class=card-text>" + descSub + "</p>\
                    </div>\
                  </div>\
              </div>"
                }
                pagination.innerHTML += "<nav class='d-inline-block' aria-label=Page navigation example>\
            <ul class=pagination>\
            <li class=page-item >\
              <a id='previous-pagination' class='page-link pagination-option-next-prev' href=./blogs.php?q=readAll&page=<?php echo $previous ?> disabled>\
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
              <a id=" + id + " class='page-link pagination-numbers pagination-option-next-prev '" + "href=./blogs.php?q=readAll&page=" + i + ">\
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
                var next = <?php echo $page ?> === data[1] ? data[1] : <?php echo $page + 1 ?>;
                pagination.innerHTML += "<nav class='d-inline-block' aria-label=Page navigation example>\
            <ul class=pagination>\
            <li class=page-item>\
              <a id='next-pagination' class='page-link pagination-option-next-prev' href=./blogs.php?q=readAll&page=" + next + ">\
              Next >\
              </a>\
            </li>\
            </ul>\
          </nav>"
                if (<?php echo $page ?> === data[1]) {
                  document.getElementById("next-pagination").className += " disabled-pagination";
                }
              },
            });
          });
        </script>
  </section>
     <!-- ****************************************************contact us ***************************** -->
	<div class="dsph" id="contact">
		<div class="d-flex justify-content-center mt-md-5">

			<img src="./assets/images/contact_us_img.webp" class="svg-media" alt="" />

			<div class="contactUs">
				<div class="closebtn">
					<button class="btn btn-primary s-form-group contact-btn" onclick="closecontact()"><i class="fas fa-times"></i></button>
				</div>
				<form class="s-form" name="contact" method="post" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeW8dszRK5ynb6HS51X7fGrfW7su1_8JFL0Tm3hWfbfdpZiCQ/formResponse" onsubmit="return validateform();" >
					<h2 class="my-4 display-4 fw-bolder text-center">Contact<span class="text-blue"> Us</span></h2>
					<div class="row form-row">
						<div class="form-group s-form-group col-md-5">
							<input type="text" name="name" class="form-control" placeholder="Name *" />
						</div>
						<div class="form-group s-form-group col-md-5">
							<input type="text" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email *" />
						</div>
					</div>
					<div class="row form-row">
					<div class="form-group s-form-group col-md-5">
							<input type="number" name="phone" class="form-control" placeholder="Phone No." />
						</div>
						<div class="form-group s-form-group col-md-5">
							<input type="text" name="college" class="form-control" placeholder="College/ Organization" />
						</div>
					</div>
					<div class="contact-msg">
					<textarea type="text" name="message" rows="5" placeholder="Message *" class="form-control col-md-11 contact-message"></textarea>
					</div>
					<div class="row contact-msg">
						<button type="submit" class="btn btn-primary s-form-group contact-btn col-md-3 col-sm-2">Submit</button>
					</div>
				</form>
			</div>
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
    <script>
      function redirec(id) {
        window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
      }
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets\JS\home_new.js"></script>
  </body>
</html>