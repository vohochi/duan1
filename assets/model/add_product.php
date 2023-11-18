<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
</head>
<body>
    <h2>Thêm Sản Phẩm</h2>
    <form action="add_product1.php" method="post" enctype="multipart/form-data">
        <label for="id">ID Sản Phẩm:</label>
        <input type="text" class="form-control" name="id" placeholder="id" id="id">

        <label for="name">Tên Sản Phẩm:</label>
        <input type="text" name="name" required><br>

        <label for="image">Hình Ảnh:</label>
        <input type="file" class="form-control" name="file" placeholder="Image">

        <label for="price">Giá:</label>
        <input type="text" name="price" required><br>

        <label for="ma_danhmuc">Mã Danh Mục:</label>
        <input type="text" name="ma_danhmuc" required><br>

        <label for="description">Mô tả:</label>
        <textarea name="description" rows="4" cols="50" required></textarea><br>

        <button type="submit">Thêm Sản Phẩm</button>

    


        
        
    </form>
</body>
</html>
