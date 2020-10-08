$(document).ready(function() {
    //  PROFILE VALIDATION FORM
    $(".profile-validation-form").validate({
        rules: {
            firstName: 'required',
            lastName: 'required',
            userAddress: 'required',
            userEmail: {
                required: true,
                email: true
            },
            phoneNumber: {
                required: true,
                number: true
            }
        }
    });
});