<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhóm 6</title>
    <style>
  body {
    margin: 0;
    font-family: "Roboto Condensed";
}

.header {
    background: linear-gradient(to right, rgb(43, 169, 207), rgba(40, 55, 145));
    background-color: #f0f0f0;
    display: flex;
    color:black;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}
.header a{
    color:black;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size:20px;
}
.logo img {
    background-color:white;
    border-radius:50%;
    width: 100px;
    height: 100px;
}

.cart {
    margin-right: 10px;
    text-decoration: none;
    color: blue;
}

.img {
   
    height: 60px;
    width: 60px;
    border-radius: 50%;
}

.menu {
    background: #089DA1;
    height:80px;
    list-style: none;
    font-size: 30px;
    
    padding: 0;
    align-items: center;
    justify-content: space-between;
    display: flex;
}

.menu li {
    margin-right: 10px;
}

.menu a {
    text-decoration: none;
    color: white;
    padding: 10px;
    transition: background-color 0.3s ease;
}

.menu a:hover {
    background-color: #555;
}

.banner {
  
    width: 100%;
    height: 300px; 
    object-fit: cover;
}

    </style>
</head>
<body>
  
    <ul class="menu">
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="index.php?page=about">About</a></li>
    <li><a href="contact.html">Contact</a></li>
   
    <li><a href="view/sanpham.php">Sản phẩm</a></li>
    <span class="cart">
        <a href="blog.html"> <i class="fa-solid fa-cart-shopping"></i>  </a>
    </span>
</ul>
<div class="header">
        <div class="logo">
        <img class="logo" src="img/logo33.png" alt="logo"></div>
        
        <?php
        if (isset($_COOKIE['usr'])) {
            echo $_COOKIE['usr'];
        }
        ?>
        <?php
        if (isset($_COOKIE['usr']))
            echo '<img class="img" src=" img/'. $_COOKIE['img'] . '" class="icon-logo">';
        ?>

        <?php
        if (isset($_COOKIE['usr']))
            echo '<a href="model/logout.php">logout</a>';
        else echo '<a href="index.php?page=login">login</a>';
        ?>
<a href="view/viewcart.php" class="cart">Giỏ hàng </a> 
    </div>
    <img class="banner" src="img/ba.jpg" alt="Banner">

    <!-- Nội dung trang web -->
</body>
</html>
