<?php 
include('piconnect.php');
include('pivars.php');
include('views/header.php');

//first attempt to get the piName based on the $_GET["pid"] sent by user

if($stmt = $piCon->prepare("SELECT pi_name FROM main WHERE piD=?")) {

	/* bind parameters for markers */
	$stmt->bind_param($_GET['pid']);
	
	/* execute query */
	$stmt->execute();
	
	/* bind result variables */
	$stmt->bind_result($piName);
	
	/* find number of registered Pis */
	$registered = $stmt->num_rows;
	
	printf("Result set has %d rows.\n", $registered);
	
	/* fetch value */
	$stmt->fetch();
	
	/* close statement */
	$stmt->close();

}

if($piName && $registered == 1) {
	$piD = $_GET["pid"];
	include('views/main.php'); 
} 
elseif (false ) {
	include('views/intro.php');
}
else {
	include('views/login.php');
}
include('views/footer.php'); 
mysqli_close($con);
?>