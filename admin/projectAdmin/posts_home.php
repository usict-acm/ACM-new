<?php 
  class Post_Home {
    private $conn;
    private $table = 'project';

    public $Sno;
    public $Title;
    public $Author;
    public $Content;
    public $Category;
    public $Event;
    public $Image;
    public $Date;

    public function __construct($db) {
      $this->conn = $db;
    }

    public function read() {
      $query = 'SELECT b.Sno, b.Title, b.Author, b.Content, b.Category,
      b.Event, b.Image, b.Date FROM project AS b
      ORDER BY b.Date DESC
      LIMIT 3';    

      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      return $stmt;
    }    
  }

?>