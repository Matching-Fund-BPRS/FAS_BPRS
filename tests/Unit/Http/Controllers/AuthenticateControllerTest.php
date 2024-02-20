<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticateControllerTest extends TestCase
{
  use RefreshDatabase;
    public function testSuccessfulAuthentication()
    {
        // Create a user for testing
        $user = User::create([
            'name' => 'Test User',
            'username' => 'testuser',
            'password' => Hash::make('testpassword'),
            'level' => 1,
            'isActive' => true,
        ]);

        // Attempt to authenticate with valid credentials
        $response = $this->post('/login', [
            'username' => 'testuser',
            'password' => 'testpassword',
        ]);

        // Assert the user is authenticated and redirected
        $this->assertAuthenticatedAs($user);
        $response->assertRedirect(route('home'));
        $response->assertSessionHas('message', 'Selamat datang di web BPRS Batimakmur Indah!');
    }

    public function testFailedAuthentication()
    {
        // Attempt to authenticate with invalid credentials
        $response = $this->post('/login', [
            'username' => 'invaliduser',
            'password' => 'invalidpassword',
        ]);

        // Assert the user is not authenticated and redirected back
        $this->assertGuest();
        $response->assertRedirect('/login');
        $response->assertSessionHas('message-error', 'Login gagal!');
    }

    public function testLogout()
    {
        // Create a user for testing
        $user = User::create([
            'name' => 'Test User',
            'username' => 'testuser',
            'password' => Hash::make('testpassword'),
            'level' => 1,
            'isActive' => true,
        ]);

        // Log in the user
        $this->actingAs($user);

        // Perform logout
        $response = $this->post('/logout');

        // Assert the user is logged out and redirected to the login page
        $this->assertGuest();
        $response->assertRedirect('/login');
    }

    public function testRegistration()
    {
        // Simulate a registration request
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'username' => 'johndoe',
            'password' => 'password',
            'confirm-password' => 'password',
        ]);

        // Assert the user is registered and redirected to the login page
        $this->assertDatabaseHas('users', ['username' => 'johndoe']);
        $response->assertRedirect(route('login'));
        $response->assertSessionHas('message', 'Daftar berhasil, silakan login!');
    }
}
