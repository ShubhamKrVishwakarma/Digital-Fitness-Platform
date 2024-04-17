<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminPagesTest extends TestCase
{
    use RefreshDatabase;

    private function user($role = "member") {
        return User::create([
            "name" => "Test",
            "email" => "test@gmail.com",
            "gender" => "M",
            "dob" => "22-04-2001",
            "password" => "ssssssss",
            "role" => $role
        ]);
    }
    
    public function test_unauthorized_user_cannot_access_admin_dashboard(): void
    {
        $user = $this->user();

        $response = $this->actingAs($user)->get('/Admin/dashboard');

        $response->assertStatus(403);
    }

    public function test_only_admin_can_access_admin_dashboard_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/dashboard');

        $response->assertStatus(200);
    }

    public function test_only_admin_can_access_admin_users_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/users');

        $response->assertStatus(200);
    }

    public function test_only_admin_can_access_admin_exercises_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/exercises');

        $response->assertStatus(200);
    }

    public function test_only_admin_can_access_admin_workout_plan_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/workout_plan');

        $response->assertStatus(200);
    }

    public function test_only_admin_can_access_admin_categories_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/categories');

        $response->assertStatus(200);
    }

    public function test_only_admin_can_access_admin_products_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/products');

        $response->assertStatus(200);
    }

    public function test_only_admin_can_access_admin_conversations_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/products');

        $response->assertStatus(200);
    }

    public function test_only_admin_can_access_admin_community_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/products');

        $response->assertStatus(200);
    }

    public function test_only_admin_can_access_admin_orders_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/orders');

        $response->assertStatus(200);
    }

    public function test_only_admin_can_access_admin_queries_page(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/queries');

        $response->assertStatus(200);
    }
}
