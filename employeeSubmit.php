<?php 

//This script is the result of an AJAX request. 
//This script expects to recieve all valuations required for an Employee Submission. 
//The script returns a string indicating results. 

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
	$sql="INSERT INTO employee VALUES (" . $_POST['firstName'] . "," . $_POST['lastName'] . "," . $_POST['MI'] . "," . $_POST['address'] . "," . $_POST['zip'] . "," . $_POST['DOB'] . "," .
	$_POST['hireDate'] . "," . $_POST['terminationDate'] . "," . $_POST['salary'] . "," . $_POST['licenseDate'] . "," . $_POST['state'] . "," . $_POST['country']) . ")";
	
	if ($conn->query($sql) === TRUE) {
		echo "SUCCESS"};
		else {
		echo "ERROR" . $sql . '\n'}
		 
    echo 'CORRECT';
}



?>
