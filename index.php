<?php
    include "Model/DBconfig.php";
    $db = new Database;
    $db->connect();

    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    else{
        $controller = '';
    }

    switch($controller){
        case 'thanh-vien':{
            require_once('Controller/thanhvien/index.php');
        }
    }
?>