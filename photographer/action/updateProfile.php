<?php session_start();

    include "../../ums/inc/connection.php";

    $sqltask="SELECT * FROM users WHERE email='".$_SESSION['user_email']."'";
    $taskresult=mysqli_query($connection,$sqltask);
    $taskdata=mysqli_fetch_row($taskresult);
    
    if(isset($_POST['submit'])){
        if ($_POST['password'] == ""){
            $pass =  $taskdata[5];
        }else{
            $pass = md5($_POST['password']);
        }      
        $sql = "UPDATE users
                SET fname = '".$_POST['fname']."',
                lname = '".$_POST['lname']."',
                contact='".$_POST['contact']."',
                password='".$pass."'
                WHERE email='".$_SESSION['user_email']."'";
        
        if (mysqli_query ($connection,$sql)) {
            echo " <script type='text/javascript'>alert('Profile Updated!!!');location.href='../index.php'</script>";  	           
        }else{
            
            echo " <script type='text/javascript'>alert('Error!!!. Try again.!!!');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Photographer Update</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Account!</h1>
              </div>
              <form method="post" action="" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text"  class="form-control form-control-user" id="exampleFirstName" name = "fname" value="<?php echo $taskdata[1];?>">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text"  class="form-control form-control-user" id="exampleLastName" name = "lname"value="<?php echo $taskdata[2];?>">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text"  class="form-control form-control-user" id="exampleContact" name = "contact" value="<?php echo $taskdata[4];?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleLastName"  placeholder="Enter Password">
                  </div>
                </div>

                <input type="submit" name="submit"  class="btn btn-primary btn-user btn-block">
                <hr>

              </form>
              <hr>
      
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
