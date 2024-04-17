<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthorized_user_cannot_access_cart_page(): void
    {
        $response = $this->get('/cart');

        $response->assertStatus(302);

        $response->assertRedirect('login');
    }

    public function test_unauthorized_user_cannot_access_orders_page(): void
    {
        $response = $this->get('/orders');

        $response->assertStatus(302);

        $response->assertRedirect('login');
    }

    public function test_authorized_user_can_access_cart_page(): void
    {
        $user = $this->createUser();

        $response = $this->actingAs($user)->get('/cart');

        $response->assertStatus(200);
    }

    public function test_authorized_user_can_access_orders_page(): void
    {
        $user = $this->createUser();

        $response = $this->actingAs($user)->get('/orders');

        $response->assertStatus(200);
    }

    public function test_unauthorized_user_cannot_access_admin_page(): void
    {
        $response = $this->get('/Admin/dashboard');

        $response->assertStatus(403);
    }

    public function test_authorized_admin_can_access_admin_page(): void
    {
        $response = $this->actingAs($this->createUser("admin"))->get('/Admin/dashboard');

        $response->assertStatus(200);
    }

    private function createUser($role = "member"): User
    {
        return User::create([
            "name" => "Test",
            "email" => "test@gmail.com",
            "gender" => "M",
            "dob" => "22-04-2001",
            "password" => "ssssssss",
            "role" => $role
        ]);
    }
}
