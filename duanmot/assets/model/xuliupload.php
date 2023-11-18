<?php
define('SVName', 'localhost');
define("USRname", "root");
define('DBpass', '');
define('DBName', 'duanmot');

try {
    $conn = new PDO("mysql:host=".SVName.";dbname=".DBName,USRname, DBpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
if (!empty($_POST['id']) && !empty($_POST['name'])&& !empty($_FILES['file']) ) {
    $name = $_POST['id'];
    $usr = $_POST['name'];

    $img = basename($_FILES['file']['name'], ".jpg");
    $stmt = $conn->prepare("INSERT INTO danhmuc VALUE(?,?,?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $usr);
    $stmt->bindParam(3, $img);
 
    $stmt->execute();

    if ($stmt) {
       echo "unload thành công ";
       header('Location: ../view/danhmuc.php');

    }
} else echo "Enter enough fields please !";
$conn = null;

?>




