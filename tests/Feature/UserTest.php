<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_member_can_signup(): void
    {
        $response = $this->post('/signup', [
            "name" => "Test",
            "email" => "test@gmail.com",
            "gender" => "M",
            "date_of_birth" => "22-04-2001",
            "password" => "ssssssss",
            "confirm_password" => "ssssssss"
        ]);

        $response->assertStatus(200);
        
        $this->assertDatabaseHas('users', [
            "name" => "Test",
            "email" => "test@gmail.com",
            "gender" => "M",
            "dob" => "22-04-2001",
        ]);

        $latest_user = User::latest()->first();

        $this->equalTo($latest_user->email, "test@gmail.com");
    }

    public function test_trainer_can_register(): void
    {
        $response = $this->post('/register', [
            "name" => "Test",
            "email" => "test@gmail.com",
            "date_of_birth" => "27-07-2002",
            "phone" => "9999999999",
            "gender" => "M",
            "password" => "ssssssss",
            "confirm_password" => "ssssssss",
            "occupation" => "Test",
            "certificate_id" => "CHD235FS",
            "issue_date" => "22-08-2012",
            "expiry_date" => "12-09-2012",
            "issued_authority" => "Test Fitness Association"
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('users', [
            "name" => "Test",
            "email" => "test@gmail.com",
            "dob" => "27-07-2002",
            "phone" => "9999999999",
            "gender" => "M"
        ]);

        $this->assertDatabaseHas('trainer_details', [
            "occupation" => "Test",
            "certificate_id" => "CHD235FS",
            "issue_date" => "22-08-2012",
            "expiry_date" => "12-09-2012",
            "issued_authority" => "Test Fitness Association"
        ]);

        $latest_trainer = User::latest()->first();

        $this->assertEquals($latest_trainer->email, "test@gmail.com");
    }

    public function test_user_can_login(): void
    {
        $user = User::create([
            "name" => "Test",
            "email" => "test@gmail.com",
            "gender" => "M",
            "dob" => "22-04-2001",
            "password" => "ssssssss"
        ]);

        $response = $this->post('/login', [
            "email" => "test@gmail.com",
            "password" => "ssssssss"
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('users', [
            "email" => $user->email,
            "password" => $user->password
        ]);
    }
}
