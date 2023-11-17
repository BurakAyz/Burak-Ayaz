<?php

class Database {
    public $pdo;
 
    public function __construct($db ="restaurant", $host = "localhost:3306", $user = "root", $pass= "Burkmy99") {
    try {
    $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connectie gemaakt";
    } catch (Exception $e) {
        echo "error: " . $e->getMessage();
     }
    }
}
$connectie = new Database();
?>