// LOGIN INPUT VALIDATION
function loginValidation() {
    var userEmail = document.forms["loginForm"]["userEmail"].value;
    var userPassword = document.forms["loginForm"]["userPassword"].value;
    var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(userEmail =='') {
        alert( "Email is required." );
        document.loginForm.userEmail.focus() ;
        return false;
    } else if(userPassword=='') {
        alert("Password is required.");
        document.loginForm.userPassword.focus() ;
        return false;
    } else if(!emailFilter.test(userEmail)){
        alert( "Enter valid email." );
        document.loginForm.userEmail.focus() ;
        return false;
    }
}