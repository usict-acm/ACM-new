<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
  <title>ACM BLOG</title>
  <link rel="icon" href="./assets/images/acm1.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />

  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="ACM@USICT Chapter, GGSIPU" />
  <meta itemprop="description" content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />
  <meta itemprop="image" content="./assets/images/acm1.png" />

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="http://usict.acm.org/ACM_New" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="ACM@USICT Chapter, GGSIPU" />
  <meta property="og:description" content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />
  <meta property="og:image" content="./assets/images/acm1.png" />

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="ACM@USICT Chapter, GGSIPU" />
  <meta name="twitter:description" content=">ACM Student Chapter, USICT is an official student body incepted in 2019 under the University School USICT, GGSIPU.The chapter will conduct events including programming contests, talks by renowned speakers, workshops etc" />
  <meta name="twitter:image" content="./assets/images/acm1.png" />

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/CSS/singleBlog.css" rel="stylesheet" />
  <link href="./assets/CSS/header.css" rel="stylesheet" />
  <link href="./assets/CSS/footer.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="./assets/CSS/glider.css" />
  <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php
    $currentPage = 'blogs';
    include('header.php');
  ?>
  <!-- =====================================Header Three Blogs============================================ -->
  <section style="padding-top:80px;">
    <div class="container" style="margin-top: 3%;">
      <div class="row" id="row2"></div>
    </div>
  </section>

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
        <div class="row categoryCards">
          <div class="col">
            <h4>Categories</h4>
          </div>
        </div>
        <hr style="width: 100%; text-align: centre" />
        <!-- ==================================================Show Ctgories =================================================-->
        <div id="row3"></div>
        <?php
        include('blogHeader.php');
        ?>
      </div>
    </div>
  </section>
  <!-- ***********************************************Footer************************************************************************ -->
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
      console.log(blogId);
      let url = './admin/blogAdmin/api.php/?q=readOne&id=' + blogId;

      $(document).ready(function() {
        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(data) {
            console.log(data);

            posts.innerHTML = "<div class='w-100'>\
            <h1 id='blog_title' class='singleBlog-title'>" + data[0].Title + "</h1>\
            <div class='singleBlog'>\
            <img\
            src='./" + data[0].Image + "'\
              id='blog_image'\
              class='card-img-top'\
              alt='Card image cap'\
            />\
            <div class='singleContent'>\
              <div style='display: flex; justify-content: flex-end'>\
                <h5 id='blog_date'>" + data[0].Date + "</h5>\
              </div>\
              <p id='blog_content' class='singleBlog-content'>" + data[0].Content + "</p>\
            </div>\
          </div>\
          </div>";
          },
        });
      });
    });

    function redirec(id) {
      window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
    }
  </script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="./assets/JS/benefits.js"></script>
</body>

</html>