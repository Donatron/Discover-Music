// Create and send email

  var firstName = document.getElementById("first-name");
  var lastName = document.getElementById("last-name");
  var emailAddress = document.getElementById("email");
  var contactNumber = document.getElementById("phone-number");
  var instrument = document.getElementById("instrument");
  var emailBody = document.getElementById("enquiry");
  //1. Get user information
 
 function createEmail() { 
   var fullName = firstName.value + " " + lastName.value;
  
    console.log(firstName.value);
    console.log(lastName.value);
    console.log(fullName);
    console.log(emailAddress.value);
    console.log(contactNumber.value);
    console.log(instrument.value);
    console.log(emailBody.value);
};
  

  //2. Append information to email
    // Subject
    // Body
      // contact name
      // contact number
      // contact email

// Check inputs

function checkInput() {
  
  if (firstName.value === "") {
    console.log("Enter first name");
    return false;
  } else if(lastName.value === "") {
    console.log("Enter last name");
    return false;
  } else if (email.value === "") {
    console.log("Enter email");
    return false;
  } else if (contactNumber.value === "") {
    console.log("Enter phone number");
    return false;
  } else if (instrument.value === "") {
    console.log("Enter instrument");
    return false;
  } else if (emailBody.value === "") {
    console.log("Enter enquiry details");
    return false;
  }
  else {
    console.log("Checks: All good");
    return true
  }
};

$('#submit-button').click(function(){
  var $check = checkInput();
  
  if (!$check) {
    alert("Please complete all fields");
    console.log("This code is evaluating");
  } else {
  var $name = $("#first-name").val();
  
  createEmail();
  
  var $html = "<h3 "
  $html += "class='enquiry-message'>"
  $html += "Thank you for your enquiry, ";
  $html += $name + ". ";
  $html += "A representative of Discover Music will be in contact with you shortly (usually within 24 hours). Have a nice day! :-)";
  $html += "</h3>"
  $(this).parent().replaceWith($html);
  
  return false;
  }
});
