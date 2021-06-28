<?php

class Database {
    private $server;
    private $username;
    private $password;
    private $database;
    private $port;

    public function connect()  {
        $this->server = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'our_team';
        // $this->port = "3306";

        $conn = new mysqli(
            $this->server,
            $this->username,
            $this->password,
            $this->database
        );

        return $conn;

    }
}

?>