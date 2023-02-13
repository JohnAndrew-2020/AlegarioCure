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
                $user_id = $user['u_id'];

                $sql1 ="SELECT * FROM `patient` WHERE `user_id` = $user_id";
                $sqlexecute1 = mysqli_query($conn, $sql1);
                $patient = mysqli_fetch_assoc($sqlexecute1);

                $_SESSION['id'] = $patient['id'];
                $_SESSION['first_name'] = $patient['first_name'];
                $_SESSION['last_name'] = $patient['last_name'];

                header("Location: ../../dashboard_patient/Dashboard.php");

            } else if($user['role'] === "DOCTOR") {

                $_SESSION['status'] = 'doctor';
                $_SESSION['id'] = $user['u_id'];

                $user_id = $user['u_id'];

                $sql2 ="SELECT * FROM `doctor` WHERE `user_id` = $user_id";
                $sqlexecute2 = mysqli_query($conn, $sql2);
                $doctor = mysqli_fetch_assoc($sqlexecute2);

                $_SESSION['id'] = $doctor['id'];
                $_SESSION['first_name'] = $doctor['first_name'];
                $_SESSION['last_name'] = $doctor['last_name'];
                
        
                header("Location: ../../dashboard_doctor/Dashboard.php");

            } else if($user['role'] === "MEDTECH") {

                $_SESSION['status'] = 'medtech';
                $_SESSION['id'] = $user['u_id'];

                $user_id = $user['u_id'];

                $sql3 ="SELECT * FROM `medtech` WHERE `user_id` = $user_id";
                $sqlexecute3 = mysqli_query($conn, $sql3);
                $medtech = mysqli_fetch_assoc($sqlexecute3);

                $_SESSION['id'] = $medtech['id'];
                $_SESSION['first_name'] = $medtech['first_name'];
                $_SESSION['last_name'] = $medtech['last_name'];
        
                header("Location: ../../dashboard_medtech/medtech.php");

            } else if($user['role'] === "HOSPITAL STAFF") {

                $_SESSION['status'] = 'hospital_staff';
                $_SESSION['id'] = $user['u_id'];

                $user_id = $user['u_id'];

                $sql4 ="SELECT * FROM `hospital_staff` WHERE `user_id` = $user_id";
                $sqlexecute4 = mysqli_query($conn, $sql4);
                $hospital_staff = mysqli_fetch_assoc($sqlexecute4);

                $_SESSION['id'] = $hospital_staff['id'];
                $_SESSION['first_name'] = $hospital_staff['first_name'];
                $_SESSION['last_name'] = $hospital_staff['last_name'];
        
                header("Location: ../../dashboard_staff/staff.php");

            } else if($user['role'] === "NUTRITIONIST") { 

                $_SESSION['status'] = 'nutritionist';
                $_SESSION['id'] = $user['u_id'];

                $user_id = $user['u_id'];

                $sql5 ="SELECT * FROM `nutritionist` WHERE `user_id` = $user_id";
                $sqlexecute5 = mysqli_query($conn, $sql5);
                $nutritionist = mysqli_fetch_assoc($sqlexecute5);

                $_SESSION['id'] = $nutritionist['id'];
                $_SESSION['first_name'] = $nutritionist['first_name'];
                $_SESSION['last_name'] = $nutritionist['last_name'];
        
                header("Location: ../../dashboard_nutritionist/nutritionist.php");

            } else if($user['role'] === "ADMIN") { 

                $_SESSION['status'] = 'admin';
                $_SESSION['id'] = $user['u_id'];

                $user_id = $user['u_id'];

                $sql6 ="SELECT * FROM `admin` WHERE `user_id` = $user_id";
                $sqlexecute6 = mysqli_query($conn, $sql6);
                $admin = mysqli_fetch_assoc($sqlexecute6);

                $_SESSION['id'] = $admin['id'];
                $_SESSION['first_name'] = $admin['first_name'];
                $_SESSION['last_name'] = $admin['last_name'];
        
                header("Location: ../../dashboard_admin/Dashboard.php");

            } else if($user['role'] === "SURGERY SCHEDULER") { 

            }

        }


    }

?>