<?php 

//This script is the result of an AJAX request. 
//This script expects to recieve all valuations required for an Employee Submission. 
//The script returns a string indicating results. 

if (!empty($_POST['firstName']) && !empty($_POST['lastName'])) {

    echo 'CORRECT';
}
else //No Submission 
{
    echo 'INCORRECT';
}

?>
