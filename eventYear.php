<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('./head.php');
    ?>
    <title>GGSIP University USS ACM Student Chapter</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/CSS/eventsyearpage.css" rel="stylesheet" />


    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" type="text/css" href="./assets/CSS/glider.css" />
    <script src="https://kit.fontawesome.com/d459eda8d9.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    // $currentPage = 'blogs';
    include('header.php');
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
        let allEvents = document.getElementById("eventPage");
        if (<?php echo $year ?> != 2019 && <?php echo $year ?> != 2020 && <?php echo $year ?> != 2021 && <?php echo $year ?> != 2022 && <?php echo $year ?> != 2023) {
            allEvents.innerHTML += `<h1 class='noEvents'>No Events for this year</h1>`;
        } else {
            let urlEvent = './admin/blogAdmin/api.php/?q=readAllEvent&year=' + <?php echo $year ?> + '&page=' + <?php echo $page ?>;

            let pagination = document.getElementById("pagination_row_2021");
            allEvents.innerHTML = "";

            $(document).ready(function() {
                $.ajax({
                    url: urlEvent,
                    method: 'GET',
                    dataType: 'JSON',
                    success: function(data) {
                        //console.log("check data year", data);
                        if (<?php echo $page ?> > Math.ceil(data[1] / 7)) {
                            allEvents.innerHTML += `<h1 class='noEvents'>No Events on this page</h1>`;

                        } else {
                            data[0].forEach(allEvent);
                        }


                        function allEvent(event) {

                            let button1 = ` <a href=${event.button1Link} style="float: right; margin-left:8px;" target="_blank"><button class="dateTime-para btn form-input-boxes-manual btn-watch" style="font-size: 16px;">${event.button1Text}</button></a>`;
                            let button2 = `<a href=${event.button2Link} style="float: right;" target="_blank"><button class="dateTime-para btn form-input-boxes-manual event-button-two btn-watch" style="font-size: 16px;">${event.button2Text}</button></a>`;
                            let eventPartner = `<p class="dateTime-para">Partnered By: ${event.partners}</p>`
                            let eventSpeaker = `<p class="dateTime-para">Speakers: ${event.speakers}</p>`
                            let sameDate = `<span>${event.startDate}</span>`;
                            let diffDate = `<span>${event.startDate} — ${event.endDate}</span>`;
                            let afterDate = `<span>${event.time}</span>
                                                </div>
                                                <h1 class="event-post_title">${event.name}</h1>
                                                <p class="event-post_text">${event.description}</p>
                                                <div class="buttonDiv">`;
                            let var1 = `<div class="event-post">
                                            <div class="event-post_img" style="margin-top:7rem;">
                                                <img src=${event.poster}  alt="">
                                            </div>
                                            <div class="event-post_info">
                                                <div class="event-post_date">`;
                            if (event.startDate === event.endDate) {
                                var1 = var1 + sameDate + afterDate;
                            } else if (event.startDate !== event.endDate) {
                                var1 = var1 + diffDate + afterDate;
                            }



                            let closeDIV = `           </div>
                                            </div>
                                        </div>`;

                            if (event.partners !== '') {
                                var1 = var1 + eventPartner;
                            }
                            if (event.speakers !== '') {
                                var1 = var1 + eventSpeaker
                            }


                            if (event.button2Text !== '' && event.button1Text !== '') {
                                let finalCode = var1.concat(button1, button2, closeDIV);
                                $("#eventPage").append(finalCode);
                            } else if (event.button1Text !== '' && event.button2Text === '') {
                                let finalCode = var1.concat(button1, closeDIV);
                                $("#eventPage").append(finalCode);
                            } else if (event.button2Text !== '' && event.button1Text === '') {
                                let finalCode = var1.concat(button1, closeDIV);
                                $("#eventPage").append(finalCode);
                            } else {
                                let finalCode = var1.concat(closeDIV);
                                $("#eventPage").append(finalCode);
                            }

                        }
                        pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
                                               <ul class=pagination>\
                                                  <li class=page-item >\
                                                    <a id='previous-pagination' class='page-link pagination-option-next-prev' href=./eventYear.php?q=readAllEvent&year=" + <?php echo $year ?> + "&page=<?php echo $previous ?> disabled>\
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
                                                        <a id=" + id + " class='page-link pagination-numbers pagination-option-next-prev '" + "href=./eventYear.php?q=readAllEvent&year=" + <?php echo $year ?> + "&page=" + i + ">\
                                                           " + i + "\
                                                        </a>\
                                                     </li>\
                                                  </ul>\
                                               </nav></div>"
                            if (<?php echo $page ?> === i) {
                                //console.log(<?php echo $page ?>);
                                document.getElementById("link_pagination" + i).className += "active_pagination";
                            }
                        }
                        var next = <?php echo $page ?> === data[2] ? data[2] : <?php echo $page + 1 ?>;
                        pagination.innerHTML += "<nav style=display:inline-block; aria-label=Page navigation example>\
                                              <ul class=pagination>\
                                                 <li class=page-item>\
                                                    <a id='next-pagination' class='page-link pagination-option-next-prev' href=./eventYear.php?q=readAllEvent&year=" + <?php echo $year ?> + "&page=" + next + ">\
                                                        Next >\
                                                    </a>\
                                                 </li>\
                                              </ul>\
                                          </nav>";
                        if (<?php echo $page ?> === data[2] || <?php echo $page ?> > Math.ceil(data[1] / 7)) {
                            document.getElementById("next-pagination").className += " disabled-pagination";
                        }
                    },
                });
            });
        }
    </script>

    <style>
        .pagination_row {
            margin-right: 0;
            margin-left: 0;
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

        .noEvents {
            font-size: 4rem;
            padding: 80px 20px;
            text-align: center;
        }
    </style>

    <!-- ==============================================Footer========================================== -->
    <?php
    include('footer.php');
    ?>
</body>

</html>