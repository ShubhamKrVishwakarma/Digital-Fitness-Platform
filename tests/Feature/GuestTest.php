<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuestTest extends TestCase
{
    use RefreshDatabase;

    /**
     *  Pages that unauthorized or unregistered user can access
     */
    public function test_unauthorized_user_can_access_login_page(): void
    {
        $response = $this->get('/login');
        
        $response->assertStatus(200);
    }

    public function test_unauthorized_user_can_access_signup_page(): void
    {
        $response = $this->get('/signup');

        $response->assertStatus(200);
    }

    public function test_unauthorized_user_can_access_register_page(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_unauthorized_user_can_access_home_page(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_unauthorized_user_can_access_shop_page(): void
    {
        $response = $this->get('/shop');

        $response->assertStatus(200);
    }

    public function  test_unauthorized_user_can_access_community_page(): void
    {
        $response = $this->get('/community');

        $response->assertStatus(200);
    }

    public function  test_unauthorized_user_can_access_workouts_plans_page(): void
    {
        $response = $this->get('/workout_plans');

        $response->assertStatus(200);
    }

    public function  test_unauthorized_user_can_access_trainers_page(): void
    {
        $response = $this->get('/trainers');

        $response->assertStatus(200);
    }

    public function  test_unauthorized_user_can_access_contact_page(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    /**
     *  Pages that unauthorized or unregistered user cannot access
     */
    public function  test_unauthorized_user_cannot_access_cart_page(): void
    {
        $response = $this->get('/cart');

        $response->assertStatus(302);

        $response->assertRedirect('login');
    }

    public function  test_unauthorized_user_cannot_access_orders_page(): void
    {
        $response = $this->get('/orders');

        $response->assertStatus(302);

        $response->assertRedirect('login');
    }
    
    public function  test_unauthorized_user_cannot_access_message_page(): void
    {
        $response = $this->get('/message');

        $response->assertStatus(302);

        $response->assertRedirect('login');
    }
    
    public function  test_unauthorized_user_cannot_access_admin_dashboard_page(): void
    {
        $response = $this->get('/Admin/dashboard');

        $response->assertStatus(403);
    }

    public function  test_unauthorized_user_cannot_access_admin_users_page(): void
    {
        $response = $this->get('/Admin/users');

        $response->assertStatus(403);
    }

    public function  test_unauthorized_user_cannot_access_admin_exercises_page(): void
    {
        $response = $this->get('/Admin/exercises');

        $response->assertStatus(403);
    }

    public function  test_unauthorized_user_cannot_access_admin_workout_plans_page(): void
    {
        $response = $this->get('/Admin/workout_plan');

        $response->assertStatus(403);
    }

    public function  test_unauthorized_user_cannot_access_admin_categories_page(): void
    {
        $response = $this->get('/Admin/categories');

        $response->assertStatus(403);
    }
    
    public function  test_unauthorized_user_cannot_access_admin_products_page(): void
    {
        $response = $this->get('/Admin/products');

        $response->assertStatus(403);
    }
    
    public function  test_unauthorized_user_cannot_access_admin_subscriptions_page(): void
    {
        $response = $this->get('/Admin/subscriptions');

        $response->assertStatus(403);
    }

    public function  test_unauthorized_user_cannot_access_admin_community_page(): void
    {
        $response = $this->get('/Admin/community');

        $response->assertStatus(403);
    }
    
    public function  test_unauthorized_user_cannot_access_admin_orders_page(): void
    {
        $response = $this->get('/Admin/orders');

        $response->assertStatus(403);
    }
    
    public function  test_unauthorized_user_cannot_access_admin_queries_page(): void
    {
        $response = $this->get('/Admin/queries');

        $response->assertStatus(403);
    }
}
