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

            window.location.href = "http://127.0.0.1:8000/";
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
            if (errors.date_of_birth[0] === "The date of birth field must be a date before 2009-03-22.") {
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
});