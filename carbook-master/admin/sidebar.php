<?php
  session_start();
  if(!isset($_SESSION['user_type']))
  {
    echo "<meta http-equiv='refresh' content='1;url=../index.php'>";
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
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Toy Wheels | Admin panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Brands">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseBrands" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Brands</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseBrands">
            <li>
              <a href="addbrand.php">Add Brand</a>
            </li>
            <li>
              <a href="mgbrand.php">Manage Brands</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vehicles">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseVehicles" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-automobile"></i>
            <span class="nav-link-text">Vehicles</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseVehicles">
            <li>
              <a href="addvehicle.php">Add Vehicle</a>
            </li>
            <li>
              <a href="mgvehicles.php">Manage Vehicles</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Booking">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseBooking" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Booking</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseBooking">
            <li>
              <a href="viewbooking.php">ManageBooking</a>
            </li>
            <li>
              <a href="viewbooked.php">Booking Confirmed</a>
            </li>
            <li>
              <a href="cancelbooking.php">Booking Rejected</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Contactus Query">
          <a class="nav-link" href="message.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Manage Contactus message</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reg Users">
          <a class="nav-link" href="regusers.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Reg users</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">
          <a class="nav-link" href="review.php">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Reviews</span>
          </a>
        </li>
        
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
      <ul class="navbar-nav ml-auto">
     
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-fw fa-user"></i>
         <span class="d-lg-none">Profile
           <span class="badge badge-pill badge-primary">New</span>
         </span>
         <!-- <span class="indicator text-primary d-none d-lg-block"> -->
           <!-- <i class="fa fa-fw fa-circle"></i> -->
         <!-- </span> -->
       </a>
       <div class="dropdown-menu" aria-labelledby="messagesDropdown">
         <!-- <h6 class="dropdown-header">New Messages:</h6> -->
         <!-- <div class="dropdown-divider"></div> -->
         <a class="dropdown-item" href="my-profile.php">
           <span class="fa fa-fw fa-user"> <strong>My Profile</strong></span>
         </a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="edit-profile.php">
           <span class="fa fa-fw fa-wrench"> <strong>Edit Profile</strong></span>
         </a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="changepassword.php">
           <span class="fa fa-fw fa-key"> <strong>ChangePassword</strong></span>
         </a>
        
       </div>
     </li>


     
   </ul>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">



<!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2024</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>