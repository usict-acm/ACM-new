<?php 
class PostEvent {
    // DB stuff
    private $conn;
    private $table1 = 'eventPage';
    private $table2 = 'event';

    // Post Properties
    public $sno;
    public $name;
    public $description;
    public $regLink;
    public $startTime;
    public $endTime;
    public $watchLink;
    public $partners;
    public $speakers;
    public $poster;
    public $year;
    public $numberOfEvents;
    public $heading;
    public $more;
  
 
    // Constructor with DB
    // public function __construct($db) {
    //   echo 'check1.1';
    // $this->conn = $db;
    // }
    public function __construct($db) {
      // echo 'check1.1';
      $this->conn = $db;
      
    }
    // Get Posts
    public function eventFolder() {
    // Create query
    // $query = 'SELECT b.sno ,b.year, b.numberOfEvents, b.heading, b.more FROM ' . $this->table1 .' b';
    $query = 'SELECT b.* FROM ' . $this->table1 .' b';
    // $query = 'SELECT b.sno ,b.year, b.numberOfEvents, b.heading, b.more FROM eventPage b';
    $stmt = $this->conn->query($query);
    // var_dump($stmt);     
    // return json_encode("function working");
    return $stmt;
    }
    public function readYearEvent($year) {
      // Create query
      $query = 'SELECT b.sno, b.name, b.description, b.regLink, b.startTime, b.endTime, b.watchLink, b.partners,b.speakers,b.poster , b.year FROM ' . $this->table2 .' b WHERE b.year='.$year;
                                  
      $stmt = $this->conn->query($query);
      // echo "statement".$stmt;  
      
      return $stmt;
      }
}
?>