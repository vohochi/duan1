



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
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../config/styles.css">
  <title>Trang Sản Phẩm</title>
</head>
<body>

  <div class="wrapper">
    <div class="sidebar">
      <!-- Danh mục và sản phẩm hot bên trái -->
      <h2>Danh Mục</h2>
      <ul>
        <?php
          // Thực hiện truy vấn SQL để lấy tên danh mục từ bảng danhmuc
          $queryDanhMuc = "SELECT id, name FROM danhmuc Where id = 1";
          $resultDanhMuc = $conn->query($queryDanhMuc);

          if ($resultDanhMuc->rowCount() > 0) {
            while ($rowDanhMuc = $resultDanhMuc->fetch(PDO::FETCH_ASSOC)) {
              echo '<li><a href="danhmuc1.php">' . $rowDanhMuc['name'] . '</a></li>';
            }
          } else {
            echo "<li>Không có danh mục nào.</li>";
          }
        ?>
          <?php
          // Thực hiện truy vấn SQL để lấy tên danh mục từ bảng danhmuc
          $queryDanhMuc = "SELECT id, name FROM danhmuc Where id = 2";
          $resultDanhMuc = $conn->query($queryDanhMuc);

          if ($resultDanhMuc->rowCount() > 0) {
            while ($rowDanhMuc = $resultDanhMuc->fetch(PDO::FETCH_ASSOC)) {
              echo '<li><a href="danhmuc2.php">' . $rowDanhMuc['name'] . '</a></li>';
            }
          } else {
            echo "<li>Không có danh mục nào.</li>";
          }
        ?>
         <?php
          // Thực hiện truy vấn SQL để lấy tên danh mục từ bảng danhmuc
          $queryDanhMuc = "SELECT id, name FROM danhmuc Where id = 3";
          $resultDanhMuc = $conn->query($queryDanhMuc);

          if ($resultDanhMuc->rowCount() > 0) {
            while ($rowDanhMuc = $resultDanhMuc->fetch(PDO::FETCH_ASSOC)) {
              echo '<li><a href="danhmuc3.php">' . $rowDanhMuc['name'] . '</a></li>';
            }
          } else {
            echo "<li>Không có danh mục nào.</li>";
          }
        ?>
      </ul>

      <h2>Sản Phẩm Hot</h2>
      <ul>
        <li><a href="#">Hot Product 1</a></li>
        <li><a href="#">Hot Product 2</a></li>
        <li><a href="#">Hot Product 3</a></li>
      </ul>
    </div>

    <div class="products">
      <!-- Sản phẩm bên phải -->
      <div class="product">
      <?php    
    
    
    $category_id = 1;
   // Retrieve products for the given category ID from the database
   $stmt = $conn->prepare("SELECT * FROM product WHERE MaDanhMuc = ?");
   $stmt->execute([$category_id]);
   $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$conn = null;?>
    <h2>Truyện tranh</h2>

    <?php if (isset($products) && count($products) > 0): ?>
        <?php foreach ($products as $product): ?>
            <div class="product-container">
                <?php
                echo '<div class="boxsp">';
                echo '<form action="view/add_to_cart.php" method="post">';
                echo '<img src="../img/' . $product['img'] . '.png" alt="">';
                echo '<p>' . $product['Name'] . '</p>';
                echo '<p>Giá: <span>' . number_format($product['price']) . ' </span> đ <span class="span"> 300000đ</span></p>';
                echo '<input type="hidden" name="img" value="/img/' . $product['img'] . '.jpg">';
                echo '<input type="hidden" name="tensp" value="' . $product['Name'] . '">';
                echo '<input type="hidden" name="gia" value="' . $product['price'] . '">';
                echo '<input type="hidden" name="id" value="' . $product['ID'] . '">';
                echo '<input type="submit" name="dathang" value="Thêm vào giỏ hàng">';
                echo '<a href="view/product_detail.php?id=' . $product['ID'] . '">Xem chi tiết</a>';
                echo '</form>';
                echo '</div>';
                ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No products found in Category 1.</p>
    <?php endif; ?>
      </div>

      <div class="product">
      <?php 

       try {
          $conn = new PDO("mysql:host=".SVName.";dbname=".DBName,USRname, DBpass);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         // echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
          // Thực hiện truy vấn SQL để lấy toàn bộ sản phẩm
          $query = "SELECT id, name, price, img FROM product1 LIMIT 4";
          $result = $conn->query($query);

          echo '<div class="container">';
          echo '<h2>Sản phẩm mới</h2>';

          if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
              echo '<div class="boxsp">';
              echo '<form action="add_to_cart.php" method="post">';
              echo '<img src="../img/' . $row['img'] . '.png" alt="">';
              echo '<p>' . $row['name'] . '</p>';
              echo '<p>Giá: <span>' . number_format($row['price']) . ' </span> đ <span class="span"> 300000đ</span></p>';
              echo '<input type="hidden" name="img" value="/img/' . $row['img'] . '.jpg">';
              echo '<input type="hidden" name="tensp" value="' . $row['name'] . '">';
              echo '<input type="hidden" name="gia" value="' . $row['price'] . '">';
              echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
              echo '<input type="submit" name="dathang" value="Thêm vào giỏ hàng">';
              echo '<a href="product_detail.php?id=' . $row['id'] . '">Xem chi tiết</a>';
              echo '</form>';
              echo '</div>';     
            }
          } else {
            echo "Không có sản phẩm nào.";
          }

          echo '</div>';
        ?>
      </div>

      </div>
    </div>
  </div>

</body>
</html>
