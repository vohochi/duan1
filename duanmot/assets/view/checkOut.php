<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../config/checkOut.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <style>
  .scrollbar {
    border: 1px solid #ccc;
  }


  #bankOptions div:hover {
    background-color: orange;
    color: white;
  }


  #bankOptions option {

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


  #optionDistrict,
  #optionVillage,
  #optionCity {
    overflow: auto;
    width: 100%;
    height: 80px;
    border: 1px solid #ccc;
    cursor: pointer;
    box-shadow: 3px 5px 1px 1px rgb(0, 0, 0, 2px);
    display: none;
  }

  #bankOptions div option {
    text-align: center;
    position: absolute;
    left: 30%;

  }

  #optionDistrict option:hover,
  #optionVillage option:hover,
  #optionCity option:hover {
    background-color: orange;
    color: white;
  }

  #delivery .img {
    display: inline-block;
  }


  small {
    color: red;
    display: none;
  }

  /* 
  #bankOptions:active {
    background-color: ;

  } */
  .form-check input {
    cursor: pointer;
  }

  #bankOptions {
    cursor: pointer;
    overflow: auto;
    height: 210px;
    box-shadow: 3px 5px 1px 1px rgb(0, 0, 0, 2px);
    width: 100%;
    background-color: #e9e9e9;
    position: absolute;
    left: 0;
    display: none;
  }
  </style>
  <div id="success"></div>
  <div class="container">

    <form action="" id="container">

      <div class="row">

        <div class="col">

          <h3 class="title">Địa chỉ thanh toán</h3>
          <div class="inputBox">
            <span>Thành phố, tỉnh :</span>
            <input id="city" type="text" placeholder="HCM">
            <div id="optionCity"></div>
            <small>Vui lòng điền thông tin</small>

          </div>
          <div class="inputBox">
            <span>Quận, huyện :</span>
            <input id="village" type="text" placeholder="Cukuin...">
            <div id="optionVillage"></div>
            <small>Vui lòng điền thông tin</small>
          </div>

          <div class="inputBox">
            <span>Xã :</span>
            <input id="district" type="text" placeholder="eahu....">
            <div id="optionDistrict"></div>
            <small>Vui lòng điền thông tin</small>

          </div>
          <div class="inputBox">
            <span>Địa chỉ chi tiết:</span>
            <input id="addressDetail" type="text" placeholder="112/11 Hoàng hóa thám TX...">
            <small>Vui lòng điền thông tin</small>

          </div>

          <div class="flex">
            <div class="inputBox">
              <span>state :</span>
              <input id="state" type="text" placeholder="state">
            </div>
            <div class="inputBox">
              <span>zip code :</span>
              <input id="zipCode" type="text" placeholder="123 456">
            </div>
          </div>

        </div>

        <div class="col">
          <h3 class="title">
            Thanh toán <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
              class="bi bi-bank" viewBox="0 0 16 16">
              <path
                d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72l-.25-1Z" />
            </svg></h3>

          <div class="inputBox">
            <span>Thẻ được chấp nhận :</span>
            <img src="../img/card_img.png" alt="">
          </div>
          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="">
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input"
                data-listener-added_3dd7a052="true">
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input"
                data-listener-added_3dd7a052="true">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>
          <div class="inputBox" id="scroll">
            <span>Lựa chọn ngân hàng :</span>
            <input type="text" list="bankOptions" id="input" class="scrollbar" placeholder="Sacombank...">
            <span class="nameBank"></span>
            <div id="bankOptions"></div>
            <small>Vui lòng điền thông tin</small>
          </div>
          <div class="inputBox">
            <span>Số thẻ :</span>
            <input maxlength="16" type="text" id="bin" placeholder="1111-2222-3333-4444">
            <div class="bin"></div>
            <small>Vui lòng điền thông tin</small>
          </div>
          <div class="inputBox">
            <span>Tên của chủ thẻ:</span>
            <input id="nameCard" type="text" placeholder="BaoNguyen">
            <small>Vui lòng điền thông tin</small>
          </div>

          <div class="flex">
            <div class="inputBox">
              <span>exp year :</span>
              <input class="exp" id="exp" type="number" placeholder="2022">
            </div>
            <div class="inputBox">
              <span>CVV :</span>
              <input class="ccv" id="ccv" type="text" placeholder="1234">
            </div>
          </div>
        </div>

      </div>

      <div id="delivery" class="delivery">Phí vận chuyển:
      </div>
      <div class="icon"> <img src="../img/delivery-truck.png" alt=""></div>
      <div id="fee">
      </div>

      <input type="submit" id="submit" value="Tiến hành thanh toán" class="submit-btn">
    </form>


  </div>
  <!-- <div class="success">
    <div class="process">
      <h2>Đơn hàng của bạn đang được xử lý</h2>
      <div class="loading">
        <img class="spin" src="../img/loading.png" alt="">

      </div>
    </div>
  </div> -->

  <script defer src="APIBank.js"></script>


</body>

</html>