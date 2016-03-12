<?php 

//This script is the result of an AJAX request. 
//This script expects to recieve all valuations required for an Accident Submission. 
//The script returns a string indicating results. 

require 'connection.php';

if (empty($_POST['name'])) {
    echo 'Please select an Affected Employee';
}
elseif (empty($_POST['accidentDate'])) {
	echo 'Please fill out an Accident Date';
}
elseif (empty($_POST['location'])){
	echo 'Please fill out a Location';
}
elseif (empty($_POST['description'])){
	echo 'Please fill out a Description';
}
else //No Submission 
{

	$date = $_POST['accidentDate'];
	$desc = $_POST['description'];
	$name = $_POST['name'];
	$location = $_POST['location'];

	$sql = "INSERT INTO accident (DateOfAccident, AccidentDescription, AccidentLocation, EmployeeID) VALUES(
	'" . $date . "', 
	'" . $desc . "', 
	'" . $location . "', 
	'" . $name . "')";

	if ($conn->query($sql))
	{
	    echo "Thank you for your submission!";
	} else 
	{
		echo "Could not connect to the server.";
	}
}

?>
