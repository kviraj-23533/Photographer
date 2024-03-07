<?php session_start();
  include "../ums/inc/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  	<!-- css files -->
	<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="../css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
  <link rel="stylesheet" href="../css/lightbox.css">
	<!-- //css files -->

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
        <div class="sidebar-brand-text mx-3"> <?php echo $_SESSION['user_email']; ?> </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
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

      <!-- Nav Item - Pages Collapse Menu -->
      
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="photographers.php">
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


          <!-- Content Row -->

          <div class="row">

            <!--portfolio -->
            <section class="gallery py-5">
              <div class="container py-md-5">
                <h1 class="heading text-capitalize mb-lg-5 mb-4">Gallery</h1>
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-6 p-0 snap-img">
                    <div class=" agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/b8 (1).jpg" alt=" " class="img-fluid"> </figure>

                    </div>
                    </div><div class=" agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/images.jpeg" alt=" " class="img-fluid"> </figure>
                      </a>
                    </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/b8 (4).jpg" alt=" " class="img-fluid"> </figure>
                        </a>
                    </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/c (6).jpeg" alt=" " class="img-fluid"> </figure>
                      </a>
                    </div>
                    </div>
                    </div>
                  <div class="col-lg-3 col-md-6 col-6 p-0 snap-img">
                    <div class=" agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/b8 (2).jpg" alt=" " class="img-fluid"> </figure>
                      </a>
                    </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/a2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/b4.jpg" alt=" " class="img-fluid"> </figure>
                      </a>
                    </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/c (1).jpeg" alt=" " class="img-fluid"> </figure>
                      </a>
                    </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-6 p-0 snap-img">
                    <div class="agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/a9.jpg" alt=" " class="img-fluid"> </figure>
                      </a>
                    </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/b5.jpg" alt=" " class="img-fluid"> </figure>
                      </a>
                    </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/b8 (6).jpg" alt=" " class="img-fluid"> </figure>
                        </a>
                    </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/c (7).jpeg" alt=" " class="img-fluid"> </figure>
                      </a>
                    </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-6 p-0 snap-img">
                    <div class=" agileits_w3layouts_gallery_grid1 hover08">
                      <div class="w3_agile_gallery_effect">
                        <a href="images/g9.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/b7.jpg" alt=" " class="img-fluid"> </figure>
                        </a>
                      </div>
                    </div>
                      <div class="agileits_w3layouts_gallery_grid1 hover08">
                      <div class="w3_agile_gallery_effect">
                        <a href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/b2.jpg" alt=" " class="img-fluid"> </figure>
                        </a>
                      </div>
                    </div>
                    <div class=" agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/a1.jpeg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/b8 (3).jpg" alt=" " class="img-fluid"> </figure>
                          </a>
                      </div>
                    </div>
                    <div class=" agileits_w3layouts_gallery_grid1 hover08">
                    <div class="w3_agile_gallery_effect">
                      <a href="images/a1.jpeg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                        <figure>    <img src="../images/c (9).jpeg" alt=" " class="img-fluid"> </figure>
                      </a>
                    </div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <!-- footer -->
          <footer class="py-5">
            <div class="container">
              <div class="row footer_grids">
                <div class="col-lg-6 footer_left">
                  <h2><a class="footer-logo" href="index.php">
                  <i class="fas fa-camera-retro"></i> photo <span>session</span>
                  </a></h2>
                  <p>photograper is the art, application and practice of creating durable images by recoding light or other electromagnetic radiation, either eletronically by means of an image sensor, or chemically by means of a light-sensitive material such as photographic film.</p>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 footer_middle">
                  <h3 class="mb-sm-4 mb-3">Twitter Feed</h3>
                  <ul>
                    <li class="mb-2">Ut aut reiciendis voluptatibus <a href="#">http://example.com</a> alias.
                      <span><i class="fab mr-1 fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
                    <li>Itaque earum rerum hic tenetur a sapiente <a href="#">http://example.com</a>
                    <span><i class="fab mr-1 fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 footer_right">
                  <h3 class="mb-sm-4 mb-3">Contact Info</h3>
                  <p> <i class="fas mr-1 fa-map-marker"></i> puththalam road, wariyapola </p>
                  <p> <i class="fas mr-1 fa-envelope"></i> <a href="mailto:info@example.com">info@Sudasuna.com</a> </p>
                  <p> <i class="fas mr-1 fa-phone"></i> 0375730627 </p>
                  <p> <i class="fas mr-1 fa-clock"></i> Everyday 8:30a.m.–5.00p.m.</p>
                </div>
              </div>
            </div>
          </footer>
          <!-- //footer -->

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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
