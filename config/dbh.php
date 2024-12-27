<?php

class Dbh {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "donneesdecinema";

        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
            $pdo = new PDO($dsn, $this->username, $this->password);
            echo "Connection successful!";
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

$dbh = new Dbh();
$dbh->connect();

?>
