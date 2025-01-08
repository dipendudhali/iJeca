<?php
  // Connect to MySQL database
  $con = mysqli_connect('localhost','root','');

  // Check if the connection was successful
  if (!$con) {
      die('Connection failed: ' . mysqli_connect_error());
  }

  // Select the database
  if (!mysqli_select_db($con, 'jeca')) {
      die('Database selection failed: ' . mysqli_error($con));
  }

  //echo "Connection successful and database selected!";
?>
