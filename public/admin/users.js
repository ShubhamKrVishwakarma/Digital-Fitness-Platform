$(document).ready(function() {
    // Add Member
    $('#addMemberForm').submit(function(form) {
        form.preventDefault();

        let url = window.location.href + "/addMember";

        axios.post(url, {
            name: $('#name').val(),
            email: $('#email').val(),
            gender: $('#gender').val(),
            dob: $('#dob').val(),
            phone: $('#phone').val(),
            address: $('#address').val(),
            city: $('#city').val(),
            zip_code: $('#zip_code').val(),
            state: $('#state').val(),
            bio: $('#bio').val(),
            profile_pic: $('#profile_pic').val(),
            password: $('#password').val(),
            confirm_password: $('#confirm_password').val()
        })
        .then(function(response) {
            $('#name').val('');
            $('#email').val('');
            $('#gender').val('');
            $('#dob').val('');
            $('#phone').val('');
            $('#address').val('');
            $('#city').val('');
            $('#zip_code').val('');
            $('#state').val('');
            $('#bio').val('');
            $('#profile_pic').val('');
            $('#password').val('');
            $('#confirm_password').val('');
            $('.text-danger').val('');
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
                displayAddMemberErrors(error.response.data.errors);
            } else {
                Swal.fire({
                    title: "Server Error",
                    text: "Something Went Wrong!",
                    icon: "error"
                });
            }
        });
    });

    function displayAddMemberErrors(errors) {
        $('.text-danger').val('');

        if (errors.name) {
            $('#addMember-name-error').text(errors.name[0]);
        }

        if (errors.email) {
            $('#addMember-email-error').text(errors.email[0]);
        }

        if (errors.gender) {
            $('#addMember-gender-error').text(errors.gender[0]);
        }

        if (errors.dob) {
            $('#addMember-dob-error').text(errors.dob[0]);
        }

        if (errors.phone) {
            $('#addMember-phone-error').text(errors.phone[0]);
        }

        if (errors.address) {
            $('#addMember-address-error').text(errors.address[0]);
        }

        if (errors.city) {
            $('#addMember-city-error').text(errors.city[0]);
        }

        if (errors.zip_code) {
            $('#addMember-zip-code-error').text(errors.zip_code[0]);
        }

        if (errors.state) {
            $('#addMember-state-error').text(errors.state[0]);
        }

        if (errors.bio) {
            $('#addMember-bio-error').text(errors.bio[0]);
        }

        if (errors.profile_pic) {
            $('#addMember-profile-pic-error').text(errors.profile_pic[0]);
        }

        if (errors.password) {
            $('#addMember-password-error').text(errors.password[0]);
        }

        if (errors.confirm_password) {
            $('#addMember-confirm-password-error').text(errors.confirm_password[0]);
        }
    }
});