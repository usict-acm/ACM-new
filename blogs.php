<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('head.php');
  ?>
  <title>USICT ACM</title>
  <link href="./assets/CSS/blogs.css" rel="stylesheet" />
  <link href="./assets/CSS/glider.css" rel="stylesheet" />
  <link href="./assets/CSS/header.css" rel="stylesheet" />
  <link href="./assets/CSS/footer.css" rel="stylesheet" />
</head>

<body>
  <?php
  $currentPage = 'blogs';
  include('header.php');
  ?>
  <!-- ==============================================header Three Blogs========================================== -->
  <section style="padding-top: 80px;">
    <div class="container" style="margin-top: 3%;">
      <div class="row" id="row2"></div>
    </div>
  </section>
  <section class="container" style="margin-top: 4%;">
    <h1 class="category-heading">Let The Words Speak</h1>
    <div class="lower">
      <!-- ====================================================Show All Blogs========================================= -->
      <div class="left-side">
        <div class="row" id="row1"></div>
        <div class="row">
          <div style="margin:auto;" id="pagination_row"></div>
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
        <div id="row3">

        </div>
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
                pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
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
                  pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
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
                pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
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
  <style>
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
  <!-- ***********************************************Footer************************************************************************ -->
  <?php
  include('footer.php');
  ?>

  <script>
    function redirec(id) {
      window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
    }
  </script>
</body>

</html>