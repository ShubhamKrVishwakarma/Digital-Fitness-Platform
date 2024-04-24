@extends('layouts.mainLayout')

@section('title', 'Edit Profile')

@push('styles')
    <style>
        .togglePassword{
            position:absolute;
            right:20px;
            bottom:8px;
        }
    </style>
@endpush

@section('content')
    <div class="container bg-dark text-light mt-2 rounded-4 ">
        <div class="edit" id="edit-section">
            <div class="card border-0 bg-transparent mb-0">
                <div class="card-body p-lg-5 text-light">
                    <div class="mb-5">
                        <h4 class="mb-1">Account Information</h4>
                        <p class="mb-0 fs-6">Edit your personal information and address.</p>
                    </div>
                    <form class="row g-3" action="{{route('user.update', $user->id)}}" method="POST" id="update_form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-lg-7 col-md-7">
                            <label for="profileImageInput" class="form-label">Update Profile Image</label>
                            <input type="file" class="form-control" name="profile_pic" id="profileImageInput" />
                            @error('profile_pic')
                                <div class="">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <label for="profileBioInput" class="form-label">Update Bio</label>
                            <textarea type="textarea" class="form-control" name="bio" id="profileBioInput"
                            >{{$user->bio}}</textarea>
                            @error('bio')
                            <div class="">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <label for="profileNameInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="profileNameInput" name="name" value="{{Auth::user()->name}}" required />
                            <div class="invalid-feedback">Please enter firstname.</div>
                            @error('name')
                            <div class="">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label for="profileGenderInput" class="form-label">Gender</label>
                            <input type="text" class="form-control input-phone"
                                value="gender" readonly />
                        </div>
                        <div class="col-lg-6">
                            <label for="profilePhoneInput" class="form-label">Phone</label>
                            <input type="text" class="form-control input-phone" name="phone" id="profilePhoneInput"
                                value="{{$user->phone}}"/>
                            {{-- <div class="invalid-feedback">Please enter phone.</div> --}}
                            @error('phone')
                            <div class="">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="profileBirthdayInput" class="form-label">Birthday</label>
                            <input type="date" class="form-control input-date" name="dob" value="{{$user->dob}}" id="profileBirthdayInput"
                                readonly />
                            
                        </div>
                        <div class="col-lg-12">
                            <label for="profileAddress1Input" class="form-label">Address</label>
                            <input type="text" class="form-control" id="profileAddress1Input" name="address" value="{{$user->address}}"/>
                            <div class="invalid-feedback">Please enter address.</div>
                            @error('address')
                            <div class="">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label for="profileStateInput" class="form-label">State</label>
                            <input type="text" class="form-control" id="profileStateInput" name="state" value="{{$user->state}}" />
                            <div class="invalid-feedback">Please provide a State.</div>
                        </div>
                        <div class="col-lg-4">
                            <label for="profileCityInput" class="form-label">City</label>
                            <input type="text" class="form-control" id="profileCityInput" name="city" value="{{$user->city}}" />
                            {{-- <div class="invalid-feedback">Please provide a City.</div> --}}
                            @error('city')
                            <div class="">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label for="profileZipInput" class="form-label">Zip/Code</label>
                            <input type="text" class="form-control" id="profileZipInput" name="zip_code" value="{{$user->zip_code}}" />
                            {{-- <div class="invalid-feedback">Please provide a Zip.</div> --}}
                            @error('zip_code')
                            <div class="">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary me-2">Update Profile</button>
                            {{-- <button class="btn btn-light" type="reset">Reset</button> --}}
                        </div>

                    </form>
                </div>
            </div>
            <div class="card border-0 bg-transparent mb-4">
                <div class="card-body p-lg-5 text-light">
                    <div class="mb-5">
                        <h4 class="mb-0">Change Password</h4>
                    </div>
                    <form class="row g-3" action="{{route('user.update_pass')}}" method="post" id='update-pass'>
                    @csrf
                    @method('PATCH')
                        <div class="col-lg-4 position-relative px-40">
                            <label for="profileOldPassInput" class="form-label">Old Password</label>
                            <input type="password" class="form-control password" id="profileOldPassInput"
                                minlength="8" required name="old-pass" />
                            <i class="bi bi-eye-slash text-dark togglePassword" id="oldPassToggle"></i>
                            @error('old-pass')
                            <div>{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 position-relative px-40">
                            <label for="profileNewPassInput" class="form-label">New Password</label>
                            <input type="password" class="form-control password" id="profileNewPassInput"
                                minlength="8" required name="new-pass" />
                            <i class="bi bi-eye-slash text-dark togglePassword" id="newPassToggle"></i>
                            {{-- <div class="invalid-feedback">Enter your new password.</div> --}}
                            @error('new-pass')
                            <div>{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 position-relative px-40">
                            <label for="profileRePassInput" class="form-label">Re-Enter New Password</label>
                            <input type="password" class="form-control password" id="profileRePassInput"
                                minlength="8" required name="re-pass" />
                            <i class="bi bi-eye-slash text-dark togglePassword" id="rePassToggle"></i>
                            {{-- <div class="invalid-feedback">Re-Enter password.</div> --}}
                            @error('re-pass')
                            <div>{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary me-2">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("scripts")
<script src="{{asset('js/profile_edit.js')}}"></script>
@endpush