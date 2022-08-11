<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include("head.php")
    ?>
    <title>GGSIP University USS ACM Student Chapter</title>
    <link href="./assets/CSS/singleBlog.css" rel="stylesheet" />
    <link href="./assets/CSS/glider.css" rel="stylesheet" />
    <link href="./assets/CSS/header.css" rel="stylesheet" />
    <link href="./assets/CSS/footer.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="./assets/CSS/newStyle.css"> -->
  </head>

<body>
  <?php
  $currentPage = 'blogs';
  include('header.php');
  ?>
  <!-- =====================================Header Three Blogs============================================ -->
  <section style="padding-top:80px;">
    <div class="container topRow" style="margin-top: 3%;">
      <div class="row" id="row2"></div>
    </div>
  </section>

  <!-- =====================================Header Three Blogs============================================ -->
  <!-- <section style="padding-top:80px;">
    <div class="container topRow" style="margin-top: 3%;">
      <div class="row justify-content-center" id="row2"></div>
    </div>
  </section> -->

  <section class="container" style="margin-top: 60px; margin-bottom:60px">
    <div class="lower">
      <div class="left-side">
        <!-- =======================================================Single Blog========================= -->
        <div class="row" id="row1"></div>
      </div>
      <div class="right-side">
        <div class="row categoryCards mt-0">
          <div class="col">
            <h4>Recent Blogs</h4>
          </div>
        </div>
        <!-- =======================================Show right three blogs======================================= -->
        <div id="row4"></div>
        <!-- <div class="row categoryCards">
          <div class="col">
            <h4>Categories</h4>
          </div>
        </div>
        <hr style="width: 100%; text-align: centre" /> -->
        <!-- ==================================================Show Ctgories =================================================-->
        <div id="row3"></div>
        <?php
        include('blogHeader.php');
        ?>
      </div>
    </div>
  </section>
  <!-- ===================================================Footer======================================= -->
  <?php
  include('footer.php');
  ?>

  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="./../../assets/JS/benefits.js"></script>
  <script>
    var posts = document.getElementById("row1");
    document.addEventListener('DOMContentLoaded', function() {
      // var blogId = localStorage.getItem('blogId');
      var blogId = <?php echo $_GET['Id'] ?>;
      console.log("blogIDDD", blogId);
      let url = './admin/blogAdmin/api.php/?q=readOne&id=' + blogId;

      $(document).ready(function() {
        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(data) {
            console.log("data herrrr", data);
            if (data.length == 0 || data.message == "No Posts Found") {
              window.document.location = "./blogs.php";
            } else {
              posts.innerHTML = "<div class='w-100'>\
              <h1 id='blog_title' class='singleBlog-title'>" + data[0].Title + "</h1>\
              <div class='singleBlog'>\
              <img\
              src='" + data[0].Image + "'\
                id='blog_image'\
                class='card-img-top'\
                alt='Card image cap'\
              />\
              <div class='singleContent'>\
                <div style='display: flex; justify-content: flex-end'>\
                  <h5 id='blog_date'>" + data[0].Date.split(' ')[0] + "</h5>\
                </div>\
                <p id='blog_content' class='singleBlog-content'>" + data[0].Content + "</p>\
              </div>\
            </div>\
          </div>";
            }
          },
        });
      });
    });

    function redirec(id) {
      window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
    }
  </script>
</body>

</html>