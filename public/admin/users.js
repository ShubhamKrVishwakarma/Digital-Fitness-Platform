$(document).ready(function() {
    const usersTable = $('#usersTable');
    const addMember = $('#addMember');
    const addTrainer = $('#addTrainer');
    const manageUser = $('#manageUser');

    const addMemberButton = $('#addMemberButton');
    const addTrainerButton = $('#addTrainerButton');
    const manageUserButton = $('[data-manage-user]');
    const usersTableButton = $('[data-view-users]');

    addMemberButton.on("click", function() {
        usersTable.hide();
        addTrainer.hide();
        manageUser.hide();
        addMember.show();
    });

    addTrainerButton.on("click", function() {
        usersTable.hide();
        addMember.hide();
        manageUser.hide();
        addTrainer.show();
    });

    usersTableButton.on("click", function() {
        addMember.hide();
        addTrainer.hide();
        manageUser.hide();
        usersTable.show();
    });

    manageUserButton.on("click", function() {
        usersTable.hide();
        addMember.hide();
        addTrainer.hide();
        manageUser.show();

        const userId = $(this).data('manage-user');
        const url = window.location.href + "/getUserDetails";

        // get user details
        axios.post(url, {
            id: userId
        })
        .then(function(response) {
            if (response.data.success) {
                const userData = response.data.user;
                
                $('#update-name').val(userData.name);
                $('#update-email').val(userData.email);
                $('#update-gender').val(userData.gender);
                $('#update-dob').val(userData.dob);
                $('#update-phone').val(userData.phone);
                $('#update-address').val(userData.address);
                $('#update-city').val(userData.city);
                $('#update-bio').val(userData.bio);
                $('#user-role').val(userData.role);

                if (userData.role === "trainer") {
                    $('#trainer-details').show();
                    $('#update-occupation').val(userData.occupation);
                    $('#update-certificate-id').val(userData.certificate-id);
                    $('#update-issue-date').val(userData.issue-date);
                    $('#update-expiry-date').val(userData.expiry-date);
                    $('#update-issued-authority').val(userData.issued-authority);
                }
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Something Went Wrong!",
                    showConfirmButton: false,
                    timer: 1500
                });
                usersTable.hide();
                addTrainer.hide();
                manageUser.hide();
                addMember.show();
            }
        })
        .catch(function(error) {
            if (error.response && error.response.status === 401) {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "User Doesn't Exists!",
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Something Went Wrong!",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            usersTable.hide();
            addTrainer.hide();
            manageUser.hide();
            addMember.show();
        });
    });

    // Remove All Validation Errors
    function removeValidationErrors() {
        let errorSpans = document.querySelectorAll(".errors");
        errorSpans.forEach(span => {
            span.innerText = '';
        });
    }

    // Add Member
    $('#addMemberForm').submit(function(form) {
        form.preventDefault();

        let url = window.location.href + "/addMember";

        axios.post(url, {
            name: $('#member-name').val(),
            email: $('#member-email').val(),
            gender: $('#member-gender').val(),
            dob: $('#member-dob').val(),
            phone: $('#member-phone').val(),
            address: $('#member-address').val(),
            city: $('#member-city').val(),
            zip_code: $('#member-zip-code').val(),
            state: $('#member-state').val(),
            bio: $('#member-bio').val(),
            profile_pic: $('#member-profile-pic').val(),
            password: $('#member-password').val(),
            confirm_password: $('#member-confirm-password').val()
        })
        .then(function() {
            removeValidationErrors();
            
            $('#member-name').val('');
            $('#member-email').val('');
            $('#member-gender').val('');
            $('#member-dob').val('');
            $('#member-phone').val('');
            $('#member-address').val('');
            $('#member-city').val('');
            $('#member-zip-code').val('');
            $('#member-state').val('');
            $('#member-bio').val('');
            $('#member-profile-pic').val('');
            $('#member-password').val('');
            $('#member-confirm-password').val('');

            Swal.fire({
                position: "center",
                icon: "success",
                title: "Member Added Successfully!",
                showConfirmButton: false,
                timer: 1500
            });
        })
        .catch(function(error) {
            if (error.response && error.response.status === 422) {
                memberValidationErrors(error.response.data.errors);
            } else {
                Swal.fire({
                    title: "Server Error",
                    text: "Something Went Wrong!",
                    icon: "error"
                });
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Something went Wrong!",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });

    // Add Member Validation Errors
    function memberValidationErrors(errors) {
        removeValidationErrors();

        if (errors.name) {
            $('#member-name-error').text(errors.name[0]);
        }

        if (errors.email) {
            $('#member-email-error').text(errors.email[0]);
        }

        if (errors.gender) {
            $('#member-gender-error').text(errors.gender[0]);
        }

        if (errors.dob) {
            $('#member-dob-error').text(errors.dob[0]);
        }

        if (errors.phone) {
            $('#member-phone-error').text(errors.phone[0]);
        }

        if (errors.address) {
            $('#member-address-error').text(errors.address[0]);
        }

        if (errors.city) {
            $('#member-city-error').text(errors.city[0]);
        }

        if (errors.zip_code) {
            $('#member-zip-code-error').text(errors.zip_code[0]);
        }

        if (errors.state) {
            $('#member-state-error').text(errors.state[0]);
        }

        if (errors.bio) {
            $('#member-bio-error').text(errors.bio[0]);
        }

        if (errors.profile_pic) {
            $('#member-profile-pic-error').text(errors.profile_pic[0]);
        }

        if (errors.password) {
            $('#member-password-error').text(errors.password[0]);
        }

        if (errors.confirm_password) {
            $('#member-confirm-password-error').text(errors.confirm_password[0]);
        }
    }

    // Add Member
    $('#addTrainerForm').submit(function(form) {
        form.preventDefault();

        let url = window.location.href + "/addTrainer";

        axios.post(url, {
            name: $('#trainer-name').val(),
            email: $('#trainer-email').val(),
            gender: $('#trainer-gender').val(),
            dob: $('#trainer-dob').val(),
            phone: $('#trainer-phone').val(),
            address: $('#trainer-address').val(),
            city: $('#trainer-city').val(),
            zip_code: $('#trainer-zip-code').val(),
            state: $('#trainer-state').val(),
            bio: $('#trainer-bio').val(),
            profile_pic: $('#trainer-profile-pic').val(),
            password: $('#trainer-password').val(),
            confirm_password: $('#trainer-confirm-password').val(),

            occupation: $('#trainer-occupation').val(),
            certificate_id: $('#trainer-certificate-id').val(),
            issue_date: $('#trainer-issue-date').val(),
            expiry_date: $('#trainer-expiry-date').val(),
            issued_authority: $('#trainer-issued-authority').val()
        })
        .then(function() {
            removeValidationErrors();

            $('#trainer-name').val('');
            $('#trainer-email').val('');
            $('#trainer-gender').val('');
            $('#trainer-dob').val('');
            $('#trainer-phone').val('');
            $('#trainer-address').val('');
            $('#trainer-city').val('');
            $('#trainer-zip-code').val('');
            $('#trainer-state').val('');
            $('#trainer-bio').val('');
            $('#trainer-profile-pic').val('');
            $('#trainer-password').val('');
            $('#trainer-confirm-password').val('');
            $('#trainer-occupation').val('');
            $('#trainer-certificate-id').val('');
            $('#trainer-issue-date').val('');
            $('#trainer-expiry-date').val('');
            $('#trainer-issued-authority').val('');
            
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Trainer Details Added Successfully!",
                showConfirmButton: false,
                timer: 1500
            });
        })
        .catch(function(error) {
            if (error.response && error.response.status === 422) {
                trainerValidationErrors(error.response.data.errors);
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Something Went Wrong!",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });

    // Add Trainer Validation Errors
    function trainerValidationErrors(errors) {
        removeValidationErrors();

        if (errors.name) {
            $('#trainer-name-error').text(errors.name[0]);
        }

        if (errors.email) {
            $('#trainer-email-error').text(errors.email[0]);
        }

        if (errors.gender) {
            $('#trainer-gender-error').text(errors.gender[0]);
        }

        if (errors.dob) {
            $('#trainer-dob-error').text(errors.dob[0]);
        }

        if (errors.phone) {
            $('#trainer-phone-error').text(errors.phone[0]);
        }

        if (errors.address) {
            $('#trainer-address-error').text(errors.address[0]);
        }

        if (errors.city) {
            $('#trainer-city-error').text(errors.city[0]);
        }

        if (errors.zip_code) {
            $('#trainer-zip-code-error').text(errors.zip_code[0]);
        }

        if (errors.state) {
            $('#trainer-state-error').text(errors.state[0]);
        }

        if (errors.bio) {
            $('#trainer-bio-error').text(errors.bio[0]);
        }

        if (errors.profile_pic) {
            $('#trainer-profile-pic-error').text(errors.profile_pic[0]);
        }

        if (errors.password) {
            $('#trainer-password-error').text(errors.password[0]);
        }

        if (errors.confirm_password) {
            $('#trainer-confirm-password-error').text(errors.confirm_password[0]);
        }

        if (errors.occupation) {
            $('#trainer-occupation-error').text(errors.occupation[0]);
        }

        if (errors.certificate_id) {
            $('#trainer-certificate-id-error').text(errors.certificate_id[0]);
        }

        if (errors.issue_date) {
            $('#trainer-issue-date-error').text(errors.issue_date[0]);
        }

        if (errors.expiry_date) {
            $('#trainer-expiry-date-error').text(errors.expiry_date[0]);
        }

        if (errors.issued_authority) {
            $('#trainer-issued-authority-error').text(errors.issued_authority[0]);
        }
    }

    // Manage User
    $('#manageUserForm').submit(function(form) {
        form.preventDefault();

        let url = window.location.href + "/updateUserDetails";

        axios.post(url, {
            name: $('#update-name').val(),
            gender: $('#update-gender').val(),
            dob: $('#update-dob').val(),
            phone: $('#update-phone').val(),
            address: $('#update-address').val(),
            city: $('#update-city').val(),
            state: $('#update-state').val(),
            zip_code: $('#update-zip-code').val(),
            bio: $('#update-bio').val(),
            role: $('#user-role').val(),

            occupation: $('#update-occupation').val(),
            certificate_id: $('#update-certificate-id').val(),
            issue_date: $('#update-issue-date').val(),
            expiry_date: $('#update-expiry-date').val(),
            issued_authority: $('#update-issued-authority').val()
        })
        .then(function(response) {
            removeValidationErrors();

            Swal.fire({
                position: "center",
                icon: "success",
                title: "Trainer Details Added Successfully!",
                showConfirmButton: false,
                timer: 1500
            });
        })
        .catch(function(error) {
            if (error.response && error.response.status === 422) {
                updateValidationErrors(error.response.data.errors);
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Something Went Wrong!",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        })
    });

    function updateValidationErrors(errors) {
        removeValidationErrors();

        if (errors.name) {
            $('#update-name-error').text(errors.name[0]);
        }

        if (errors.gender) {
            $('#update-gender-error').text(errors.gender[0]);
        }

        if (errors.dob) {
            $('#update-dob-error').text(errors.dob[0]);
        }

        if (errors.phone) {
            $('#update-phone-error').text(errors.phone[0]);
        }

        if (errors.address) {
            $('#update-address-error').text(errors.address[0]);
        }

        if (errors.city) {
            $('#update-city-error').text(errors.city[0]);
        }

        if (errors.zip_code) {
            $('#update-zip-code-error').text(errors.zip_code[0]);
        }

        if (errors.state) {
            $('#update-state-error').text(errors.state[0]);
        }

        if (errors.bio) {
            $('#update-bio-error').text(errors.bio[0]);
        }

        if (errors.profile_pic) {
            $('#update-profile-pic-error').text(errors.profile_pic[0]);
        }

        if (errors.password) {
            $('#update-password-error').text(errors.password[0]);
        }

        if (errors.confirm_password) {
            $('#update-confirm-password-error').text(errors.confirm_password[0]);
        }

        if (errors.occupation) {
            $('#update-occupation-error').text(errors.occupation[0]);
        }

        if (errors.certificate_id) {
            $('#update-certificate-id-error').text(errors.certificate_id[0]);
        }

        if (errors.issue_date) {
            $('#update-issue-date-error').text(errors.issue_date[0]);
        }

        if (errors.expiry_date) {
            $('#update-expiry-date-error').text(errors.expiry_date[0]);
        }

        if (errors.issued_authority) {
            $('#update-issued-authority-error').text(errors.issued_authority[0]);
        }
    }
});