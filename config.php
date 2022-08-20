<?php 

    class Config {
        private const DBHOST = "localhost";
        private const DBUSER = "root";
        private const DBPASS = "root";
        private const DBNAME = "fetch_crud_app";
        private $dsn = "mysql:host=" . self::DBHOST . ";dbname=" . self::DBNAME . '';
        protected $conn = null;

        public function __construct() {
            try {
                $this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
        }
    }

?>