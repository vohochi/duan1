<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tên trang</title>
    <link rel="stylesheet" href="../config/styles1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body>
    <div class="header">
        <div class="plus">
        <div class="logo">
            <img class="logo" src="../img/logo2.png" alt="logo">
        </div>

        <div class="connect">
        <i class="fa-solid fa-phone"> </i>
        <p>090000000</p>
        <i class="fa-solid fa-envelope"></i>
        <p>toanncps32635@fpt.edu.vn</p>
        </div>
      <div class="under1">
    <?php
    if (isset($_COOKIE['usr'])) {
        echo'<div class="under">';
        echo '<img class="img" src="../img/' . $_COOKIE['img'] . '.png">';
        echo '<p class="name">' . $_COOKIE['usr'] . '</p>';
        echo '</div>';

    } else {
        echo '<p><a href="index.php?page=login" class="login">login</a></p>';
    }
    ?>
      <p><a href="viewcart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i> </a></p> 
    </div>
    </div>
    <div class="menu">
    <ul>
    <li class="active"><a href="../index.php">Home</a></li>
    <li><a href="index.php?page=about">About</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="sanpham.php">Sản phẩm</a></li>
    <li><a href="viewcart.php" class="">Giỏ hàng </a></li>
    <li><a href="admin_dashboard.php">Trang admin </a></li>
    <div class="search">
                <form action="search.php" method="get">
                    <input type="text" name="timkiem" placeholder="Tìm kiếm...">

                   <input type="submit" name="timkiem" value="Tìm Kiếm">
                </form>
            </div>
    </ul>
</div>
</div>
</body>
</html>
