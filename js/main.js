
//AJAX REQUEST
$(function() {
  $('.errorMsg').hide();

  $('#employeeForm').submit(function( event ) {

    event.preventDefault(); //Hijack event from PHP to refrain page reload. 
    var firstName, lastName, MI, DOB, address, zip, state, country, 
  licenseDate, hireDate, salary, termDate; 

    firstName = $('#firstName').val();
    lastName = $('#lastName').val();
    MI = $('#MI').val();
    DOB = $('#DOB').val();
    address = $('#homeAddress').val();
    zip = $('#zip').val();
    state = $('#state').val();
    country = $('#country').val();
    licenseDate = $('#LD').val();
    hireDate = $('#HD').val();
    salary = $('#salary').val();
    termDate = $('#TD').val();

    var data = new Object();
    data.firstName = firstName;
    data.lastName = lastName;
    data.MI = MI; 
    data.DOB = DOB;
    data.address = address;
    data.zip = zip;
    data.state = state;
    data.country = country;
    data.licenseDate = licenseDate;
    data.hireDate = hireDate;
    data.salary = salary;
    data.termDate = termDate;

    var options = new Object();
    options.data = data;
    options.dataType = 'text';
    options.type = 'post';
    options.success = function(response) {
    //if AJAX Request is a success

    var data = jQuery.parseJSON(response); //parses PHP encoded JSON-result into an object

    //append the latest submittion to the DOM for the Accident Affected Employee Dropdown
    $('#name').append('<option value="' + data.val + '">' + data.name + '</option>');

    $('#empInfo').text(data.result);
   
  }; // END OF AJAX SUCCESS
  options.url = 'employeeSubmit.php';

    //PERFORM REQUEST
  $.ajax(options);
}); //END OF FORM SUBMISSION
  
  $('#accidentForm').submit(function( event ) {

    event.preventDefault(); //Hijack event from PHP to refrain page reload. 
    var name, accidentDate, location, description; 

    name = $('#name').val();
    accidentDate = $('#AD').val();
    location = $('#location').val();
    description = $('#description').val();

    var data = new Object();
    data.name = name;
    data.accidentDate = accidentDate;
    data.location = location; 
    data.description = description;

    var options = new Object();
    options.data = data;
    options.dataType = 'text';
    options.type = 'post';
    options.success = function(response) {
    //if AJAX Request is a success

    $('#acdInfo').text(response);

  }; // END OF AJAX SUCCESS
  options.url = 'accidentSubmit.php';
  
    //PERFORM REQUEST
  $.ajax(options);
  }); //END OF FORM SUBMISSION

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
