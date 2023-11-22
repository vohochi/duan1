<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../config/checkOut.css">

</head>

<body>
  <style>
  .scrollbar {
    border: 1px solid #ccc;
  }


  #bankOptions div:hover {
    background-color: yellow;
  }

  option {

    height: 10px;
    width: auto;
    display: inline;
  }

  .inputBox {
    width: auto;
  }

  #scroll {
    position: relative;
  }

  #bankOptions img {
    display: inline;
    width: auto;
    height: 30px;
  }

  .nameBank {
    position: absolute;
  }


  /* 
  #bankOptions:active {
    background-color: ;

  } */

  #bankOptions {
    cursor: pointer;
    overflow: auto;
    height: 200px;
    box-shadow: 3px 5px 1px 1px rgb(0, 0, 0, 2px);
    width: 100%;
    background-color: #e9e9e9;
    position: absolute;
    left: 0;
    /* display: none; */
  }
  </style>
  <div class="container">

    <form action="" id="container">

      <div class="row">

        <div class="col">

          <h3 class="title">Địa chỉ thanh toán</h3>

          <div class="inputBox">
            <span>Địa chỉ chi tiết:</span>
            <input type="text" placeholder="kubin">
          </div>
          <div class="inputBox">
            <span>Xã :</span>
            <input type="email" placeholder="example@example.com">
          </div>
          <div class="inputBox">
            <span>Huyện :</span>
            <input type="text" placeholder="Địa chỉ đường">
          </div>
          <div class="inputBox">
            <span>Thành phố :</span>
            <input type="text" placeholder="mumbai">
          </div>

          <div class="flex">
            <div class="inputBox">
              <span>state :</span>
              <input id="state" type="text" placeholder="india">
            </div>
            <div class="inputBox">
              <span>zip code :</span>
              <input type="text" placeholder="123 456">
            </div>
          </div>

        </div>

        <div class="col">

          <h3 class="title">Thanh toán</h3>

          <div class="inputBox">
            <span>Thẻ được chấp nhận :</span>
            <img src="../img/card_img.png" alt="">
          </div>
          <div class="inputBox" id="scroll">
            <span>Lựa chọn ngân hàng :</span>
            <input type="text" list="bankOptions" id="input" class="scrollbar" placeholder="Sacombank...">
            <span class="nameBank"></span>
            <div id="bankOptions"></div>
          </div>
          <div class="inputBox">
            <span>Số thẻ :</span>
            <input type="number" id="bin" placeholder="1111-2222-3333-4444">
            <div class="bin"></div>
          </div>
          <div class="inputBox">
            <span>exp month :</span>
            <input type="text" placeholder="january">
          </div>

          <div class="flex">
            <div class="inputBox">
              <span>exp year :</span>
              <input type="number" placeholder="2022">
            </div>
            <div class="inputBox">
              <span>CVV :</span>
              <input type="text" placeholder="1234">
            </div>
          </div>
        </div>

      </div>

      <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>


  </div>

  <script defer src="APIBank.js"></script>


</body>

</html>