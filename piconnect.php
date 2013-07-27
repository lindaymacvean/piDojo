<?php
// Create connection
$piCon= new mysqli("localhost","Me3EcRuk","","picademy");

// Check connection
if (mysqli_connect_errno($piCon))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>