<?php

    include_once './eventFunctions.php';

    function eventInit(){
        $database = new Database();
        $db = $database->connect();
        $event = new Event($db);
        return $event;
    }    

    function fetchAllEvents()
    {
        if ($_SERVER['REQUEST_METHOD'] != "GET") {
            echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /allEvents";
            return;
        }
        $event = eventInit();        
            $allEvents = $event->fetchAllEvents();
            if ($allEvents) {       
                $allEventsArr = array();
                if ($allEvents->num_rows > 0) {
                    while ($row = $allEvents->fetch_assoc()) {
                        $eventRow = array(
                            "eventId" => $row["sno"],
                            "eventName" => $row["name"],
                            "eventDescription" => $row["description"],
                            "regLink" => $row["regLink"],
                            "startDate" => $row["startDate"],
                            "endDate" => $row["endDate"],
                            "viewResource" => $row["viewResource"],
                            "partners" => $row["partners"],
                            "speakers" => $row["speakers"],
                            "poster" => $row["poster"],
                            "time" => $row["time"],
                            "registeredStudents" => $row["registeredStudents"]
                        );
                        array_push($allEventsArr, $eventRow);
                    }
                    echo json_encode(array("message" => "success", "events" => $allEventsArr));
                } else {
                    echo json_encode(array("error" => "no events found"));
                };                                  
            } else {
                echo json_encode(array('error' => 'Invalid Details'));
                return;
            }        
    }   
    function fetchSingleEvent()
    {
        if ($_SERVER['REQUEST_METHOD'] != "POST") {
            echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /singleEvent";
            return;
        }
        $req = json_decode(file_get_contents('php://input'), true);
        if($req["eventId"]){
        $event = eventInit();        
            $singleEvent = $event->fetchSingleEvent($req["eventId"]);
            if ($singleEvent) {   
                $singleEvent = $singleEvent->fetch_assoc();
                echo json_encode(array(
                    'message' => 'success',
                    'event' => array(
                        "eventId" => $singleEvent["sno"],
                        "eventName" => $singleEvent["name"],
                        "eventDescription" => $singleEvent["description"],
                        "regLink" => $singleEvent["regLink"],
                        "startDate" => $singleEvent["startDate"],
                        "endDate" => $singleEvent["endDate"],
                        "viewResource" => $singleEvent["viewResource"],
                        "partners" => $singleEvent["partners"],
                        "speakers" => $singleEvent["speakers"],
                        "poster" => $singleEvent["poster"],
                        "time" => $singleEvent["time"],
                        "registeredStudents" => $singleEvent["registeredStudents"]
                    )
                ));
            } else {
                echo json_encode(array('error' => 'Invalid Details'));
                return;
            }
        }else {
            echo json_encode(array('error' => 'One or more fields are missing.'));
            return;
        }
    } 
    
    function postDetailDashboard(){
        // Instantiate DB & connect
    

        
            $database = new Database();
            $db = $database->connect();
    
            $userId = $_GET['userId'];
            $eventId = $_GET['eventId'];
            
            $sql = "INSERT INTO dashboard_event_participant (eventId, userId) VALUES ('$eventId', '$userId')";
            // var_dump($sql);
            // echo $pages;
            if ($db->query($sql) == true) {
                echo json_encode(
                    array('message' => 'success')
                );
            } else {
                echo json_encode(
                    array('message' => 'Internal Server Error. Try Again')
                );
            }
        
    };

    function checkRegisteredStudents(){
        // var_dump(1);
    
        // Instantiate DB & connect
        $database = new Database();
        $db = $database->connect();
    
        $userId = $_GET['userId'];
        $eventId = $_GET['eventId'];
    
        $sql = "SELECT * from dashboard_event_participant WHERE eventId='$eventId' AND userID='$userId'";
        $result = mysqli_query($db,$sql);
        // Check if any posts
        
        // var_dump($sql);
        if(mysqli_num_rows($result) > 0){
            echo json_encode(
                array('message' => 'success')
            );
        }else {
            // No Posts
            echo json_encode(
                array('message' => 'false')
            );
        }
    };