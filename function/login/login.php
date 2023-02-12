<?php

    session_start();
    require('../../database/database.php');

    // $_POST['submit'] came from form input type submit, name = submit
    if(isset($_POST['submit'])){

        // information came from AI log in form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // query for log in
        $sql = "SELECT * FROM user_table WHERE username = '$username' AND password = '$password'";

        // execute query, $conn parameter came from require('../php-functions/database.php');
        $sqlexecute = mysqli_query($conn, $sql);

        // fetch user information and save to $user variable
        $user = mysqli_fetch_assoc($sqlexecute);

        // save session information for user to stay authenticated
        if(!$user) {
            
            echo "<script>
                alert('You are logged out');
                window.location = '../../Log_in.php';
            
            </script>";

        } else {
            
            if($user['role'] === "PATIENT") {

                $_SESSION['status'] = 'patient';
                $_SESSION['id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];

                header("Location: ../../dashboard_patient/Dashboard.php");

            } else if($user['role'] === "DOCTOR") {

                $_SESSION['status'] = 'doctor';
                $_SESSION['id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
        
                header("Location: ../../dashboard_doctor/Dashboard.php");

            } else if($user['role'] === "MEDTECH") {

                $_SESSION['status'] = 'medtech';
                $_SESSION['id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
        
                header("Location: ../../dashboard_medtech/medtech.php");

            } else if($user['role'] === "HOSPITAL STAFF") {

                $_SESSION['status'] = 'hospital_staff';
                $_SESSION['id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
        
                header("Location: ../../dashboard_staff/staff.php");

            } else if($user['role'] === "NUTRITIONIST") { 

                $_SESSION['status'] = 'nutritionist';
                $_SESSION['id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
        
                header("Location: ../../dashboard_nutritionist/nutritionist.php");

            } else if($user['role'] === "ADMIN") { 

                $_SESSION['status'] = 'admin';
                $_SESSION['id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
        
                header("Location: ../../dashboard_admin/Dashboard.php");

            } else if($user['role'] === "SURGERY SCHEDULER") { 

            }

        }


    }

?>