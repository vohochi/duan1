<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <style>
  /*Footer*/

  footer {
    width: 100%;
    background: #eaeaea;
  }

  footer .footer_main {
    width: 100%;
    display: flex;
    justify-content: space-around;
  }

  footer .footer_main .tag {
    margin: 10px 0;
  }

  footer .footer_main .tag img {
    width: 100px;
    margin-bottom: 10px;
  }

  footer .footer_main .tag p {
    width: 250px;
    line-height: 22px;
    text-align: justify;
  }

  footer .footer_main .tag h1 {
    font-size: 25px;
    margin: 25px 0;
    color: #000;
  }

  footer .footer_main .tag a {
    display: block;
    color: black;
    text-decoration: none;
    margin: 10px 0;
  }

  footer .footer_main .tag i {
    margin-right: 10px;
  }

  footer .footer_main .tag .social_link i {
    margin: 0 5px;
  }

  footer .footer_main .tag .search_bar {
    width: 230px;
    height: 30px;
    background: rgba(202, 202, 202);
    border-radius: 25px;
  }

  footer .footer_main .tag .search_bar input {
    width: 200px;
    padding: 2px 0;
    position: relative;
    top: 17%;
    left: 6%;
    border: none;
    outline: none;
    font-size: 13px;
    background: none;
  }

  footer .footer_main .tag .search_bar button {
    padding: 7px 15px;
    background: #089da1;
    border: none;
    margin-top: 15px;
    border-radius: 25px;
    color: #fff;
    cursor: pointer;
  }

  footer .end {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    color: #000;
  }

  footer .end span {
    color: #089da1;
    margin-left: 10px;
  }
  </style>

  <!--Footer-->

  <footer>
    <div class="footer_main">

      <div class="tag">
        <img src="img/logo.png">
        <p>
          Sách không chỉ là công cụ học tập mà còn là phương tiện giải trí hiệu quả. Đọc sách giúp chúng ta xua tan căng
          thẳng, mệt mỏi, có những giây phút thư giãn thoải mái.
        </p>

      </div>

      <div class="tag">
        <h1>Liên kết</h1>
        <a href="#">Trang chủ</a>
        <a href="#">Sản phẩm</a>
        <a href="#">Giới thiệu</a>
        <a href="#">Liên hệ </a>
        <a href="#">Tin tức</a>

      </div>

      <div class="tag">
        <h1>Thông tin liên lạc</h1>
        <a href="#"><i class="fa-solid fa-phone"></i>114</a>
        <a href="#"><i class="fa-solid fa-phone"></i>113</a>
        <a href="#"><i class="fa-solid fa-envelope"></i>bookstore123@gmail.com</a>

      </div>

      <div class="tag">
        <h1>Theo chúng tôi</h1>
        <div class="social_link">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-linkedin-in"></i>
        </div>

      </div>

      <div class="tag">
        <h1>Bản tin</h1>
        <div class="search_bar">
          <input type="text" placeholder="Bạn gửi email ID ở đây">
          <button type="submit">Đặt mua</button>
        </div>
      </div>

    </div>


  </footer>





  <!-- //footer -->

</body>

</html>