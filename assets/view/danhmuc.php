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

// Retrieve categories from the database
try {
    $stmt = $conn->query("SELECT * FROM danhmuc");
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <title>List of Categories</title>
    <link rel="stylesheet" href="../config/styles.css">
</head>
<body>
    <div class="header">
        <img src="../img/logo33.png" alt="Your Logo">
        <h1 class="h1-dm">Danh Sách Danh Mục</h1>
        <a href='upload.php'>Thêm danh mục</a>
    </div>

    <?php if(isset($categories) && count($categories) > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Ảnh</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>

            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td>
                        <img src="../img/<?php echo $category['img']; ?>" alt="">
                    </td>
                    <td>
                        <?php echo "<a href='../model/edit_category.php?id={$category['id']}'>Sửa danh mục</a>"; ?>
                    </td>
                    <td>
                        <?php echo "<a href='../model/delete_category.php?id={$category['id']}'>Xóa danh mục</a>"; ?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    <?php else: ?>
        <p>No categories found.</p>
    <?php endif; ?>

</body>
</html>
