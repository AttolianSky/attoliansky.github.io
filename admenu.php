<?php
include_once 'dbconnection.php';
$result = mysqli_query($conn,"SELECT * FROM admins");
//header ("Location: OSCC/admin_access");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width-device-width, initial-scale=1">

  <title>One Stop Crisis Centre (OSCC)</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.0.2
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <b><a href="https://www.moh.gov.my/">Ministry of Health Malaysia (MOH)</a></b>
      </div>
	  <div class="d-none d-lg-flex social-links align-items-center">
		You are logged in. 
		<b><a style="color:red" href="">Log out</a></b>
		
	  </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <div class="web-logo"><img src="assets/img/logo.jpg" alt="OSCC" style="width:70px;height:70px;"></div>
      <h1 class="logo me-auto"><a href="index.html">OSCC</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
			<li class="dropdown"><a class="nav-link scrollto"><span>Web Admin</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
				  <li><a class="nav-link scrollto active" href="adview.php">Edit Details</a></li>
				  <li><a class="nav-link scrollto active" href="adview.php">View All Admin</a></li>
				  <li><a class="nav-link scrollto active" href="adreg.php">Add New Admin</a></li>
				</ul>
			</li>
			
			<li class="dropdown"><a class="nav-link scrollto"><span>Update Website</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
				  <li><a class="nav-link scrollto active" href="">Page 1</a></li>
				  <li><a class="nav-link scrollto active" href="">Page 2</a></li>
				  <li><a class="nav-link scrollto active" href="">Contacts</a></li>
				</ul>
			</li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Home / Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		
		
		
		<div class="container">
			<div class="row">
				<h1>OSCC • Admin Page</h1>
			</div>
		</div>
	</section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>