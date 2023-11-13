<?php


require 'model/conn.php';
include 'view/header.php';
include 'view/promo.php';
include 'view/blog.php';
include 'view/about.php';
include 'view/new.php';

if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
    switch ($page){
        case 'about';
        include 'view/about.php';
        break;
        case 'blog';
        include 'view/blog.php';
        case 'new';
        include 'view/new.php';
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