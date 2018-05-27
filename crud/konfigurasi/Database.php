<?php 
    class Database {
        private $host = 'localhost';
        private $username = 'root';
        private $password = 'toor';
        private $database = 'pelatihan';

        public $conn;

        public function __construct()
        {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) {
                return die("Connection failed: " . $this->conn->connect_error);
            }
        }

        public function tampilData($query)
        {
            $result = $this->conn->query($query);
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }

        public function simpanData($query)
        {
            if ($this->conn->query($query) === TRUE) {
                return true;
            }
            return false;
        }

        public function editData($query)
        {
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }
    }
?>