<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['increase']) || isset($_POST['decrease'])) {
        $index = $_POST['index'];

        // Ensure the index is valid
        if (isset($_SESSION['cart'][$index])) {
            $quantity = $_SESSION['cart'][$index]['quantity'];

            // Handle increase button
            if (isset($_POST['increase'])) {
                $_SESSION['cart'][$index]['quantity'] = $quantity + 1;
            }

            // Handle decrease button
            if (isset($_POST['decrease']) && $quantity > 1) {
                $_SESSION['cart'][$index]['quantity'] = $quantity - 1;
            }
        }
    }
}

header('Location: ../view/viewcart.php'); // Redirect back to the cart page
?>
