
//AJAX REQUEST
$('#employeeSubmit').submit(function() {

  var firstName, lastName, MI; 

  firstName = $('#firstName').val();
  lastName = $('#lastName').val();
  MI = $('#MI').val();

  var data = new Object();
  data.firstName = firstName;
  data.lastName = lastName;
  data.MI = MI; 

  var options = new Object();
  options.data = data;
  options.dataType = 'text';
  options.type = 'GET';
  options.success = function(response) {
    //if AJAX Request is a success

    if (response == 'CORRECT') {
      $('#info').text('Thank you for your submission!');
    }
    else 
    {
      $('#info').text('Something appears to be wrong... Try again?')
    } 
  } // END OF AJAX SUCCESS
  options.url = 'employeeSubmit.php';

  //PERFORM REQUEST
  $.ajax(options);
});