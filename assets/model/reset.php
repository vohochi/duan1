<?php
  // Kiểm tra xem mật khẩu mới có trùng khớp hay không
  $password = $_POST['pwd'];
  $confirm_password = $_POST['cfm'];
  if ($password != $confirm_password) {
    echo "Mật khẩu mới không trùng khớp.";
    exit;
  }

  // Cập nhật mật khẩu mới vào database
  $token = $_GET['token'];
  $sql = "UPDATE users SET password='$password' WHERE token='$token'";
  mysqli_query($conn, $sql);

  // Hiển thị thông báo thành công
  echo "Mật khẩu của bạn đã được đặt lại thành công.";
?>