<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../config/login.css">

<head>
  <title>Login Page</title>
  <!--Made with love by Mutiullah Samim -->

  <!--Bootsrap 4 CDN-->

</head>
<!-- 
<body>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Sign In</h3>
          <div class="d-flex justify-content-end social_icon">
            <span><i class="fab fa-facebook-square"></i></span>
            <span><i class="fab fa-google-plus-square"></i></span>
            <span><i class="fab fa-twitter-square"></i></span>
          </div>
        </div>
        <div class="card-body">
          <form action="../model/login_process.php" method="post">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="usr" placeholder="username">

            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" name="pwd" placeholder="password">
            </div>
            <div class="row align-items-center remember">
              <input type="checkbox">Remember Me
            </div>
            <div class="form-group">
              <input type="submit" value="Login" class="btn float-right login_btn">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            Don't have an account?<a href="register.php">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center">
            <a href="forgotpass.php">Forgot your password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <form action="../model/login_process.php" method="post">
  -->



<div class="container">
  <h2>Login</h2>
  <form action="../model/login_process.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="usr">

    <label for="password">Password:</label>
    <input type="password" id="password" name="pwd">

    <div style="display: flex; justify-content: space-between; align-items: center;">
      <button type="submit">Login</button>
      <a href="../login/resetpass.php">Forgot Password?</a>
    </div>
  </form>

  <div class="social-icons">
    <a href="#" class="google-icon">
      <i class="fab fa-google" style="margin-right: 10px;"></i>
      Login Google
    </a>
    <a href="#" class="facebook-icon">
      <i class="fab fa-facebook" style="margin-right: 10px;"></i>
      Login Facebook
    </a>
  </div>

  <p>Don't have an account? <a href="register.php">Register here</a>.</p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>