<?php 

//This script is the result of an AJAX request. 
//This script expects to recieve all valuations required for an Accident Submission. 
//The script returns a string indicating results. 

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
	$accidentDate = $_POST['accidentDate'];
	$accidentDescription = $_POST['description']
	$accidentLocation = $_POST['location'];
	$name = $_POST['name'];
	$sql = "INSERT INTO accident VALUES(" . $accidentDate . "," . $accidentDescription .  "," . $accidentLocation . "," . $name . ")";

	if ($conn->query($sql) === TRUE) {
		echo 'SUCCESS';
	} else 
	{
		echo 'FAILED: ' . $sql . '\n'; 
	}
    echo 'Thank you for your submission!';
}

?>
