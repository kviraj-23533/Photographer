<?php session_start();
    include "ums/inc/connection.php";
    if(!isset($_SESSION['user_email']))
        header("location:login.php");
        

    if($_SESSION['user_type']=='admin'){
        header("location:admin/index.php");
        
    }elseif ($_SESSION['user_type']=='photographer') {
        header("location:photographer/index.php");
    }
?>