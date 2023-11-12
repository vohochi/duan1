<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giỏ hàng của bạn</title>
  <link rel="stylesheet" href="../config/viewCart.css">
</head>

<body>
  <?php
    session_start();

    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo '<h1>Giỏ hàng của bạn:</h1>';
        echo '<ul>';
        $index = 0;
        $totalPrice = 0; 
        // $totalCount = count($_SESSION['cart']) ;


        foreach ($_SESSION['cart'] as $product) {
           
            if (isset($product['img']) && isset($product['tensp']) && isset($product['gia']) && isset($product['id'])) {
               
                echo '<li>';
                echo '<img src=" '.$product['img'] . '.png" alt="'. $product['tensp'] .'" >';
                echo '<p>' . $product['tensp'] . '</p>';
                echo '<p>Giá: ' . $product['gia'] . ' đồng</p>';
                echo '<p>ID: ' . $product['id'] . '</p>';
                echo '<a href="remove_from_cart.php?index=' . $index . '">Xóa</a>';
                echo '</li>';
                
      
                $totalPrice += $product['gia'];
                
            }
            $index++;
        }
        echo '</ul>';

        echo '<p class="total-price">Tổng tiền: ' . number_format($totalPrice) . ' đồng</p>';
    } else {
        echo '<h1>Giỏ hàng của bạn hiện đang trống.</h1>';
    }
    // echo '<div> '.$totalCount.'</div>'
    
    
    ?>



</body>

</html>