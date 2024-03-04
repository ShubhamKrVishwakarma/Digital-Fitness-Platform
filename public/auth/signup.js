$(document).ready(function() {
    // Member Signup
    $("#signupForm").submit(function(form) {
        form.preventDefault();
        
        axios.post("/signup", {
            name: $("#name").val(),
            email: $("#email").val(),
            gender: $("#gender").val(),
            dob: $("#dob").val(),
            password: $("#password").val(),
            confirm_password: $("#confirm_password").val()
        })
        .then(function(response) {
            $("#name").val('');
            $("#email").val('');
            $("#gender").val('');
            $("#dob").val('');
            $("#password").val('');
            $("#confirm_password").val('');
            $('.text-danger').text('');
            setTimeout(function () {
                window.location.href = "http://127.0.0.1:8000/";
            }, 1700);
            Swal.fire({
                title: "Success",
                text: "Account Created Successfully!",
                icon: "success"
            });
        })
        .catch(function(error) {
            if (error.response && error.response.status === 422) {
                displaySignupValidationErrors(error.response.data.errors);
            } else {
                Swal.fire({
                    title: "Error",
                    text: "Something Went Wrong!",
                    icon: "error"
                  });
            }
        });
    });

    // Validation Errors
    function displaySignupValidationErrors(errors) {
        // Reset previous error messages
        $('.text-danger').text('');

        // Display new error messages
        if (errors.name) {
            $('#signup-name-error').text(errors.name[0]);
        }

        if (errors.email) {
            $('#signup-email-error').text(errors.email[0]);
        }

        if (errors.gender) {
            $('signup-gender-error').text(errors.gender[0]);
        }

        if (errors.dob) {
            $('#signup-dob-error').text(errors.dob[0]);
        }

        if (errors.password) {
            $('#signup-password-error').text(errors.password[0]);
        }

        if (errors.confirm_password) {
            $('#signup-confirm-password-error').text(errors.confirm_password[0]);
        }
    }
});