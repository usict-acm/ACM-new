<?php

    include_once './eventFunctions.php';

    function eventInit(){
        $database = new Database();
        $db = $database->connect();
        $event = new Event($db);
        return $event;
    }    

    function utf8ize( $mixed ) {
        if (is_array($mixed)) {
            foreach ($mixed as $key => $value) {
                $mixed[$key] = utf8ize($value);
            }
        } elseif (is_string($mixed)) {
            return mb_convert_encoding($mixed, "UTF-8", "UTF-8");
        }
        return $mixed;
    }

    function fetchAllEvents()
    {
        if ($_SERVER['REQUEST_METHOD'] != "GET") {
            echo "Cannot " . $_SERVER['REQUEST_METHOD'] . " /allEvents";
            return;
        }
        $event = eventInit();        
            $allEvents = $event->fetchAllEvents();
            $allEventsArr = array();
            if ($allEvents) {       
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
                            "time" => $row["time"]
                        );
                        array_push($allEventsArr, $eventRow);
                    }
                    echo json_encode(array('message' => "success", 'events' => utf8ize($allEventsArr)));
                } else {
                    echo json_encode(array('error' => "no events found"));
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
                        "time" => $singleEvent["time"]
                    )
                ));
            } else {
                echo json_encode(array('error' => 'Invalid Details'));
                return;
            }
        } else {
            echo json_encode(array('error' => 'One or more fields are missing.'));
            return;
        }
    }   