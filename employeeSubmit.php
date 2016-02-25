<?php 

//This script is the result of an AJAX request. 
//This script expects to recieve all valuations required for an Employee Submission. 
//The script returns a string indicating results. 
require 'connection.php';

if (empty($_POST['firstName'])) {
    echo 'ERRORfirstName';
}
elseif (empty($_POST['lastName'])) {
	echo 'ERRORlastName';
}
elseif (empty($_POST['DOB'])){
	echo 'ERRORDOB';
}
elseif (empty($_POST['address'])){
	echo 'ERRORaddress';
}
elseif (empty($_POST['zip'])){
	echo 'ERRORzip';
}
elseif (empty($_POST['state'])){
	echo 'ERRORstate';
}
elseif (empty($_POST['country'])){
	echo 'ERRORcountry';
}
elseif (empty($_POST['licenseDate'])){
	echo 'ERRORlicenseDate';
}
elseif (empty($_POST['hireDate'])){
	echo 'ERRORhireDate';
}
elseif (empty($_POST['salary'])){
	echo 'ERRORsalary';
}
else //No Submission 
{
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$MI = $_POST['MI'];
	$address = $_POST['address'];
	$zip = $_POST['zip'];
	$DOB = $_POST['DOB'];
	$hireDate = $_POST['hireDate'];
	$termDate = $_POST['termDate'];
	$salary = $_POST['salary'];
	$licenseDate = $_POST['licenseDate'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	
	$sql="INSERT INTO employee VALUES ('" 
	. $firstName . "', '" 
	. $lastName . "', '"  
	. $MI . "', '"  
	. $address . "', '"  
	. $zip . "', '"  
	. $DOB . "', '"  
	. $hireDate . "', '"  
	. $termDate . "', "  
	. $salary . ", '"  
	. $licenseDate . "', '"  
	. $state . "', '"  
	. $country . "');";
	
	if ($conn->query($sql) === TRUE) {
		echo "SUCCESS";
	} else 
	{
		echo "FATAL ERROR: \r\n" .  $sql . " \r\n" . mysqli_error($conn);
	}
		 
    echo 'CORRECT';
}



?>
