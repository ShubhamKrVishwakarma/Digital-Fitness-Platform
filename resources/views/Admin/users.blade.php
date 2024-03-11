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
                                <button class="btn btn-xs btn-warning my-1 me-0 me-md-2" id="addMemberButton">Add Member</button>
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
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <p class="ps-2 text-secondary mb-0">{{ $user->id }}</p>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div>
                                                            <img src="{{ asset('admin.jpg') }}" class="avatar me-3" alt="Product">
                                                        </div>
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                            <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-sm text-center font-weight-bold mb-0">{{ $user->role }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <span class="text-xs font-weight-bold">{{ $user->created_at->format('d-m-Y') }}</span>
                                                </td>
                                                <td class="text-center">
                                                    <button class="me-2 btn btn-xs btn-outline-danger mb-0"
                                                        data-manage-user="12">Manage</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="px-4 pt-2">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Member -->
        <div id="addMember" style="display: none">
            <form id="addMemberForm">
                @csrf
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
                                        <label for="member-name" class="form-control-label">Name</label>
                                        <input type="text" id="member-name" class="form-control" placeholder="User Full Name" required>
                                        <span class="text-danger errors" id="member-name-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="member-email" class="form-control-label">Email</label>
                                        <input type="email" id="member-email" class="form-control" placeholder="Email Address" required>
                                        <span class="text-danger errors" id="member-email-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="member-gender" class="form-control-label">Gender</label>
                                        <select id="member-gender" class="form-control" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Others</option>
                                        </select>
                                        <span class="text-danger errors" id="member-gender-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="member-dob" class="form-control-label">Date of Birth</label>
                                        <input id="member-dob" type="date" class="form-control" required>
                                        <span class="text-danger errors" id="member-dob-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="member-phone" class="form-control-label">Phone Number</label>
                                        <input type="number" id="member-phone" class="form-control" placeholder="Phone Number">
                                        <span class="text-danger errors" id="member-phone-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">Role</label>
                                        <input type="text" class="form-control" value="Member" readonly>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="member-address" class="form-control-label">Address</label>
                                        <textarea cols="30" rows="4" id="member-address" class="form-control" placeholder="Your Address..."></textarea>
                                        <span class="text-danger errors" id="member-address-error"></span>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="member-city" class="form-control-label">City</label>
                                        <input type="text" id="member-city" class="form-control" placeholder="City">
                                        <span class="text-danger errors" id="member-city-error"></span>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="member-zip-code" class="form-control-label">Zip Code</label>
                                        <input type="text" id="member-zip-code" class="form-control" placeholder="Zip Code">
                                        <span class="text-danger errors" id="member-zip-code-error"></span>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="member-state" class="form-control-label">State</label>
                                        <select id="member-state" class="form-control">
                                            <option value="" selected>Select State</option>
                                            <option value="West Bengal">West Bengal</option>
                                            <option value="Delhi">Delhi</option>
                                        </select>
                                        <span class="text-danger errors" id="member-state-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="member-bio" class="form-control-label">Profile Bio</label>
                                        <textarea cols="30" rows="3" id="member-bio" class="form-control" placeholder="Bio.."></textarea>
                                        <span class="text-danger errors" id="member-bio-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="member-profile-pic" class="form-control-label">Profile Picture</label>
                                        <input type="file" id="member-profile-pic" class="form-control">
                                        <span class="text-danger errors" id="member-profile-pic-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="member-password" class="form-control-label">Password</label>
                                        <input type="password" id="member-password" class="form-control" placeholder="New Password" required>
                                        <span class="text-danger errors" id="member-password-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="member-confirm-password" class="form-control-label">Confirm Password</label>
                                        <input type="password" id="member-confirm-password" class="form-control" placeholder="Confirm Password" required>
                                        <span class="text-danger errors" id="member-confirm-password-error"></span>
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
            <form id="addTrainerForm">
                @csrf
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
                                        <label for="trainer-name" class="form-control-label">Name</label>
                                        <input type="text" id="trainer-name" class="form-control" placeholder="User Full Name" required>
                                        <span class="text-danger errors" id="trainer-name-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="trainer-email" class="form-control-label">Email</label>
                                        <input type="email" id="trainer-email" class="form-control" placeholder="Email Address" required>
                                        <span class="text-danger errors" id="trainer-email-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="trainer-gender" class="form-control-label">Gender</label>
                                        <select id="trainer-gender" class="form-control" required>
                                            <option value="" selected>Select Gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Others</option>
                                        </select>
                                        <span class="text-danger errors" id="trainer-gender-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="trainer-dob" class="form-control-label">Date of Birth</label>
                                        <input type="date" id="trainer-dob" class="form-control" required>
                                        <span class="text-danger errors" id="trainer-dob-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="trainer-phone" class="form-control-label">Phone Number</label>
                                        <input type="number" id="trainer-phone" class="form-control" placeholder="Phone Number">
                                        <span class="text-danger errors" id="trainer-phone-error"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">Role</label>
                                        <input type="text" class="form-control" value="Trainer" readonly>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="trainer-address" class="form-control-label">Address</label>
                                        <textarea cols="30" rows="4" id="trainer-address" class="form-control" placeholder="Your Address..."></textarea>
                                        <span class="text-danger errors" id="trainer-address-error"></span>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="trainer-city" class="form-control-label">City</label>
                                        <input type="text" id="trainer-city" class="form-control" placeholder="City">
                                        <span class="text-danger errors" id="trainer-city-error"></span>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="trainer-zip-code" class="form-control-label">Zip Code</label>
                                        <input type="text" id="trainer-zip-code" class="form-control" placeholder="Zip Code">
                                        <span class="text-danger errors" id="trainer-zip-code-error"></span>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="trainer-state" class="form-control-label">State</label>
                                        <select id="trainer-state" class="form-control">
                                            <option value="" selected>Select State</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                        <span class="text-danger errors" id="trainer-state-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="trainer-bio" class="form-control-label">Profile Bio</label>
                                        <textarea cols="30" rows="3" id="trainer-bio" class="form-control" placeholder="Bio.."></textarea>
                                        <span class="text-danger errors" id="trainer-bio-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="trainer-profile-pic" class="form-control-label">Profile Picture</label>
                                        <input type="file" id="trainer-profile-pic" class="form-control">
                                        <span class="text-danger errors" id="trainer-profile-pic-error"></span>
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
                                        <label for="trainer-occupation" class="form-control-label">Occupation</label>
                                        <input type="text" class="form-control" id="trainer-occupation" placeholder="Occupation" required>
                                        <span class="text-danger errors" id="trainer-occupation-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="trainer-certificate-id" class="form-control-label">Certificate ID</label>
                                        <input type="text" id="trainer-certificate-id" class="form-control" placeholder="Certificate ID" required>
                                        <span class="text-danger errors" id="trainer-certificate-id-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="trainer-issue-date" class="form-control-label">Issue Date</label>
                                        <input type="date" id="trainer-issue-date" class="form-control" placeholder="Issue Date" required>
                                        <span class="text-danger errors" id="trainer-issue-date-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="trainer-expiry-date" class="form-control-label">Expiry Date</label>
                                        <input type="date" id="trainer-expiry-date" class="form-control" placeholder="Expiry Date" required>
                                        <span class="text-danger errors" id="trainer-expiry-date-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="trainer-issued-authority" class="form-control-label">Issued Authority</label>
                                        <input type="text" id="trainer-issued-authority" class="form-control" placeholder="Issued Authority" required>
                                        <span class="text-danger errors" id="trainer-issued-authority-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="trainer-password" class="form-control-label">Password</label>
                                        <input type="password" id="trainer-password" class="form-control" placeholder="New Password">
                                        <span class="text-danger errors" id="trainer-password-error"></span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="trainer-confirm-password" class="form-control-label">Confirm Password</label>
                                        <input type="password" id="trainer-confirm-password" class="form-control" placeholder="Confirm Password">
                                        <span class="text-danger errors" id="trainer-confirm-password-error"></span>
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
        <!-- Manage User -->
        <div id="manageUser" class="main-content position-relative border-radius-lg" style="display: none">
            <div class="card shadow-lg mx-4 mt-4">
                <div class="card-body p-3">
                    <div class="row gx-4">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img src="../images/team-1.jpg" alt="profile_image"
                                    class="w-100 border-radius-lg shadow-sm">
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1">Username</h5>
                                <p class="mb-0 font-weight-bold text-sm">User Role</p>
                            </div>
                        </div>
                        <div class="col-auto ms-auto my-auto">
                            <button class="btn btn-sm btn-dark m-0" data-view-users>View All Users</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-uppercase text-sm">Personal Information</p>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="example-text-input" class="form-control-label">Name</label>
                                        <input class="form-control" type="text" value="Shubham Kumar Vishwakarma">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="example-text-input" class="form-control-label">Email</label>
                                        <input class="form-control" type="email" value="test@example.com">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">Gender</label>
                                        <select class="form-control" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-control-label">Date of
                                            Birth</label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-control-label">Phone
                                            Number</label>
                                        <input type="number" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for=""
                                            class="form-control-label">Role</label>
                                        <input type="text" class="form-control" value="Trainer" readonly>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for=""
                                            class="form-control-label">Address</label>
                                        <textarea cols="30" rows="4" class="form-control" placeholder="Your Address..."></textarea>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for=""
                                            class="form-control-label">City</label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="" class="form-control-label">Zip
                                            Code</label>
                                        <input type="text" class="form-control" placeholder="Zip Code">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for=""
                                            class="form-control-label">State</label>
                                        <select class="form-control">
                                            <option value="" disabled selected>Select State</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-control-label">Profile
                                            Bio</label>
                                        <textarea cols="30" rows="3" class="form-control" placeholder="Bio.."></textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-control-label">Profile
                                            Picture</label>
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for=""
                                            class="form-control-label">Password</label>
                                        <input type="password" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-control-label">Confirm
                                            Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <hr class="horizontal bg-dark">
                                <p class="text-uppercase text-sm">Professional Information</p>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for=""
                                            class="form-control-label">Occupation</label>
                                        <input type="text" class="form-control" placeholder="Occupation" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-control-label">Certificate
                                            ID</label>
                                        <input type="text" class="form-control" placeholder="Certificate ID" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-control-label">Issue
                                            Date</label>
                                        <input type="date" class="form-control" placeholder="Issue Date" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="form-control-label">Expiry
                                            Date</label>
                                        <input type="date" class="form-control" placeholder="Expiry Date" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-control-label">Issued
                                            Authority</label>
                                        <input type="text" class="form-control" placeholder="Issued Authority"
                                            required>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary btn-sm">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                            <div class="row justify-content-center">
                                <div class="col-4 col-lg-4 order-lg-2">
                                    <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                        <a href="javascript:;">
                                            <img src="../assets/img/team-2.jpg"
                                                class="rounded-circle img-fluid border border-2 border-white">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                                <div class="d-flex justify-content-between">
                                    <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                                    <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                                            class="ni ni-collection"></i></a>
                                    <a href="javascript:;"
                                        class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                                    <a href="javascript:;"
                                        class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i
                                            class="ni ni-email-83"></i></a>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">22</span>
                                                <span class="text-sm opacity-8">Friends</span>
                                            </div>
                                            <div class="d-grid text-center mx-4">
                                                <span class="text-lg font-weight-bolder">10</span>
                                                <span class="text-sm opacity-8">Photos</span>
                                            </div>
                                            <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">89</span>
                                                <span class="text-sm opacity-8">Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <h5>
                                        Mark Davis<span class="font-weight-light">, 35</span>
                                    </h5>
                                    <div class="h6 font-weight-300">
                                        <i class="ni location_pin mr-2"></i>Bucharest, Romania
                                    </div>
                                    <div class="h6 mt-4">
                                        <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim
                                        Officer
                                    </div>
                                    <div>
                                        <i class="ni education_hat mr-2"></i>University of Computer Science
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    const usersTable = document.querySelector('#usersTable');
    const addMember = document.querySelector('#addMember');
    const addTrainer = document.querySelector('#addTrainer');
    const manageUser = document.querySelector('#manageUser');

    const usersTableButton = document.querySelectorAll('[data-view-users]');
    const addMemberButton = document.querySelector('#addMemberButton');
    const addTrainerButton = document.querySelector('#addTrainerButton');
    const manageUserButton = document.querySelectorAll('[data-manage-user]');

    addMemberButton.addEventListener("click", function() {
        usersTable.style.display = "none";
        addTrainer.style.display = "none";
        manageUser.style.display = "none";
        addMember.style.display = "block";
    });

    addTrainerButton.addEventListener("click", function() {
        usersTable.style.display = "none";
        addMember.style.display = "none";
        manageUser.style.display = "none";
        addTrainer.style.display = "block";
    });

    usersTableButton.forEach(input => {
        input.addEventListener("click", function() {
            addMember.style.display = "none";
            addTrainer.style.display = "none";
            manageUser.style.display = "none";
            usersTable.style.display = "block";
        });
    });

    manageUserButton.forEach(btn => {
        btn.addEventListener("click", function() {
            usersTable.style.display = "none";
            addMember.style.display = "none";
            addTrainer.style.display = "none";
            manageUser.style.display = "block";
        });
    });
</script>
<script src="{{ asset('admin/users.js') }}"></script>
@endpush
