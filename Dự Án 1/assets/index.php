<?php

include 'model/conn.php';
include 'view/header.php';
include 'view/promo.php';
include 'view/%C4%91.php';

if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
    switch ($page){
        case 'about';
        include 'view/about.php';
        break;
        case 'blog';
        case 'SanPham';
        include 'view/sanpham.php';
        break;
        case 'login':
            echo "<script> window.location.href='view/login.php';</script>";
            break;
        
            
    default:
        include 'view/blog.php';
        break;
    }
} else 
    include 'view/product.php';
    include 'view/footer.php' ;
?>