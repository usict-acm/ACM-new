<script>
  // ====================================================Header Three bLogs==========================================
  let urlThree = './admin/blogAdmin/api.php/?q=readHome';
  var threePosts = document.getElementById("row2");
  threePosts.innerHTML = "";

  $(document).ready(function() {
    $.ajax({
      url: urlThree,
      method: 'GET',
      dataType: 'JSON',
      success: function(data) {
        //console.log(data);
        data.forEach(myThreeBlogs);

        function myThreeBlogs(row, index) {
          let spanTag = "";
          row.Category.forEach((element) => {
            spanTag += "<p><span>" + element + "</span></p>"
          })
          threePosts.innerHTML += "<div class='col-md-4 col-lg-4'>\
                                      <div id=" + row.Sno + "_image onClick = redirectHeaderThree(" + row.Sno + ") class='effect-layla figure'>\
                                      <img src='" + row.Image + "' />\
                                        <div class='figcaption'>\
                                          <h2><span>" + row.Title + "</span></h2>" + spanTag + "\
                                          <p>" + row.Date.split(' ')[0] + "</p>\
                                        </div>\
                                      </div>\
                                    </div>";

          //   threePosts.innerHTML += "<div class=col-md-4 col-lg-4>\
          //       <div id=" + row.Sno + "_image onClick = redirectHeaderThree(" + row.Sno + ") class='a-block d-flex align-items-center height-md'" + " style= background-repeat: no-repeat; background-size: cover;>\
          //         <div class=text>\
          //           <div class=post-meta>\
          //             <span id=blogHeader" + index + "_category class='category'>" + row.Category + "</span>\
          //             <span id=blogHeader" + index + "_date class='mr-2'>" + row.Date + " </span>\
          //           </div>\
          //           <h3 id=blogHeader" + index + "_title>" + row.Title + "</h3>\
          //         </div>\
          //       </div>\
          //     </div>";
          //   document.getElementById(row.Sno + "_image").style.backgroundImage = "url(./admin/blogAdmin/" + row.Image + ")"
        }



        // ===============================================right side three blogs================================================
        var rightThreePost = document.getElementById("row4");
        rightThreePost.innerHTML = "";
        data.forEach(rightThreeBlogs);

        function rightThreeBlogs(row, index) {

          rightThreePost.innerHTML += "<div id=" + row.Sno + " class='row rightCard' onClick = redirectRightThree(" + row.Sno + ")>\
            <div class='col-5'>\
              <div class='rightImage'>\
                <img id=rightBlog" + index + "_image src='" + row.Image + "' alt= />\
              </div>\
            </div>\
            <div class='col-7 rightText'>\
              <h5 id= rightBlog" + index + "_title>" + row.Title + "</h5>\
              <span id=rightBlog" + index + "_date class='card-span cardDown'>" + row.Date.split(' ')[0] + "</span>\
              <span class='card-span card-span-dot'><i class='fas fa-circle'></i>\
              </span>\
              <span class='card-span cardDown'><i class='fas fa-comments'></i></span>\
            </div>\
          </div>";
        }
      }
    });
  });


  // ==================================================show Category==============================================
  let categoryUrl = './admin/blogAdmin/api.php/?q=showCategory';
  var categories = document.getElementById("row3");
  // categories.innerHTML = " ";
  //console.log(categories, "categories");
  $(document).ready(function() {
    $.ajax({
      url: categoryUrl,
      method: 'GET',
      dataType: 'JSON',
      success: function(data) {
        //console.log(data, "category");

        data.forEach(categoryCountShow);

        function categoryCountShow(row, index) {
          categories.innerHTML += "<div class= 'row categories'>\
                                  <div id=" + row.Category + " class= 'col-6 categoryLeft' onClick = setCategory(" + row.Category + ")>" + row.Category + "</div>\
                                  <div class= 'col-6 categoryRight' >(" + row.catCount + ")</div>\
                                  </div> \
                                  <hr style= 'width: 100%; text-align: centre' />";
        }
      },
    });
  });

  function setCategory(cat) {
    console.log(cat);
    let showCategoryURL = "./admin/blogAdmin/api.php/?q=getPostByCategory&id='" + cat.innerHTML + "'";
    posts.innerHTML = "";
    $(document).ready(function() {
      $.ajax({
        url: showCategoryURL,
        method: 'GET',
        dataType: 'JSON',
        success: function(data) {
         // console.log(data);
          data.forEach(getpostcategory);


          function getpostcategory(row, index) {
            var desc = row.Content;
            var descSub = desc.substring(0, 70) + "...";
            posts.innerHTML += "<div class=col-md-6 col-lg-6 col-12>\
                    <div class=card id=" + row.Sno + " onClick = redirec(" + row.Sno + ") >\
                      <img\
                      src = '" + row.Image + "'\
                        id=blog" + index + "_image\
                        class=card-img-top\
                        alt=Card image cap\
                      />\
                      <div class=card-body>\
                        <div class=post-meta>\
                          <span id=blog" + index + "_category class=category>" + row.Category + "</span>\
                          <span id=blog" + index + "_date class=mx-2 card-span>" + row.Date.split(' ')[0] + "</span>\
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
        },
      });
    });
  }

  function redirectHeaderThree(id) {
    window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
  }

  function redirectRightThree(id) {
    window.document.location = "./singleBlog.php?Id=" + id; //Connecting Second page
  }
</script>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>