<?php
define('SVName', 'localhost');
define("USRname", "root");
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=".SVName.";dbname=".DBName,USRname, DBpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

class App {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUserEmail($email) {
        $sql = "SELECT * FROM user WHERE email = '$email'";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if ($result) {
            return $result;
        } else {
            echo "<h4 style='color:red;'> Email không tồn tại</h4> <br>";
        }
    }
}

$app = new App($conn);
?>
