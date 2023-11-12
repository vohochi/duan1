<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <style>
  /*Blog*/

  .blog {
    width: 100%;
    height: auto;
    margin: 25px 0;
  }

  .blog h1 {
    text-align: center;
    font-size: 50px;
    margin-bottom: 30px;
  }

  .blog .blog_box {
    width: 95%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
  }

  .blog .blog_box .blog_card {
    margin: 0 auto;
    width: 450px;
    height: auto;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
  }

  .blog .blog_box .blog_card .blog_img {
    width: 450px;
    height: 300px;
    overflow: hidden;
  }

  .blog .blog_box .blog_card .blog_img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
  }

  .blog .blog_box .blog_card .blog_tag {
    padding: 20px;
  }

  .blog .blog_box .blog_card .blog_tag h2 {
    color: #089da1;
  }

  .blog .blog_box .blog_card .blog_tag p {
    margin-top: 10px;
    text-align: justify;
    line-height: 22px;
  }

  .blog .blog_box .blog_card .blog_tag .blog_icon {
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #089da1;
    cursor: pointer;
  }
  </style>

  <!--Blog-->

  <div class="blog">
    <h1>Blog Của chúng tôi</h1>
    <div class="blog_box">

      <div class="blog_card">
        <div class="blog_img">
          <img src="img/blog_1.jpg">
        </div>
        <div class="blog_tag">
          <h2>Bloger</h2>
          <p>
            Sách là nguồn tri thức vô tận, là người bạn đồng hành của con người trong mọi giai đoạn của cuộc đời. Tuy
            nhiên, không phải ai cũng biết cách bán sách hiệu quả
          </p>
          <div class="blog_icon">
            <i class="fa-solid fa-calendar-days"></i>
            <i class="fa-solid fa-heart"></i>
          </div>
        </div>
      </div>

      <div class="blog_card">
        <div class="blog_img">
          <img src="img/blog_2.jpg">
        </div>
        <div class="blog_tag">
          <h2>Bloger</h2>
          <p>
            Chất lượng sách, hình thức sách, dịch vụ hậu mãi là những yếu tố quan trọng quyết định sự thành công của một
            thương hiệu sách.

          </p>
          <div class="blog_icon">
            <i class="fa-solid fa-calendar-days"></i>
            <i class="fa-solid fa-heart"></i>
          </div>
        </div>
      </div>

      <div class="blog_card">
        <div class="blog_img">
          <img src="img/blog_3.jpg">
        </div>
        <div class="blog_tag">
          <h2>Bloger</h2>
          <p>
            Áp dụng ngay những mẹo này để biến đam mê đọc sách của bạn thành một công việc kinh doanh thành công.
          </p>
          <div class="blog_icon">
            <i class="fa-solid fa-calendar-days"></i>
            <i class="fa-solid fa-heart"></i>
          </div>
        </div>
      </div>

    </div>
  </div>






</body>

</html>