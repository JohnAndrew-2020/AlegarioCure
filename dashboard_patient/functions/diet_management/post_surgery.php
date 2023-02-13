<?php 

    require('../../../database/database.php');
    session_start();
    if($_SESSION['status'] != 'patient') {
        echo "<script>
        alert('No access');
        window.history.back();
        </script>";
    }

?>