<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'hospital';

  $conn = mysqli_connect($host, $user, $password, $database);

  if(mysqli_connect_error()){
    echo "Error Connection";
  }

 ?>