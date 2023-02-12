

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ACH Dashboard</title>
       <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/style.css" rel="stylesheet">
	       <script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->



  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


        <li class="nav-heading">HOME PAGE</li>

      <li class="nav-item">
        <a class="nav-link " href="Home_index.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>HOME</span>
        </a>
      </li>
     

      <li class="nav-item">
        <a class="nav-link " href="About_Us.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>ABOUT US</span>
        </a>
      </li>
 

      <li class="nav-item">
        <a class="nav-link " href="Services.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>SERVICES</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link " href="Log_in.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>LOG IN</span>
        </a>
      </li>


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>ABOUT US</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">About Us</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->




<section id="center" class="clearfix">
   <div class="center clearfix">
     <div id="carousel" class="carousel slide carousel-fade">


              <div>
			  <br>
                <img src="img/unaaaaaaaaaaaaaa-removebg-preview (1).png" alt="">
		      <br>
            </div>

   </div>
   </div>
</section>





<section id="about_inner">
   <div class="about_inner">
     <div class="container">
	   <div class="row">
	    <div class="service_top clearfix">
	      <h2>A<span class="ready_2">BOUT </span>US</h2>
	   <div class="row">
	     <div class="col-sm-12">
		   <div class="col-sm-6">
		     <div class="about_inner_1"><img src="img/40.jpg"></div>
		   </div>
		   <div class="col-sm-6">
		     <div class="about_inner_2">
			   <h1 class="text-center">HMS Core 2</h1>
			   <p class="text-center">Core Transaction 2 provide a system that access <br/>by authorized personnel, as well as being reliable for its users,
				<br/> particularly the patients, services will offer in the rural area <br/> that cannot reach out for best medication. Including the;<br/>Outpatient treatments, HMO & Insurance Management, <br/>Surgery Scheduler, Diet Management, <br/>and Laboratory Management</p>
			 </div>
		   </div>
		 </div>
		 <div class="col-sm-12">
		   <div class="col-sm-6">
		     <div class="about_inner_2">
			   <h1 class="text-center">Primary Care Doctor</h1>
			   <p class="text-center">Your primary care doctor <br/>can assist you and will  <br/>consult with you to keep a check <br/> on your health condition for faster<br/>and better recovery as an outpatient. <br/></p>
			 </div>
		   </div>
		   <div class="col-sm-6">
		     <div class="about_inner_1"><img src="img/41.jpg"></div>
		   </div>		   
		 </div>
	   </div>
	 </div>
   </div>
 </section>

<section id="about_3" class="clearfix">
 <div class="main_head_3">
  <div class="container">
  <div class="row">
   <div class="about_3 clearfix">
	 <div class="about_3_inner">
	  <h4>You were in the right place, one that cares about you.</h4>
	 </div>
	 <div class="about_3_inner_2 clearfix">
	  <div class="col-sm-3"></div>
	   <div class="col-sm-2 about_3_inner_2_left clearfix">
	    <img src="img/21.png" width="100%">
	   </div>
	    <div class="col-sm-5 about_3_inner_2_right clearfix">
		 <div class="about_3_inner_2_right_inner">
			<br>
		  <p>You can stay in touch with friends and family, plan and arrange meals, and feel love from anywhere.</p>
		  <br>
		     <p> - Angela Kate De Guzman</p>
		 </div>
		</div>
		 <div class="col-sm-2"></div>
	 </div>
	</div>
  </div>
 </div>
 </div>
</section>

<section id="about_4" class="clearfix">
  <div class="container">
  <div class="row">
   <div class="about_4 clearfix">
	 <div class="about_4_top clearfix">
	   <div class="col-sm-6 about_4_top_left clearfix">
	    <img src="img/22.jpg" width="100%">
	   </div>
	    <div class="col-sm-6 about_4_top_right clearfix">
		 <div class="about_4_top_right_inner">
		  <h4>Proper Care is all you need.</h4>
		  <p>We, as doctors, always take care of our outpatients by providing them with the necessary facilities and equipment to help them recover quickly. If you live in a rural area, we can provide video conferences or video meetings for outpatient consultations. Using the internet will allow us to stay connected and continue providing patient care.</p>
		   <br>
		   <p>- Dan Deanell V. Suaring</p>
		</div>
		</div>
	 </div>
	</div>
  </div>
 </div>
</section>

<section id="about_5" class="clearfix">
 <div class="main_head_5">
  <div class="container">
  <div class="row">
   <div class="about_5 clearfix">
     <div class="col-sm-12">
	  <div class="col-sm-6">
	    <div class="about_5_inner">
		  <h4>Why Choose Alegario Cure Hospital?</h4>
		  <h5>AlegarioCure Hospital Systems is a complete and integrated Hospital Management System that manages all elements of hospital operations, including medical, financial, administrative, legal, and compliance. Electronic health records, business intelligence, and revenue cycle management are all part of it.</h5>
		  <button>View a Designation</button>
	   </div>
	  </div>
	  <div class="col-sm-6">
	   <div class="about_5_inner_1">
	    <a href="#"><img src="img/42.jpg"></a>
	   </div>
	  </div>
	 </div>	 
	</div>
  </div>
 </div>
 </div>
</section>




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