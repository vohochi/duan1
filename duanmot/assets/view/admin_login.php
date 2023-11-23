<?php
session_start();
if (isset($_SESSION['admin_id'])) {
    header("Location: admin_dashboard.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === 'adminpassword') {
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $error_message = "error name or pass";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="../config/styles3.css">
</head>
<body>
<div id="container">
        <div class="snow"></div>
        <div class="imge"> <img class="slide-up-down" src="../img/44-removebg-preview.png" alt="Your Image"></div>
<div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <div class="text">
                    <h2>Admin Login</h2>
                <?php
if (isset($error_message)) {
    echo "<h3 style='color: red;'>$error_message</h3>";
}
?>
                </div>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body1">
                    <form action="" method="post">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username"  class="form-control" required placeholder="username">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="password" name="password"  class="form-control" required placeholder="password">  
                        <div class="form-group1">
                        <input type="submit" class="btn float-right login_btn" value="Login">
                        </div>  
                    </form>
                </div>
                <div class="card-footer1">
                    <div class="d-flex justify-content-center links">
                    Don't have an account?
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="img"><img src="../img/23-removebg-preview.png" alt=""></div>
        </div>
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



<!-- <h2>Admin Login</h2>

<?php
if (isset($error_message)) {
    echo "<p style='color: red;'>$error_message</p>";
}
?>

<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Login">
</form> -->