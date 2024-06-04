<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Toy Wheels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dropdown.css">



    <style>
        .dropbtn {
            color: rgb(33, 41, 52);
            border: none;                           
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-top: -10px;
        }

        .dropbtn span {
            margin-top: 20px;
            color: red;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
    </style>
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Toy<span>Wheels</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="brand.php" class="nav-link">Cars</a></li>
            <li class="nav-item"><a href="site_rev.php" class="nav-link">Review</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="dropdown nav-item">

            <?php
  include "../dbconnect.php";
  $sql = "SELECT *FROM users WHERE name = '$_SESSION[name]'";
  //echo $sql;
  $result = mysqli_query($conn,$sql);
  
  $image="";
  while($row=mysqli_fetch_array($result))
  {
    $image=$row["image"];
  }

?>

                            <img  src="..\uploads\<?php echo $image;  ?>" style="border-radius: 50%;" width="60" height="60" alt="image">
                           <a  href="#"><?php echo $_SESSION["name"] ?></a>
                            <div class="dropdown-content">
                                <a href="viewprofile.php">My Profile</a>
                                <a href="profiles.php">Edit Profile</a>
                                <a href="viewbookings.php">My Bookings</a>
                                <a href="changepassword.php">Change Password</a>
                                <a href="logout.php">Logout</a>
                            </div>
                        </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->