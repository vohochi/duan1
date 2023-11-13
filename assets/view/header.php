<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Store Website</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../assets/config/header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <li><a href="view/new.php">tin tức</a></li>
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

    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="https://sv1.vacdn.link/user_ba3f3a2b6007e47ddf8545ac17634f4f/70a6676631a0bb0f3fb3e48ec69dede0.jpg" alt="">
            </div>
            <div class="item">
                <img src="https://bookish.vn/wp-content/uploads/2019/04/banner_web_khai-truong-nguyen-anh-thu_925x412.jpg" alt="">
            </div>
            <div class="item">
                <img src="https://insieutoc.vn/wp-content/uploads/2021/02/mau-banner-quang-cao-khuyen-mai.jpg" alt="">
            </div>
            <div class="item">
                <img src="https://insieutoc.vn/wp-content/uploads/2021/02/mau-thiet-ke-banner-dep.jpg" alt="">
            </div>
            <div class="item">
                <img src="https://thaihabooks.com/wp-content/uploads/2018/09/Banner_HOI-SACH-HOANG-THANH-02-3.jpg" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
      </section>';
    }
   
        ?>


    <?php
    // session_start();
// $count = $_SESSION['myCount']; 

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
          <span>  </span>
        </ul>
      </div>

    </nav>

    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="img/1.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/2.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/3.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/4.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/5.jpg" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
      </section>';
      ?>

    <script src="../assets/js/header.js"></script>
</body>

</html>