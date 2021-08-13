<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include('./head.php');
    ?>
    <title>USICT ACM</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/CSS/eventsyearpage.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" type="text/css" href="./assets/CSS/glider.css" />
    <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script>
</head>

<body>
<?php
      // $currentPage = 'blogs';
      include('./header.php');
  ?>
    
    <!-- ==============================================Content========================================== -->

<section id="content">
    <div class="event-container">
        <div id="eventPage"></div>
    </div>
    <div class="row pagination_row">
        <div style="margin:auto;" id="pagination_row_2021"></div>
    </div>
</section>

<?php
    $page = isset($_GET["page"]) ? $_GET["page"] : 1;
    $year = $_GET["year"];
    $previous = $page == 1 ? 1 : $page - 1;
?>
        
        <script>
        let urlEvent = './admin/blogAdmin/api.php/?q=readAllEvent&year='+<?php echo $year ?>+'&page='+<?php echo $page ?>;

        let allEvents=document.getElementById("eventPage");
        let pagination = document.getElementById("pagination_row_2021");
        allEvents.innerHTML="";
        
        $(document).ready(function() {
            $.ajax({
                url: urlEvent,
                method: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    console.log("check data ywar",data);
                    data[0].forEach(allEvent);                    
                    function allEvent(event) {
                        if(event.button1Text!==''&&event.button2Text!==''){

                            allEvents.innerHTML +=
                                                        `<div class="event-post">
                                                            <div class="event-post_img">
                                                                <img src=${event.poster}  alt="">
                                                            </div>
                                                            <div class="event-post_info">
                                                                <div class="event-post_date">
                                                                <span>${event.startDate} -- ${event.endDate}</span>
                                                                <span>${event.time}</span>
                                                                </div>
                                                                <h1 class="event-post_title">${event.name}</h1>
                                                                <p class="event-post_text">${event.description}</p>
                                                                <a href=${event.button1Link} style="float: right;"
                                                                    target="_blank"><button class="dateTime-para btn form-input-boxes-manual btn-watch" style="font-size: 16px;">
                                                                    ${event.button1Text}</button></a>
                                                                        <a href=${event.button2Link} style="float: right;" target="_blank"><button class="dateTime-para btn form-input-boxes-manual event-button-two btn-watch" style="font-size: 16px;">${event.button2Text}</button></a>
                                                            </div>
                                                        </div>`;
                        }




                        else if(event.button2Text!==''&&event.button1Text===''){
                            allEvents.innerHTML +=` <div class="event-post">
                                                            <div class="event-post_img">
                                                                <img src=${event.poster}  alt="">
                                                            </div>
                                                            <div class="event-post_info">
                                                                <div class="event-post_date">
                                                                <span>${event.startDate} -- ${event.endDate}</span>
                                                                <span>${event.time}</span>
                                                                </div>
                                                                <h1 class="event-post_title">${event.name}</h1>
                                                                <p class="event-post_text">${event.description}</p>
                                                                    ${event.button1Text}</button></a>
                                                                        <a href=${event.button2Link} style="float: right;" target="_blank"><button class="dateTime-para btn form-input-boxes-manual event-button-two btn-watch" style="font-size: 16px;">${event.button2Text}</button></a>
                                                            </div>
                                                        </div>`;
                        }
                        else if(event.button2Text===''&&event.button1Text!==''){
                        allEvents.innerHTML +=`        <div class="event-post">
                                                            <div class="event-post_img">
                                                                <img src=${event.poster}  alt="">
                                                            </div>
                                                            <div class="event-post_info">
                                                                <div class="event-post_date">
                                                                <span>${event.startDate} -- ${event.endDate}</span>
                                                                <span>${event.time}</span>
                                                                </div>
                                                                <h1 class="event-post_title">${event.name}</h1>
                                                                <p class="event-post_text">${event.description}</p>
                                                                <a href=${event.button1Link} style="float: right;"
                                                                    target="_blank"><button class="dateTime-para btn form-input-boxes-manual btn-watch" style="font-size: 16px;">
                                                                    ${event.button1Text}</button></a>
                                                            </div>
                                                        </div>`;
                        }
                        else {
                            allEvents.innerHTML +=`        <div class="event-post">
                                                            <div class="event-post_img">
                                                                <img src=${event.poster}  alt="">
                                                            </div>
                                                            <div class="event-post_info">
                                                                <div class="event-post_date">
                                                                <span>${event.startDate} -- ${event.endDate}</span>
                                                                <span>${event.time}</span>
                                                                </div>
                                                                <h1 class="event-post_title">${event.name}</h1>
                                                                <p class="event-post_text">${event.description}</p>
                                                            </div>
                                                        </div>`;
                        }       
                   
           
                                                        
                    } 
		    pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
                                               <ul class=pagination>\
                                                  <li class=page-item >\
                                                    <a id='previous-pagination' class='page-link pagination-option-next-prev' href=./eventYear.php?q=readAllEvent&year="+<?php echo $year ?>+"&page=<?php echo $previous ?> disabled>\
                                                      < Prev\
                                                    </a>\
                                                  </li>\
                                               </ul>\
                                             </nav>";
                   if (<?php echo $page ?> === 1) {
                      document.getElementById("previous-pagination").className += " disabled-pagination";
                   }
 		   for (var i = 1; i <= data[2]; i++) {
                      var id = "link_pagination" + i;
                      pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
                                                  <ul class=pagination>\
                                                     <li class=page-item>\
                                                        <a id=" + id + " class='page-link pagination-numbers pagination-option-next-prev '" + "href=./eventYear.php?q=readAllEvent&year="+<?php echo $year ?>+"&page=" + i + ">\
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
		  var next = <?php echo $page ?> === data[2] ? data[2] : <?php echo $page + 1 ?>;
                  pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
                                              <ul class=pagination>\
                                                 <li class=page-item>\
                                                    <a id='next-pagination' class='page-link pagination-option-next-prev' href=./eventYear.php?q=readAllEvent&year="+<?php echo $year ?>+"&page=" + next + ">\
                                                        Next >\
                                                    </a>\
                                                 </li>\
                                              </ul>\
                                          </nav>";
		 if (<?php echo $page ?> === data[2]) {
                    document.getElementById("next-pagination").className += " disabled-pagination";
                }
              },
            });
        });
</script>  

<style>
    .pagination_row{
        margin-right: 0;
        margin-left:0;
    }

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


  

 <!-- ==============================================Footer========================================== -->
 <?php
      include('footer.php');
    ?>
</body>

</html>