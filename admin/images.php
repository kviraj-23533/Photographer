<?php session_start();
   
    include "../ums/inc/connection.php";

    //Add new image to images table
    if(isset($_POST['category'])){

        if ($_POST['action'] == 'ADD') {
            $image_category=$_POST['category'];
        
            $image = addslashes(file_get_contents($_FILES['image']["tmp_name"]));  
            $sql1="INSERT INTO images(category,image)
            VALUES('".$image_category."','".$image."')";

            if (mysqli_query($connection,$sql1)){
                
                echo " <script type='text/javascript'>alert('New Image Added Successfully!!!');</script>";
                
            }
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

  <title>Images</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['user_email']; ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="action/updateProfile.php" >
          <i class="fas fa-fw fa-cog"></i>
          <span>Profile</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="photographers.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Photographers</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link">
          <i class="fas fa-fw fa-table"></i>
          <span>Images</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="requests.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Requests</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="booking.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Bookings</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">



            

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Images</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Gallery Images</h6>
            </div>

            <div class="card-header py-3">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#eForm1">ADD Image</button>
            </div>

            <div class="modal fade" id="eForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            
            <div class="modal-content form-elegant">
            
            <div class="modal-header text-center">

                <h3><strong>Add New Image</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                
            </div>

            <form method="POST" action="" enctype="multipart/form-data">
                <div class="modal-body mx-4" style="background-color:rgb(0, 107, 179);color:white;">
                    
                    <div class="md-form mb-5">
                        <label>Image Category</label>
                        <input type="text" name="category" class="form-control validate" placeholder="Enter Image Category" required style="background-color:rgb(0, 107, 179);color:white;">
                    </div>

                    <div class="md-form mb-5">
                        <label>Image</label>
                         <input type="file" name="image" id="image" class="form-control validate" placeholder="Select The Image" style="background-color:rgb(0, 107, 179);color:white;height:80px"> 
                    </div>

                    <br>
                
                    <div class="text-center mb-3" style="background-color:rgb(0, 107, 179);">
                    <div>
                        <input class="btn btn-primary" name="action" type="submit" value="ADD" style="margin-right: 15px;">
                        <input class="btn btn-primary" type="reset" value="Reset">
                    </div>
                    </div>
                    
                </div>
            </form>
            </div>
            </div>
            </div>
            

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image ID</th>
                      <th>User ID</th>
                      <th>Category</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Image ID</th>
                      <th>User ID</th>
                      <th>Category</th>
                      <th>Image</th>
                    </tr>
                  </tfoot>

                  <?php 

                    $query1 = "SELECT * from images";   
                
                    $result = mysqli_query($connection, $query1);  
                    while($row = mysqli_fetch_array($result))  
                    {  
                  ?>  

                  <tbody>
                    
                    <tr>
                      <td><?php echo $row['image_id'];?></td>
                      <td><?php echo $row['user_id'];?></td>
                      <td><?php echo $row['category'];?></td>
                      <td><?php echo ' 
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="150" width="250" class="img-thumnail" />'?> 
                        <a href="action/updateImages.php?image_id=<?php echo $row['image_id'];?>" class="btn btn-primary" role="button"> Update </a>

                        <!-- <button type="button" name="modify" value="More" onclick=" '?image_id=<?php echo $row['image_id'];?>'" class="btn btn-info" data-toggle="modal" data-target="#eForm2" style="margin-left:50px;">Modify</button> -->
                        <a onClick="javascript: return confirm('Please confirm delete');" href="action/deleteImage?image_id=<?php echo $row['image_id'];?>" class="btn btn-danger" role="button"> Delete </a>

                            <?php 
                                }

                                $query2 = "SELECT * FROM images WHERE image_id =image_id";
                                $queryresult2=mysqli_query($connection,$query2);
                                $data2=mysqli_fetch_row($queryresult2); 

                            ?>  

                            <div class="modal fade" id="eForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">

                            <div class="modal-content form-elegant">

                            <div class="modal-header text-center">

                                <h3><strong>Modify Image</strong></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                
                            </div>

                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="modal-body mx-4" style="background-color:rgb(0, 107, 179);color:white;">
                                    
                                    <div class="md-form mb-5">
                                        <label>Image Category</label>
                                        <input type="text" name="category" class="form-control validate" value="<?php echo $data2[1]; ?>" required style="background-color:rgb(0, 107, 179);color:white;">
                                    </div>

                                    <div class="md-form mb-5">
                                        <label>Image</label>
                                            <input type="text" name="image" id="image" class="form-control validate" value="<?php echo $data2[0]; ?>" style="background-color:rgb(0, 107, 179);color:white;height:80px"> 
                                    </div>

                                    <br>
                                
                                    <div class="text-center mb-3" style="background-color:rgb(0, 107, 179);">
                                    <div>
                                        <input class="btn btn-primary" name="action" type="submit" value="Modify" style="margin-right: 15px;">
                                    </div>
                                    </div>
                                    
                                </div>
                            </form>
                            </div>
                            </div>
                            </div>

                      </td>
                      
                     </tr>

                    </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="action/logout.php">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>