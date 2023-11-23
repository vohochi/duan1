<?php
include '../model/conn.php';
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    try {
        $stmt = $conn->prepare("SELECT * FROM product WHERE ID = :id");
        $stmt->bindParam(':id', $productId);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    if (!$product) {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Edit Product</title>
</head>
<body>
<h1>Edit Product</h1>

<form action="../model/update_product.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $product['ID']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="Name" value="<?php echo $product['Name']; ?>" required>
    <label for="image">Image:</label>
    <input type="file" name="image">
    <label for="price">Price:</label>
    <input type="text" name="price" value="<?php echo $product['price']; ?>" required>
    <label for="category">Category ID:</label>
    <input type="text" name="category" value="<?php echo $product['MaDanhMuc']; ?>" required>

    <label for="description">Description:</label>
    <textarea name="description" required><?php echo $product['MoTa']; ?></textarea>

    <input type="submit" value="Save Changes">
</form>

</body>
</html>
