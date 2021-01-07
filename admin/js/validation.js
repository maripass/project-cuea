// CompanyDetails INPUT VALIDATION
function companyDetailsValidation() {
    var companyName = document.forms["companyDetailsForm"]["companyName"].value;
    var userEmail     = document.forms["companyDetailsForm"]["userEmail"].value;
    var phoneNumber   = document.forms["companyDetailsForm"]["phoneNumber"].value;
    var address   = document.forms["companyDetailsForm"]["address"].value;
    var CostPerKgWatt   = document.forms["companyDetailsForm"]["CostPerKgWatt"].value;
    if(companyName =='') {
        alert("Name is required.");
        document.companyDetailsForm.companyName.focus() ;
        return false;
    } else if(userEmail == '') {
        alert("Email is required.");
      document.companyDetailsForm.userEmail.focus() ;
       return false;
   } else if(phoneNumber == '') {
        alert("Telephone is required.");
      document.companyDetailsForm.phoneNumber.focus() ;
       return false;
   } else if(address == '') {
       alert("Address is required.");
       document.companyDetailsForm.address.focus() ;
       return false;
    } else if(CostPerKgWatt == '') {
        alert("Costperkgwatt is required.");
        document.companyDetailsForm.CostPerKgWatt.focus() ;
        return false;
 }
     
}

// PROFILE INPUT VALIDATION
function profileValidation() {
    var firstName = document.forms["profileForm"]["firstName"].value;
    var lastName  = document.forms["profileForm"]["lastName"].value;
    var userEmail     = document.forms["profileForm"]["userEmail"].value;
    var phoneNumber   = document.forms["profileForm"]["phoneNumber"].value;
    var userAddress   = document.forms["profileForm"]["userAddress"].value;
    if(firstName =='') {
        alert( "First Name is required." );
        document.profileForm.firstName.focus() ;
        return false;
    } else if(lastName=='') {
         alert("Last Name is required.");
       document.profileForm.lastName.focus() ;
        return false;
    } else if(userEmail == '') {
        alert("Email is required.");
      document.profileForm.userEmail.focus() ;
       return false;
   } else if(isNaN(phoneNumber)) {
        alert("Telephone is required.");
      document.profileForm.phoneNumber.focus() ;
       return false;
   } else if(userAddress == '') {
       alert("Adress is required.");
       document.profileForm.userAddress.focus() ;
       return false;
    }
}

// NEWSLETTER INPUT VALIDATION
function newletterValidation() {
    var name = document.forms["newletterForm"]["name"].value;
    var description  = document.forms["newletterForm"]["description"].value;
    if(name == '') {
        alert( "Name is required." );
        document.newletterForm.name.focus();
        return false;
    } else if(description == '') {
         alert("Description is required.");
       document.newletterForm.description.focus();
        return false;
    }
}

// HELP INPUT VALIDATION
function helpValidation() {
    var message = document.forms["helpForm"]["message"].value;
    if(message == '') {
        alert( "Please write something." );
        document.helpForm.message.focus();
        return false;
    }
}


// ADD BLOG INPUT VALIDATION
function addBlogValidation() {
    var name = document.forms["addBlogpForm"]["name"].value;
    var image = document.forms["addBlogpForm"]["image"].value;
    var description = document.forms["addBlogpForm"]["description"].value;
    if(name == '') {
        alert( "Name is required." );
        document.addBlogpForm.name.focus();
        return false;
    } else if(image =='') {
        alert("Image is required.");
      document.addBlogpForm.image.focus() ;
       return false;
    } else if(description =='') {
        alert("Description is required.");
      document.addBlogpForm.description.focus() ;
       return false;
    }
}

// ADD BLOG INPUT VALIDATION
function updateBlogValidation() {
    var name = document.forms["updateBlogpForm"]["name"].value;
    var image = document.forms["updateBlogpForm"]["image"].value;
    var description = document.forms["updateBlogpForm"]["description"].value;
    if(name == '') {
        alert( "Name is required." );
        document.updateBlogpForm.name.focus();
        return false;
    } else if(image =='') {
        alert("Image is required.");
      document.updateBlogpForm.image.focus() ;
       return false;
    } else if(description =='') {
        alert("Description is required.");
      document.updateBlogpForm.description.focus() ;
       return false;
    }
}

// ADD USER INPUT VALIDATION
function addUserValidation() {
    var firstName = document.forms["addUserForm"]["firstName"].value;
    var lastName  = document.forms["addUserForm"]["lastName"].value;
    var userEmail = document.forms["addUserForm"]["userEmail"].value;
    var isAdmin = document.forms["addUserForm"]["isAdmin"].value;
    var phoneNumber = document.forms["addUserForm"]["phoneNumber"].value;
    var password = document.forms["addUserForm"]["password"].value;
    var confirmPassword = document.forms["addUserForm"]["confirmPassword"].value;
    if(firstName == '') {
        alert( "First Name is required." );
        document.addUserForm.firstName.focus();
        return false;
    } else if(lastName =='') {
        alert("Last Name is required.");
      document.addUserForm.lastName.focus() ;
       return false;
    } else if(userEmail =='') {
        alert("User Email is required.");
        document.addUserForm.userEmail.focus() ;
       return false;
    } else if(isAdmin == '') {
        alert("Is Admin is required.");
        document.addUserForm.isAdmin.focus() ;
       return false;
    } else if(phoneNumber == '') {
        alert("Phone Number is required.");
        document.addUserForm.phoneNumber.focus() ;
       return false;
    } else if(password.length < 6) {
        alert("Password should be greater than 6 characters.");
        document.addUserForm.password.focus() ;
       return false;
    } else if(password == '') {
        alert("Password is required.");
        document.addUserForm.password.focus() ;
       return false;
    } else if(confirmPassword == '') {
        alert("Confirm Password is required.");
        document.addUserForm.confirmPassword.focus() ;
       return false;
    } else if(password != confirmPassword) {
        alert("Passwords do not match.");
        document.addUserForm.confirmPassword.focus() ;
       return false;
    } 
}


// UPDATE USER INPUT VALIDATION
function updateUserValidation() {
    var firstName = document.forms["updateUserForm"]["firstName"].value;
    var lastName  = document.forms["updateUserForm"]["lastName"].value;
    var isAdmin   = document.forms["updateUserForm"]["isAdmin"].value;
    if(firstName == '') {
        alert( "First Name is required." );
        document.updateUserForm.firstName.focus();
        return false;
    } else if(lastName =='') {
        alert("Last Name is required.");
      document.updateUserForm.lastName.focus() ;
       return false;
    } else if(isAdmin == '') {
        alert("Is Admin is required.");
        document.updateUserForm.isAdmin.focus() ;
       return false;
    }  
}

// CONTACT INPUT VALIDATION
function contactValidation() {
    var message = document.forms["contactForm"]["message"].value;
    if(message == '') {
        alert( "Please write something." );
        document.contactForm.message.focus();
        return false;
    }
}

// UPDATE-METER-BOX INPUT VALIDATION
function UpdateMeterBoxValidation() {
    var user = document.forms["UpdateMeterBoxForm"]["user"].value;
    var meterBoxActive  = document.forms["UpdateMeterBoxForm"]["meterBoxActive"].value;
    var electricityActive     = document.forms["UpdateMeterBoxForm"]["electricityActive"].value;
    if(user =='') {
        alert( "user is required." );
        document.UpdateMeterBoxForm.user.focus() ;
        return false;
    } else if(meterBoxActive =='') {
         alert("meterBoxActive is required.");
       document.UpdateMeterBoxForm.meterBoxActive.focus() ;
        return false;
    } else if(electricityActive == '') {
        alert("electricityActive is required.");
      document.UpdateMeterBoxForm.electricityActive.focus() ;
       return false;
    }
}

// ADD-METER-BOX INPUT VALIDATION
function addMeterBoxValidation() {
    var meterBoxNumber = document.forms["addMeterBoxForm"]["meterBoxNumber"].value;
    var meterBoxActive = document.forms["addMeterBoxForm"]["meterBoxActive"].value;
    var user        = document.forms["addMeterBoxForm"]["user"].value;
    var address     = document.forms["addMeterBoxForm"]["address"].value;
    var houseNumber = document.forms["addMeterBoxForm"]["houseNumber"].value;
    if(meterBoxNumber =='') {
        alert( "Meter Box Number is required." );
        document.addMeterBoxForm.meterBoxNumber.focus() ;
        return false;
    } else if(meterBoxActive =='') {
         alert("Meter Box Active is required.");
       document.addMeterBoxForm.meterBoxActive.focus() ;
        return false;
    } else if(user == '') {
        alert("User is required.");
      document.addMeterBoxForm.user.focus() ;
       return false;
    } else if(address == '') {
        alert("Address is required.");
      document.addMeterBoxForm.address.focus() ;
       return false;
    } else if(houseNumber == '') {
        alert("House Number is required.");
      document.addMeterBoxForm.houseNumber.focus() ;
       return false;
    }
}
