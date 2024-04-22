<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

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

    /**
     *  Pages that Authorized User can access
     */
    public function test_authorized_user_can_access_message_page(): void
    {
        $user = $this->createUser();

        $response = $this->actingAs($user)->get('/message');

        $response->assertStatus(200);
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

    /**
     *  Pages that Only Admin can access
     */
    public function  test_authorized_admin_can_access_admin_dashboard_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/dashboard');

        $response->assertStatus(200);
    }

    public function  test_authorized_admin_can_access_admin_users_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/users');

        $response->assertStatus(200);
    }

    public function  test_authorized_admin_can_access_admin_exercises_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/exercises');

        $response->assertStatus(200);
    }

    public function  test_authorized_admin_can_access_admin_workout_plans_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/workout_plan');

        $response->assertStatus(200);
    }

    public function  test_authorized_admin_can_access_admin_categories_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/categories');

        $response->assertStatus(200);
    }
    
    public function  test_authorized_admin_can_access_admin_products_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/products');

        $response->assertStatus(200);
    }
    
    public function  test_authorized_admin_can_access_admin_conversations_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/conversations');

        $response->assertStatus(200);
    }

    public function  test_authorized_admin_can_access_admin_community_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/community');

        $response->assertStatus(200);
    }
    
    public function  test_authorized_admin_can_access_admin_orders_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/orders');

        $response->assertStatus(200);
    }
    
    public function  test_authorized_admin_can_access_admin_queries_page(): void
    {
        $admin = $this->createUser("admin");

        $response = $this->actingAs($admin)->get('/Admin/queries');

        $response->assertStatus(200);
    }
}
