<?php
define('SVName', 'localhost');
define("USRname", "root");
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=" . SVName . ";dbname=" . DBName, USRname, DBpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $product_id = $_GET['id'];

  
    $stmt = $conn->prepare("DELETE FROM product WHERE ID = ?");
    $stmt->execute([$product_id]);

    if ($stmt->rowCount() > 0) {
        
        header('Location: ../view/list_product.php');
    } else {
        echo "Xóa sản phẩm không thành công";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn = null;
?>
