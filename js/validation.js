// LOGIN INPUT VALIDATION
function loginValidation() {
    var userEmail = document.forms["loginForm"]["userEmail"].value;
    var userPassword = document.forms["loginForm"]["userPassword"].value;
    if(userEmail =='') {
        alert( "Email is required." );
        document.loginForm.userEmail.focus() ;
        return false;
    } else if(userPassword=='') {
        alert("Password is required.");
        document.loginForm.userPassword.focus() ;
        return false;
    }
}


// FORGOT PASSWORD INPUT VALIDATION
function forgotPasswordValidation() {
    var userEmail = document.forms["forgotPasswordForm"]["userEmail"].value;
    if(userEmail =='') {
        alert( "Email is required." );
        document.forgotPasswordForm.userEmail.focus() ;
        return false;
    }
}

// FORGOT PASSWORD INPUT VALIDATION
function profileChangePasswordValidation() {
    var oldPassword = document.forms["profileChangePasswordForm"]["oldPassword"].value;
    var newPassword = document.forms["profileChangePasswordForm"]["newPassword"].value;
    var confirmPassword = document.forms["profileChangePasswordForm"]["confirmPassword"].value;
    if(oldPassword =='') {
        alert( "Old Password is required." );
        document.profileChangePasswordForm.oldPassword.focus() ;
        return false;
    } else if(newPassword =='') {
        alert( "New Password is required." );
        document.profileChangePasswordForm.newPassword.focus() ;
        return false;
    }  else if(confirmPassword !=newPassword) {
        alert( "Passwords do not match." );
        document.profileChangePasswordForm.confirmPassword.focus() ;
        return false;
    }
}


// FORGOT PASSWORD INPUT VALIDATION
function profileDeleteAccountValidation() {
    var password = document.forms["profileDeleteAccountForm"]["password"].value;
    if(password =='') {
        alert( "Password is required." );
        document.profileDeleteAccountForm.password.focus() ;
        return false;
    }
}


// CREATE ACCOUNT INPUT VALIDATION
function createAccountValidation() {
    var firstName    = document.forms["createAccountForm"]["firstName"].value;
    var lastName     = document.forms["createAccountForm"]["lastName"].value;
    var userEmail    = document.forms["createAccountForm"]["userEmail"].value;
    var userPassword = document.forms["createAccountForm"]["userPassword"].value;
    var confirmUserPassword = document.forms["createAccountForm"]["confirmUserPassword"].value;
    if(firstName =='') {
        alert( "First Name is required." );
        document.createAccountForm.firstName.focus() ;
        return false;
    } else if(lastName=='') {
        alert("Last Name is required.");
        document.createAccountForm.lastName.focus() ;
        return false;
    } else if(userEmail=='') {
        alert("Email is required.");
        document.createAccountForm.userEmail.focus() ;
        return false;
    } else if(userPassword=='') {
        alert("Password is required.");
        document.createAccountForm.userPassword.focus() ;
        return false;
    }
    else if(userPassword.length < 6) {
        alert("Password should be greater than 6 characters.");
        document.createAccountForm.userPassword.focus() ;
        return false;
    } else if(confirmUserPassword=='') {
        alert("Confirm Password is required.");
        document.createAccountForm.confirmUserPassword.focus() ;
        return false;
    } else if(userPassword != confirmUserPassword) {
        alert("Passwords do not match.");
        document.createAccountForm.confirmUserPassword.focus() ;
        return false;
    }
}


// CONTACT INPUT VALIDATION
function contactValidation() {
    var firstName = document.forms["contactForm"]["firstName"].value;
    var lastName  = document.forms["contactForm"]["lastName"].value;
    var email     = document.forms["contactForm"]["email"].value;
    var telephone     = document.forms["contactForm"]["telephone"].value;
    var subject   = document.forms["contactForm"]["subject"].value;
    var message   = document.forms["contactForm"]["message"].value;
    if(firstName =='') {
        alert( "First Name is required." );
        document.contactForm.firstName.focus() ;
        return false;
    } else if(lastName=='') {
         alert("Last Name is required.");
       document.contactForm.lastName.focus() ;
        return false;
    } else if(email == '') {
        alert("Email is required.");
      document.contactForm.email.focus() ;
       return false;
   } else if(telephone == '') {
        alert("Telephone is required.");
        document.contactForm.telephone.focus() ;
        return false;
    } else if(subject == '') {
        alert("Subject is required.");
      document.contactForm.subject.focus() ;
       return false;
   } else if(message == '') {
       alert("Message is required.");
       document.contactForm.message.focus() ;
       return false;
    }
}