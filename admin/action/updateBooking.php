<?php session_start();

    include "../../ums/inc/connection.php";
    
       
        $sql = "UPDATE book
                SET is_deleted ='completed' WHERE id = '".$_GET['id']."'";
        
        if (mysqli_query ($connection,$sql)) {  
            echo " <script type='text/javascript'>alert('Success!!!');location.href='../booking.php'</script>";  	           
         
        }else{
            
            echo " <script type='text/javascript'>alert('Error!!!. Try again.!!!');</script>";
        }
    
?>