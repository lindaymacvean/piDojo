<?php

try {
   // Create connection
	$username="Me3EcRuk";
	$password="";
	$piCon = new PDO('mysql:host=localhost;dbname=picademy', $username, $password);
    $piCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>