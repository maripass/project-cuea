// CompanyDetails INPUT VALIDATION
function companyDetailsValidation() {
    var firstName = document.forms["companyDetailsForm"]["Name"].value;
    var email     = document.forms["companyDetailsForm"]["email"].value;
    var telephone   = document.forms["companyDetailsForm"]["telephone"].value;
    var adress   = document.forms["ccompanyDetailsForm"]["adress"].value;
    var costperkgwatt   = document.forms["companyDetailsForm"]["costperkgwatt"].value;
    if(Name =='') {
        alert( " Name is required." );
        document.companyDetailsForm.firstName.focus() ;
        return false;
    }  else if(email == '') {
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
