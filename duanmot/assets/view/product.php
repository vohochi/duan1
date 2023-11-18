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
        echo '<input type="hidden" name="img" value="' . $row['img'] . '">';
        echo '<input type="hidden" name="tensp" value="' . $row['name'] . '">';
        echo '<input type="hidden" name="gia" value="' . $row['price'] . '">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<a href="product_detail.php?id=' . $row['id'] . '"><img src="img/' . $row['img'] . '" alt=""></a>';
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
</div>
      

<div class="product">
      <?php
