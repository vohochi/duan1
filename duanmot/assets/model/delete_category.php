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

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $category_id = $_GET['id'];
//coi có danhm ko
  
    $query_check = "SELECT * FROM DanhMuc WHERE id = :category_id";
    $stmt_check = $conn->prepare($query_check);
    $stmt_check->bindParam(':category_id', $category_id);
    $stmt_check->execute();

 
    if ($stmt_check->rowCount() > 0) {
// thực hiện xóa danh mục
        $query_delete = "DELETE FROM danhmuc WHERE id = :category_id";
        $stmt_delete = $conn->prepare($query_delete);
        $stmt_delete->bindParam(':category_id', $category_id);
        $stmt_delete->execute();

       
        header('Location: ../view/danhmuc.php');
        exit();
    } else {
        echo "Danh mục không tồn tại.";
    }
}
?>
