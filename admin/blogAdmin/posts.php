<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'blog';

    // Post Properties
    public $Sno;
    public $Title;
    public $Author;
    public $Content;
    public $Category;
    public $Event;
    public $Image;
    public $Date;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT b.Sno, b.Title, b.Author, b.Content, b.Category, b.Event, b.Image, b.Date
                                FROM ' . $this->table . ' b';
                                
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    
  }

  ?>