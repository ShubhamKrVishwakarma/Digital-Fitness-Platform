@extends('layouts.adminLayout')

@section('title', 'Users')

@section('content')
    <div class="container-fluid py-4">
        <!-- Products Table -->
        <div id="usersTable">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center flex-wrap">
                            <h6>Products table</h6>
                            <div>
                                <button class="btn btn-xs btn-warning my-1 me-0 me-md-2" id="addMemberButton">Add
                                    Member</button>
                                <button class="btn btn-xs btn-dark my-1" id="addTrainerButton">Add Trainer</button>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                User</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Role</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                Joined Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="ps-2 text-secondary mb-0">345</p>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="{{ asset('admin.jpg') }}" class="avatar me-3"
                                                            alt="Product">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Protien</h6>
                                                        <p class="text-xs text-secondary mb-0">vis.shubham2002@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-sm text-center font-weight-bold mb-0">Member</p>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-xs font-weight-bold">2024-11-12</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="me-2 btn btn-xs btn-outline-danger mb-0"
                                                    data-manage-product="12">Manage</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Member -->
        <div id="addMember" style="display: none">
            <form>
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                        <h3 class="text-light ms-2 font-weight-bolder">Add New Member</h3>
                        <button class="btn btn-sm btn-dark mb-0 me-4" data-view-users>View All Users</button>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h6>Personal Information</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Name</label>
                                        <input type="text" class="form-control" placeholder="User Full Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Email</label>
                                        <input type="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Gender</label>
                                        <select class="form-control" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Date of
                                            Birth</label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Phone
                                            Number</label>
                                        <input type="number" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Role</label>
                                        <input type="text" class="form-control" value="Member" readonly>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Address</label>
                                        <textarea cols="30" rows="4" class="form-control" placeholder="Your Address..."></textarea>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">City</label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Zip
                                            Code</label>
                                        <input type="text" class="form-control" placeholder="Zip Code">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">State</label>
                                        <select class="form-control">
                                            <option value="" disabled selected>Select State</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Profile
                                            Bio</label>
                                        <textarea cols="30" rows="3" class="form-control" placeholder="Bio.."></textarea>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="" class="form-label text-uppercase text-secondary">Profile
                                            Picture</label>
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Password</label>
                                        <input type="password" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Confirm
                                            Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-success m-0">Add Member</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Add Trainer -->
        <div id="addTrainer" style="display: none">
            <form>
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                        <h3 class="text-light ms-2 font-weight-bolder">Add New Member</h3>
                        <button class="btn btn-sm btn-dark mb-0 me-4" data-view-users>View All Users</button>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h6>Personal Information</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Name</label>
                                        <input type="text" class="form-control" placeholder="User Full Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Email</label>
                                        <input type="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Gender</label>
                                        <select class="form-control" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Date of
                                            Birth</label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Phone
                                            Number</label>
                                        <input type="number" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Role</label>
                                        <input type="text" class="form-control" value="Trainer" readonly>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Address</label>
                                        <textarea cols="30" rows="4" class="form-control" placeholder="Your Address..."></textarea>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">City</label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Zip
                                            Code</label>
                                        <input type="text" class="form-control" placeholder="Zip Code">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">State</label>
                                        <select class="form-control">
                                            <option value="" disabled selected>Select State</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Profile
                                            Bio</label>
                                        <textarea cols="30" rows="3" class="form-control" placeholder="Bio.."></textarea>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="" class="form-label text-uppercase text-secondary">Profile
                                            Picture</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Professional Information</h6>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Occupation</label>
                                        <input type="text" class="form-control" placeholder="Occupation" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Certificate
                                            ID</label>
                                        <input type="text" class="form-control" placeholder="Certificate ID" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Issue
                                            Date</label>
                                        <input type="date" class="form-control" placeholder="Issue Date" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Expiry
                                            Date</label>
                                        <input type="date" class="form-control" placeholder="Expiry Date" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Issued
                                            Authority</label>
                                        <input type="text" class="form-control" placeholder="Issued Authority"
                                            required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for=""
                                            class="form-label text-uppercase text-secondary">Password</label>
                                        <input type="password" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-label text-uppercase text-secondary">Confirm
                                            Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-success m-0">Add Trainer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const usersTable = document.querySelector('#usersTable');
        const addMember = document.querySelector('#addMember');
        const addTrainer = document.querySelector('#addTrainer');

        const usersTableButton = document.querySelectorAll('[data-view-users]');
        const addMemberButton = document.querySelector('#addMemberButton');
        const addTrainerButton = document.querySelector('#addTrainerButton');

        addMemberButton.addEventListener("click", function() {
            usersTable.style.display = "none";
            addTrainer.style.display = "none";
            addMember.style.display = "block";
        });

        addTrainerButton.addEventListener("click", function() {
            usersTable.style.display = "none";
            addMember.style.display = "none";
            addTrainer.style.display = "block";
        });

        usersTableButton.forEach(input => {
            input.addEventListener("click", function() {
                addMember.style.display = "none";
                addTrainer.style.display = "none";
                usersTable.style.display = "block";
            });
        });
    </script>
@endpush
