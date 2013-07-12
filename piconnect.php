<?php
// Create connection
$piCon=mysql_connect("localhost","peter","abc123","my_db");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>