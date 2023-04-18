<?php
$redirect = $_GET['redirect'] ?? '';

if($redirect == ''){
    require_once('Model/Client/index_model.php');
    require_once('Views/Client/index.php');
}else{
    switch($redirect){
        case 'product':
            require_once('Model/Client/Product/product_model.php');
            require_once('Views/Client/index.php');
            require_once('Views/Client/product_detail.php'); 
            ;break;
        case 'cart':
            require_once('Controller/Client/Cart/cart_controller.php');
            require_once('Views/Client/cart.php');
            ; break;
    }
}




?>