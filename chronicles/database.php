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
    include(__DIR__.'/../enviornment.php');
    // $env_server = "localhost:3306";
    // $env_username = "root";
    // $env_password = "";
    // $env_database = "acmbackend";
    // $env_port = "3306";
    echo $env_server;
    $this->server = $env_server;
    echo $env_username;
    $this->username = $env_username;
    echo $env_password;
    $this->password = $env_password;
    echo $env_database;
    $this->database = $env_database;
    echo $env_port;
    $this->port = $env_port;
    
    $conn = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
    
    return $conn;
  }
}
?>