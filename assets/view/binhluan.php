<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      <style>
                body {
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
  margin: 0;
  padding: 0;
}

.product-details {
  text-align: center;
  margin: 50px auto; 
  max-width: 600px;
  padding: 20px;
  background-color: #fff; 
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

.product-details img {
  max-width: 100%;
  height: auto;
}

.cmt {
  margin: 20px auto; 
  max-width: 800px;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

.cmt form {
  margin-bottom: 20px;
}

.cmt form input,
.cmt form textarea,
.cmt form select {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  box-sizing: border-box;
}

.cmt p {
  margin: 10px 0;
  padding: 10px;
  background-color: #f5f5f5; 
  border-radius: 5px;
}

            </style>
</style>
<body>
    
<div class="cmt">
<?php

session_start();
function getComments() {
   

    if (!defined('SVName')) {
        define('SVName', 'localhost');
    }    
    if (!defined('USRname')) {
        define('USRname', 'root');
    }
    if (!defined('DBpass')) {
        define('DBpass', '');
    }
    if (!defined('DBName')) {
        define('DBName', 'duanmot');
    }
    try {
        $conn = new PDO("mysql:host=" . SVName . ";dbname=" . DBName, USRname, DBpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $sql = "SELECT * FROM `binhluan`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
if (isset($_COOKIE['usr'])) {
    echo '
       <hr>';
    echo '';
    echo '<form action="../model/binhluan.php" method="post">';
    echo $_COOKIE['usr'];
    echo '<textarea name="noidung" id="" cols="30" rows="10"></textarea>';
    echo '<input type="submit" value="Gửi bình luận" name="submitComment">';
    echo '</form>';

   $comments=getComments() ;
    foreach ($comments as $comment ) {
        echo "<p><strong>{$_COOKIE['usr']}</strong>: {$comment['NoiDung']}</p>";
    }
} else {    
    echo "<a href='../view/login.php' target='_parent'>Bạn vui lòng đăng nhập để bình luận!</a>";
}


?>
</div>
</body>
</html>