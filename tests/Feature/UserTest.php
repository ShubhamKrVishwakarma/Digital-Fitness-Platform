<?php

namespace Tests\Feature;

use App\Models\TrainerDetail;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_loads(): void
    {
        $response = $this->get('/login');

        $response->assertSee('Welcome Back!');

        $response->assertStatus(200);
    }

    public function test_signup_page_loads(): void
    {
        $response = $this->get('/signup');

        $response->assertSee('Create New Account');

        $response->assertStatus(200);
    }

    public function test_register_page_loads(): void
    {
        $response = $this->get('/register');

        $response->assertSee('Join as a Trainer');

        $response->assertStatus(200);
    }

    public function test_member_can_signup(): void
    {
        $response = $this->get('/signup');

        User::create([
            "name" => "Test",
            "email" => "test@gmail.com",
            "gender" => "M",
            "dob" => "27-07-2002",
            "password" => "ssssssss"
        ]);

        $response->assertStatus(200);
    }

    public function test_trainer_can_register(): void
    {
        $response = $this->get('/register');

        $trainer = User::create([
            "name" => "Test",
            "email" => "test@gmail.com",
            "dob" => "27-07-2002",
            "phone" => "999999999",
            "gender" => "M",
            "password" => "ssssssss"
        ]);

        TrainerDetail::create([
            "user_id" => $trainer->id,
            "occupation" => "Test",
            "certificate_id" => "CHD235FS",
            "issue_date" => "22-08-2012",
            "expiry_date" => "12-09-2012",
            "issued_authority" => "Test Fitness Association"
        ]);

        $response->assertStatus(200);
    }
}
