<?php 
  require_once "./admin/blogAdmin/database.php";
  $database = new Database();
  $db = $database->connect();
  $table = "event";
  $query = 'SELECT * FROM event WHERE EXTRACT(MONTH FROM CURRENT_TIMESTAMP)<=EXTRACT(MONTH FROM endDate) AND EXTRACT(YEAR FROM CURRENT_TIMESTAMP)=EXTRACT(YEAR FROM endDate)';
  function UIAnn() {
    
  }
  if($result = mysqli_query($db, $query)){
    if(mysqli_num_rows($result) > 0){
        echo "<section class='announcement'>";
            echo "<h2 class='mb-2 display-4 mobile-head fw-bolder text-center'>Announcements</h2>";
            echo "<div class='container-fluid text announcement-carousel overflow-hidden'>";
            echo "<div class='swiper mySwiper'>";
            echo "<div class='swiper-wrapper'>";
        while($row = mysqli_fetch_array($result)){
            echo "<div class='swiper-slide'>";
                echo "<div class='det'>";
                    echo "<div class='heading'>";
                        echo "<h1>" . $row["name"] . "</h1>";
                    echo "</div>";

                echo "<div class='row det-row'>";

                    echo "<div class='col-md-5 list'>";
                    echo "<img class='imag imag_trell' src=" . $row["poster"] . " alt=''>";
                    echo "</div>";

                    echo "<div class='col-md-7 divide'>";
                        echo "<div class='detai'>";
                            echo "<p>" . $row["description"] . " ";
                            echo "<br> <p>Date : " . $row["startDate"] . "  to  " . $row["endDate"] ." </p>";
                            if ($row["time"] != "") {
                                echo "<p>Time: " . $row["time"] . " </p> ";
                            }
                            echo "<div class='announcement-button-group'>";
                            if($row["button1Text"] != ""){
                                echo "<a target='_blank' href=" . $row["button1Link"] . " class='about-button'>";
                                    echo $row["button1Text"];
                                    echo "</a>";
                            }
                            if($row["button2Text"] != ""){
                                echo "<a target='_blank' href=" . $row["button1Link"] . " class='about-button'>";
                                    echo $row["button2Text"];
                                    echo "</a>";
                            }
                        echo "</div>";
                    echo "</div>";
                    echo "</div>";
                
                echo "</div>";
                echo "</div>";
                echo "</div>";
        }
        echo "</div>";
        echo "<div class='events-swiper-button-prev'></div>";
        echo "<div class='events-swiper-button-next'></div>";
        echo "</div></div></section>";
       mysqli_free_result($result);
    } else {
        $query = 'SELECT * FROM event ORDER BY endDate DESC LIMIT 0,1';
        $result = mysqli_query($db, $query);

        echo "<section class='announcement'>";
            echo "<h2 class='mb-4 display-4 fw-bolder text-center'>Announcements</h2>";
            echo "<div class='container-fluid text overflow-hidden'>";
            echo "<div class='swiper mySwiper'>";
            echo "<div class='swiper-wrapper'>";
        while($row = mysqli_fetch_array($result)){
            echo "<div class='swiper-slide'>";
                echo "<div class='det'>";
                    echo "<div class='heading'>";
                        echo "<h1> <span>" . $row["name"] . "</h1>";
                    echo "</div>";
                    

                echo "<div class='row det-row'>";
                
                echo "<div class='col-lg-5 list text-center'>";
                echo "<img class='imag imag_trell mx-auto' src=" . $row["poster"] . " alt=''>";
                echo "</div>";

                echo "<div class='col-lg-7 divide'>";
                        echo "<div class='detai'>";
                            echo "<p>" . $row["description"] . " ";
                            echo "<br> <p>Date : " . $row["startDate"] . "  to  " . $row["endDate"] ." </p>";
                            if ($row["time"] != "") {
                                echo "<p>Time: " . $row["time"] . " </p> ";
                            }
                            echo "<div class='announcement-button-group'>";
                            if($row["button1Text"] != ""){
                                echo "<a target='_blank' href=" . $row["button1Link"] . " class='about-button'>";
                                    echo $row["button1Text"];
                                    echo "</a>";
                            }
                            if($row["button2Text"] != ""){
                                echo "<a target='_blank' href=" . $row["button1Link"] . " class='about-button'>";
                                    echo $row["button2Text"];
                                    echo "</a>";
                            }
                        echo "</div>";
                    echo "</div>";
                    echo "</div>";
    
                echo "</div>";
                echo "</div>";
                echo "</div>";
        }
        echo "</div>";
        echo "<div class='events-swiper-button-prev'></div>";
        echo "<div class='events-swiper-button-next'></div>";
        echo "</div></div></section>";
       mysqli_free_result($result);
       // echo "<p class='lead'><em>No Record Found.</em></p>";
        }
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($db);
    }
  ?>