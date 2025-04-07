<?php
//  Design Pattern: improve code maintainability, scalability, and readability.
//  Purpose: Ensures a class has only one instance and provides a global point of access to it.
//  Use Case: Useful when you need to limit the number of instances, such as for managing database connections.


class Singleton {
    private static $instance = null;
    private $dbconn;
    private function __construct() {
        echo "DB connected \n";
        try {
            $this->dbconn = new mysqli('localhost', 'root', '', 'product_mngt');            
        } catch (Exception $th) {
            echo "error : " . $th->getMessage();
        }
    }
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self(); // ! constructor mimics
        } else {
            echo "Instance already exists \n";
        }
        return self::$instance;
    }

    public function getDBConn() {
        return $this->dbconn;
    }

    public function __destruct() {
        if($this->dbconn) {
            $this->dbconn->close();
            echo "DB connection closed \n";
        }
    }
}
$singleton = Singleton::getInstance();

$obj = $singleton->getDBConn();
$stmt = $obj->prepare("SELECT * FROM products");
$stmt->execute();
$result = $stmt->get_result();
$rows = $result->fetch_all(MYSQLI_ASSOC);
print_r($rows);