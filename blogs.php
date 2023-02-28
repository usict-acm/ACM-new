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
      <h1 class="category-heading">Let The <span class = "text-head"> Words Speak</h1>
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
            <h4>Recent <span class="text-head">Blogs</h4>
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
                //console.log("data blogs", data);
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
                      style='height: 13rem; object-fit: cover;'\
                    />\
                    <div class=card-body>\
                      <div class=post-meta>\
                      " +
                    spanTag + "<span id=blog" + index + "_date class=mx-2 card-span>" + row.Title + "</span>\
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
                   // console.log(<?php echo $page ?>);
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
        window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
      }
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets\JS\home_new.js"></script>
  </body>
</html>