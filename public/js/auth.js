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

    // Member Signup Validation Errors
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
            $('#signup-gender-error').text(errors.gender[0]);
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

    // Trainer Registration
    $("#registerForm").submit(function(form) {
        form.preventDefault();

        axios.post("/register", {
            name: $("#name").val(),
            email: $("#email").val(),
            dob: $("#dob").val(),
            phone: $("#phone").val(),
            gender: $("#gender").val(),
            occupation: $("#occupation").val(),
            certificate_id: $("#certificate_id").val(),
            issue_date: $("#issue_date").val(),
            expiry_date: $("#expiry_date").val(),
            issued_authority: $("#issued_authority").val(),
            password: $("#password").val(),
            confirm_password: $("#confirm_password").val(),
        })
        .then(function(response) {
            $("#name").val('');
            $("#email").val('');
            $("#dob").val('');
            $("#phone").val('');
            $("#gender").val('');
            $("#occupation").val('');
            $("#certificate_id").val('');
            $("#issue_date").val('');
            $("#expiry_date").val('');
            $("#issued_authority").val('');
            $("#password").val('');
            $("#confirm_password").val('');
            $('.text-danger').text('');
            setTimeout(function () {
                window.location.href = "http://127.0.0.1:8000/";
            }, 4000);
            Swal.fire({
                title: "Success",
                text: "Our Team will go through your Details and Inform you!",
                icon: "success"
            });
        })
        .catch(function(error) {
            if (error.response && error.response.status === 422) {
                displayRegisterValidationErrors(error.response.data.errors);
            } else {
                Swal.fire({
                    title: "Error",
                    text: "Something Went Wrong!",
                    icon: "error"
                  });
            }
        });
    });

    // Trainer Registraion Validation Errors
    function displayRegisterValidationErrors(errors) {
        // Reset previous error messages
        $('.text-danger').text('');

        // Display new error messages
        if (errors.name) {
            $('#register-name-error').text(errors.name[0]);
        }

        if (errors.email) {
            $('#register-email-error').text(errors.email[0]);
        }

        if (errors.dob) {
            $('#register-dob-error').text(errors.dob[0]);
        }

        if (errors.phone) {
            $('#register-phone-error').text(errors.phone[0]);
        }

        if (errors.gender) {
            $('#register-gender-error').text(errors.gender[0]);
        }

        if (errors.occupation) {
            $('#register-occupation-error').text(errors.occupation[0]);
        }

        if (errors.certificate_id) {
            $('#register-certificate-id-error').text(errors.certificate_id[0]);
        }  

        if (errors.issue_date) {
            $('#register-issue-date-error').text(errors.issue_date[0]);
        }  

        if (errors.expiry_date) {
            $('#register-expiry-date-error').text(errors.expiry_date[0]);
        }  

        if (errors.issued_authority) {
            $('#register-issued-authority-error').text(errors.issued_authority[0]);
        }  

        if (errors.password) {
            $('#register-password-error').text(errors.password[0]);
        }

        if (errors.confirm_password) {
            $('#register-confirm-password-error').text(errors.confirm_password[0]);
        }
    } 
});