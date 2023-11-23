<?php
session_start();
include '../PHPMailer/PHPMailer/Buoi5Mailer.php';
define('SVName', 'localhost');
define("USRname", "root");
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=".SVName.";dbname=".DBName,USRname, DBpass);
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
        $sql = "SELECT * FROM user WHERE email = '$email'";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if ($result) {
            return $result;
        } else {
            echo "<h4 style='color:red;'> Email không tồn tại</h4> <br>";
        }
    }
}

$app = new App($conn);


$mail = new Mailer();
$user = new App($conn); 

// if (isset($_POST['verify'])) {
//     $error = array();
//     $code = $_POST['verification_code'];
    
//     if (empty($code)) {
//         $error['code'] = 'Mã xác nhận không được để trống';
//     }

//     if (empty($error)) {
//         $email = $_SESSION['mail'];
//         $storedCode = $_SESSION['code'];

//         if ($code == $storedCode) {
          
//             header('location:  resetpass.php' );
//         } else {
//             echo "<h4 style='color:red;'> Mã xác nhận không đúng</h4> <br>";
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
    <link rel="stylesheet" href="../config/styles3.css">
    <title>Verification</title>
</head>
<body>
<div id="container">
        <div class="snow"></div>
        <div class="imge"> <img class="slide-up-down" src="../img/44-removebg-preview.png" alt="Your Image"></div>
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <div class="text">
                <h2>Verication</h2>
            <?php
             if (isset($_POST['verify'])) {
                $error = array();
                $code = $_POST['verification_code'];
                
                if (empty($code)) {
                    $error['code'] = 'Mã xác nhận không được để trống';
                }
            
                if (empty($error)) {
                    $email = $_SESSION['mail'];
                    $storedCode = $_SESSION['code'];
            
                    if ($code == $storedCode) {
                      
                        header('location:  resetpass.php' );
                    } else {
                        echo "<h3 style='color:red;'> Mã xác nhận sai</h3>";
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
                    <input type="text" name="verification_code"  class="form-control"required placeholder="code">

                    <div class="form-group1">
                    <input type="submit" name="verify" value="Nhập" class="btn float-right login_btn">
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




<!-- <h2>Verification</h2>
    
    <form action="" method="post">
        <label for="verify">Nhập code vào đi não cá vàng </label>
        <input type="text" name="verification_code" required>
        <br>
        <input type="submit" name="verify" value="Nhập">
    </form> -->