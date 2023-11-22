<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php

include '../view/menu.php';

define('SVName', 'localhost');
define('USRname', 'root');
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=" . SVName . ";dbname=" . DBName, USRname, DBpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $query = "SELECT id, name, img, price,mota FROM product WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
       
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../config/styles.css">
            <title>Thông tin sản phẩm</title>
        </head>

        <body class="body">
            <div class="headline">
            <h2>Thông tin sản phẩm</h2>
    </div>
    <div class="container2">
            <div class="product-details1">
                
                    <div class="image-details1"><img src="../img/<?php echo $row['img']; ?>" alt="" class="image"></div>
                    <div class="conten">
                    <div class="name-details"><p><?php echo $row['name']; ?></p></div>
                    <div class="price-details"><p>Giá: <span><?php echo number_format($row['price']); ?></span> VNĐ</p></div>
                    <div class="mota-details"><p><?php echo $row['mota']; ?></p></div>
                    <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="img" value="<?php echo $row['img']; ?>">
                    <input type="hidden" name="tensp" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="gia" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="btn-details">
                    <input class="btn-add" type="submit" name="dathang" value="Thêm vào giỏ hàng">
                    <input class="btn-buy" type="submit" name="dathang" value="Mua ngay">
                    <span><i class="fa-solid fa-share"></i></span>
                    </div>
                    
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                </form>
                </div>
    </div>

            </div>

            <div class="cmt">
                <iframe src="binhluan.php?id=<?php echo $_GET['id']; ?>" frameborder="0"></iframe>
            </div>
        </body>
        </html>

        <?php
    } else {
        echo "Không tìm thấy sản phẩm.";
    }
} else {
    echo "Không có ID sản phẩm.";
}
include '../view/footer.php';
?>
