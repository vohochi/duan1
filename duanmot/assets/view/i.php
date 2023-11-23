<?php
session_start();
include '../PHPMailer/PHPMailer/Buoi5Mailer.php';
define('SVName', 'localhost');
define("USRname", "root");
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=".SVName.";dbname=".DBName, USRname, DBpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

class App {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUserEmail($email) {
        $sql = "SELECT * FROM user WHERE email = :email";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }
}

$app = new App($conn);
$mail = new Mailer();
$user = new App($conn);

if (isset($_POST['submit'])) {
    $error = array();
    $email = $_POST['email'];

    if (empty($email)) {
        $error['email'] = 'Email không được để trống';
    }

    if (empty($error)) {
        $result = $user->getUserEmail($email);

        if (!empty($result)) {
            $code = substr(rand(0, 999999), 0, 6);
            $title = "Subject: Reset Password";
            $content = "Your verification code is: $code";
            $mail->sendMail($title, $content, $email);
            
            $_SESSION['mail'] = $email;
            $_SESSION['code'] = $code;
            header("location: Verification.php");
            exit;
        } else {
            echo "<h4 style='color:red;'> Email không tồn tại</h4> <br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>

    <?php if (!empty($error['email'])) : ?>
        <p style="color: red;"><?php echo $error['email']; ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" name="submit" value="Send Reset Email">
    </form>
</body>
</html>
