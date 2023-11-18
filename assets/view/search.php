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

if (isset($_POST['timkiem'])){
    $timkiem = $_POST['timkiem'];

    // Thực hiện truy vấn SQL để lấy toàn bộ sản phẩm
    $query = "SELECT ID, Name, price, img FROM product WHERE Name LIKE '%'.$timkiem.'%'";
    $stmt = $conn->prepare($query);
    
    $stmt->execute();

    echo '<div class="container">';
    echo '<h2>Sản phẩm mới</h2>';

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="boxsp">';
            echo '<form action="add_to_cart.php" method="post">';
            echo '<img src="../img/' . $row['img'] . '.png" alt="">';
            echo '<p>' . $row['name'] . '</p>';
            echo '<p>Giá: <span>' . number_format($row['price']) . ' </span> đ <span class="span"> 300000đ</span></p>';
            echo '<input type="hidden" name="img" value="/img/' . $row['img'] . '.jpg">';
            echo '<input type="hidden" name="tensp" value="' . $row['name'] . '">';
            echo '<input type="hidden" name="gia" value="' . $row['price'] . '">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '<input type="submit" name="dathang" value="Thêm vào giỏ hàng">';
            echo '<a href="product_detail.php?id=' . $row['id'] . '">Xem chi tiết</a>';
            echo '</form>';
            echo '</div>';     
        }
    } else {
        echo "Không có sản phẩm nào.";
    }

    echo '</div>';
}
?>
</div>
