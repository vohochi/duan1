<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Ký</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Thêm liên kết đến Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<style>
    body {
    background-color: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    position: relative; /* Để có thể đặt hình ảnh tượng trưng */
}

h2 {
    text-align: center;
    margin-bottom: 30px;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    font-weight: bold;
}

.btn-register {
    background-color: #28a745;
    color: #fff;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 10px;
}

.btn-register:hover {
    background-color: #218838;
}

.social-icons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.social-icons a {
    text-decoration: none;
    color: #fff;
    padding: 10px;
    border-radius: 4px;
}

.google-icon {
    background-color: #dd4b39;
}

.facebook-icon {
    background-color: #3b5998;
}

/* Thêm phần mới cho hình ảnh tượng trưng */
.brand-icon {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
}

.brand-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
<body>
<div class="container">
    <h2>Đăng Ký</h2>
    <form action="process_registration.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="confirm_password">Xác nhận mật khẩu:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>

        <button type="submit" class="btn btn-register">Đăng Ký</button>
        <a href="../login/login.php" class="btn btn-login">Login</a>

        <div class="social-icons">
            <a href="#" class="google-icon"><i class="fab fa-google"></i> Login Google</a>
            <a href="#" class="facebook-icon"><i class="fab fa-facebook"></i> Login Facebook</a>
        </div>
        <div class="brand-icon">
            <img src="../login/img/1.jpg" alt="Brand Icon">
        </div>
    </form>
</div>

    <!-- Thêm liên kết đến Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
