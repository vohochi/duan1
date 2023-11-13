<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <style>
  /*about*/

  .about {
    width: 100%;
    height: auto;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-around;
  }

  .about .about_image img {
    width: 800px;
  }

  .about .about_tag h1 {
    font-size: 50px;
    position: relative;
    bottom: 35px;
  }

  .about .about_tag p {
    line-height: 22px;
    width: 650px;
    text-align: justify;
    margin-bottom: 8px;
  }

  .about .about_tag .about_btn {
    padding: 10px 20px;
    background: #089da1;
    color: #fff;
    text-decoration: none;
    position: relative;
    top: 50px;
  }
  </style>
  <div class="about">

    <div class="about_image">
      <img src="img/about.png">
    </div>
    <div class="about_tag">
      <h1>Về chúng tôi</h1>
      <p>
        Là một trang web chuyên cung cấp thông tin về công ty, đội ngũ nhân viên, sản phẩm và dịch vụ của chúng tôi.
        Trang web được thiết kế với giao diện thân thiện, dễ sử dụng, giúp người đọc có thể dễ dàng tìm kiếm thông tin
        cần thiết.
      </p>
      <a href="#" class="about_btn">Learn More</a>
    </div>

  </div>
</body>

</html>