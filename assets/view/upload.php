<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="../config/styles.css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Thêm Danh Mục</h3>
                  
                <div class="card-body">
                    <form action="../model/xuliupload.php" method="post" enctype="multipart/form-data">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="id" placeholder="id" id="id">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Name">

                        </div>
                          
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="file" class="form-control" name="file" placeholder="Image">
                        <div class="input-group form-group">

               
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="thêm" class="Thêm Danh Mục ">
                        </div>
                    </form>
                </div>
                
        </div>
    </div>
 
</body>

</html>

