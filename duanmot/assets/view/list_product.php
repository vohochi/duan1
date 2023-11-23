<?php

define('SVName', 'localhost');
define("USRname", "root");
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=".SVName.";dbname=".DBName, USRname, DBpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Retrieve products from the database
try {
    $stmt = $conn->query("SELECT * FROM product");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Products</title>
    <link rel="stylesheet" href="../config/styles.css">


</head>
<body>

<header>

<img src='../img/logo33.png' class="img-sp" alt='Company Logo'>


<!-- <a href='../model/add_product.php'>thêm danh mục</a> -->
</header>
<h1 class="h1-dm">Danh Sách Danh Mục</h1>
<a href='../model/add_product.php'>thêm danh mục</a>

<?php if(isset($products) && count($products) > 0): ?>
    <table class="bang">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category ID</th>
            <th>Description</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['ID']; ?></td>
                <td><?php echo $product['Name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td>
                <img src="../img/<?php echo $product['img']; ?>" alt="">

                </td>
                <td><?php echo $product['MaDanhMuc']; ?></td>
                <td><?php echo $product['MoTa']; ?></td>
                <td><a href='../view/edit_product.php?id=<?php echo $product['ID']; ?>'>Sửa</a></td>
                <td><a href='../model/delete_product.php?id=<?php echo $product['ID']; ?>'>Xóa</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No products found.</p>
<?php endif; ?>

</body>
</html>
