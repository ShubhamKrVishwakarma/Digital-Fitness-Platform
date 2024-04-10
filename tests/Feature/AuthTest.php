<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_login(): void
    {
        $this->createUser();

        $response = $this->post('/login', [
            "email" => "test@gmail.com",
            "password" => "ssssssss"
        ]);

        $response->assertStatus(200);
    }
    
    public function test_unauthorized_user_cannot_access_cart_page(): void
    {
        $response = $this->get('/cart');

        $response->assertStatus(302);

        $response->assertRedirect('login');
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
