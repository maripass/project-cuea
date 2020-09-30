$(document).ready(function() {
    // $(".contact-form").show();
    $(".contact-form").validate({
        rules: {
            firstName: 'required',
            lastName: 'required',
            subject: 'required',
            message: 'required',
            email: {
                required: true,
                email: true
            }
        }
    });
});