<?php session_start();

    if(!isset($_SESSION['user_email']))
        header("location:../../login.php");
    include "../../ums/inc/connection.php";

	$sql = "DELETE FROM users WHERE user_id='".$_GET['user_id']."'";

	if(mysqli_query($connection,$sql)){
		
		header("location:../photographers.php");		
	}
?>