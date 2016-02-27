<?php 

//This script is the result of an AJAX request. 
//This script expects to recieve all valuations required for an Employee Submission. 
//The script returns a string indicating results. 
require 'connection.php';

if (empty($_POST['firstName'])) {
    echo 'Please enter a First Name';
}
elseif (empty($_POST['lastName'])) {
	echo 'Please enter a Last Name';
}
elseif (empty($_POST['DOB'])){
	echo 'Please enter a Date of Birth';
}
elseif (empty($_POST['address'])){
	echo 'Please enter an Address';
}
elseif (empty($_POST['zip'])){
	echo 'Please enter a Zip';
}
elseif (empty($_POST['country'])){
	echo 'Please select a Country';
}
elseif (empty($_POST['licenseDate'])){
	echo 'Please enter a License Date';
}
elseif (empty($_POST['hireDate'])){
	echo 'Please enter a Hire Date';
}
elseif (empty($_POST['salary'])){
	echo 'Please enter a Salary';
}
else //No Submission 
{
	$return = array( //This JSON will allow a client-side parse and append to simmulate desktop application-like dropdown list population for the Accident Affected Employee dropdown.
		"val" => 0,
		"name" => $_POST['lastName'] .', ' . $_POST['firstName'];
		"sql" => "",
		"result" => ""
		);

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

	$age = getAge(substr($DOB,0,4));
	
	$return["sql"]="INSERT INTO employee (firstName, lastName, MI, HomeAddress, Zip, DateOfBirth,HireDate,TerminationDate,Salary,LicenseDate,StateAbbreviation,CountryAbbreviation) VALUES ('" 
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
	
	if ($conn->query($return["sql"]))
	{
	    $result["result"] = 'Thank you for submitting ' . $lastName . ', ' . $firstName . "\r\n AGE: " . $age;
	    $result["val"] => $conn->insert_id; 
	} else 
	{
		$result["result"] = 'Could not connect to the server. Please try again.'; 
	}
	echo json_encode($return);
}

function getAge($DOB)
{
	return 2016 - $DOB;
}

?>
