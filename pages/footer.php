<?php
    if(isset($_GET['page'])){
    switch($_GET['page']){
        case '' :
        case 'page' :
        case 'menu' :
        case 'reservation' :
        case 'blog' :
        case 'shop' :
             include "footer_other_page.php";
        break;
        case '' :
        case 'home' : 
            include "footer_home.php";
        break;
        }  
    }
    else{
        include "footer_home.php";
    }

?>