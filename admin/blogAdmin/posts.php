<?php
class Post
{
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
  public $catCount;

  // Constructor with DB
  public function __construct($db)
  {
    $this->conn = $db;
  }

  // Get Posts
  public function read($start, $limit)
  {
    $query = 'SELECT b.Sno, b.Title, b.Author, b.Content, b.Category, b.Event, b.Image, b.Date FROM ' . $this->table . ' b ORDER BY b.Date DESC LIMIT ' . $start . ',' . $limit;
    $stmt = $this->conn->query($query);
    return $stmt;
  }

  // Get Posts
  public function getCategories()
  {
    // Create query
    $query = 'SELECT b.Category, COUNT(Category) AS CatCount
                                FROM ' . $this->table . ' b 
                                GROUP BY Category';

    $stmt = $this->conn->query($query);
    // Prepare statement
    // $stmt = $this->conn->prepare($query);

    // Execute query
    // $stmt->execute();

    return $stmt;
  }

  // Get Posts
  public function readCategories($Category)
  {
    // Create query
    $query = 'SELECT b.Sno, b.Title, b.Author, b.Content, b.Category, b.Event, b.Image, b.Date
                                FROM ' . $this->table . ' b 
                                WHERE Category=' . $Category;

    $stmt = $this->conn->query($query);
    // Prepare statement
    // $stmt = $this->conn->prepare($query);

    // Execute query
    // $stmt->execute();

    return $stmt;
  }

  public function countBlogs()
  {
    $query = 'SELECT COUNT(*) FROM blog';
    $stmt = $this->conn->query($query);
    return $stmt->fetch_assoc();
  }

  public function readThree()
  {
    // Create query
    $query = 'SELECT b.Sno, b.Title, b.Author, b.Content, b.Category, b.Event, b.Image, b.Date
                                FROM ' . $this->table . ' b
                                ORDER BY Sno DESC LIMIT 3';

    $stmt = $this->conn->query($query);
    // Prepare statement
    // $stmt = $this->conn->prepare($query);

    // Execute query
    // $stmt->execute();

    return $stmt;
  }
  public function readOne($Sno)
  {
    // Create query
    $query = 'SELECT b.Sno, b.Title, b.Author, b.Content, b.Category, b.Event, b.Image, b.Date
                                FROM ' . $this->table . ' b
                                WHERE Sno=' . $Sno;

    $stmt = $this->conn->query($query);

    return $stmt;
  }


  public function readGalleryImage()
  {
    $query = 'SELECT g.Sno, g.source, g.date FROM gallery g';
    $stmt = $this->conn->query($query);
    return $stmt;
  }
}
