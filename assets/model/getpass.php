<?php

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
function getPhone($phone,$conn){
    $sql="SELECT * FROM user WHERE phone='".$phone."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch(); 
    return $result;
  
  }
  function changePhone($newPassword, $phone, $conn) {
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "UPDATE user SET pass = :newPassword WHERE phone = :phone";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':newPassword', $hashedPassword);  
    $stmt->bindParam(':phone', $phone);

    try {
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        return false;
    }
}

if (isset($_POST['doipass'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $newPassword = $_POST['newpassword'];

    $phoneResult = getPhone($phone,$conn);
    if ($phoneResult) {
        $passwordChanged = changePhone($newPassword, $phone,$conn);
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        if (isset($passwordChanged)) {
            echo "Đổi mật khẩu thành công!";
            echo'<a href="/assets/view/login.php"> Tiếp tục đăng nhập</a>';
        } else {
            echo "Không thể đổi mật khẩu. Vui lòng thử lại.";
            
        }
    } else {
        echo 'Số điện thoại không đúng. <a href="/assets/view/forgotpass.php">Vui lòng thử lại </a>.';
       
    }
}
    