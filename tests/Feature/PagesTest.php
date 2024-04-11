<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_loads_successfully(): void
    {
        $response = $this->get('/login');

        $response->assertSee('Welcome Back!');

        $response->assertStatus(200);
    }

    public function test_signup_page_loads_successfully(): void
    {
        $response = $this->get('/signup');

        $response->assertSee('Create New Account');

        $response->assertStatus(200);
    }

    public function test_register_page_loads_successfully(): void
    {
        $response = $this->get('/register');

        $response->assertSee('Join as a Trainer');

        $response->assertStatus(200);
    }

    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertSee('FITNESS_HUB');

        $response->assertStatus(200);
    }

    public function test_shop_page_loads_successfully(): void
    {
        $response = $this->get('/shop');

        $response->assertSee('FITNESS STORE');

        $response->assertStatus(200);
    }

    public function test_community_page_loads_successfully(): void
    {
        $response = $this->get('/community');

        $response->assertStatus(200);
    }

    public function test_workouts_plan_page_loads_successfully(): void
    {
        $response = $this->get('/workout_plans');

        $response->assertSee('WELCOME ,');

        $response->assertStatus(200);
    }

    public function test_trainers_page_loads_successfully(): void
    {
        $response = $this->get('/trainers');

        $response->assertSee('Trainers');

        $response->assertStatus(200);
    }

    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get('/contact');

        $response->assertSee("FitnessGroup777@gmail.com");

        $response->assertStatus(200);
    }
}
