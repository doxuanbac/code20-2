<?php
        // include "Model/DBconfig.php";

        if(isset($_GET['action'])){
            $action = $_GET['action'];
        }
        else{
            $action = '';
        }
        $thanhcong = array();
    
        switch($action){
            case 'add':{
                if(isset($_POST['add_user'])){
                    //lay du lieu tu view
                    $hoten = $_POST['hoten'];
                    $namsinh = $_POST['namsinh'];
                    $quequan = $_POST['quequan'];

                    if($db->InsertData($hoten, $namsinh, $quequan)){
                        // $thanhcong[] = 'add_success';
                        echo "Thêm mới thành công";
                    }
                }
                require_once('View/thanhvien/add_user.php');
                break;
            }
            case 'edit':{
                require_once('View/thanhvien/edit_user.php');
                break;
            }
            case 'delete':{
                require_once('View/thanhvien/delete_user.php');
                break;
            }
            default:{
                require_once('View/thanhvien/list.php');
                break;
            }
        }
?>