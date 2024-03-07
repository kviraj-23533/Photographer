<?php
   
   include "../../ums/inc/connection.php";
   
   
   if(isset($_POST['fname'])){
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $contact = $_POST['contact'];
       $password = md5("aaa");
       $user_type = "photographer";
       
       
       $sql = "INSERT INTO users(fname,lname,email,contact,password,user_type)
       VALUES ('".$fname."','".$lname."','".$email."','".$contact."','".$password."','".$user_type."')";
       
       if (mysqli_query ($connection,$sql)) {
           echo " <script type='text/javascript'>alert('Registered!!!');location.href='../photographers.php'</script>";  	           
       
       }else{
           
           echo " <script type='text/javascript'>alert('Error!!!. Try again.!!!');</script>";
       }
   }
?>