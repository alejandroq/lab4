
//AJAX REQUEST
$(function() {
  $('.errorMsg').hide();

  $('#employeeForm').submit(function( event ) {

    event.preventDefault(); //Hijack event from PHP to refrain page reload. 
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
    options.type = 'post';
    options.success = function(response) {
      //if AJAX Request is a success

      if (response == 'CORRECT') {
        $('#info').text('Thank you for your submission!');
      }
      else 
      {
        $('#info').text('Something appears to be wrong... Try again?')
      } 

    }; // END OF AJAX SUCCESS
    options.url = 'employeeSubmit.php';

    //PERFORM REQUEST
    $.ajax(options);
  }); //END OF FORM SUBMISSION
}); //END OF DOCUMENT READY

//CLICK EVENTS
 $('#employeeSwitch').on('click', function() {
    $('#employee').toggle(300);
    if ($('#employeeSwitch').hasClass('active')) 
    {
      $('#employeeSwitch').removeClass('active');
      $('#employeeSwitch').addClass('inactive');
    }
    else
    {
      $('#employeeSwitch').removeClass('inactive');
      $('#employeeSwitch').addClass('active');
    }
  });

 $('#accidentSwitch').on('click', function() {
    $('#accident').toggle(300);
    if ($('#accidentSwitch').hasClass('active')) 
    {
      $('#accidentSwitch').removeClass('active');
      $('#accidentSwitch').addClass('inactive');
    }
    else
    {
      $('#accidentSwitch').removeClass('inactive');
      $('#accidentSwitch').addClass('active');
    }
  });

  $('#dashboardSwitch').on('click', function() {
    $('#dashboard').toggle(300);
    if ($('#dashboardSwitch').hasClass('active')) 
    {
      $('#dashboardSwitch').removeClass('active');
      $('#dashboardSwitch').addClass('inactive');
    }
    else
    {
      $('#dashboardSwitch').removeClass('inactive');
      $('#dashboardSwitch').addClass('active');
    }
  });
