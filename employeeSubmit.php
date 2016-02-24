<?php 

//This script is the result of an AJAX request. 
//This script expects to recieve all valuations required for an Employee Submission. 
//The script returns a string indicating results. 

if (isset($_GET['firstName'] ,$_GET['lastName'],$_GET['MI'])) {

    echo 'CORRECT';
}
else //No Submission 
{
    echo 'INCORRECT';
}

?>
