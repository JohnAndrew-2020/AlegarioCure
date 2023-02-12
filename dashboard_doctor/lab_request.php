<?php 

  session_start();

  if($_SESSION['status'] != 'doctor') {

    echo "<script>

      window.history.back()

    </script>";

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ACH Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link rel="icon" type="image/x-icon" href="img/logoo1.ico">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  <style>
  
  
  .button {
  border-radius: 18px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  /* Add a shadow */
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  transition: transform .2s;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #8E8E88;} /* Log out color*/


.button:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}
  
  
  </style>
  
  
  
  
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logoo d-flex align-items-center">
        <img src="assets/img/logoo.png" alt="">
        <span class="d-none d-lg-block" style="color:#2098d1";><b>&nbsp;Alegario Cure</b><br><b style="color:#66cc33";>&nbsp;Hospital</b></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">
		
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Menu</span>
          </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>AlegarioCure Hospital</h6>
              <span>We Commit to Care</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="../function/session/logout.php" method="post">
                <button class="dropdown-item d-flex align-items-center">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Log Out</span>
                </button>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


        <li class="nav-heading">Dashboard Admin</li>

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Outpatient Treatment</span>
        </a>
      </li>
     

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>HMO & Insurance</span>
        </a>
      </li>
 

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Diet Management</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Surgery Scheduler</span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Laboratory Management</span>
        </a>
      </li>


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



<body>



<div class="module" style="background-image: url('img/module6.png')">
  <h2>Lab Management</h2>
  <i class="fas fa-user-circle"></i>
  <br><br><br>
  <a href="lab_result.php" class="button button1">Go Back</a></button>
</div>
<br>
<br>


<form>
    <h2>Laboratory Request Form</h2>
  <label for="request-id">Request ID:</label><br>
  <input type="text" id="request-id" name="request-id"><br>
  <label for="patient-id">Patient ID:</label><br>
  <input type="text" id="patient-id" name="patient-id"><br>
  <label for="request-info">Request Information:</label><br>
  <textarea id="request-info" name="request-info" rows="4" cols="50"></textarea><br>
  <label for="request-type">Request Type:</label><br>
  <select id="request-type" name="request-type">
    <option value="blood-test">Blood Test</option>
    <option value="urine-test">Urine Test</option>
    <option value="x-ray">X-Ray</option>
    <option value="other">Other</option>
  </select><br>
  <label for="date-request">Date of Request:</label><br>
  <input type="date" id="date-request" name="date-request"><br><br><br>
  <label for="request-by">Requested by:</label><br>
  <input type="text" id="request-by" name="request-by"><br><br>
  <input type="submit" value="Submit">
</form> 

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




  <!-- ======= Footer ======= -->
   <footer>
    <div class="container">
      <p align="center"><br>©2023 AlegarioCure Hospital | All Rights Reserved</p>
    </div>
  </footer>
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>