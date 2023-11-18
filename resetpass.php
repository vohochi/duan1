<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
   </style>
</head>
<body>

    <div class="container">
        <h2>Forgot Password</h2>
        <form action="forgot_password_process.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Reset Password</button>
        </form>

        <p>Remember your password? <a href="login.php">Login here</a>.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>