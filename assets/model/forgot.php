<?php
include '../view/reset.php';
include 'conn.php';

// Kiểm tra xem địa chỉ email có tồn tại trong database hay không
$email = $_POST['email'];
$sql = "SELECT * FROM user WHERE email='$email'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
if (count($result) > 0) {

    // Tạo một liên kết để đặt lại mật khẩu
    $token = md5(uniqid());
    $link = "https://example.com/reset-password.php?token=$token";

    // Gửi email cho người dùng
    $subject = "Đặt lại mật khẩu";
    $message = "
      Bạn đã yêu cầu đặt lại mật khẩu.

      Để đặt lại mật khẩu của mình, vui lòng nhấp vào liên kết sau:

      $link

      Nếu bạn không tạo yêu cầu này, vui lòng bỏ qua email này.
    ";
    mail($email, $subject, $message);

    // Hiển thị thông báo thành công
    echo "Chúng tôi đã gửi một email cho bạn với hướng dẫn đặt lại mật khẩu.";
} else {

    // Hiển thị thông báo lỗi
    echo "Địa chỉ email không tồn tại.";
}
?>
?>