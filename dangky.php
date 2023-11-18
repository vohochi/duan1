
<?php
require_once 'vendor/autoload.php'; // Thêm thư viện Google API
require_once 'vendor/facebook/graph-sdk/src/Facebook/autoload.php'; // Thêm thư viện Facebook SDK
session_start();

// Đăng ký và đăng nhập với Google
$client = new Google_Client();
$client->setClientId('YOUR_GOOGLE_CLIENT_ID');
$client->setClientSecret('YOUR_GOOGLE_CLIENT_SECRET');
$client->setRedirectUri('YOUR_GOOGLE_REDIRECT_URI');
$client->addScope('email');
$client->addScope('profile');

$authUrlGoogle = $client->createAuthUrl();

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Lấy thông tin người dùng
    $googleUser = $client->verifyIdToken();

    // Ở đây, bạn có thể lưu thông tin người dùng vào cơ sở dữ liệu hoặc thực hiện các hành động khác
    // sau đó, chuyển hướng người dùng đến trang chính hoặc trang đăng nhập của bạn
    header("Location: index.php");
    exit();
}

// Đăng nhập và đăng ký với Facebook
$fb = new Facebook\Facebook([
    'app_id' => 'YOUR_FACEBOOK_APP_ID',
    'app_secret' => 'YOUR_FACEBOOK_APP_SECRET',
    'default_graph_version' => 'v10.0',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Permissions cần cho ứng dụng của bạn

$loginUrlFacebook = $helper->getLoginUrl('YOUR_FACEBOOK_REDIRECT_URI', $permissions);

try {
    if (isset($_GET['code'])) {
        $accessToken = $helper->getAccessToken();
        $response = $fb->get('/me?fields=id,name,email', $accessToken);
        $facebookUser = $response->getGraphUser();

        // Ở đây, bạn có thể lưu thông tin người dùng vào cơ sở dữ liệu hoặc thực hiện các hành động khác
        // sau đó, chuyển hướng người dùng đến trang chính hoặc trang đăng nhập của bạn
        header("Location: index.php");
        exit();
    }
} catch (Facebook\Exception\ResponseException $e) {
    // Xử lý lỗi
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exception\SDKException $e) {
    // Xử lý lỗi SDK
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Ký</title>
</head>
<body>

    <h2>Đăng Ký</h2>

    <?php
    // Hiển thị lỗi nếu có
    if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Tên người dùng:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="confirm_password">Xác nhận mật khẩu:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <input type="submit" value="Đăng Ký">
    </form>
    
    <h2>Đăng Ký và Đăng Nhập</h2>

    <!-- Bạn có thể thêm nút Google Sign-In và Facebook Login vào form của bạn -->
    <a href="<?php echo $authUrlGoogle; ?>">Đăng nhập bằng Google</a>
    <br>
    <a href="<?php echo htmlspecialchars($loginUrlFacebook); ?>">Đăng nhập bằng Facebook</a>

    <hr>


    <!-- Form đăng ký và đăng nhập của bạn ở đây -->
</body>
</html>