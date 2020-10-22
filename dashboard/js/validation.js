// CompanyDetails INPUT VALIDATION
function companyDetailsValidation() {
    var firstName = document.forms["companyDetailsForm"]["firstName"].value;
    var lastName  = document.forms["companyDetailsForm"]["lastName"].value;
    var email     = document.forms["companyDetailsForm"]["email"].value;
    var telephone   = document.forms["companyDetailsForm"]["telephone"].value;
    var adress   = document.forms["companyDetailsForm"]["adress"].value;
    var costperkgwatt   = document.forms["companyDetailsForm"]["costperkgwatt"].value;
    if(firstName =='') {
        alert( "First Name is required." );
        document.companyDetailsForm.firstName.focus() ;
        return false;
    } else if(lastName=='') {
         alert("Last Name is required.");
       document.companyDetailsForm.lastName.focus() ;
        return false;
    } else if(email == '') {
        alert("Email is required.");
      document.companyDetailsForm.email.focus() ;
       return false;
   } else if(telephone == '') {
        alert("telephone is required.");
      document.companyDetailsForm.telephone.focus() ;
       return false;
   } else if(adress == '') {
       alert("adress is required.");
       document.companyDetailsForm.adress.focus() ;
       return false;
    }
    else if(costperkgwatt == '') {
        alert("costperkgwatt is required.");
        document.companyDetailsForm.costperkgwatt.focus() ;
        return false;
     }
     
}

// PROFILE INPUT VALIDATION
function ProfileValidation() {
    var firstName = document.forms["ProfileForm"]["firstName"].value;
    var lastName  = document.forms["ProfileForm"]["lastName"].value;
    var email     = document.forms["ProfileForm"]["email"].value;
    var telephone   = document.forms["ProfileForm"]["telephone"].value;
    var adress   = document.forms["ProfileForm"]["adress"].value;
    if(firstName =='') {
        alert( "First Name is required." );
        document.Profile.firstName.focus() ;
        return false;
    } else if(lastName=='') {
         alert("Last Name is required.");
       document.ProfileForm.lastName.focus() ;
        return false;
    } else if(email == '') {
        alert("Email is required.");
      document.ProfileForm.email.focus() ;
       return false;
   } else if(telephone == '') {
        alert("telephone is required.");
      document.ProfilesForm.telephone.focus() ;
       return false;
   } else if(adress == '') {
       alert("adress is required.");
       document.ProfileForm.adress.focus() ;
       return false;
    }
}
