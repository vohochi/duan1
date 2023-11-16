<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dang ky</title>
  <link rel="shortcut icon" href="../img/icon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Open+Sans:wght@300;400&display=swap');

  :root {
    --success-color: rgb(50, 248, 50);
    --error-color: rgb(255, 2, 2);
  }

  body {
    font-family: 'Open Sans', sans-serif;
    background-size: cover;
    background-position-y: -40px;
    font-size: 14px;
  }

  #wrapper {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url(../img/bookbanner.jpg);
    /* background-repeat: no-repeat; */
    /* background-size: cover; */
    font-size: large;
  }

  #form-login {
    max-width: 500px;
    background-color: rgb(0, 0.1, 0.4, 0.8);
    flex-grow: 1;
    padding: 30px 30px 40px;
    box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
  }

  .form-heading {
    font-size: 25px;
    color: #f5f5f5;
    text-align: center;
    margin-bottom: 30px;
  }

  .form-group {
    border-bottom: 1px solid #fff;
    margin-top: 15px;
    margin-bottom: 40px;
    display: flex;
  }

  .form-group i {
    color: #fff;
    font-size: 14px;
    padding-right: 10px;
  }

  .form-input {
    background: transparent;
    border: 0;
    outline: 0;
    color: #f5f5f5;
    flex-grow: 1;
  }

  .form-input::placeholder {
    color: #f5f5f5;
  }

  #eye i {
    padding-right: 0;
    cursor: pointer;
  }

  .Forgot {
    padding: 0px;
    margin: 0px;
    display: flex;
    justify-content: space-between;
    align-items: center;

  }

  .Forgot a {
    color: white;
    font-family: 'Times New Roman', Times, serif;
    text-decoration: none;
  }

  .form-submit {
    background: transparent;
    border: 1px solid #f5f5f5;
    color: #fff;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    border-radius: 2px;
    margin-top: 30px;
    cursor: pointer;
  }

  .form-submit:hover {
    border: 1px solid #54a0ff;
  }

  .form-group.success input {
    border-color: var(--success-color);
  }

  .form-group.error input {
    border-color: var(--error-color);
  }

  .form-group input:focus {
    outline: 0;
    border-color: #777;
  }

  .form-group.error small {
    visibility: visible;
  }

  .form-group {
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
  }

  .form-group small {
    color: var(--error-color);
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;

  }
  </style>

  <div id="wrapper">
    <form action="../model/register_process.php" method="post" enctype="multipart/form-data" id="form-login">
      <h1 class="form-heading">Form đăng ký</h1>

      <div class="form-group">
        <i class="fa-regular fa-user"></i>
        <input type="nick name" id="name" name="name" class="form-input" placeholder="Tên">
        <small>Lỗi định dạng</small>
      </div>

      <div class="form-group">
        <i class="fa-regular fa-user"></i>
        <input type="nick name" id="username" name="usr" class="form-input" placeholder="Tên đăng ký">
        <small>Lỗi định dạng</small>
      </div>

      <div class="form-group">
        <i class="fa-regular fa-user"></i>
        <input type="email" id="email" name="email" class="form-input" placeholder="Email">
        <small>Lỗi định dạng</small>
      </div>


      <div class="form-group">
        <i class="fa-solid fa-key"></i>
        <input type="password" id="password" name="pwd" class="form-input" placeholder="Mặt khẩu">
        <small>Lỗi định dạng</small>
      </div>
      <div class="form-group">
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="password2" name="cfm" class="form-input" placeholder="Nhập lại mật khẩu">
        <small>Lỗi định dạng</small>

        <div id="eye">
        </div>
      </div>
      <div class="input-group form-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="file" class="form-control" name="file" placeholder="Image">

      </div>


      <div class="Forgot">
        <a href="login.php">Đăng nhập</a>
        <a href="login.php">Quay lại</a>
      </div>
      <a href="login.php"><input type="submit" name="submit" value="Register" class="form-submit"></a>
    </form>

  </div>

  <script src="../js/dangky.js"></script>

</body>

</html>