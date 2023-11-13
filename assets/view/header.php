<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Store Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}

section {
  width: 100%;
  height: 100vh;
  background-image: url(img/log.png);
  background-size: cover;
  background-position: center;
}

section nav {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-around;
  box-shadow: 0 0 10px #089da1;
  background: #fff;
  position: fixed;
  left: 0;
  z-index: 100;
}

section nav .logo img {
  width: 100px;
  cursor: pointer;
  margin: 8px 0;
}

section nav ul {
  list-style: none;
}

section nav li {
  display: inline-block;
  padding: 0 10px;
}

section nav li a {
  text-decoration: none;
  color: #000;
  font-size: 20px;
}

section nav li a:hover {
  color: #089da1;
}

section nav .social_icon i {
  margin: 0 5px;
  font-size: 18px;
}

.signUp:hover {
  color: #089da1;
  cursor: pointer;
}

.login:hover {
  cursor: pointer;
  color: #089da1;
}

section nav .social_icon i:hover {
  color: #089da1;
  cursor: pointer;
}

section .main {
  display: flex;
  align-items: center;
  justify-content: space-around;
  position: relative;
  top: 10%;
}

section .main h1 {
  position: relative;
  font-size: 55px;
  top: 80px;
  left: 25px;
}

section .main h1 span {
  color: #089da1;
}

section .main p {
  width: 650px;
  text-align: justify;
  line-height: 22px;
  position: relative;
  top: 125px;
  left: 25px;
}

section .main .main_tag .main_btn {
  background: #089da1;
  padding: 10px 20px;
  position: relative;
  top: 200px;
  left: 25px;
  color: #fff;
  text-decoration: none;
}

.main_img {
  margin: 0 64px;
  width: 87%;
  height: 90vh;
  background-image: url(./img/banner.jpg);
  background-size: cover;
}






ul {
  position: relative;
}

ul svg {
  width: 50px;
  height: 50px;
  position: absolute;
  top: -70%;
  right: -25%;
}

ul span {
  border-radius: 50%;
  background-color: red;
  position: absolute;
  top: 14px;
  right: -26%;
  width: 25px;
  height: 25px;
  text-align: center;
  justify-content: center;
  font-weight: 500;
  color: white;
  border: none;
}

.header .img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.imgCart {
  position: absolute;
  top: 30%;
}

.cart {
  text-decoration: none;
}

.point {
  top: 76%;
  right: -26%;
}
</style>
</head>

<body>


  <div class="header">


    <?php
    // $totalCount = count($_SESSION['cart']) ;
        if(isset($_COOKIE['usr'])) {
           
          echo'<section>

    <nav>

      <div class="logo">
        <img src="img/logo.png">
      </div>

      <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="view/sanpham.php">Sản phẩm</a></li>
        <li><a href="index.php?page=about">Giới thiệu</a></li>
        <li><a href="contact.html">Liên hệ</a></li>
        <li><a href="./">tin tức</a></li>
      </ul>

      <div class="social_icon">
        <ul>

          <i class="fa-solid fa-magnifying-glass"> </i>
          <i class="fa-solid fa-heart"></i>
          
                    <li class="login"> '.$_COOKIE['usr'].'</a></li>

          <img class="img" src=" img/'. $_COOKIE['img'] . '" class="icon-logo">
                    <li class="login"> <a href="model/logout.php">Đăng xuất</a></li>
          <a href="view/viewcart.php" class="cart">Giỏ hàng </a>
          <svg class= "imgCart" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
          </svg>
          <span class= "point"> </span>
        </ul>
      </div>

    </nav>

    <div class="main">

      <!-- <div class="main_tag">
                <h1>WELCOME TO<br><span>BOOK STORE</span></h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda molestias atque laborum 
                    non fuga ex deserunt. Exercitationem velit ducimus praesentium, obcaecati hic voluptate id 
                    tenetur fuga illum quidem omnis? Rerum?
                </p>
                <a href="#" class="main_btn">Learn More</a>

            </div> -->

      <div class="main_img">
               
      
      </div>
      
      </section>';
    }
   
        ?>



    <?php
        if (!isset($_COOKIE['usr']))
       
         echo 
        '<section>

    <nav>

      <div class="logo">
        <img src="img/logo.png">
      </div>

      <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="view/sanpham.php">Sản phẩm</a></li>
        <li><a href="index.php?page=about">Giới thiệu</a></li>
        <li><a href="contact.html">Liên hệ</a></li>
        <li><a href="./">tin tức</a></li>
      </ul>

      <div class="social_icon">
        <ul>

          <i class="fa-solid fa-magnifying-glass"> </i>
          <i class="fa-solid fa-heart"></i>
          <li class="login"> <a href="index.php?page=login">Đăng nhập</a></li>
          <a href="view/viewcart.php" class="cart">Giỏ hàng </a>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
          </svg>
          <span></span>
        </ul>
      </div>

    </nav>

    <div class="main">

      <!-- <div class="main_tag">
                <h1>WELCOME TO<br><span>BOOK STORE</span></h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda molestias atque laborum 
                    non fuga ex deserunt. Exercitationem velit ducimus praesentium, obcaecati hic voluptate id 
                    tenetur fuga illum quidem omnis? Rerum?
                </p>
                <a href="#" class="main_btn">Learn More</a>

            </div> -->

      <div class="main_img">
               
      
      </div>
      
      </section>';
      ?>


</body>

</html>