<?php
define('SVName', 'localhost');
define("USRname", "root");
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=".SVName.";dbname=".DBName,USRname, DBpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


if (!empty($_POST['id']) && !empty($_POST['name'])&& !empty($_FILES['file']) && !empty($_POST['price'])
&& !empty($_POST['ma_danhmuc']) && !empty($_POST['description']) ) {
    $name = $_POST['id'];
    $usr = $_POST['name'];
    $img = basename($_FILES['file']['name']);
    $price = $_POST['price'];
    $danhmuc = $_POST['ma_danhmuc'];
    $mota = $_POST['description'];
    
    $stmt = $conn->prepare("INSERT INTO product VALUE(?,?,?,?,?,?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $usr);
    $stmt->bindParam(3, $img);
    $stmt->bindParam(4, $price);
    $stmt->bindParam(5, $danhmuc);
    $stmt->bindParam(6, $mota);
    $stmt->execute();

    if ($stmt) {
       echo "unload thành công ";
       header('Location: ../view/list_product.php');

    }
} else echo "Enter enough fields please !";
$conn = null;

?>




