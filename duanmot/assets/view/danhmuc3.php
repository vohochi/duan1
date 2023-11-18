



<?php 
include '../model/conn.php'
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
<?php
             include "../view/menu.php";
            ?>
            <div class="allsearch">
                <div class="search1">
     <form action="search.php" method="get">
    <input type="text" name="timkiem" placeholder="Tìm kiếm sản phẩm...">
    <button type="submit">Tìm kiếm</button>
      </form>

                </div>
                <div class="controlprice">
    <form action="searchprice.php" method="GET">
        <label for="filterPrice">Chọn giá:</label>
        <input type="range" id="filterPrice" name="filterPrice" min="20000" max="500000" step="10" oninput="updateFilterPriceValue(this.value)">
        <span id="filterPriceValue">0</span>đ
        <input type="submit" name="timkiem" value="Tìm Kiếm">
    </form>
</div>

<script>
    function updateFilterPriceValue(value) {
        document.getElementById('filterPriceValue').textContent = value;
    }
</script>
</form>
</div>
  <div class="wrapper">
    <div class="sidebar">
      <h2>Danh Mục</h2>
      <ul>
        <?php
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
      <ul>
        <li> <h2>Sản Phẩm Hot</h2>
      <ul>
        <li>
        <div class="box">
  <?php 
  $query = "SELECT id, name, price, img FROM product LIMIT 4";
  $result = $conn->query($query);

  if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo '<div class="product-details">';
      echo '<img class="product-img" src="../img/' . $row['img'] . '" alt="Product Image">';
      echo '<div class="product-info">';
      echo '<p>' . $row['name'] . '</p>';
      echo '<p>Giá: <span>' . number_format($row['price']) . '</span> đ <span class="span">300000đ</span></p>';
      echo '<form action="add_to_cart.php" method="post">';
      echo '<input type="hidden" name="img" value="../img/' . $row['img'] . '.png">';
      echo '<input type="hidden" name="tensp" value="' . $row['name'] . '">';
      echo '<input type="hidden" name="gia" value="' . $row['price'] . '">';
      echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
      echo '<input type="submit" name="dathang" value="Thêm vào giỏ hàng">';
      echo '</form>';
    
      // echo '<a href="product_detail.php?id=' . $row['id'] . '">Xem chi tiết</a>';
      echo '</div>';
   
      echo '</div>';
   
    }
  } else {
    echo "Không có sản phẩm nào.";
  }
  ?>
</div>
</li>
       
      </ul>
    </div>

    <div class="products">
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
   $query = "SELECT id, name, price, img FROM product WHERE MaDanhMuc= 3";
   $result = $conn->query($query);
   echo '<h2>Danh Sách truyện tranh</h2>';
   echo '<div class="container">';
   if ($result->rowCount() > 0) {
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
       echo '<div class="boxsp">';
       echo '<form action="add_to_cart.php" method="post">';
       echo '<input type="hidden" name="img" value="/img/' . $row['img'] . '">';
       echo '<input type="hidden" name="tensp" value="' . $row['name'] . '">';
       echo '<input type="hidden" name="gia" value="' . $row['price'] . '">';
       echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
       echo '<a href="product_detail.php?id=' . $row['id'] . '"><img src="../img/' . $row['img'] . '" alt=""></a>';
       echo '<p>' . $row['name'] . '</p>';
       echo '<p>Giá: <span>' . number_format($row['price']) . ' </span> đ <span class="span"> 300000đ</span></p>';
       echo '<input type="submit" name="dathang" value="Thêm vào giỏ hàng">';
       echo '</form>';
       echo '</div>';     
     }
   } else {
     echo "Không có sản phẩm nào.";
   }

   echo '</div>';
 ?>

      </div>

      <div class="product">
      <?php

// Sản phẩm chính 
$query = "SELECT id, name, price, img FROM product LIMIT 4";
$result = $conn->query($query);

echo '<h2>Sản phẩm mới</h2>';
echo '<div class="container">';

if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="boxsp">';
        echo '<form action="add_to_cart.php" method="post">';
        echo '<input type="hidden" name="img" value="' . $row['img'] . '">';
        echo '<input type="hidden" name="tensp" value="' . $row['name'] . '">';
        echo '<input type="hidden" name="gia" value="' . $row['price'] . '">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<a href="product_detail.php?id=' . $row['id'] . '"><img src="../img/' . $row['img'] . '" alt=""></a>';
        echo '<p>' . $row['name'] . '</p>';
        echo '<p>Giá: <span>' . number_format($row['price']) . ' </span> đ <span class="span"> 300000đ</span></p>';
        echo '<input type="submit" name="dathang" value="Thêm vào giỏ hàng">';
        echo '</form>';
        echo '</div>';
    };

    echo '<div class="pagination">';
    
    echo '</div>';
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
<?php
include '../view/footer.php' ;
?>