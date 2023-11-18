<?php
session_start();

if (isset($_POST['dathang']) && $_POST['dathang'] == 'Thêm vào giỏ hàng') {
   
    $img = $_POST['img'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $id = $_POST['id'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $sp = array(
        'img' => $img,
        'tensp' => $tensp,
        'gia' => $gia,
        'id' => $id
    );

    $_SESSION['cart'][] = $sp;
    header("location:../view/viewcart.php");
    exit();
}
?>
