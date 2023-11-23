<?php
include '../model/conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $productName = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING);
    $productPrice = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $productCategory = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $productDescription = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

    $imagePath = "";
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageDir = "../img/"; 
        $imagePath = $imageDir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
         
        } else {
            echo "Error uploading image.";
            exit();
        }
    }
    try {
        if (!empty($imagePath)) {
            $stmt = $conn->prepare("UPDATE product SET Name = :name, price = :price, MaDanhMuc = :category, MoTa = :description, img = :image WHERE ID = :id");
            $stmt->bindParam(':image', $imagePath);
        } else {
            $stmt = $conn->prepare("UPDATE product SET Name = :name, price = :price, MaDanhMuc = :category, MoTa = :description WHERE ID = :id");
        }

        $stmt->bindParam(':id', $productId);
        $stmt->bindParam(':name', $productName);
        $stmt->bindParam(':price', $productPrice);
        $stmt->bindParam(':category', $productCategory);
        $stmt->bindParam(':description', $productDescription);
        $stmt->execute(); 
        header("Location: ../view/list_product.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: ../view/list_product.php");
    exit();
}
?>
