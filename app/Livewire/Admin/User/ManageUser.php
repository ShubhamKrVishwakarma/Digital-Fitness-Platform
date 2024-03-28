<?php

namespace App\Livewire\Admin\User;

use App\Models\TrainerDetail;
use App\Models\User;
use Illuminate\Support\Facades\Date;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManageUser extends Component
{
    use WithFileUploads;

    public $name;
    public $gender;
    public $dob;
    public $phone;
    public $address;
    public $city;
    public $zip_code;
    public $state;
    public $bio;
    public $new_profile_pic;
    public $profile_pic;
    public $password;
    public $confirm_password;
    public $id;
    public $email;
    public $role;

    // For Trainers
    public $occupation;
    public $certificate_id;
    public $issue_date;
    public $expiry_date;
    public $issued_authority;

    #[On('refreshManageUser')]
    public function render()
    {
        return view('livewire.admin.user.manage-user');
    }

    // Fetch the user information
    #[On('manage-user')]
    public function edit($id) {
        $user = User::find($id);
        $this->id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->gender = $user->gender;
        $this->dob = $user->dob;
        $this->phone = $user->phone;
        $this->address = $user->address;
        $this->city = $user->city;
        $this->zip_code = $user->zip_code;
        $this->state = $user->state;
        $this->bio = $user->bio;
        $this->profile_pic = $user->profile_pic;
        $this->role = $user->role;

        if ($this->role === "trainer" || $this->role === "pending") {
            $trainer_details = TrainerDetail::where('user_id', $id)->first();
            $this->occupation = $trainer_details->occupation;
            $this->certificate_id = $trainer_details->certificate_id;
            $this->issue_date = $trainer_details->issue_date;
            $this->expiry_date = $trainer_details->expiry_date;
            $this->issued_authority = $trainer_details->issued_authority;
        }
    }

    // Updates the User Details
    public function update() {
        if ($this->role === "trainer" || $this->role === "pending") {
            $this->validate([
                'name' => 'required|min:2|max:100',
                'gender' => 'required|in:M,F,O',
                "dob" => "required|date|before_or_equal:" . Date::now()->subYears(18)->format('d-m-Y'),
                'phone' => 'required|min:10|max:12',
                'address' => 'nullable',
                'city' => 'nullable|min:2|max:100',
                'zip_code' => 'nullable|min:6|max:12',
                'state' => 'nullable|min:2|max:100',
                'bio' => 'nullable|min:5|max:255',
                'new_profile_pic' => 'nullable|sometimes|image',
                'password' => 'nullable|min:8|max:20',
                'confirm_password' => 'nullable|min:8|max:20|same:password',
                'occupation' => 'required|min:2|max:100',
                'certificate_id' => 'required|min:5|max:50',
                'issue_date' => 'required|date',
                'expiry_date' => 'required|date|after:issue_date',
                'issued_authority' => 'required|min:2|max:200',
            ]);

            $user = User::findOrFail($this->id);
            $user->name = $this->name;
            $user->gender = $this->gender;
            $user->dob = $this->dob;
            $user->phone = $this->phone;
            $user->address = $this->address;
            $user->city = $this->city;
            $user->zip_code = $this->zip_code;
            $user->state = $this->state;
            $user->bio = $this->bio;

            TrainerDetail::where('user_id', $this->id)
                        ->update([
                            "occupation" => $this->occupation,
                            "certificate_id" => $this->certificate_id,
                            "issue_date" => $this->issue_date,
                            "expiry_date" => $this->expiry_date,
                            "issued_authority" => $this->issued_authority,
                        ]);

            if ($this->new_profile_pic) {
                $fileExtension = $this->new_profile_pic->getClientOriginalExtension();
                $fileName = $this->id . '.' . $fileExtension;
                $this->new_profile_pic->storeAs('public/user', $fileName);
                $user->profile_pic = $fileName;
                $this->new_profile_pic = null;
            }

            if (!empty($this->password)) {
                $user->password = $this->password;
            }

            $user->update();
        } else {
            $this->validate([
                'name' => 'required|min:2|max:100',
                'gender' => 'required|in:M,F,O',
                "dob" => "required|date|before_or_equal:" . Date::now()->subYears(18)->format('d-m-Y'),
                'phone' => 'required|min:10|max:12',
                'address' => 'nullable',
                'city' => 'nullable|min:2|max:100',
                'zip_code' => 'nullable|min:6|max:12',
                'state' => 'nullable|min:2|max:100',
                'bio' => 'nullable|min:5|max:255',
                'new_profile_pic' => 'nullable|sometimes|image',
                'password' => 'nullable|min:8|max:20',
                'confirm_password' => 'nullable|min:8|max:20|same:password'
            ]);

            $user = User::findOrFail($this->id);
            $user->name = $this->name;
            $user->gender = $this->gender;
            $user->dob = $this->dob;
            $user->phone = $this->phone;
            $user->address = $this->address;
            $user->city = $this->city;
            $user->zip_code = $this->zip_code;
            $user->state = $this->state;
            $user->bio = $this->bio;

            if ($this->new_profile_pic) {
                $fileExtension = $this->new_profile_pic->getClientOriginalExtension();
                $fileName = $this->id . '.' . $fileExtension;
                $this->new_profile_pic->storeAs('public/user', $fileName);
                $user->profile_pic = $fileName;
                $this->new_profile_pic = null;
            }

            if (!empty($this->password)) {
                $user->password = $this->password;
            }

            $user->update();
        }

        $this->reset('password', 'confirm_password', 'new_profile_pic');

        $this->dispatch('refreshManageUser');

        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'User Details Updated Successfully!',
        );
        
        $this->dispatch('refreshUsersTable');
    }

    public function confirmVerification() {
        $trainer = User::find($this->id);
        $trainer->role = "trainer";
        $trainer->update();
        
        $this->dispatch('refreshManageUser');
        
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Trainer Verification Confirmed!',
        );

        $this->dispatch('refreshUsersTable');
    }

    public function delete() {
        User::findOrFail($this->id)->delete();
        $this->dispatch('refreshUsersTable');
    }
}
