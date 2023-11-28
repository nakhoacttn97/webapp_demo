<?php
// Bridge có chức năng như một cầu nối từ index đến mvc
//require_once './mvc/core/App.php';
// thay vì require từng class, chúng ta sử dụng hàm autoload
spl_autoload_register(function($class){
    include_once "./mvc/core/".$class.".php";
});

// config
include_once "./mvc/config/config.php";
?>