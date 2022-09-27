<?php
    if(isset($_GET['page'])){
    switch($_GET['page']){
        case '' : include "home.php";
        break;
        case 'page' : include "page.php";
        break;
        case 'menu' : include "menu.php";
        break;
        case 'reservation' : include "reservation.php";
        break;
        case 'blog' : include "blog.php";
        break;
        case 'shop' : include "shop.php";
        break;
        }  
    }
    else{
        include "home.php";
    }

?>