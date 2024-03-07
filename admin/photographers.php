<?php session_start();
  include "../ums/inc/connection.php";

  $sqlviewtask="SELECT * FROM users where user_type = 'photographer'";
	$result=mysqli_query($connection,$sqlviewtask);


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Photographers</title>

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
        Services
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
        <a class="nav-link">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Photographers</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="images.php">
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



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Photographers</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                
                  <div class="">
                      <a href="" data-toggle="modal" data-target="#eForm1" class="btn btn-primary active" role="button" aria-pressed="true">  Add </a>
                  </div>
                  <!-- ADD NEW ITEM MODEL FORM -->

                  <div class="modal fade" id="eForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        
                    <div class="modal-dialog" role="document">
                    <div class="modal-content form-elegant">

                      <div class="modal-header text-center">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          <h3><strong>Add Photographers</strong></h3>
                      </div>

                      <form method="post" action="action/addPhotographer.php" class="user">
                          <div class="modal-body mx-4" style="background-color:gray;color:white;font-family:Arial, Helvetica, sans-serif;font-size:20px;">
                              

                          <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="text" name="fname" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                            </div>
                            <div class="col-sm-6">
                              <input type="text" name="lname" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                            </div>
                            </div>
                            <div class="form-group">
                              <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                              <input type="contact" name="contact" class="form-control form-control-user" id="exampleContact" placeholder="Contact Number">
                            </div>
                          <input type="submit" name="Register"  class="btn btn-primary btn-user btn-block">
                          <hr>

                      </form>               
                    </div>

                  </div>
                </div>

              </div>
         
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <?php
					        if(mysqli_num_rows($result)>0){
						
				        ?>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                    while($row=mysqli_fetch_assoc($result)){
                  ?>

                    <tr>
                      <td> <?php echo $row["user_id"]; ?></td>
                      <td> <?php echo $row["fname"]; ?> </td>
                      <td> <?php echo $row["lname"]; ?> </td>
                      <td> <?php echo $row["email"]; ?> </td>
                      <td> <?php echo $row["contact"]; ?> </td>
                      <td>
                      <a href="action/updatePhotographer.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-primary" role="button"> Update </a>
                      <a onClick="javascript: return confirm('Please confirm delete');" href="action/deletePhotographer?user_id=<?php echo $row['user_id'];?>" class="btn btn-danger" role="button"> Delete </a>
                      </td>
 
                    <?php 
                    }
                      }else{
                        echo "No Records";
                      }
                    ?>
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
