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
    }

    public function test_loggedin_user_can_access_cart_page(): void
    {
        $user = $this->createUser();

        $response = $this->actingAs($user)->get('/cart');

        $response->assertStatus(200);
    }

    public function test_loggedin_user_can_access_orders_page(): void
    {
        $user = $this->createUser();

        $response = $this->actingAs($user)->get('/orders');

        $response->assertStatus(200);
    }

    private function createUser(): User
    {
        return User::create([
            "name" => "Test",
            "email" => "test@gmail.com",
            "gender" => "M",
            "dob" => "22-04-2001",
            "password" => "ssssssss"
        ]);
    }
}
