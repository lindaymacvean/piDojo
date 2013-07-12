<?php 
include('piconnect.php');
include('pivars.php');
include('views/header.php');

mysqli_query($piCon,"INSERT INTO main (piD, piName, stageID)
VALUES (1, 'Griffin',1)");

if($piName) {
	include('views/main.php'); 
} 
elseif (false) {
	include('views/login.php');
}
else {
	include('views/intro.php');
}
include('views/footer.php'); 
mysqli_close($con);
?>