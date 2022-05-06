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
    include(__DIR__.'/../../enviornment.php');
    echo "Database.php Check 1";
    $this->server = $env_server;
    $this->username = $env_username;
    $this->password = $env_password;
    $this->database = $env_database;
    $this->port = $env_port;
    echo "Database.php Check 2";
    
    $conn = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
    echo "Database.php Check 3";
    return $conn;
  }
}
?>