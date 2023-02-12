<?php 

  session_start();

  if($_SESSION['status'] === 'patient') {

    header("Location: dashboard_patient/Dashboard.php");

  } else if ($_SESSION['status'] === 'doctor') {

    header("Location: dashboard_doctor/doctor.php");

  } else if ($_SESSION['status'] === 'admin') {

    header("Location: dashboard_admin/dashboard.php");

  } else if ($_SESSION['status'] === 'medtech') {

    header("Location: dashboard_medtech/medtech.php");

  } else if ($_SESSION['status'] === 'nutritionist') {

    header("Location: dashboard_nutritionist/nutritionist.php");

  } else if ($_SESSION['status'] === 'hospital_staff') {

    header("Location: dashboard_staff/staff.php");

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
                <span>Log out</span>
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
        <a class="nav-link " href="index.php">
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
      <h1>HOME PAGE</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Home Page</li>
        </ol>
      </nav>
	  
	  
	  
	 
    </div><!-- End Page Title -->





			  <br>
                <img src="img/unaaaaaaaaaaaaaa-removebg-preview (1).png" width="100%" alt="">
		      <br>
			  <br>
			  <br>
       

 


		 <h4>Welcome to  <span>Alegario Cure Hospital</span></h4>
		 <p>Aligario Cure Hospital (ACH) is one of Fairview's greatest hospitals, offering international-level medical care with a Filipino heart. ACH is the country's first healthcare center with a hotel-like ambiance, emphasizing healing, comfort, and care for patients and their families. We also want to improve your life by making the patient feel better so that you can feel<br> what is best for you.</p>
		 <h5><a href="VideoACH.php">Watch a video</a></h5>


	   <img src="img/4.jpg" width="100%">


	 <h1>THE PROPER <span>TREATMENT </span>IN ONE PLACE</h1> <br><br>
	
				
						<img src="img/5.jpg" alt="img09" width="100%"/>
						<figcaption>
							<h2>Video-<span>Consultation</span></h2><br>
							<p>A face to face video consultations for assessing non-urgent patients, outpatient, and conducting medication reviews.
							</p>
							<a href="#">View more</a>						</figcaption>			
							 <br><br><br>

			
						<img src="img/6.jpg" alt="img09" width="100%"/>
						<figcaption>
							<h2>e- <span> Prescription</span></h2><br>
							<p>e-Prescribing health care provider that aids in the generation of prescription orders and their transmission to clinical and pharmacy settings.</p><br>
							<a href="#">View more</a>						</figcaption>			
							  <br><br><br>
					


				
						<img src="img/7.jpg" alt="img09" width="100%"/>
						<figcaption>
							<h2>OPD- <span>Management</span></h2><br>
							<p>a treatment or therapies that aids the patient in recovering quickly.</p><br>
							<a href="#">View more</a>						</figcaption>			
							 <br><br><br>
					


			
						<img src="img/8.jpg" alt="img09" width="100%"/>
						<figcaption>
							<h2>Primary-<span> care-doctor </span></h2><br>
							<p>a well-trained doctor who gives proper medication advice and promotes a healthy lifestyle</p>
							<a href="#">View more</a>						</figcaption>			
							 <br><br><br>
					


	 <p><a href="#">Other Service</a></p>




    <img src="img/9.jpg" width="100%">

 
	  <h4> </h4>
	  <h2>Anything you need is a proper care from our hospital ACH</h2>
	  <h3>A treatment that will put you at ease and allow you to recover quickly.</h3><br>
	  

   <h2> </h2>


	   <h3><span>Client Test</span>imonials</h3>
	   <p>My cancer, which was in stage 3 <br>when I arrived at the ACH on<br> November 12, 2022, was  <br>2 days of surgery, and the <br>hospital's care allowed me  <br> to recover quickly. I learned a
	<br>  lot from the ACH, including a  <br> lot about how to treat my cancer. <br>  I never stop hoping for a cure, <br>and when they give me a proper treatment,    <br>I feel incredibly alive and comfortable.   <br>The ACH also taught me the importance 
<br>     <br> of having these in my life if I'm going     <br>to maintain my outlook on life and make <br> it through difficult times. I owe my life to <br> the ACH because their staff and medical <br></p>
	  <br><br><br> <h2>Dignissim Lacinia</h2>
	   <h5>Conubia</h5>


	  <img src="img/10.jpg" width="100%">


						<br><br><br><br>
	 <h4>Meet <span>the</span> Team</h4>
						   <br>
	
				
						<img src="img/11.jpg" alt="img14" width="300" height="340"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		     
	
	
	   <h4><a href="#">Angela Kate De Guzman</a></h4><br>


						<img src="img/12.jpg" alt="img14" width="300" height="340"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
	


	   <h4><a href="#">John Andrew F. Fallurin</a></h4><br>

					
				
						<img src="img/13.png" alt="img14" width="300" height="340"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
		


	   <h4><a href="#">Lovely Sophia K. Beltran</a></h4><br>



					  
				
						  <img src="img/c13.png" alt="img14" width="300" height="340"/>
						  <figcaption>
							  <a href="#">View more</a>						</figcaption>			
		

	
		 <h4><a href="#">Dan Deanell V. Suaring</a></h4><br>



					
				
						<img src="img/14.jpg" alt="img14" width="300" height="340"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			


	 
	   <h4><a href="#">Lea A. Praferosa</a></h4><br><br>


	 <h4>ACH <span>Blog</span> Flatform</h4>


					
					
						<img src="img/16.jpg" alt="img14" width="100%"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
	
	
	
	   <h4><a href="#">Flexible Hospital Management System</a></h4><br><br>
	

					
				
						<img src="img/17.jpg" alt="img14" width="100%"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
	

	
	   <h4><a href="#">Safe and Secure Hospital Management System </a></h4><br><br>
	 

					
					
						<img src="img/18.jpg" alt="img14" width="100%"/>
						<figcaption>
							<a href="#">View more</a>						</figcaption>			
	


	   <h4><a href="#">Easy to use Hospital Management System</a></h4><br><br>




	 <h4>Get <span>in T</span>ouch</h4>      <br>
	
	     <div class="center_8_middle_left_inner">
		   <input class="form-control form-control_1" type="text" placeholder="Your name">
		   <br>
		   <input class="form-control form-control_1" type="text" placeholder="Your e-mail">
		   <br>
		   <input class="form-control form-control_1" type="text" placeholder="Your phone">
		   <br>
		   <textarea placeholder="Message..." class="form-control form-control_2"></textarea>
		   <br>
	       <p><button href="#">Send</button></p>
	   </div>
	  </div>
	  <br><br>
	  
	  <div class="col-sm-6 clearfix">
	   <div class="center_8_middle_left_inner_1">
	    <a href="#"><img src="img/39.jpg" width="100%"></a><br><br>
	   </div>
	  </div>
	 </div>
    </div>
  </div>
 </div>
 </div>
</section>


		 <br><br>



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