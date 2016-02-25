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
elseif (empty($_POST['homeAddress'])){
	echo 'ERRORhomeAddress';
}
elseif (empty($_POST['zip'])){
	echo 'ERRORzip';
}
elseif (empty($_POST['country'])){
	echo 'ERRORcountry';
}
elseif (empty($_POST['LD'])){
	echo 'ERRORLD';
}
elseif (empty($_POST['HD'])){
	echo 'ERRORHD';
}
elseif (empty($_POST['salary'])){
	echo 'ERRORsalary';
}
else //No Submission 
{
    echo 'CORRECT';
}



?>
