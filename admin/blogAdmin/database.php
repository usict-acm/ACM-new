<?php

class Database
{
  private $server;
  private $username;
  private $password;
  private $database;
  private $port;

  public function connect()
  {

    $this->server = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->database = "acmbackend";

    // $this->port = "3307";

    // $conn = new mysqli(
    //   $this->server,
    //   $this->username,
    //   $this->password,
    //   $this->database
    // );

    //  $conn = new mysqli($this->server,$this->username,$this->password,
    //           $this->database,$this->port);

    $conn = new mysqli(
      $this->server,
      $this->username,
      $this->password,
      $this->database
    );

    //  echo $conn;
    return $conn;
  }
}


  // class Database {
  //   // DB Params
  //   private $host = 'localhost:3307';
  //   private $db_name = 'acmbackend';
  //   private $username = 'root';
  //   private $password = '';

  //   // DB Connect
  //   public function connect() {
  //     // $this->conn = null;

  //     $conn = new mysqli($this->host,$this->db_name,$this->username,$this->password);

  //     // try { 
  //     //   $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
  //     //   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //     // } catch(PDOException $e) {
  //     //   echo 'Connection Error: ' . $e->getMessage();
  //     // }
  //     echo $conn;

  //     return $conn;
  //   }
  // }