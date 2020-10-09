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
    
    //  ADD-METER-BOX VALIDATION FORM
    $(".add-meter-box-validation-form").validate({
        rules: {
            user: 'required',
            meterBoxActive: 'required',
            electricityActive: 'required',
        }
    });

});
//  ADD-USER-VALIDATION FORM
$(".add-user-validation-form").validate({
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
//  COMPANY-DETAILS-VALIDATION FORM
$(".company-details-validation-form").validate({
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
            number: true,
        },
        CostPerKgWatt: {
            required: true,
            number: true,
        }
    }
});