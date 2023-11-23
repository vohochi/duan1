
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="../config/styles3.css">
</head>
<body>
    <div id="container">
        <div class="snow"></div>
        <div class="imge"> <img class="slide-up-down" src="../img/44-removebg-preview.png" alt="Your Image"></div>
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <p>Sign In</p>
                    <?php
if (isset($error_message)) {
    echo "<p style='color: red;'>$error_message</p>";
}
?>
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
        <div class="img"><img src="../img/23-removebg-preview.png" alt=""></div>
    </div>
   
        <div class="snow"></div>
    </div>
    <form action="../model/login_process.php" method="post">
    <!-- Các trường và nút đăng nhập ở đây -->
</form> 
<script>
    let container = document.getElementById('container');
let count = 400;
for(var i = 0; i<count; i++){
    let leftSnow = Math.floor(Math.random() * container.clientWidth);
    let topSnow = Math.floor(Math.random() * container.clientHeight);
    let widthSnow = Math.floor(Math.random() * 50);
    let timeSnow = Math.floor((Math.random() * 5) + 5);
    let blurSnow = Math.floor(Math.random() * 10);
    console.log(leftSnow);
    let div = document.createElement('div');
    div.classList.add('snow');
    div.style.left = leftSnow + 'px';
    div.style.top = topSnow + 'px';
    div.style.width = widthSnow + 'px';
    div.style.height = widthSnow + 'px';
    div.style.animationDuration = timeSnow + 's';
    div.style.filter = "blur(" + blurSnow + "px)";
    container.appendChild(div);
}
</script>
</body>
</html>