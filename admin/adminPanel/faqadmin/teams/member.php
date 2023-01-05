
<?php

    class Member {
        private $conn;
        private $table = 'team';

        public $id;
        public $image;
        public $name;
        public $designation;
        public $linkedin;
        public $github;
        public $instagram;
        public $year;
        public $category;
        public $added_on;

        public function __construct($db) {
            $this->conn = $db;
        }

    public function readMember($year){
            $query = 'SELECT t.id, t.image, t.name, t.designation, t.linkedin, t.github, t.instagram, t.year, t.category FROM ' . $this->table . ' t WHERE year = ' . $year;
            $stmt = $this->conn->query($query);
                   
            return $stmt;
        }
    }
?>
