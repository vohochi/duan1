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
 <!-- Search Form -->
 <div class="search">
                <form action="search.php" method="post">
                    <input type="text" name="timkiem" placeholder="Tìm kiếm...">

                   <input type="submit" name="timkiem" value="Tìm Kiếm">
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
  // Thực hiện truy vấn SQL để lấy toàn bộ sản phẩm
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
$itemsPerPage = 8; 
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $itemsPerPage;

// Sản phẩm chính 
$query = "SELECT id, name, price, img FROM product LIMIT $offset, $itemsPerPage";
$result = $conn->query($query);

echo '<h2>Sản phẩm mới</h2>';
echo '<div class="container">';

if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="boxsp">';
        echo '<form action="add_to_cart.php" method="post">';
        echo '<input type="hidden" name="img" value="../img/' . $row['img'] . '.png">';
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
    $queryCount = "SELECT COUNT(id) AS total FROM product";
    $resultCount = $conn->query($queryCount);
    $rowCount = $resultCount->fetch(PDO::FETCH_ASSOC)['total'];
    $totalPages = ceil($rowCount / $itemsPerPage);

    echo '<div class="pagination">';
    
    echo '</div>';
} else {
    echo "Không có sản phẩm nào.";
}

echo '</div>';
for ($i = 1; $i <= $totalPages; $i++) {
  echo '<a href="?page=' . $i . '">' . $i . '</a>';
}
?>

      

      
        <?php 
  //sp sau
          $query = "SELECT id, name, price, img FROM product LIMIT 4";
          $result = $conn->query($query);
          echo '<h2>Sản phẩm mới</h2>';
          echo '<div class="container">';
    

          if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
              echo '<div class="boxsp">';
              echo '<form action="add_to_cart.php" method="post">';
              echo '<input type="hidden" name="img" value="' . $row['img'] . '.png>';
              echo '<input type="hidden" name="tensp" value="' . $row['name'] . '">';
              echo '<input type="hidden" name="gia" value="' . $row['price'] . '">';
              echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
              echo '<a href="product_detail.php?id=' . $row['id'] . '"><img src="../img/' . $row['img'] . '" alt=""> ;  </a>';    
              echo '<p>' . $row['name'] . '</p>';
              echo '<p>Giá: <span>' . number_format($row['price']) . ' </span> đ <span class="span"> 300000đ</span></p>';
              echo '<input type="submit" name="dathang" value="Thêm vào giỏ hàng">';
              // echo '<p> <a href="product_detail.php?id=' . $row['id'] . '">Xem chi tiết</a> </p>';
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

</body>
</html>
<?php
include '../view/footer.php' ;
?>