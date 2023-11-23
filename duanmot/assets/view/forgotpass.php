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

// if (isset($_POST['submit'])) {
//     $error = array();
//     $email = $_POST['email'];

//     if (empty($email)) {
//         $error['email'] = 'Email không được để trống';
//     }

//     if (empty($error)) {
//         $result = $user->getUserEmail($email);

//         if (!empty($result)) {
//             $code = substr(rand(0, 999999), 0, 6);
//             $title = "Não cá vàng thì note mật khẩu vào 手机 đi, làm tao code mệt lắm : $code";
//             $content = " resset passwork";
//             $mail->sendMail($title, $content, $email);
            
//             $_SESSION['mail'] = $email;
//             $_SESSION['code'] = $code;
//             header("location: Verification.php");
//             exit;
//         } else {
//             echo "<h4 style='color:red;'> Email ch</h4> <br>";
//         }
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Forgot Password</title>
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
                <h2>Forgot Pass</h2>
                <?php
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
                            $title = "Não cá vàng thì note mật khẩu vào 手机 đi, làm tao code mệt lắm : $code";
                            $content = " resset passwork";
                            $mail->sendMail($title, $content, $email);
                            
                            $_SESSION['mail'] = $email;
                            $_SESSION['code'] = $code;
                            header("location: Verification.php");
                            exit;
                        } else {
                            echo "<h3 style='color:red;'> Email chưa đăng ký </h3>";
                        }
                    }
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
                        <input type="email" name="email"  class="form-control" required  placeholder="email">
                        <div class="form-group1">
                        <input type="submit" name="submit" value="Send Reset Email" class="btn float-right login_btn">
                        </div>  
                    </form>
                </div>
                <div class="card-footer1">
                    <div class="d-flex justify-content-center links">
                    Don't have an account?<a href="register.php">Sign Up</a>
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

<!-- <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="pwd" placeholder="password">
                        </div> -->