<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tên trang</title>
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
    background-image: url(image/bg.png);
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
  }

  section nav li a:hover {
    color: #089da1;
  }

  .social_icon {
    display: flex;
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

  svg {

    width: 50px;
    height: 50px;
    border-radius: 50%;
  }

  .main_img {
    margin: 0 64px;
    width: 100%;
    height: 90vh;
    background-color: #089da1;
  }
  </style>
</head>

<body>
  <section>

    <nav>

      <div class="logo">
        <img src="image/logo.png">
      </div>

      <ul>
        <li><a href="#Home">Trang chủ</a></li>
        <li><a href="./product.html">Sản phẩm</a></li>
        <li><a href="#About">Giới thiệu</a></li>
        <li><a href="#Arrivals">Liên hệ</a></li>
        <li><a href="#news">tin tức</a></li>
      </ul>

      <?php 
      echo '<div class="social_icon">
        <ul>
        </ul>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
</svg>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
</svg>

        <li class="login"> <a href="index.php?page=login">Đăng nhập</a></li>
      </div>';
      ?>

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
        <div class="item el1">1</div>

      </div>

  </section>
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
        else echo    '<li class="login"> <a href="index.php?page=login">Đăng nhập</a></li>'
        ;
        ?>

  </div>
  <!-- Nội dung trang web -->
</body>

</html>