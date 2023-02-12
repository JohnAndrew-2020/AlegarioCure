<?php 

  session_start();

  if($_SESSION['status'] != 'admin') {

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
.button001 {background-color: #FFFFFF;}




.button:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}
  
  


.hmo-card:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}
  
  
  
  
  .dropdown {
  display: inline-block;
  position: relative;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  float: left;
  min-width: 10rem;
  padding: .5rem 0;
  margin: .125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0,0,0,.15);
  border-radius: .25rem;
}

.dropdown-itemss {
  display: block;
  width: 100%;
  padding: .25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

  
  
			
  .bigg {
    width: 30%; /* wider */
    height: 70px; /* taller */
    font-size: 15px;
    margin: 0 auto;
    text-align: center;
    padding: 10px;
    border-radius: 16px;
    
  }
  
  
   
  
  .hmo-card {
  width: 200px;
  height: 150px;
  border: 1px solid #333;
  border-radius: 10px;
  display: inline-block;
  margin: 20px;
  transition: transform .2s;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  /* Add a shadow */
}

.card-level {
  text-align: center;
  font-size: 20px;
  padding: 50px 0;
}

.bronze {
  background-color: #cd7f32;
}

.silver {
  background-color: #C0C0C0;
}

.gold {
  background-color: #FFD700;
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
        <a class="nav-link " href="index.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Outpatient Treatment</span>
        </a>
      </li>
     

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>HMO & Insurance</span>
        </a>
      </li>
 

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Diet Management</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Surgery Scheduler</span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link " href="index.php">
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


<div class="module" style="background-image: url('img/personal-info.png')">
  <h2>AlegarioCure Services</h2>
  <i class="fas fa-user-circle"></i>
  <br><br><br>
  <a href="hmo_&_insurance.php" class="button button1">Go Back</a></button>
</div>

<br>
<hr>
<br>

<form>
    <label for="application-id">Application ID:</label><br>
    <input type="text" id="application-id" name="application-id"><br>
    <br>
    <label for="admin-id">Admin ID:</label><br>
    <input type="text" id="admin-id" name="admin-id"><br>
    <br>
    <label for="insurance-name">Insurance Name:</label><br>
    <input type="text" id="insurance-name" name="insurance-name"><br>
    <br>
    <label for="insurance-type">Insurance Type:</label><br>
    <input type="text" id="insurance-type" name="insurance-type"><br><br><br>
	
	
			     <label for="outpatient-treatment-type">Select HMO Insurance Company:</label><br>
    <select class="bigg" id="outpatient-treatment-type" name="outpatient-treatment-type">
      <option value="#">AIA Philippines American Life and General Ins</option>
      <option value="#">Insular Life Assurance Company Limited</option>
	  <option value="#">Sun Life of Canada (Philippines)</option>
      <option value="#">Manufacturers Life Insurance Company (Phils.)</option>
	  <option value="#">BDO Life Assurance Company Inc</option>
	  <option value="#">BPI-AIA Life Assurance Corporation</option>
	  <option value="#">Philippine Axa Life Insurance Corporation</option>
	  <option value="#">Sun Life Grepa Financial Inc</option>
	  <option value="#">United Coconut Planters Life Assurance Corporation</option>
	  <option value="#">Pru Life Insurance Corporation of U.K.</option>
	  <option value="#">MEDICard</option>
	  <option value="#">Intellicare</option>
	  <option value="#">MaxiCare</option>
	  <option value="#">Philcare</option>
	  <option value="#">Insularcare</option>
	  <option value="#">Valucare</option>
	  <option value="#">Fortunecare</option>
    </select>
	
	
	 <br><br><br><br>  <hr>
		 <h2 text-align="center">Choose your insurance card</h2>
	 <br>
	<div class="hmo-card">
  <div class="card-level bronze">Bronze</div>
</div>

<div class="hmo-card">
  <div class="card-level silver">Silver</div>
</div>

<div class="hmo-card">
  <div class="card-level gold">Gold</div>
</div>

	<hr>
	
	
	
    <br><br><br>
    <label for="date-applied">Date Applied:</label><br>
    <input type="date" id="date-applied" name="date-applied"><br>
    <br>
    <label for="member-id">Member ID:</label><br>
    <input type="text" id="member-id" name="member-id"><br>
    <br>
    <input class="button button001" style="color:#000000" type="submit" value="Submit">
  </form> 
  
 
<br>
<br>
<br>
<br>
<br>
<br>
<br>



	<hr>
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