<?php 

    require('../../database/database.php');
    session_start();
    if($_SESSION['status'] != 'patient') {
        echo "<script>
        alert('No access');
        window.history.back();
        </script>";
    }

    if(isset($_POST['submit'])) {
        $resultId = $_POST['result-id'];

        $sql = "SELECT $resultId, `patient_id`, `test_name`, `test_result`, `normal_range` FROM `patient_lab_result` WHERE 1";
        $execute = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($execute);
    }

?>
