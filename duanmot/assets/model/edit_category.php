<?php
// edit_category.php

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

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    // Retrieve category details by ID
    try {
        $stmt = $conn->prepare("SELECT * FROM danhmuc WHERE id = :id");
        $stmt->bindParam(':id', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        $category = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($category) {
            // Display the form for editing
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Edit Category ?></title>
                <!-- Add your styles if needed -->
            </head>
            <body>
                <h2>Edit Category</h2>
                <form action="update_category.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="">
                    <br>
                    <label for="img">Image:</label>
                    <input type="file" name="img">
                   
                    <input type="submit" value="Update">
                </form>
            </body>
            </html>
            <?php
        } else {
            echo "Category not found.";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request. Please provide a category ID.";
}

$conn = null;
?>
