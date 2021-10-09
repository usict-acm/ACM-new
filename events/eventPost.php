<?php 
class PostEvent {
    // DB stuff
    private $conn;
    private $table1 = 'eventpage';
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
  public function countEventsPerYear($year){
    $query = 'SELECT COUNT(*) FROM ' . $this->table2 .' b WHERE year=' . $year . '';
    $stmt = $this->conn->query($query);
    return $stmt->fetch_assoc();
  }

  public function numEvents() {
   // Create query
   $query = 'SELECT COUNT(poster) AS numberOfEvents FROM ' . $this->table2 .' b ';
   $stmt = $this->conn->query($query);
  //  echo "statement"; 
   return $stmt;
  }
  public function readYearEvent($year,$start,$limit) {
      // Create query
      $query = 'SELECT b.* FROM ' . $this->table2 .' b WHERE b.year=' . $year . ' LIMIT ' . $start . ',' . $limit . '';                                 
      // echo $query;
      $stmt = $this->conn->query($query); 
      // echo "statement".$stmt;  
      return $stmt;
      }
      public function carouselquerry() {
        // Create query
        $query = 'SELECT b.* FROM ' . $this->table2 .' b  WHERE EXTRACT(MONTH FROM CURRENT_TIMESTAMP)=EXTRACT(MONTH FROM b.endDate)';
        $stmt = $this->conn->query($query);
        // echo "statement".$stmt;  
        
        return $stmt;
        }
      public function countEvents() {
        // Create query
        $query = 'SELECT COUNT(*) FROM ' . $this->table2 .' WHERE EXTRACT(MONTH FROM CURRENT_TIMESTAMP)=EXTRACT(MONTH FROM endDate)';
        $stmt = $this->conn->query($query);
        // echo "statement".$stmt;  
        
        return $stmt;
        }
      public function carouselquerryOne() {
        // Create query
        $query = 'SELECT * FROM ' . $this->table2 .' ORDER BY endDate DESC LIMIT 1';
        $stmt = $this->conn->query($query);
      // var_dump($stmt);
      // echo $stmt;
        return $stmt;
        }
}
?>