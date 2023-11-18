<?php
// update_category.php

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

function updateCategory($id, $name, $imgFileName)
{
    try {
        global $conn;

        // If a new image is uploaded, move it to the appropriate directory
        if ($_FILES['img']['size'] > 0) {
            $imgFilePath = '' . $imgFileName;
            move_uploaded_file($_FILES['img']['tmp_name'], $imgFilePath);
        } else {
            // If no new image is uploaded, keep the existing one
            $stmt = $conn->prepare("SELECT img FROM danhmuc WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $oldImg = $stmt->fetchColumn();
            $imgFilePath = '.png' . $oldImg;
        }

        // Update category information in the database
        $stmt = $conn->prepare("UPDATE danhmuc SET name = :name, img = :img WHERE id = :id");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':img', $imgFilePath);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryId = $_POST['id'];
    $newName = $_POST['name'];
    $newImgFileName = $_FILES['img']['name'];

    // Call the function to update the category in the database
    $success = updateCategory($categoryId, $newName, $newImgFileName);

    if ($success) {
        echo "Category updated successfully.";
    } else {
        echo "Failed to update category.";
    }
} else {
    echo "Invalid request method.";
}

$conn = null;
?>
