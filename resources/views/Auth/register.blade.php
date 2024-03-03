<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trainer Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <header>Trainer Registration Form</header>

        <form action="">
            <!-- First Form -->
            <div class="form first">
                <div class="personal details">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="">Full Name</label>
                            <input type="text" placeholder="Full Name" required>
                        </div>
                        <div class="input-field">
                            <label for="">Email</label>
                            <input type="email" placeholder="Enter Email Address" required>
                        </div>
                        <div class="input-field">
                            <label for="">Date of Birth</label>
                            <input type="date" placeholder="Enter Birth Date" required>
                        </div>
                        <div class="input-field">
                            <label for="">Phone Number</label>
                            <input type="number" placeholder="Enter Mobile Number" required>
                        </div>
                        <div class="input-field">
                            <label for="">Gender</label>
                            <select required placeholder="Select Gender">
                                <option>Select Gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="">Occupation</label>
                            <input type="text" placeholder="Enter Occupation" required>
                        </div>
                    </div>
                </div>

                <div class="ID details">
                    <span class="title">Professional Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="">Certificate ID</label>
                            <input type="number" placeholder="Enter ID type" required>
                        </div>
                        <div class="input-field">
                            <label for="">Name on Certificate</label>
                            <input type="number" placeholder="Enter ID Number" required>
                        </div>
                        <div class="input-field">
                            <label for="">Issued Authority</label>
                            <input type="text" placeholder="Enter Issued Authority" required>
                        </div>
                        <div class="input-field">
                            <label for="">Issued State</label>
                            <input type="text" placeholder="Enter Issue State" required>
                        </div>
                        <div class="input-field">
                            <label for="">Issued Date</label>
                            <input type="date" placeholder="Enter Issued Date" required>
                        </div>
                        <div class="input-field">
                            <label for="">Expiry Date</label>
                            <input type="date" placeholder="Enter Expiry Date" required>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="fa-solid fa-square-caret-right"></i>
                    </button>
                </div>
            </div>
            <!-- Second Form -->
            <div class="form second">
                <div class="address details">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="">Address Type</label>
                            <input type="text" placeholder="Enter Address Type" required>
                        </div>
                        <div class="input-field">
                            <label for="">Nationality</label>
                            <input type="text" placeholder="Enter Nationality" required>
                        </div>
                        <div class="input-field">
                            <label for="">State</label>
                            <input type="text" placeholder="Enter your State" required>
                        </div>
                        <div class="input-field">
                            <label for="">District</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>
                        <div class="input-field">
                            <label for="">Block Number</label>
                            <input type="number" placeholder="Enter Block Number" required>
                        </div>
                        <div class="input-field">
                            <label for="">Ward Number</label>
                            <input type="number" placeholder="Enter Ward Number" required>
                        </div>
                    </div>
                </div>

                <div class="ID details">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="">Father Name</label>
                            <input type="text" placeholder="Enter Father Name" required>
                        </div>
                        <div class="input-field">
                            <label for="">Mother Name</label>
                            <input type="text" placeholder="Enter ID Number" required>
                        </div>
                        <div class="input-field">
                            <label for="">Grand Father</label>
                            <input type="text" placeholder="Enter Issued Authority" required>
                        </div>
                        <div class="input-field">
                            <label for="">Spouse Name</label>
                            <input type="text" placeholder="Enter Issue State" required>
                        </div>
                        <div class="input-field">
                            <label for="">Father in Law</label>
                            <input type="text" placeholder="Enter Issued Date" required>
                        </div>
                        <div class="input-field">
                            <label for="">Mother in Law</label>
                            <input type="text" placeholder="Enter Expiry Date" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="fa-solid fa-square-caret-right"></i>
                            <span class="btnText">Back</span>
                        </div>
                        <button class="nextBtn">
                            <span class="btnText">Register</span>
                            <i class="fa-solid fa-square-caret-right"></i>
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/register.js') }}"></script>
</body>
</html>