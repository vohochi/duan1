<!-- dang nhap -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dangnhap</title>
  <link rel="shortcut icon" href="../img/icon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="../css/dangnhap.css">
</head>

<body>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Open+Sans:wght@300;400&display=swap');

  :root {
    --success-color: rgb(50, 248, 50);
    --error-color: rgb(255, 2, 2);
  }

  body {
    background: url('../img/background1.png');
    background-size: cover;
    background-position-y: -40px;
    font-size: 14px;
  }

  #wrapper {
    background-image: url(../img/bookbanner.jpg);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #form-login {
    height: 30%;
    max-width: 500px;
    background-color: rgb(0, 0, 0, 0.8);
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
    margin-bottom: 20px;
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
    <form action="../model/forgot.php" method="post" id="form-login">
      <h1 class="form-heading">Nhập </h1>
      <div class="form-group">
        <i class="fa-regular fa-user"></i>
        <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">

        <div class="form-group">
          <i class="fa-regular fa-user"></i>
          <input type="password" name="pwd" placeholder="Mật khẩu mới">
        </div>
        <div class="form-group">
          <i class="fa-regular fa-user"></i>
          <input type="password" name="cfm" id="cfm" class="form-input" placeholder="Email">
        </div>
        <a href="login.php"><input type="submit" value="Đăng Nhập" class="form-submit"></a>
    </form>

  </div>
  </script>
</body>

</html>