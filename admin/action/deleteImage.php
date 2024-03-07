<?php session_start();

    if(!isset($_SESSION['user_email']))
        header("location:../../login.php");
    include "../../ums/inc/connection.php";

	$sql = "DELETE FROM images WHERE image_id='".$_GET['image_id']."'";

	if(mysqli_query($connection,$sql)){
		
		header("location:../images.php");		
	}
?>