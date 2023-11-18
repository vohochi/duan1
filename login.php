
<?php
// Process login logic here (check username and password, etc.)
// For demonstration purposes, let's assume the username is "admin" and password is "password"

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the credentials are valid
    if ($username == "admin" && $password == "password") {
        // Redirect to a dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials, redirect back to login page
        header("Location: index.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../login/css/login.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    max-width: 400px;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-bottom: 8px;
}

input {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    opacity: 0.9;
}

p {
    text-align: center;
    margin-top: 20px;
    color: #555;
}

a {
    color: #007bff;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
}

a:hover {
    text-decoration: underline;
}

.social-icons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.google-icon, .facebook-icon {
    background-color: #fff;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    display: flex;
    align-items: center;
}

.google-icon:hover, .facebook-icon:hover {
    background-color: #f8f9fa;
}
    </style>
</head>
<body>
    
<div class="container">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <div style="display: flex; justify-content: space-between; align-items: center;">
            <button type="submit">Login</button>
            <a href="../login/register.php">Forgot Password?</a>
        </div>
    </form>

    <div class="social-icons">
        <a href="#" class="google-icon">
            <i class="fab fa-google" style="margin-right: 10px;"></i>
            Login with Google
        </a>
        <a href="#" class="facebook-icon">
            <i class="fab fa-facebook" style="margin-right: 10px;"></i>
            Login with Facebook
        </a>
    </div>

    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>