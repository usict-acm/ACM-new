<?php 
  require_once "./admin/blogAdmin/database.php";
  $database = new Database();
  $db = $database->connect();
  $table = "event";
  $query = 'SELECT * FROM event WHERE EXTRACT(MONTH FROM CURRENT_TIMESTAMP)=EXTRACT(MONTH FROM endDate) AND EXTRACT(YEAR FROM CURRENT_TIMESTAMP)=EXTRACT(YEAR FROM endDate)';
  function UIAnn() {
    
  }
  if($result = mysqli_query($db, $query)){
    if(mysqli_num_rows($result) > 0){
        echo "<section class='announcement'>";
            echo "<h1 class='section-heading announce'>Announcements</h1>";
            echo "<div class='container-fluid text'>";
            echo "<div class='swiper-container'>";
            echo "<div class='swiper-wrapper'>";
        while($row = mysqli_fetch_array($result)){
            echo "<div class='swiper-slide'>";
                echo "<div class='det'>";
                    echo "<div class='heading'>";
                        echo "<h1>" . $row["name"] . "</h1>";
                    echo "</div>";

                echo "<div class='row det-row'>";
                    echo "<div class='col-md-7 divide'>";
                        echo "<div class='detai'>";
                            echo "<p>" . $row["description"] . " ";
                            echo "<br>" . $row["startDate"] . "  to  " . $row["endDate"] ." ";
                            echo "<br>" . $row["time"] . " ";
                            echo "<div style='display: flex;justify-content: space-evenly;'>";
                            if($row["button1Text"] != ""){
                                echo "<a target='_blank' href=" . $row["button1Link"] . ">";
                                    echo "<button class='btn announce-button-one' style='background-color:#2250fc'>";
                                    echo "<span style='color:#fff; font-size:0.9rem'>" . $row["button1Text"] . "</span>";
                                    echo "</button>";
                                    echo "</a>";
                            }
                            if($row["button2Text"] != ""){
                                echo "<a target='_blank' href=" . $row["button2Link"] . ">";
                                    echo "<button class='btn announce-button-one' style='background-color:#2250fc'>";
                                    echo "<span style='color:#fff; font-size:0.9rem'>" . $row["button2Text"] . "</span>";
                                    echo "</button>";
                                echo "</a>";
                            }
                        echo "</div>";
                    echo "</div>";
                    echo "</div>";
                echo "<div class='col-md-5 list'>";
                echo "<img class='imag imag_trell' src=" . $row["poster"] . " alt=''>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
        }
        echo "</div>";
        echo "<div class='swiper-pagination swiper-pagination-clickable swiper-pagination-bullets'>";
        echo "</div>";
        echo "<div class='swiper-button-next'></div>";
        echo "<div class='swiper-button-prev'></div>";
        echo "</div></div></section>";
       mysqli_free_result($result);
    } else {
        $query = 'SELECT * FROM event ORDER BY endDate DESC LIMIT 0,1';
        $result = mysqli_query($db, $query);

            echo "<section class='announcement'>";
            echo "<h1 class='section-heading announce'>Announcements</h1>";
            echo "<div class='container-fluid text'>";
            echo "<div class=''>";
            echo "<div class='swiper-wrapper'>";
        while($row = mysqli_fetch_array($result)){
            echo "<div class='swiper-slide'>";
                echo "<div class='det'>";
                    echo "<div class='heading'>";
                        echo "<h1>" . $row["name"] . "</h1>";
                    echo "</div>";

                echo "<div class='row det-row'>";
                    echo "<div class='col-md-7 divide'>";
                        echo "<div class='detai'>";
                            echo "<p>" . $row["description"] . " ";
                            echo "<br>" . $row["startDate"] . "  to  " . $row["endDate"] ." ";
                            echo "<br>" . $row["time"] . " ";
                            echo "<div style='display: flex;justify-content: space-evenly;'>";
                            if($row["button1Text"] != ""){
                                echo "<a target='_blank' href=" . $row["button1Link"] . ">";
                                    echo "<button class='btn announce-button-one' style='background-color:#2250fc'>";
                                    echo "<span style='color:#fff; font-size:0.9rem'>" . $row["button1Text"] . "</span>";
                                    echo "</button>";
                                    echo "</a>";
                            }
                            if($row["button2Text"] != ""){
                                echo "<a target='_blank' href=" . $row["button2Link"] . ">";
                                    echo "<button class='btn announce-button-one' style='background-color:#2250fc'>";
                                    echo "<span style='color:#fff; font-size:0.9rem'>" . $row["button2Text"] . "</span>";
                                    echo "</button>";
                                echo "</a>";
                            }
                        echo "</div>";
                    echo "</div>";
                    echo "</div>";
                echo "<div class='col-md-5 list'>";
                echo "<img class='imag imag_trell' src=" . $row["poster"] . " alt=''>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
        }
        echo "</div>";
        echo "<div class='swiper-pagination swiper-pagination-clickable swiper-pagination-bullets'>";
        echo "</div>";
        echo "<div class='swiper-button-next'></div>";
        echo "<div class='swiper-button-prev'></div>";
        echo "</div></div></section>";
       mysqli_free_result($result);
        // echo "<p class='lead'><em>No Record Found.</em></p>";
        }
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($db);
    }
  ?>