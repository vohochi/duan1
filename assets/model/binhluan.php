<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitComment"])) {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";  
    $comment = isset($_POST["noidung"]) ? $_POST["noidung"] : "";
    $product_id = $_GET['product_id'];
    if ($comment !== "") {
        addComment($name, $comment);
        header("Location: /assets/view/binhluan.php");
      
    } else {
        echo "Bình luận không được để trống.";
    }
}

function addComment($name, $comment ) {
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
      $sql = "INSERT INTO `binhluan` (`user`, `NoiDung`) VALUES (:user, :Noidung)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':user', $name);
      $stmt->bindParam(':Noidung', $comment);  
      $stmt->execute();
}

?>
