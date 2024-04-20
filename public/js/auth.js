$(document).ready(function() {
    // User Authentication
    $('#loginForm').submit(function(form) {
        form.preventDefault();

        axios.post("/login", {
            email: $('#login-email').val(),
            password: $('#login-password').val()
        })
        .then(function(response) {
            $('.text-danger').text('');
            $('#login-email').val('');
            $('#login-password').val('');

            location.reload();
        })
        .catch(function(error) {
            if (error.response && error.response.status === 422) {
                loginValidationsErrors(error.response.data.errors);
            } else if (error.response && error.response.status === 401) {
                Swal.fire({
                    title: "Invalid Credentials!",
                    text: "Check your Email and Password!",
                    icon: "info"
                });
            } else if (error.response && error.response.status === 403) {
                Swal.fire({
                    title: "Oops",
                    text: "Verification Pending!",
                    icon: "warning"
                });
            } else {
                Swal.fire({
                    title: "Server Error",
                    text: "Something Went Wrong!",
                    icon: "error"
                });
            }
        });
    });

    // User Authentication Validations Error
    function loginValidationsErrors(errors) {
        $('.text-danger').text('');

        if (errors.email) {
            $('#login-email-error').text(errors.email[0]);
        }

        if (errors.password) {
            $('#login-password-error').text(errors.password[0]);
        }
    }
    
    // Member Signup
    $('#signupForm').submit(function(form) {
        form.preventDefault();
        
        axios.post("/signup", {
            name: $('#signup-name').val(),
            email: $('#signup-email').val(),
            gender: $('#signup-gender').val(),
            date_of_birth: $('#signup-dob').val(),
            password: $('#signup-password').val(),
            confirm_password: $('#signup-confirm-password').val(),
        })
        .then(function(response) {
            $('.text-danger').text('');
            $('#signup-name').val('');
            $('#signup-email').val('');
            $('#signup-gender').val('');
            $('#signup-dob').val('');
            $('#signup-password').val('');
            $('#signup-confirm-password').val('');

            setTimeout(()=> {
                window.location.href = "http://127.0.0.1:8000/login";
            }, 1500);

            Swal.fire({
                position: "center",
                icon: "success",
                title: "Account Created Successfully",
                showConfirmButton: false,
                timer: 1500
            });
        })
        .catch(function(error) {
            if (error.response && error.response.status === 422) {
                signupValidationsErrors(error.response.data.errors);
            } else {
                Swal.fire({
                    title: "Server Error",
                    text: "Something Went Wrong!",
                    icon: "error"
                });
            }
        });
    });

    // Member Signup Validations Error
    function signupValidationsErrors(errors) {
        $('.text-danger').text('');

        if (errors.name) {
            $('#signup-name-error').text(errors.name[0]);
        }

        if (errors.email) {
            $('#signup-email-error').text(errors.email[0]);
        }

        if (errors.gender) {
            $('#signup-gender-error').text(errors.gender[0]);
        }

        if (errors.date_of_birth) {
            if (errors.date_of_birth[0] === "The date of birth field must be a date before 2009-04-20.") {
                $('#signup-dob-error').text('You should be at least 15 years old!');
            } else {
                $('#signup-dob-error').text(errors.date_of_birth[0]);
            }
        }

        if (errors.password) {
            $('#signup-password-error').text(errors.password[0]);
        }
        
        if (errors.confirm_password) {
            $('#signup-confirm-password-error').text(errors.confirm_password[0]);
        }
    }

    // Trainer Registration
    $('#registerForm').submit(function(form) {
        form.preventDefault();

        axios.post("/register", {
            name: $('#register-name').val(),
            email: $('#register-email').val(),
            date_of_birth: $('#register-dob').val(),
            phone: $('#register-phone').val(), 
            gender: $('#register-gender').val(),
            occupation: $('#register-occupation').val(),
            certificate_id: $('#register-certificate-id').val(),
            issue_date: $('#register-issue-date').val(),
            expiry_date: $('#register-expiry-date').val(),
            issued_authority: $('#register-issued-authority').val(),
            password: $('#register-password').val(),
            confirm_password: $('#register-confirm-password').val(),
        })
        .then(function(response) {
            $('.text-danger').text('');
            $('#register-name').val('');
            $('#register-email').val('');
            $('#register-dob').val('');
            $('#register-phone').val('');
            $('#register-gender').val('');
            $('#register-occupation').val('');
            $('#register-certificate-id').val('');
            $('#register-issue-date').val('');
            $('#register-expiry-date').val('');
            $('#register-issued-authority').val('');
            $('#register-password').val('');
            $('#register-confirm-password').val('');

            Swal.fire({
                title: "Success",
                text: "Our Team will reach you after Verifying your details!",
                icon: "info"
            })
            .then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "http://127.0.0.1:8000/";
                }
            });
        })
        .catch(function(error) {
            if (error.response && error.response.status === 422) {
                registerValidationsErrors(error.response.data.errors);
            } else {
                Swal.fire({
                    title: "Server Error",
                    text: "Something Went Wrong!",
                    icon: "error"
                });
            }
        });
    });

    // Trainer Registration Validations Error
    function registerValidationsErrors(errors) {
        $('.text-danger').text('');

        if (errors.name) {
            $('#register-name-error').text(errors.name[0]);
        }

        if (errors.email) {
            $('#register-email-error').text(errors.email[0]);
        }

        if (errors.date_of_birth) {
            if (errors.date_of_birth[0] === "The date of birth field must be a date before 2006-04-20.") {
                $('#register-dob-error').text('You should be at least 18 years old!');
            } else {
                $('#register-dob-error').text(errors.date_of_birth[0]);
            }
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