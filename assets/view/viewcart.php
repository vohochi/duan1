<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng của bạn</title>
    <style>
        .hienthisp h1 {
    background-color: #4CAF50; /* Màu nền */
    color: white; /* Màu chữ */
    padding: 10px; /* Khoảng cách giữa viền và nội dung */
    border-radius: 5px; /* Bo góc */
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #4CAF50; /* Màu nền cho hàng đầu tiên */
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2; /* Màu nền cho các hàng chẵn */
}
.dongy {
    background-color: #4CAF50; /* Màu nền */
    color: white; /* Màu chữ */
    padding: 10px 20px; /* Kích thước nút */
    border: none; /* Bỏ đường viền */
    border-radius: 5px; /* Bo góc */
    cursor: pointer;
}

.dongy:hover {
    background-color: #45a049; /* Màu nền khi di chuột vào */
}
input[type="submit"], input[type="button"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover, input[type="button"]:hover {
    background-color: #45a049;
}

input[type="text"], input[type="number"] {
    padding: 8px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 10px;
}
#creditCardDetails {
    display: none;
}

        body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f8f8;
    color: #333;
}

h1 {
    color: #007BFF;
}

ul {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

li {
    transition: background-color 0.3s ease;
}

li:hover {
    background-color: #f2f2f2;
}

a {
    text-decoration: none;
}

.update-button {
    transition: background-color 0.3s ease;
}

.update-button:hover {
    background-color: #0056b3;
}

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
        }

        /* Nút xóa sản phẩm */
        a {
            color: #ff0000;
            text-decoration: none;
            font-weight: bold;
        }

        .total-price {
            margin-top: 20px;
            font-weight: bold;
        }

        /* Style cho nút cập nhật số lượng */
        .update-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .update-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo '<h1>Giỏ hàng của bạn:</h1>';
        echo '<ul>';
        $index = 0;
        $totalPrice = 0; 

        foreach ($_SESSION['cart'] as $product) {
            if (isset($product['img']) && isset($product['tensp']) && isset($product['gia']) && isset($product['id'])) {
                echo '<li>';
                echo '<img src="../'. $product['img'] . '" alt="'. $product['tensp'] .'" >';
                echo '<p>' . $product['tensp'] . '</p>';
                echo '<p>Giá: ' . $product['gia'] . ' đồng</p>';
                echo '<p>Số lượng: ' . $product['soluong'] . ' cái</p>';
                echo '<a href="remove_from_cart.php?index=' . $index . '">Xóa</a>';
                echo '</li>';
                
      
                $totalPrice += $product['gia']*$product['soluong'];
            }
            $index++;
        }
        
        echo '</ul>';
        
        echo '<p class="total-price">Tổng tiền: ' . number_format($totalPrice) . ' đồng</p>';
        echo "<br>";
        echo '<a href="/assets/index.php">Quay về trang mua hàng</a>';
    } else {
       
        echo '<h1>Giỏ hàng của bạn hiện đang trống.</h1>';
        echo "<br>";
        echo '<a href="/assets/index.php">Quay về trang mua hàng</a>';
    }
   
    ?>
    <div class="thongtin">
                    <h1>THÔNG TIN NHẬN HÀNG</h1>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="30%">Họ tên</td>
                            <td><input type="text" name="hoten"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                <td>Phương thức thanh toán</td>
                <td>
                    <input type="radio" name="pay" id="creditCard">Thẻ tín dụng
                    <div id="creditCardDetails" style="display: none;">
                        Số thẻ: <input type="number" name="creditCardNumber" max="10">
                        Số tiền trả: <input type="number" name="creditCardNumber">
                    </div>
                 
                </td>
                <td><input type="radio" name="pay">Trả trực tiếp</td>
            </tr>
                    </table>    
                    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var creditCardRadio = document.getElementById("creditCard");
        var creditCardDetails = document.getElementById("creditCardDetails");

        creditCardRadio.addEventListener("change", function () {
            creditCardDetails.style.display = creditCardRadio.checked ? "block" : "none";
        });

        var otherPaymentRadio = document.querySelector('input[name="pay"]:not(#creditCard)');
        otherPaymentRadio.addEventListener("change", function () {
            creditCardDetails.style.display = "none";
        });
    });
</script>
<?php
 if (isset($_COOKIE['usr'])) {
    echo "<br>";
    echo'<a href="/assets/view/pay.php">Thanh toán giỏ hàng</a>';
}else{

echo "<br>";
echo'<a href="../view/login.php">Vui lòng đăng nhập để thanh toán</a>';
}
?>
</body>
</html>
