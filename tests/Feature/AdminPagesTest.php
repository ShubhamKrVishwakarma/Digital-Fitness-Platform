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
    
    public function test_member_cannot_access_admin_dashboard(): void
    {
        $user = $this->user();

        $response = $this->actingAs($user)->get('/Admin/dashboard');

        $response->assertStatus(403);
    }

    public function test_only_admin_can_access_admin_dashboard(): void
    {
        $user = $this->user("admin");

        $response = $this->actingAs($user)->get('/Admin/dashboard');

        $response->assertStatus(200);
    }
}
