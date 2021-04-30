<?php

class Database {
    //DB params
    private $host = 'frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    private $db_name = 'a1kn963erd2y2x2z';
    private $username = 'p2ravqd64g5faddc';
    private $password = 'd0ka9lbq678i7xla';
    private $conn;

    //DB connect
    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, 
            $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->conn;
    }

    //DB connect
    // public function connect() {
    //     $this->conn = null;
    //     $url = getenv('JAWSDB_URL');
    //     $dbparts = parse_url($url);
    //     $hostname = $dbparts['host'];
    //     $username = $dbparts['user'];
    //     $password = $dbparts['pass'];
    //     $database = ltrim($dbparts['path'],'/');

    //     $dsn = "mysql:host={$hostname};dbname={$database}";

    //     try {
    //         $this->conn = new PDO($dsn, $username, $password);
    //         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     } catch (PDOException $e) {
    //         echo 'Connection Error: ' . $e->getMessage();
    //     }
    //     return $this->conn;
    // }
}
    

