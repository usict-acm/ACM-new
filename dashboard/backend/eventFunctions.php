<?php

class Event
{
    private $conn;
    private $table = "event";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function fetchAllEvents()
    {
        $query =
            "SELECT * from $this->table";
        $res = $this->conn->query($query);
        return $res;
    }
    public function fetchSingleEvent($eventId)
    {
        $query =
            "SELECT * from $this->table
            WHERE sno = '$eventId'";
        $res = $this->conn->query($query);
        return $res;
    }
    
}
