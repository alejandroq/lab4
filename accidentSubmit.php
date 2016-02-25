<?php 

//This script is the result of an AJAX request. 
//This script expects to recieve all valuations required for an Employee Submission. 
//The script returns a string indicating results. 

if (empty($_POST['name'])) {

    echo 'ERRORname';
}
elseif (empty($_POST['AD'])) {
	echo 'ERRORAD';
}
elseif (empty($_POST['location'])){
	echo 'ERRORlocation';
}
elseif (empty($_POST['description'])){
	echo 'ERRORdescription';
}
else //No Submission 
{
    echo 'CORRECT';
}

?>